<?php
/**
 * Template Name: Produk
 *
 * @package Hiboo_Child
 */

get_header();
$img = get_stylesheet_directory_uri() . '/assets/images';

/* ── PRODUCT DATA grouped by brand category ─────────────────────────────── */
$card_tpl = function( $p, $img ) {
  $pdp_slug = isset( $p['pdp_slug'] ) ? $p['pdp_slug'] : $p['slug'];
  ?>
  <div class="product-card"
       data-href="<?php echo esc_url( home_url( '/produk/' . $pdp_slug . '/' ) ); ?>"
       data-category="<?php echo esc_attr( $p['cat_key'] ); ?>"
       data-price="<?php echo esc_attr( $p['data_price'] ); ?>"
       data-sold="<?php echo esc_attr( $p['data_sold'] ); ?>"
       data-date="<?php echo esc_attr( $p['data_date'] ); ?>">
    <?php if ( $p['badge'] ) : ?><span class="product-card-badge <?php echo esc_attr( $p['bc'] ); ?>"><?php echo $p['badge']; ?></span><?php endif; ?>
    <span class="product-card-badge disc"><?php echo $p['disc']; ?></span>
    <div class="product-img">
      <div class="product-img-bg <?php echo esc_attr( $p['bg'] ); ?>">
        <img src="<?php echo $img; ?>/products/<?php echo esc_attr( $p['img'] ); ?>" alt="Hiboo <?php echo esc_attr( $p['name'] ); ?>" loading="lazy">
      </div>
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
<?php };

// All product data from single source of truth
$categories = hiboo_get_products_by_category();

$total_products = 0;
foreach ( $categories as $c ) { $total_products += count( $c['products'] ); }
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="breadcrumb">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
    <span>Produk</span>
  </div>
  <h1 class="playfair">Semua Produk Hiboo</h1>
  <p>Skincare bayi selembut mochi. Diformulasikan oleh Pediatrician &amp; Dermatologist, aman untuk newborn 0+ bulan.</p>
</section>

<!-- FILTER & SORT -->
<div class="filter-sort-section">
  <div class="filter-bar">
    <button class="filter-pill active" data-filter="all">Semua</button>
    <button class="filter-pill" data-filter="balm">Baby Balm</button>
    <button class="filter-pill" data-filter="serum">Serum &amp; Moisturizer</button>
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

<!-- PRODUCTS BY CATEGORY -->
<section class="products-listing">
  <div class="result-count">Menampilkan <strong><?php echo $total_products; ?></strong> produk</div>

  <?php foreach ( $categories as $c ) : ?>
  <div class="product-cat-section" data-cat="<?php echo esc_attr($c['cat']); ?>">
    <div class="product-cat-header">
      <div class="pch-left">
        <h2 class="pch-title" style="color:<?php echo esc_attr($c['accent']); ?>"><?php echo $c['title']; ?></h2>
        <p class="pch-sub"><?php echo esc_html($c['sub']); ?></p>
      </div>
    </div>
    <div class="products-grid">
      <?php foreach ( $c['products'] as $p ) { $card_tpl( $p, $img ); } ?>
    </div>
  </div>
  <?php endforeach; ?>

</section>

<?php get_footer(); ?>
