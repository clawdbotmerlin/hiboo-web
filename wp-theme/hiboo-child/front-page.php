<?php
/**
 * Template: Front Page (Homepage)
 *
 * @package Hiboo_Child
 */

get_header();
$img = get_stylesheet_directory_uri() . '/assets/images';
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-left">
    <div class="hero-tag">Skincare Bayi No.1 di TikTok*</div>
    <h1>
      Kulit Bayi Selembut <em>Mochi</em>
      <span class="jp-text">Hypoallergenic &middot; Natural &middot; Gentle &middot; BPOM Certified</span>
    </h1>
    <p class="hero-desc">Diformulasikan oleh Pediatrician & Dermatologist. Aman untuk newborn 0+ bulan, dibuat khusus untuk kulit bayi Indonesia.</p>
    <div class="hero-ctas">
      <a href="<?php echo esc_url( home_url( '/produk/' ) ); ?>" class="btn-primary">Belanja Sekarang &rarr;</a>
      <a href="<?php echo esc_url( home_url( '/produk/' ) ); ?>" class="btn-secondary">Lihat Semua Produk</a>
    </div>
    <div class="hero-trust">
      <div class="trust-item cert-bpom">
        <div class="trust-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.746 3.746 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/></svg>
        </div>
        <div class="trust-text">BPOM Certified<small>Terdaftar Resmi</small></div>
      </div>
      <div class="trust-item cert-halal">
        <div class="trust-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#10B981"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/></svg>
        </div>
        <div class="trust-text">Halal MUI<small>Sertifikasi Resmi</small></div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
        </div>
        <div class="trust-text">Derma-Tested<small>Teruji oleh Dokter Kulit</small></div>
      </div>
    </div>
  </div>
  <div class="hero-right">
    <div class="cloud cloud-1"></div>
    <div class="cloud cloud-2"></div>
    <div class="cloud cloud-3"></div>
    <div class="mochi-shape mochi-1"></div>
    <div class="mochi-shape mochi-2"></div>
    <div class="mochi-shape mochi-3"></div>
    <div class="hero-product-display">
      <img src="<?php echo $img; ?>/products/all-products.png" alt="Koleksi lengkap produk skincare bayi Hiboo" class="hero-product-img" width="500" height="400" loading="eager">
    </div>
    <div class="hero-floating-badge fb-top">
      <div class="badge-icon badge-green">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#16a34a"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M18.75 4.236c.982.143 1.954.317 2.916.52A6.003 6.003 0 0 1 16.27 9.728M18.75 4.236V4.5c0 2.108-.966 3.99-2.48 5.228m0 0a6.023 6.023 0 0 1-2.77.704 6.023 6.023 0 0 1-2.77-.704"/></svg>
      </div>
      <div>
        <div style="font-weight:700;font-size:13px;">#1 Best Seller</div>
        <div style="font-size:11px;color:var(--hb-muted);">Baby Skincare Indonesia</div>
      </div>
    </div>
    <div class="hero-floating-badge fb-bottom">
      <div class="badge-icon badge-gold">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="#D4A04A"><path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd"/></svg>
      </div>
      <div>
        <div style="font-weight:700;font-size:13px;">4.9 / 5.0 Rating</div>
        <div style="font-size:11px;color:var(--hb-muted);">50.000+ Reviews</div>
      </div>
    </div>

    <!-- Bubu mascot — Hero (superhero, breaks bottom grid) -->
    <div class="mascot mascot-hero" id="mascotHero" title="Klik Bubu!">
      <div class="mascot-bubble">Kulitnya selembut mochi! 🧡</div>
      <img src="<?php echo $img; ?>/mascots/bubu-hero.png" alt="Bubu, maskot Hiboo">
    </div>
  </div>
</section>

<!-- TRUST RIBBON -->
<div class="trust-ribbon">
  <div class="ribbon-item ribbon-item-award">
    <img src="<?php echo $img; ?>/brand-choice-award.png" alt="Brand Choice Award" class="ribbon-award-logo">
    <strong>Brand Choice Award</strong>
  </div>
  <div class="ribbon-item"><span class="ri-icon">&#x1F33F;</span> <strong>Naturally Derived</strong> Ingredients</div>
  <div class="ribbon-item"><span class="ri-icon">&#x1F476;</span> <strong>Aman Newborn</strong> 0+ Bulan</div>
  <div class="ribbon-item"><span class="ri-icon">&#x2764;</span> <strong>50.000+</strong> Happy Families</div>
