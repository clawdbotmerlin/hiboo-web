/* ── Mascot System — Bubu & Mumu ── */
(function() {
  'use strict';

  var imgBase = (window.hibooMascotData && window.hibooMascotData.imgBase)
    ? window.hibooMascotData.imgBase
    : '';

  /* Scroll reveal */
  var mascotObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        mascotObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  document.querySelectorAll('.mascot[data-scroll]').forEach(function(el) {
    mascotObserver.observe(el);
  });

  /* Click messages & image swaps */
  var bubbleMessages = {
    mascotHero:     ['Aku Bubu! 🦛', 'Kulit mochi untuk si kecil! 🧡', 'Powered by love! 💙'],
    mascotProducts: ['Ini produk favorit aku! 🥰', '18K+ moms sudah coba! 💕', 'Bebas paraben & SLS! 🌿'],
    mascotProof:    ['50K keluarga bahagia! 🎉', 'Rating 4.9 bintang! ⭐', 'Terpercaya #1 Indonesia!'],
    mascotCta:      ['Yuk belanja sekarang! 🛍️', 'Diskon 25% starter kit! 🎁', 'Gratis ongkir! 🚀'],
    mascotWhy:      ['Bahan alami pilihan! 🌿', 'Aku Mumu si bahan aktif! 🥕', 'Zero harmful ingredients! ✅'],
    mascotScience:  ['Semua bahan aman! ✅', 'Teruji dermatologis! 🔬', 'BPOM certified! 🏅'],
  };

  var swapImages = {
    mascotHero:     ['bubu-hero.png', 'bubu-setuju.png', 'bubu-hero.png'],
    mascotProducts: ['bubu-love.png', 'bubu-hello.png', 'bubu-love.png'],
    mascotProof:    ['bubu-kagum.png', 'bubu-setuju.png', 'bubu-kagum.png'],
    mascotCta:      ['bubu-jump.png', 'bubu-ayo.png', 'bubu-jump.png'],
  };

  var clickCounts = {};

  document.querySelectorAll('.mascot').forEach(function(mascot) {
    var id = mascot.id;
    clickCounts[id] = 0;

    mascot.addEventListener('click', function() {
      var count = clickCounts[id] || 0;
      clickCounts[id] = count + 1;

      /* Bounce */
      mascot.classList.remove('clicked');
      void mascot.offsetWidth;
      mascot.classList.add('clicked');
      setTimeout(function() { mascot.classList.remove('clicked'); }, 600);

      /* Swap image */
      var imgs = swapImages[id];
      if (imgs) {
        var img = mascot.querySelector('img');
        img.src = imgBase + imgs[count % imgs.length];
      }

      /* Update bubble */
      var msgs = bubbleMessages[id];
      if (msgs) {
        var bubble = mascot.querySelector('.mascot-bubble');
        if (bubble) bubble.textContent = msgs[count % msgs.length];
      }
    });

    mascot.addEventListener('mouseenter', function() {
      mascot.style.animationPlayState = 'paused';
    });
    mascot.addEventListener('mouseleave', function() {
      mascot.style.animationPlayState = 'running';
    });
  });
})();
