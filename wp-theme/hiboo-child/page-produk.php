<?php
/**
 * Template Name: Produk
 *
 * @package Hiboo_Child
 */

get_header();
$img = get_stylesheet_directory_uri() . '/assets/images';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="breadcrumb">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
    <span>Produk</span>
  </div>
  <h1 class="playfair">Semua Produk Hiboo</h1>
  <p>Skincare bayi selembut mochi. Diformulasikan oleh Pediatrician & Dermatologist, aman untuk newborn 0+ bulan.</p>
</section>

<!-- FILTER & SORT -->
<div class="filter-sort-section">
  <div class="filter-bar">
    <button class="filter-pill active" data-filter="all">Semua</button>
    <button class="filter-pill" data-filter="balm">Baby Balm</button>
    <button class="filter-pill" data-filter="serum">Serum & Moisturizer</button>
    <button class="filter-pill" data-filter="calming">Calming Cream</button>
    <button class="filter-pill" data-filter="sunscreen">Sunscreen</button>
    <button class="filter-pill" data-filter="bundle">Bundle/Combo</button>
  </div>
  <div class="sort-bar">
    <span class="sort-label">Urutkan:</span>
    <button class="sort-pill active" data-sort="popular">Terlaris</button>
    <button class="sort-pill" data-sort="newest">Terbaru</button>
    <button class="sort-pill" data-sort="price-low">Harga Terendah</button>
    <button class="sort-pill" data-sort="price-high">Harga Tertinggi</button>
  </div>
</div>