</div>

<!-- BESTSELLER PRODUCTS -->
<section id="produk" class="products-section section-pad">
  <div class="section-header">
    <div class="sh-tag">Produk Terlaris</div>
    <h2>Dipercaya oleh Ribuan Moms Indonesia</h2>
    <p>Setiap produk Hiboo diformulasikan khusus untuk kulit bayi di iklim tropis Indonesia.</p>
  </div>
  <div class="products-grid">
    <?php
    $products = array(
      array( 'img' => 'balm-15g.png',           'bg' => 'pc-peach',    'badge' => 'Bestseller', 'badge_class' => 'hot', 'disc' => '-69%', 'cat' => 'Balm &middot; 15g',        'name' => 'All Purpose Baby Balm',      'desc' => '10% Coconut Oil + Vitamin E + Beeswax. Atasi eczema, ruam popok, & gigitan serangga.', 'orig' => 'Rp175.000', 'price' => 'Rp54.500', 'rate' => '4.9', 'reviews' => '18.2K', 'slug' => 'all-purpose-baby-balm',     'shopee' => 'https://shopee.co.id/Hiboo-All-Purpose-Baby-Balm-15g-with-10-Coconut-Oil-Vit-E-Beeswax-Japan-Natural-Nourishing-Moisturizer-Salep-Anak-Bayi-Newborn-Ruam-Popok-Beruntusan-i.731537794.23654877732', 'tiktok' => 'https://www.tiktok.com/view/product/1730467194891502767' ),
      array( 'img' => 'mochi-serum-100ml.png',   'bg' => 'pc-blue',     'badge' => '10RB+ sold', 'badge_class' => '',    'disc' => '-44%', 'cat' => 'Serum &middot; 100ml',    'name' => 'Mochi Glow Body Serum',      'desc' => 'Japanese White Tomato + Hyaluronic Acid + Ceramide untuk kulit glowing selembut mochi.', 'orig' => 'Rp115.000', 'price' => 'Rp64.400', 'rate' => '4.9', 'reviews' => '8RB+',  'slug' => 'mochi-glow-body-serum',     'shopee' => 'https://shopee.co.id/Hiboo-Mochi-Glow-Body-Serum-with-Japanese-White-Tomato-2-in-1-Face-Cream-Bayi-Body-Lotion-Bayi-100-ml-Skincare-Newborn-Cream-C11-i.731537794.28813480562', 'tiktok' => 'https://www.tiktok.com/view/product/1729669411949020357' ),
      array( 'img' => 'zzz-cream-30g.png',       'bg' => 'pc-lavender', 'badge' => '10RB+ sold', 'badge_class' => 'new', 'disc' => '-61%', 'cat' => 'Calming Cream &middot; 15g','name' => 'Zzz Baby Calming Cream', 'desc' => '7x Essential Oils + Shea Butter + Aloe Vera untuk tidur nyenyak si kecil.', 'orig' => 'Rp112.500', 'price' => 'Rp43.500', 'rate' => '4.8', 'reviews' => '10RB+', 'slug' => 'zzz-deep-sleep-baby-cream', 'shopee' => 'https://shopee.co.id/hiboo-Zzz-Deep-Sleep-Baby-Cream-15-gr-7X-Essential-Tidur-Kolik-%E2%80%93-Calming-Baby-Cream-Skincare-Anak-Bayi-Newborn-Body-Lotion-Mama%E2%80%99s-Cream-i.731537794.24421851945', 'tiktok' => 'https://www.tiktok.com/view/product/1730471352733959343' ),
      array( 'img' => 'mochi-sunscreen-30ml.png', 'bg' => 'pc-gold',     'badge' => 'New',        'badge_class' => 'new', 'disc' => '-67%', 'cat' => 'Sunscreen &middot; 30ml',  'name' => 'Double Protection Sunscreen','desc' => 'SPF 50+ PA++++. Physical sunscreen dengan Citronella + Lavender Oil. Water Resistant.', 'orig' => 'Rp225.000', 'price' => 'Rp74.500', 'rate' => '4.9', 'reviews' => '789',   'slug' => 'double-protection-sunscreen','shopee' => 'https://shopee.co.id/Hiboo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-Double-Protection-Skincare-Bayi-Anti-Nyamuk-Perlindungan-UVA-UVB-S11-i.731537794.56101681763', 'tiktok' => 'https://www.tiktok.com/view/product/1730856220718367941' ),
      array( 'img' => 'balm-5g.png',             'bg' => 'pc-peach',    'badge' => '',            'badge_class' => '',    'disc' => '-69%', 'cat' => 'Balm &middot; 5g',        'name' => 'All Purpose Baby Balm 5g',             'desc' => 'Ukuran travel untuk tas bayi. Solusi cepat eczema & ruam kapan saja, di mana saja.', 'orig' => 'Rp100.000', 'price' => 'Rp31.500', 'rate' => '4.9', 'reviews' => '10RB+', 'slug' => 'baby-balm-mini',            'shopee' => 'https://shopee.co.id/Hiboo-All-Purpose-Baby-Balm-5g-Travel-Size-with-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Moisturizer-Salep-Anak-Ruam-Popok-i.731537794.21093135682', 'tiktok' => 'https://www.tiktok.com/view/product/1729736568807458217' ),
      array( 'imgs' => array('mochi-sunscreen-30ml.png','balm-15g.png'), 'bg' => 'pc-mint', 'badge' => 'Combo', 'badge_class' => 'hot', 'disc' => '-67%', 'cat' => 'Combo Set', 'name' => 'Protection Combo', 'desc' => 'Sunscreen + Baby Balm dalam satu paket. Perlindungan lengkap untuk aktivitas si kecil.', 'orig' => 'Rp225.000', 'price' => 'Rp74.500', 'rate' => '4.9', 'reviews' => '185', 'slug' => 'protection-combo', 'shopee' => 'https://shopee.co.id/Hiboo-Protection-Combo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-All-Purpose-Baby-Balm-15g-Ruam-Popok-Double-Protection-Skincare-Bayi-Anti-Nyamuk-S22-i.731537794.47951864741', 'tiktok' => 'https://www.tiktok.com/view/product/1731051527830078957' ),
    );
    foreach ( $products as $p ) :
    ?>
    <div class="product-card" data-href="<?php echo esc_url( home_url( '/produk/' . $p['slug'] . '/' ) ); ?>">
      <?php if ( $p['badge'] ) : ?>
        <span class="product-card-badge <?php echo esc_attr( $p['badge_class'] ); ?>"><?php echo $p['badge']; ?></span>
      <?php endif; ?>
      <span class="product-card-badge disc"><?php echo $p['disc']; ?></span>
      <div class="product-img">
        <?php if ( ! empty( $p['imgs'] ) ) : ?>
        <div class="product-img-bg combo-bg <?php echo esc_attr( $p['bg'] ); ?>">
          <?php foreach ( $p['imgs'] as $pi ) : ?>
            <img src="<?php echo $img; ?>/products/<?php echo esc_attr( $pi ); ?>" alt="Hiboo <?php echo esc_attr( $p['name'] ); ?>" loading="lazy">
          <?php endforeach; ?>
        </div>
        <?php else : ?>
        <div class="product-img-bg <?php echo esc_attr( $p['bg'] ); ?>">
          <img src="<?php echo $img; ?>/products/<?php echo esc_attr( $p['img'] ); ?>" alt="Hiboo <?php echo esc_attr( $p['name'] ); ?>" loading="lazy">
        </div>
        <?php endif; ?>
        <div class="product-quick-links">
          <a href="<?php echo esc_url( $p['shopee'] ); ?>" target="_blank" rel="noopener" class="pql-shopee"><svg viewBox="0 0 24 24" fill="white"><path d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007Z"/></svg>Shopee</a>
          <a href="<?php echo esc_url( $p['tiktok'] ); ?>" target="_blank" rel="noopener" class="pql-tiktok"><svg viewBox="0 0 24 24" fill="white"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1v-3.5a6.37 6.37 0 0 0-.79-.05A6.34 6.34 0 0 0 3.15 15.2a6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.73a8.19 8.19 0 0 0 4.77 1.52V6.8a4.84 4.84 0 0 1-1.01-.11Z"/></svg>TikTok</a>
        </div>
      </div>
      <div class="product-info">
        <div class="p-category"><?php echo $p['cat']; ?></div>
        <h3><?php echo esc_html( $p['name'] ); ?></h3>
        <p class="p-desc"><?php echo esc_html( $p['desc'] ); ?></p>
        <div class="product-footer">
          <div class="product-price">
            <span class="original"><?php echo $p['orig']; ?></span>
            <span class="current"><?php echo $p['price']; ?></span>
          </div>
          <div class="product-rating">&#9733; <?php echo $p['rate']; ?> <span>(<?php echo $p['reviews']; ?>)</span></div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="products-more">
    <a href="<?php echo esc_url( home_url( '/produk/' ) ); ?>" class="btn-secondary">Lihat Semua Produk &rarr;</a>
  </div>

  <!-- Bubu mascot — Products (love pose, breaks right) -->
  <div class="mascot mascot-products" id="mascotProducts" data-scroll title="Klik Bubu!">
    <div class="mascot-bubble">18.000+ ibu sudah coba! 💕</div>
    <img src="<?php echo $img; ?>/mascots/bubu-love.png" alt="Bubu Hiboo love">
  </div>
