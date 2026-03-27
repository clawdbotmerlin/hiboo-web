<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/hiboo-logo-color.png">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ANNOUNCEMENT BAR -->

<!-- NAV -->
<nav>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
    <?php if ( has_custom_logo() ) :
      the_custom_logo();
    else : ?>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/hiboo-logo-color.png" alt="<?php bloginfo( 'name' ); ?>" width="160" height="52">
    <?php endif; ?>
  </a>

  <?php
  wp_nav_menu( array(
    'theme_location' => 'primary',
    'container'      => false,
    'menu_class'     => 'nav-links',
    'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
    'fallback_cb'    => 'hiboo_fallback_menu',
    'depth'          => 1,
  ) );
  ?>

  <div class="nav-right">
    <a href="https://shopee.co.id/hiboobaby" target="_blank" rel="noopener" class="nav-icon cart-btn" title="Shopee Store" aria-label="Beli di Shopee">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/></svg>
    </a>
    <button class="mobile-menu-btn" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<?php
/**
 * Fallback menu if no menu assigned.
 */
function hiboo_fallback_menu() {
  echo '<ul class="nav-links">';
  echo '<li><a href="' . esc_url( home_url( '/produk/' ) ) . '">Produk</a></li>';
  echo '<li><a href="' . esc_url( home_url( '/tentang-kami/' ) ) . '">Tentang Kami</a></li>';
  echo '<li><a href="' . esc_url( home_url( '/bahan-kami/' ) ) . '">Bahan Kami</a></li>';
  echo '<li><a href="' . esc_url( home_url( '/panduan-kulit/' ) ) . '">Panduan Kulit</a></li>';
  echo '<li><a href="' . esc_url( home_url( '/blog/' ) ) . '">Blog</a></li>';
  echo '</ul>';
}
?>
