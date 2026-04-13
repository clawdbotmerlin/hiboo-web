/**
 * Hiboo Baby Skincare — Main JS
 * Scroll animations, mobile menu, product card clicks,
 * filter/sort pills, FAQ accordion, Instagram feed.
 */

(function () {
  'use strict';

  /* ── Scroll Animations (IntersectionObserver) ── */
  var animObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.08 });

  var animSelectors = '.product-card, .why-card, .testi-card, .concern-card, .sci-feat, .trust-item, .cert-card, .team-card, .ing-card, .blog-card, .freefrom-card, .stat-item';
  document.querySelectorAll(animSelectors).forEach(function (el, i) {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease ' + (i * 0.06) + 's, transform 0.6s ease ' + (i * 0.06) + 's';
    animObserver.observe(el);
  });

  /* ── Mobile Menu Toggle ── */
  var menuBtn = document.querySelector('.mobile-menu-btn');
  var navLinks = document.querySelector('.nav-links');

  if (menuBtn && navLinks) {
    menuBtn.addEventListener('click', function () {
      var isOpen = navLinks.classList.toggle('mobile-open');
      var spans = menuBtn.querySelectorAll('span');
      if (isOpen) {
        navLinks.style.display = 'flex';
        navLinks.style.flexDirection = 'column';
        navLinks.style.position = 'absolute';
        navLinks.style.top = '100%';
        navLinks.style.left = '0';
        navLinks.style.right = '0';
        navLinks.style.background = 'var(--hb-cream)';
        navLinks.style.padding = '20px';
        navLinks.style.gap = '16px';
        navLinks.style.borderBottom = '1px solid rgba(0,0,0,0.06)';
        navLinks.style.boxShadow = '0 8px 24px rgba(0,0,0,0.06)';
        navLinks.style.zIndex = '99';
        // Animate hamburger to X
        if (spans.length >= 3) {
          spans[0].style.transform = 'translateY(7px) rotate(45deg)';
          spans[1].style.opacity = '0';
          spans[2].style.transform = 'translateY(-7px) rotate(-45deg)';
        }
      } else {
        navLinks.style.display = '';
        navLinks.style.flexDirection = '';
        navLinks.style.position = '';
        navLinks.style.top = '';
        navLinks.style.left = '';
        navLinks.style.right = '';
        navLinks.style.background = '';
        navLinks.style.padding = '';
        navLinks.style.gap = '';
        navLinks.style.borderBottom = '';
        navLinks.style.boxShadow = '';
        navLinks.style.zIndex = '';
        if (spans.length >= 3) {
          spans[0].style.transform = '';
          spans[1].style.opacity = '';
          spans[2].style.transform = '';
        }
      }
    });
  }

  /* ── Product Card Click Handler (data-href) ── */
  document.querySelectorAll('.product-card[data-href]').forEach(function (card) {
    card.style.cursor = 'pointer';
    card.addEventListener('click', function (e) {
      if (e.target.closest('.product-quick-links')) return;
      var target = this.dataset.target || '_self';
      if (target === '_blank') {
        window.open(this.dataset.href, '_blank', 'noopener,noreferrer');
      } else {
        window.location.href = this.dataset.href;
      }
    });
  });

  /* ── Filter Pills (Products Page — sectioned layout) ── */
  document.querySelectorAll('.filter-pill').forEach(function (pill) {
    pill.addEventListener('click', function () {
      document.querySelectorAll('.filter-pill').forEach(function (p) { p.classList.remove('active'); });
      pill.classList.add('active');
      var filter = pill.dataset.filter;
      var sections = document.querySelectorAll('.product-cat-section');
      var visible = 0;
      sections.forEach(function (section) {
        if (filter === 'all' || section.dataset.cat === filter) {
          section.style.display = '';
          visible += section.querySelectorAll('.product-card').length;
        } else {
          section.style.display = 'none';
        }
      });
      var countEl = document.querySelector('.result-count strong');
      if (countEl) countEl.textContent = visible;
    });
  });

  /* ── Sort Pills (Products Page — sorts within each visible section) ── */
  document.querySelectorAll('.sort-pill').forEach(function (pill) {
    pill.addEventListener('click', function () {
      document.querySelectorAll('.sort-pill').forEach(function (p) { p.classList.remove('active'); });
      pill.classList.add('active');
      var sort = pill.dataset.sort;
      document.querySelectorAll('.product-cat-section').forEach(function (section) {
        if (section.style.display === 'none') return;
        var grid = section.querySelector('.products-grid');
        if (!grid) return;
        var cards = Array.from(grid.querySelectorAll('.product-card'));
        cards.sort(function (a, b) {
          switch (sort) {
            case 'popular':    return parseInt(b.dataset.sold  || 0) - parseInt(a.dataset.sold  || 0);
            case 'newest':     return (b.dataset.date || '').localeCompare(a.dataset.date || '');
            case 'price-low':  return parseInt(a.dataset.price || 0) - parseInt(b.dataset.price || 0);
            case 'price-high': return parseInt(b.dataset.price || 0) - parseInt(a.dataset.price || 0);
            default: return 0;
          }
        });
        cards.forEach(function (card) { grid.appendChild(card); });
      });
    });
  });

  /* ── FAQ Accordion ── */
  document.querySelectorAll('.faq-question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.faq-item');
      var isActive = item.classList.contains('active');
      // Close all
      document.querySelectorAll('.faq-item').forEach(function (fi) { fi.classList.remove('active'); });
      // Toggle current
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });


})();