</section>

<!-- WHY HIBOO -->
<section id="tentang" class="why-section section-pad" style="position:relative;overflow:visible;">
  <div class="section-header">
    <div class="sh-tag">Kenapa Hiboo?</div>
    <h2>3 Prinsip untuk Kulit Bayi Sehat</h2>
    <p>Setiap produk Hiboo diciptakan dengan standar tertinggi untuk kulit bayi Indonesia.</p>
  </div>
  <!-- Mumu mascot — Why section (peeks from left) -->
  <div class="mascot mascot-why" id="mascotWhy" data-scroll title="Mumu suka Hiboo!">
    <div class="mascot-bubble" style="left:auto;right:-10px;transform:scale(0.7);">Bahan alami pilihan! 🌿</div>
    <img src="<?php echo $img; ?>/mascots/mumu-sayhi.png" alt="Mumu, maskot Hiboo">
  </div>

  <div class="why-grid">
    <div class="why-card">
      <div class="why-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/></svg>
      </div>
      <div class="why-jp">Hypoallergenic</div>
      <h3>Aman untuk Kulit Sensitif</h3>
      <p>Diformulasikan tanpa bahan berbahaya. Aman untuk kulit bayi yang paling sensitif sekalipun, teruji dermatologis.</p>
    </div>
    <div class="why-card">
      <div class="why-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6B8C5A"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5a17.92 17.92 0 0 1-8.716-2.247m0 0A8.966 8.966 0 0 1 3 12c0-1.264.26-2.467.73-3.563"/></svg>
      </div>
      <div class="why-jp">Naturally Derived</div>
      <h3>Bahan Alami Pilihan</h3>
      <p>Menggunakan bahan-bahan alami tanpa alkohol, paraben, atau pewangi sintetis. Murni & lembut untuk si kecil.</p>
    </div>
    <div class="why-card">
      <div class="why-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#D4845A"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/></svg>
      </div>
      <div class="why-jp">Gentle</div>
      <h3>Lembut di Kulit Bayi</h3>
      <p>Tekstur ringan yang cepat menyerap, dirancang khusus untuk iklim tropis Indonesia yang panas & lembap.</p>
    </div>
  </div>
