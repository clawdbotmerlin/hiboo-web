<?php
/**
 * Blog Archive / Listing
 *
 * @package Hiboo_Child
 */

get_header();
?>

<!-- BLOG HERO -->
<section class="blog-hero">
  <div class="sh-tag">Blog & Tips</div>
  <h1>Panduan Perawatan Kulit Bayi</h1>
  <p>Artikel terpercaya seputar perawatan kulit bayi dari dokter anak dan ibu berpengalaman.</p>
</section>

<!-- CATEGORY FILTERS -->
<div class="category-filters">
  <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="cat-pill<?php if ( ! is_category() ) echo ' active'; ?>">Semua</a>
  <?php
  $categories = get_categories( array( 'hide_empty' => true ) );
  foreach ( $categories as $cat ) :
  ?>
    <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="cat-pill<?php if ( is_category( $cat->term_id ) ) echo ' active'; ?>"><?php echo esc_html( $cat->name ); ?></a>
  <?php endforeach; ?>
</div>

<!-- BLOG GRID -->
<div class="blog-grid">
  <?php
  $grad_classes = array( 'grad-1', 'grad-2', 'grad-3', 'grad-4', 'grad-5', 'grad-6' );
  $i = 0;

  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      $grad = $grad_classes[ $i % count( $grad_classes ) ];
      $cats = get_the_category();
      $cat_name = ! empty( $cats ) ? $cats[0]->name : 'Artikel';
  ?>
    <a href="<?php the_permalink(); ?>" class="blog-card">
      <div class="blog-thumb <?php echo esc_attr( $grad ); ?>">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'medium_large', array( 'style' => 'width:100%;height:100%;object-fit:cover;' ) ); ?>
        <?php else : ?>
          <span class="blog-thumb-icon">&#128221;</span>
        <?php endif; ?>
        <span class="cat-tag"><?php echo esc_html( $cat_name ); ?></span>
      </div>
      <div class="blog-card-body">
        <h3><?php the_title(); ?></h3>
        <p class="blog-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></p>
        <div class="blog-meta">
          <div class="author-avatar"><?php echo esc_html( mb_substr( get_the_author(), 0, 2 ) ); ?></div>
          <div class="meta-text">
            <span class="author-name"><?php the_author(); ?></span>
            <div class="meta-row">
              <span><?php echo get_the_date( 'j M Y' ); ?></span>
              <span class="meta-dot"></span>
              <span><?php echo estimated_reading_time(); ?> menit baca</span>
            </div>
          </div>
        </div>
      </div>
    </a>
  <?php
      $i++;
    endwhile;
  else :
  ?>
    <div style="grid-column:1/-1;text-align:center;padding:80px 20px;color:var(--hb-muted);">
      <p>Belum ada artikel. Segera hadir!</p>
    </div>
  <?php endif; ?>
</div>

<!-- PAGINATION -->
<?php
$pagination = paginate_links( array(
  'prev_text' => '&laquo;',
  'next_text' => '&raquo;',
  'type'      => 'array',
) );
if ( $pagination ) :
?>
<div class="pagination">
  <?php foreach ( $pagination as $link ) :
    // Add page-btn class to each link/span
    echo str_replace(
      array( 'page-numbers', 'current' ),
      array( 'page-btn page-numbers', 'active current' ),
      $link
    );
  endforeach; ?>
</div>
<?php endif; ?>

<!-- NEWSLETTER -->
<section class="newsletter">
  <div class="newsletter-inner">
    <h2>Dapatkan Tips Perawatan Bayi</h2>
    <p>Bergabung dengan 10.000+ Moms yang mendapatkan tips eksklusif dan promo langsung di inbox.</p>
    <form class="newsletter-form" action="#" method="post">
      <input type="email" placeholder="Email Anda..." required>
      <button type="submit">Berlangganan</button>
    </form>
    <div class="newsletter-hint">Gratis, tanpa spam. Bisa unsubscribe kapan saja.</div>
  </div>
</section>

<?php get_footer(); ?>
