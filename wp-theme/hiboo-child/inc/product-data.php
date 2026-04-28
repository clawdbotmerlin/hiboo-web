<?php
/**
 * Hiboo Product Data — Single source of truth
 *
 * All product images, prices, labels, and marketplace links live here.
 * Update once → front-page, produk listing, produk detail, and related
 * products all reflect the change automatically.
 *
 * @package Hiboo_Child
 */

defined( 'ABSPATH' ) || exit;

/**
 * Returns all Hiboo products as an associative array keyed by slug.
 *
 * Fields used by card templates (front-page, produk listing, related):
 *   img, bg, badge, bc, disc, cat, cat_key, name, desc,
 *   orig, price, rate, reviews, data_price, data_sold, data_date,
 *   shopee, tiktok
 *
 * Additional fields used only by produk listing grouping:
 *   cat_group_title, cat_group_sub, cat_group_accent
 */
function hiboo_get_products() {
  return array(

    /* ── ALL PURPOSE BABY BALM 15g ─────────────────────────────────────── */
    'all-purpose-baby-balm' => array(
      'img'              => 'pdp-balm5g-hero.jpg',
      'bg'               => 'pc-peach',
      'badge'            => 'Bestseller',
      'bc'               => 'hot',
      'disc'             => '-69%',
      'cat'              => 'Balm &middot; 15g',
      'cat_key'          => 'balm',
      'cat_group_title'  => 'All Purpose Baby Balm',
      'cat_group_sub'    => 'Mengatasi ruam dan biang keringat',
      'cat_group_accent' => '#FF7A4A',
      'name'             => 'All Purpose Baby Balm',
      'desc'             => '10% Coconut Oil + Vitamin E + Beeswax. Atasi eczema, ruam popok, & gigitan serangga.',
      'orig'             => 'Rp175.000',
      'price'            => 'Rp54.500',
      'rate'             => '4.9',
      'reviews'          => '18.2K',
      'data_price'       => '54500',
      'data_sold'        => '10000',
      'data_date'        => '2024-01',
      'shopee'           => 'https://shopee.co.id/Hiboo-All-Purpose-Baby-Balm-15g-with-10-Coconut-Oil-Vit-E-Beeswax-Japan-Natural-Nourishing-Moisturizer-Salep-Anak-Bayi-Newborn-Ruam-Popok-Beruntusan-i.731537794.23654877732',
      'tiktok'           => 'https://www.tiktok.com/view/product/1730467194891502767',
    ),

    /* ── ALL PURPOSE BABY BALM 5g (mini / travel) ──────────────────────── */
    'baby-balm-mini' => array(
      'img'              => 'pdp-balm5g-hero.jpg',
      'bg'               => 'pc-peach',
      'badge'            => '',
      'bc'               => '',
      'disc'             => '-69%',
      'cat'              => 'Balm &middot; 5g',
      'cat_key'          => 'balm',
      'cat_group_title'  => 'All Purpose Baby Balm',
      'cat_group_sub'    => 'Mengatasi ruam dan biang keringat',
      'cat_group_accent' => '#FF7A4A',
      'name'             => 'All Purpose Baby Balm 5g',
      'desc'             => 'Ukuran travel untuk tas bayi. Solusi cepat eczema & ruam kapan saja, di mana saja.',
      'orig'             => 'Rp100.000',
      'price'            => 'Rp31.500',
      'rate'             => '4.9',
      'reviews'          => '10RB+',
      'data_price'       => '31500',
      'data_sold'        => '10000',
      'data_date'        => '2024-01',
      'shopee'           => 'https://shopee.co.id/Hiboo-All-Purpose-Baby-Balm-5g-Travel-Size-with-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Moisturizer-Salep-Anak-Ruam-Popok-i.731537794.21093135682',
      'tiktok'           => 'https://www.tiktok.com/view/product/1729736568807458217',
    ),

    /* ── MOCHI GLOW BODY SERUM 100ml ───────────────────────────────────── */
    'mochi-glow-body-serum' => array(
      'img'              => 'pdp-mochi-serum-1.jpg',
      'bg'               => 'pc-blue',
      'badge'            => '10RB+ sold',
      'bc'               => '',
      'disc'             => '-44%',
      'cat'              => 'Serum &middot; 100ml',
      'cat_key'          => 'serum',
      'cat_group_title'  => 'Mochi Skin Serum',
      'cat_group_sub'    => 'Mencerahkan serta membuat kulit kenyal dan lembut',
      'cat_group_accent' => '#2A7AB5',
      'name'             => 'Mochi Glow Body Serum',
      'desc'             => 'Japanese White Tomato + Hyaluronic Acid + Ceramide untuk kulit glowing selembut mochi.',
      'orig'             => 'Rp115.000',
      'price'            => 'Rp64.400',
      'rate'             => '4.9',
      'reviews'          => '8RB+',
      'data_price'       => '64400',
      'data_sold'        => '8000',
      'data_date'        => '2024-02',
      'shopee'           => 'https://shopee.co.id/Hiboo-Mochi-Glow-Body-Serum-with-Japanese-White-Tomato-2-in-1-Face-Cream-Bayi-Body-Lotion-Bayi-100-ml-Skincare-Newborn-Cream-C11-i.731537794.28813480562',
      'tiktok'           => 'https://www.tiktok.com/view/product/1729669411949020357',
    ),

    /* ── MOCHI GLOW SERUM 50ml (listing-only variant) ──────────────────── */
    'mochi-glow-serum-50ml' => array(
      'img'              => 'pdp-mochi-serum-1.jpg',
      'bg'               => 'pc-blue',
      'badge'            => 'BUY 1 GET 1',
      'bc'               => 'new',
      'disc'             => '-47%',
      'cat'              => 'Serum &middot; 50ml',
      'cat_key'          => 'serum',
      'cat_group_title'  => 'Mochi Skin Serum',
      'cat_group_sub'    => 'Mencerahkan serta membuat kulit kenyal dan lembut',
      'cat_group_accent' => '#2A7AB5',
      'name'             => 'Mochi Glow Serum',
      'desc'             => 'Japanese White Tomato + Hyaluronic Acid + Ceramide. Ukuran travel-friendly.',
      'orig'             => 'Rp180.000',
      'price'            => 'Rp95.900',
      'rate'             => '4.9',
      'reviews'          => '893',
      'data_price'       => '95900',
      'data_sold'        => '893',
      'data_date'        => '2025-09',
      'shopee'           => 'https://shopee.co.id/Hiboo-Mochi-Skin-Serum-with-Japanese-White-Tomato-for-Baby-Face-Body-50-ml-C22-i.731537794.29763475776',
      'tiktok'           => 'https://www.tiktok.com/view/product/1730227434899997893',
      'pdp_slug'         => 'mochi-glow-body-serum', // shares PDP with parent
    ),

    /* ── ZZZ BABY CALMING CREAM ─────────────────────────────────────────── */
    'zzz-deep-sleep-baby-cream' => array(
      'img'              => 'pdp-zzz-cream-1.jpg',
      'bg'               => 'pc-lavender',
      'badge'            => '10RB+ sold',
      'bc'               => 'new',
      'disc'             => '-61%',
      'cat'              => 'Calming Cream &middot; 15g',
      'cat_key'          => 'calming',
      'cat_group_title'  => 'Zzz Baby Calming Cream',
      'cat_group_sub'    => 'Membantu bayi tidur lebih nyenyak &amp; nyaman',
      'cat_group_accent' => '#7E57C2',
      'name'             => 'Zzz Baby Calming Cream',
      'desc'             => '7x Essential Oils + Shea Butter + Aloe Vera untuk tidur nyenyak si kecil.',
      'orig'             => 'Rp112.500',
      'price'            => 'Rp43.500',
      'rate'             => '4.8',
      'reviews'          => '10RB+',
      'data_price'       => '43500',
      'data_sold'        => '10000',
      'data_date'        => '2024-03',
      'shopee'           => 'https://shopee.co.id/hiboo-Zzz-Deep-Sleep-Baby-Cream-15-gr-7X-Essential-Tidur-Kolik-%E2%80%93-Calming-Baby-Cream-Skincare-Anak-Bayi-Newborn-Body-Lotion-Mama%E2%80%99s-Cream-i.731537794.24421851945',
      'tiktok'           => 'https://www.tiktok.com/view/product/1730471352733959343',
    ),

    /* ── DOUBLE PROTECTION SUNSCREEN ────────────────────────────────────── */
    'double-protection-sunscreen' => array(
      'img'              => 'pdp-sunscreen-1.jpg',
      'bg'               => 'pc-gold',
      'badge'            => 'New',
      'bc'               => 'new',
      'disc'             => '-67%',
      'cat'              => 'Sunscreen &middot; 30ml',
      'cat_key'          => 'sunscreen',
      'cat_group_title'  => 'Physical Mochi Sunscreen',
      'cat_group_sub'    => 'Melindungi kulit dari paparan sinar matahari',
      'cat_group_accent' => '#10B981',
      'name'             => 'Double Protection Sunscreen',
      'desc'             => 'SPF 50+ PA++++. Physical sunscreen dengan Citronella + Lavender Oil. Water Resistant.',
      'orig'             => 'Rp225.000',
      'price'            => 'Rp74.500',
      'rate'             => '4.9',
      'reviews'          => '789',
      'data_price'       => '74500',
      'data_sold'        => '789',
      'data_date'        => '2025-10',
      'shopee'           => 'https://shopee.co.id/Hiboo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-Double-Protection-Skincare-Bayi-Anti-Nyamuk-Perlindungan-UVA-UVB-S11-i.731537794.56101681763',
      'tiktok'           => 'https://www.tiktok.com/view/product/1730856220718367941',
    ),

    /* ── PROTECTION COMBO ───────────────────────────────────────────────── */
    'protection-combo' => array(
      'img'              => 'pdp-protection-combo.jpg',
      'bg'               => 'pc-mint',
      'badge'            => 'Combo',
      'bc'               => 'hot',
      'disc'             => '-67%',
      'cat'              => 'Combo Set',
      'cat_key'          => 'bundle',
      'cat_group_title'  => 'Bundle &amp; Combo',
      'cat_group_sub'    => 'Hemat lebih banyak dengan paket lengkap',
      'cat_group_accent' => '#FF7A4A',
      'name'             => 'Protection Combo',
      'desc'             => 'Sunscreen + Baby Balm dalam satu paket. Perlindungan lengkap untuk aktivitas si kecil.',
      'orig'             => 'Rp225.000',
      'price'            => 'Rp74.500',
      'rate'             => '4.9',
      'reviews'          => '185',
      'data_price'       => '74500',
      'data_sold'        => '185',
      'data_date'        => '2025-11',
      'shopee'           => 'https://shopee.co.id/Hiboo-Protection-Combo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-All-Purpose-Baby-Balm-15g-Ruam-Popok-Double-Protection-Skincare-Bayi-Anti-Nyamuk-S22-i.731537794.47951864741',
      'tiktok'           => 'https://www.tiktok.com/view/product/1731051527830078957',
    ),

    /* ── BYE RUAM COMBO (listing-only bundle) ───────────────────────────── */
    'bye-ruam-combo' => array(
      'img'              => 'pdp-bye-ruam-combo.jpg',
      'bg'               => 'pc-peach',
      'badge'            => 'Bundle',
      'bc'               => 'hot',
      'disc'             => '-72%',
      'cat'              => 'Bundle &middot; 2x Balm 15g',
      'cat_key'          => 'bundle',
      'cat_group_title'  => 'Bundle &amp; Combo',
      'cat_group_sub'    => 'Hemat lebih banyak dengan paket lengkap',
      'cat_group_accent' => '#FF7A4A',
      'name'             => 'Bye Ruam Combo',
      'desc'             => 'Hemat lebih banyak! 2x All Purpose Baby Balm 15g untuk stok di rumah dan bepergian.',
      'orig'             => 'Rp325.000',
      'price'            => 'Rp89.500',
      'rate'             => '4.9',
      'reviews'          => '10RB+',
      'data_price'       => '89500',
      'data_sold'        => '10000',
      'data_date'        => '2024-06',
      'shopee'           => 'https://shopee.co.id/-DAPAT-POUCH-Hiboo-Bye-Ruam-Combo-Big-Size-All-Purpose-Baby-Balm-Set-2x-15g-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Calming-Moisturizer-Salep-Anak-Ruam-Popok-Skincare-A33-i.731537794.25020961735',
      'tiktok'           => 'https://www.tiktok.com/view/product/1729607482327073989',
      'pdp_slug'         => 'all-purpose-baby-balm', // shares PDP with parent
    ),

  );
}