</section>

<!-- SOCIAL PROOF -->
<section class="proof-section section-pad" style="position:relative;overflow:visible;">
  <!-- Bubu mascot — Social Proof (kagum/amazed, top right) -->
  <div class="mascot mascot-proof" id="mascotProof" data-scroll title="Klik Bubu!">
    <div class="mascot-bubble">50K keluarga bahagia! 🎉</div>
    <img src="<?php echo $img; ?>/mascots/bubu-kagum.png" alt="Bubu Hiboo kagum">
  </div>

  <div class="section-header">
    <div class="sh-tag">Kata Moms Indonesia</div>
    <h2>Dipercaya oleh 50.000+ Keluarga</h2>
    <p>Hiboo meraih Brand Choice Awards 2024 untuk kategori Baby Balm.</p>
  </div>
  <div class="proof-stats">
    <div class="proof-stat"><div class="proof-stat-num">50K+</div><div class="proof-stat-label">Happy Families</div></div>
    <div class="proof-stat"><div class="proof-stat-num">4.9&#9733;</div><div class="proof-stat-label">Average Rating</div></div>
    <div class="proof-stat"><div class="proof-stat-num">#1</div><div class="proof-stat-label">Baby Skincare Indonesia</div></div>
    <div class="proof-stat"><div class="proof-stat-num">7000%</div><div class="proof-stat-label">Growth in 4 Months</div></div>
  </div>
  <div class="testi-grid">
    <?php
    $testimonials = array(
      array( 'initials' => 'RA', 'name' => 'Ratna Amelia',  'detail' => 'Ibu dari Kayden, 8 bulan &middot; Jakarta',  'quote' => 'Anak saya eczema parah, sudah coba banyak produk. Hiboo Baby Balm ini beneran works! Dalam 3 hari ruam-nya mulai membaik.' ),
      array( 'initials' => 'DS', 'name' => 'Dina Safitri',  'detail' => 'Ibu dari Naura, 5 bulan &middot; Surabaya',  'quote' => 'Teksturnya ringan banget, nggak lengket di cuaca panas Jakarta. Kulit baby jadi halus & glowing kayak mochi beneran!' ),
      array( 'initials' => 'FM', 'name' => 'Fitri Maharani', 'detail' => 'Ibu dari Azka, 3 bulan &middot; Bandung',   'quote' => 'Zzz Cream-nya magical! Baby saya yang biasa bangun 4x semalam, sekarang tidur nyenyak. Wanginya calming. Highly recommended!' ),
    );
    foreach ( $testimonials as $t ) :
    ?>
    <div class="testi-card">
      <div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <blockquote>&ldquo;<?php echo esc_html( $t['quote'] ); ?>&rdquo;</blockquote>
      <div class="testi-author">
        <div class="testi-avatar"><?php echo esc_html( $t['initials'] ); ?></div>
        <div>
          <div class="testi-name"><?php echo esc_html( $t['name'] ); ?></div>
          <div class="testi-detail"><?php echo $t['detail']; ?></div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- INGREDIENTS / SCIENCE -->