<!-- PRODUCTS GRID -->
<section class="products-listing">
  <div class="result-count">Menampilkan <strong>8</strong> produk</div>
  <div class="products-grid">
    <?php
    $all_products = array(
      array('img'=>'balm-15g.png',           'bg'=>'pc-peach',    'badge'=>'Bestseller','bc'=>'hot', 'disc'=>'-69%','cat'=>'Balm &middot; 15g',        'name'=>'All Purpose Baby Balm',       'desc'=>'10% Coconut Oil + Vitamin E + Beeswax. Atasi eczema, ruam popok, & gigitan serangga.','orig'=>'Rp175.000','price'=>'Rp54.500','rate'=>'4.9','rev'=>'10RB+', 'data_cat'=>'balm',     'data_price'=>'54500', 'data_sold'=>'10000','data_date'=>'2024-01','slug'=>'all-purpose-baby-balm',     'shopee'=>'https://shopee.co.id/Hiboo-All-Purpose-Baby-Balm-15g-with-10-Coconut-Oil-Vit-E-Beeswax-Japan-Natural-Nourishing-Moisturizer-Salep-Anak-Bayi-Newborn-Ruam-Popok-Beruntusan-i.731537794.23654877732','tiktok'=>'https://www.tiktok.com/view/product/1730467194891502767'),
      array('img'=>'mochi-serum-100ml.png',  'bg'=>'pc-blue',     'badge'=>'',         'bc'=>'',    'disc'=>'-44%','cat'=>'Serum &middot; 100ml',     'name'=>'Mochi Glow Body Serum',       'desc'=>'Japanese White Tomato + Hyaluronic Acid + Ceramide untuk kulit glowing selembut mochi.','orig'=>'Rp115.000','price'=>'Rp64.400','rate'=>'4.9','rev'=>'8RB+',  'data_cat'=>'serum',    'data_price'=>'64400', 'data_sold'=>'8000', 'data_date'=>'2024-02','slug'=>'mochi-glow-body-serum',     'shopee'=>'https://shopee.co.id/Hiboo-Mochi-Glow-Body-Serum-with-Japanese-White-Tomato-2-in-1-Face-Cream-Bayi-Body-Lotion-Bayi-100-ml-Skincare-Newborn-Cream-C11-i.731537794.28813480562','tiktok'=>'https://www.tiktok.com/view/product/1729669411949020357'),
      array('img'=>'zzz-cream-30g.png',      'bg'=>'pc-lavender', 'badge'=>'',         'bc'=>'',    'disc'=>'-61%','cat'=>'Calming Cream &middot; 15g','name'=>'Zzz Baby Calming Cream',      'desc'=>'7x Essential Oils + Shea Butter + Aloe Vera untuk tidur nyenyak bayi.',            'orig'=>'Rp112.500','price'=>'Rp43.500','rate'=>'4.8','rev'=>'10RB+', 'data_cat'=>'calming',  'data_price'=>'43500', 'data_sold'=>'10000','data_date'=>'2024-03','slug'=>'zzz-deep-sleep-baby-cream', 'shopee'=>'https://shopee.co.id/hiboo-Zzz-Deep-Sleep-Baby-Cream-15-gr-7X-Essential-Tidur-Kolik-%E2%80%93-Calming-Baby-Cream-Skincare-Anak-Bayi-Newborn-Body-Lotion-Mama%E2%80%99s-Cream-i.731537794.24421851945','tiktok'=>'https://www.tiktok.com/view/product/1730471352733959343'),
      array('img'=>'mochi-sunscreen-30ml.png','bg'=>'pc-blue',    'badge'=>'New',      'bc'=>'new', 'disc'=>'-67%','cat'=>'Sunscreen &middot; 30ml',   'name'=>'Double Protection Sunscreen', 'desc'=>'SPF 50+ PA++++ Physical sunscreen dengan Citronella + Lavender Oil. Water Resistant.','orig'=>'Rp225.000','price'=>'Rp74.500','rate'=>'4.9','rev'=>'789',   'data_cat'=>'sunscreen','data_price'=>'74500', 'data_sold'=>'789',  'data_date'=>'2025-10','slug'=>'double-protection-sunscreen','shopee'=>'https://shopee.co.id/Hiboo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-Double-Protection-Skincare-Bayi-Anti-Nyamuk-Perlindungan-UVA-UVB-S11-i.731537794.56101681763','tiktok'=>'https://www.tiktok.com/view/product/1730856220718367941'),
      array('img'=>'balm-5g.png',            'bg'=>'pc-peach',    'badge'=>'',         'bc'=>'',    'disc'=>'-69%','cat'=>'Balm &middot; 5g',         'name'=>'All Purpose Baby Balm 5g',    'desc'=>'Ukuran travel untuk tas bayi. Solusi cepat eczema & ruam kapan saja di mana saja.','orig'=>'Rp100.000','price'=>'Rp31.500','rate'=>'4.9','rev'=>'10RB+', 'data_cat'=>'balm',     'data_price'=>'31500', 'data_sold'=>'10000','data_date'=>'2024-01','slug'=>'baby-balm-mini',             'shopee'=>'https://shopee.co.id/Hiboo-All-Purpose-Baby-Balm-5g-Travel-Size-with-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Moisturizer-Salep-Anak-Ruam-Popok-i.731537794.21093135682','tiktok'=>'https://www.tiktok.com/view/product/1729736568807458217'),
      array('img'=>'mochi-face-15ml.png',    'bg'=>'pc-mint',     'badge'=>'Combo',    'bc'=>'hot', 'disc'=>'-67%','cat'=>'Combo &middot; Sunscreen + Balm','name'=>'Protection Combo',        'desc'=>'Paket perlindungan lengkap: Double Protection Sunscreen + All Purpose Baby Balm.','orig'=>'Rp225.000','price'=>'Rp74.500','rate'=>'4.9','rev'=>'185',   'data_cat'=>'bundle',   'data_price'=>'74500', 'data_sold'=>'185',  'data_date'=>'2025-11','slug'=>'protection-combo',           'shopee'=>'https://shopee.co.id/Hiboo-Protection-Combo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-All-Purpose-Baby-Balm-15g-Ruam-Popok-Double-Protection-Skincare-Bayi-Anti-Nyamuk-S22-i.731537794.47951864741','tiktok'=>'https://www.tiktok.com/view/product/1731051527830078957'),
      array('img'=>'balm-box-15g.png',       'bg'=>'pc-peach',    'badge'=>'Bundle',   'bc'=>'hot', 'disc'=>'-72%','cat'=>'Bundle &middot; 2x Balm 15g','name'=>'Bye Ruam Combo',            'desc'=>'Hemat lebih banyak! 2x All Purpose Baby Balm 15g untuk stok di rumah dan bepergian.','orig'=>'Rp325.000','price'=>'Rp89.500','rate'=>'4.9','rev'=>'10RB+', 'data_cat'=>'bundle',   'data_price'=>'89500', 'data_sold'=>'10000','data_date'=>'2024-06','slug'=>'all-purpose-baby-balm',     'shopee'=>'https://shopee.co.id/Hiboo-Bye-Ruam-Combo-Mix-Size-All-Purpose-Baby-Balm-Set-15g-5g-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Calming-Moisturizer-Balsem-Salep-Anak-Bayi-Ruam-Popok-Skincare-A55-i.731537794.25020961735','tiktok'=>'https://www.tiktok.com/view/product/1729607482327073989'),
      array('img'=>'mochi-serum-50ml.png',   'bg'=>'pc-blue',     'badge'=>'BUY 1 GET 1','bc'=>'new','disc'=>'-47%','cat'=>'Serum &middot; 50ml',    'name'=>'Mochi Glow Serum',            'desc'=>'Japanese White Tomato + Hyaluronic Acid + Ceramide. Ukuran travel-friendly.','orig'=>'Rp180.000','price'=>'Rp95.900','rate'=>'4.9','rev'=>'893',   'data_cat'=>'serum',    'data_price'=>'95900', 'data_sold'=>'893',  'data_date'=>'2025-09','slug'=>'mochi-glow-body-serum',     'shopee'=>'https://shopee.co.id/Hiboo-Mochi-Skin-Serum-with-Japanese-White-Tomato-for-Baby-Face-Body-50-ml-C22-i.731537794.29763475776','tiktok'=>'https://www.tiktok.com/view/product/1730227434899997893'),
    );
    foreach ( $all_products as $p ) :
    ?>
    <div class="product-card"
         data-href="<?php echo esc_url( home_url( '/produk/' . $p['slug'] . '/' ) ); ?>"
         data-category="<?php echo esc_attr($p['data_cat']); ?>"
         data-price="<?php echo esc_attr($p['data_price']); ?>"
         data-sold="<?php echo esc_attr($p['data_sold']); ?>"
         data-date="<?php echo esc_attr($p['data_date']); ?>">
      <?php if ($p['badge']) : ?><span class="product-card-badge <?php echo esc_attr($p['bc']); ?>"><?php echo $p['badge']; ?></span><?php endif; ?>
      <span class="product-card-badge disc"><?php echo $p['disc']; ?></span>
      <div class="product-img">
        <div class="product-img-bg <?php echo esc_attr($p['bg']); ?>">
          <img src="<?php echo $img; ?>/products/<?php echo esc_attr($p['img']); ?>" alt="Hiboo <?php echo esc_attr($p['name']); ?>" width="200" height="260" loading="lazy">
        </div>
        <div class="product-quick-links">
          <a href="<?php echo esc_url($p['shopee']); ?>" target="_blank" rel="noopener" class="pql-shopee"><svg viewBox="0 0 24 24" fill="white"><path d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007Z"/></svg>Shopee</a>
          <a href="<?php echo esc_url($p['tiktok']); ?>" target="_blank" rel="noopener" class="pql-tiktok"><svg viewBox="0 0 24 24" fill="white"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1v-3.5a6.37 6.37 0 0 0-.79-.05A6.34 6.34 0 0 0 3.15 15.2a6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.73a8.19 8.19 0 0 0 4.77 1.52V6.8a4.84 4.84 0 0 1-1.01-.11Z"/></svg>TikTok</a>
        </div>
      </div>
      <div class="product-info">
        <div class="p-category"><?php echo $p['cat']; ?></div>
        <h3><?php echo esc_html($p['name']); ?></h3>
        <p class="p-desc"><?php echo esc_html($p['desc']); ?></p>
        <div class="product-footer">
          <div class="product-price">
            <span class="original"><?php echo $p['orig']; ?></span>
            <span class="current"><?php echo $p['price']; ?></span>
          </div>
          <div class="product-rating">&#9733; <?php echo $p['rate']; ?> <span>(<?php echo $p['rev']; ?>)</span></div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php get_footer(); ?>