/**
 * Returns the 6 featured products shown on the homepage, in order.
 */
function hiboo_get_featured_products() {
  $all = hiboo_get_products();
  $featured_slugs = array(
    'all-purpose-baby-balm',
    'mochi-glow-body-serum',
    'zzz-deep-sleep-baby-cream',
    'double-protection-sunscreen',
    'baby-balm-mini',
    'protection-combo',
  );
  $out = array();
  foreach ( $featured_slugs as $slug ) {
    if ( isset( $all[ $slug ] ) ) {
      $out[ $slug ] = $all[ $slug ];
    }
  }
  return $out;
}

/**
 * Returns products grouped by category for the produk listing page.
 */
function hiboo_get_products_by_category() {
  $all = hiboo_get_products();

  // Define display order per category
  $order = array(
    'balm'      => array( 'all-purpose-baby-balm', 'baby-balm-mini' ),
    'serum'     => array( 'mochi-glow-body-serum', 'mochi-glow-serum-50ml' ),
    'calming'   => array( 'zzz-deep-sleep-baby-cream' ),
    'sunscreen' => array( 'double-protection-sunscreen' ),
    'bundle'    => array( 'protection-combo', 'bye-ruam-combo' ),
  );

  $groups = array();
  foreach ( $order as $cat_key => $slugs ) {
    $products = array();
    foreach ( $slugs as $slug ) {
      if ( isset( $all[ $slug ] ) ) {
        $products[] = array_merge( $all[ $slug ], array( 'slug' => $slug ) );
      }
    }
    if ( empty( $products ) ) continue;

    // Pull group meta from first product in the group
    $first = $products[0];
    $groups[] = array(
      'cat'     => $cat_key,
      'title'   => $first['cat_group_title'],
      'sub'     => $first['cat_group_sub'],
      'accent'  => $first['cat_group_accent'],
      'products' => $products,
    );
  }
  return $groups;
}