<section id="bahan" class="science-section section-pad" style="position:relative;overflow:visible;">
  <!-- Mumu mascot — Science (percaya diri, peeks from right) -->
  <div class="mascot mascot-science" id="mascotScience" data-scroll title="Mumu suka bahan alami!">
    <div class="mascot-bubble">Semua bahan aman! ✅</div>
    <img src="<?php echo $img; ?>/mascots/mumu-percayadiri.png" alt="Mumu Temoo percaya diri">
  </div>

  <div class="science-grid">
    <div class="science-visual">
      <img src="<?php echo $img; ?>/products/mochi-serum-50ml.png" alt="Hiboo Mochi Skin Serum - Bahan alami pilihan" width="160" height="200" loading="lazy">
      <div class="ingredient-pills">
        <span class="ing-pill">Japanese White Tomato</span>
        <span class="ing-pill">Coconut Oil 10%</span>
        <span class="ing-pill">7x Hyaluronic Acid</span>
        <span class="ing-pill">Ceramide Complex</span>
        <span class="ing-pill">Beeswax</span>
        <span class="ing-pill">Vitamin E</span>
        <span class="ing-pill">Panthenol</span>
        <span class="ing-pill">Chamomile Extract</span>
      </div>
    </div>
    <div class="science-content">
      <div class="sc-tag">Bahan & Formula</div>
      <h2>Transparan. Alami.</h2>
      <p>Setiap bahan dalam produk Hiboo dipilih dengan hati-hati oleh tim dokter spesialis anak dan kulit. Tanpa bahan berbahaya, tanpa kompromi.</p>
      <div class="science-features">
        <div class="sci-feat">
          <div class="sci-feat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636"/></svg></div>
          <div><h4>Bebas Bahan Berbahaya</h4><p>No Paraben, No Alkohol, No Pewangi Sintetis, No SLS, No Mineral Oil</p></div>
        </div>
        <div class="sci-feat">
          <div class="sci-feat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg></div>
          <div><h4>Diformulasikan oleh Dokter</h4><p>Dikembangkan oleh Pediatrician & Dermatologist khusus untuk bayi</p></div>
        </div>
        <div class="sci-feat">
          <div class="sci-feat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/></svg></div>
          <div><h4>Untuk Iklim Tropis</h4><p>Tekstur ringan, cepat menyerap, anti-lengket di suhu panas Indonesia</p></div>
        </div>
        <div class="sci-feat">
          <div class="sci-feat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/></svg></div>
          <div><h4>Aman dari Newborn</h4><p>Cocok digunakan sejak 0 bulan, termasuk untuk kulit sangat sensitif</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKIN CONCERNS -->
<section id="panduan" class="concerns-section section-pad">
  <div class="section-header">
    <div class="sh-tag">Panduan Kulit Bayi</div>
    <h2>Temukan Solusi untuk Si Kecil</h2>
    <p>Pilih masalah kulit bayi Anda, kami bantu rekomendasikan produk yang tepat.</p>
  </div>
  <div class="concerns-grid">
    <?php
    $concerns = array(
      array( 'icon_bg' => '#FEE2E2', 'stroke' => '#DC2626', 'path' => 'M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z', 'title' => 'Eczema', 'desc' => 'Kulit kering, merah, dan gatal yang sering muncul di pipi & lipatan kulit.' ),
      array( 'icon_bg' => 'var(--hb-warm)', 'stroke' => '#2A7AB5', 'path' => 'M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z', 'title' => 'Ruam Popok', 'desc' => 'Iritasi di area popok akibat kelembapan dan gesekan yang berlebihan.' ),
      array( 'icon_bg' => '#FEF3C7', 'stroke' => '#D97706', 'path' => 'M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z', 'title' => 'Biang Keringat', 'desc' => 'Bintik merah kecil akibat keringat berlebih di cuaca tropis Indonesia.' ),
      array( 'icon_bg' => '#E0E7FF', 'stroke' => '#4F46E5', 'path' => 'M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0 1 12 12.75Zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 0 1-1.152-6.135c-.22-2.091-1.83-3.83-3.932-4.126a48.5 48.5 0 0 0-6.245 0c-2.103.296-3.713 2.035-3.932 4.126A23.91 23.91 0 0 1 3.793 14.19 24.232 24.232 0 0 1 12 12.75Z', 'title' => 'Gigitan Serangga', 'desc' => 'Bentol dan bengkak yang membuat bayi rewel dan tidak nyaman.' ),
      array( 'icon_bg' => '#EDE9FE', 'stroke' => '#7C3AED', 'path' => 'M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z', 'title' => 'Susah Tidur', 'desc' => 'Kolik dan gangguan tidur yang mempengaruhi tumbuh kembang si kecil.' ),
      array( 'icon_bg' => '#FFF7ED', 'stroke' => '#EA580C', 'path' => 'M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 0 0-2.455 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z', 'title' => 'Kulit Kusam', 'desc' => 'Kulit bayi yang kurang bercahaya dan membutuhkan nutrisi ekstra.' ),
    );
    foreach ( $concerns as $c ) :
    ?>
    <div class="concern-card">
      <div class="concern-icon" style="background:<?php echo $c['icon_bg']; ?>;">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="<?php echo $c['stroke']; ?>"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $c['path']; ?>"/></svg>
      </div>
      <h3><?php echo esc_html( $c['title'] ); ?></h3>
      <p><?php echo esc_html( $c['desc'] ); ?></p>
      <a href="<?php echo esc_url( home_url( '/panduan-kulit/' ) ); ?>" class="concern-link">Lihat Solusi &rarr;</a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA BANNER -->
<section class="cta-banner" style="position:relative;overflow:visible;">
  <!-- Bubu mascot — CTA (jumps above banner, breaks top grid) -->
  <div class="mascot mascot-cta" id="mascotCta" data-scroll title="Klik Bubu!">
    <div class="mascot-bubble">Yuk belanja sekarang! 🛍️</div>
    <img src="<?php echo $img; ?>/mascots/bubu-jump.png" alt="Bubu Hiboo jumping">
  </div>

  <h2>Mulai Perjalanan <em>Mochi Skin</em> Si Kecil</h2>
  <p>Dapatkan starter kit Hiboo dengan diskon 25% untuk pembelian pertama Anda.</p>
  <a href="<?php echo esc_url( home_url( '/produk/' ) ); ?>" class="btn-primary">Belanja Starter Kit &rarr;</a>
</section>

<!-- INSTAGRAM -->
<section class="insta-section section-pad">
  <div class="section-header">
    <div class="sh-tag">@hiboo.baby</div>
    <h2>Join the Mochi Skin Family</h2>
    <p>40K+ Moms sudah bergabung. Follow kami di <a href="https://www.instagram.com/hiboo.baby/" target="_blank" rel="noopener">Instagram</a></p>
  </div>
  <div class="insta-feed">
    <div class="insta-sbi-wrap">
      <?php echo do_shortcode('[instagram-feed num=8 cols=5 showfollow=false showheader=false showbutton=false]'); ?>
    </div>
    <div class="insta-follow-bar">
      <a href="https://www.instagram.com/hiboo.baby/" target="_blank" rel="noopener" class="btn-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069ZM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0Zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324ZM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881Z"/></svg>
        Follow @hiboo.baby &rarr;
      </a>
    </div>
  </div>
</section>

<div class="tiktok-disclaimer">
  <p><em>*Berdasarkan Top Products High Seller – Baby Skincare di TikTok Indonesia periode May 2024</em></p>
</div>

<?php get_footer(); ?>
