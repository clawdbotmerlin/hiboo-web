<?php
/**
 * Single Blog Post
 *
 * @package Hiboo_Child
 */

get_header();
$img = get_stylesheet_directory_uri() . '/assets/images';

// Reading time
$content = get_post_field( 'post_content', get_the_ID() );
$word_count = str_word_count( strip_tags( $content ) );
$reading_time = max( 1, ceil( $word_count / 200 ) );

$cats = get_the_category();
$cat_name = ! empty( $cats ) ? $cats[0]->name : 'Artikel';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
  <span class="sep">&rsaquo;</span>
  <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
  <span class="sep">&rsaquo;</span>
  <?php if ( ! empty( $cats ) ) : ?>
    <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"><?php echo esc_html( $cat_name ); ?></a>
    <span class="sep">&rsaquo;</span>
  <?php endif; ?>
  <span class="current"><?php the_title(); ?></span>
</div>

<!-- ARTICLE HEADER -->
<header class="article-header">
  <span class="article-category"><?php echo esc_html( $cat_name ); ?></span>
  <h1 class="playfair"><?php the_title(); ?></h1>
  <div class="article-meta">
    <span class="meta-item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg>
      <?php the_author(); ?>
    </span>
    <span class="meta-sep"></span>
    <span class="meta-item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/></svg>
      <?php echo get_the_date( 'j F Y' ); ?>
    </span>
    <span class="meta-sep"></span>
    <span class="meta-item">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
      <?php echo $reading_time; ?> menit baca
    </span>
  </div>

  <!-- SHARE BUTTONS -->
  <div class="share-buttons">
    <span>Share:</span>
    <a href="https://wa.me/?text=<?php echo urlencode( get_the_title() . ' ' . get_permalink() ); ?>" target="_blank" rel="noopener" class="share-btn" title="WhatsApp">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347Z"/></svg>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener" class="share-btn" title="Facebook">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073Z"/></svg>
    </a>
    <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener" class="share-btn" title="Twitter">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
    </a>
    <button class="share-btn" title="Copy Link" onclick="navigator.clipboard.writeText(window.location.href);this.title='Copied!';">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"/></svg>
    </button>
  </div>
</header>

<!-- ARTICLE BODY -->
<article class="article-body">
  <?php the_content(); ?>
</article>

<!-- AUTHOR BOX -->
<div class="author-box">
  <div class="author-avatar"><?php echo esc_html( mb_substr( get_the_author(), 0, 2 ) ); ?></div>
  <div class="author-info">
    <h4><?php the_author(); ?></h4>
    <?php if ( get_the_author_meta( 'description' ) ) : ?>
      <p><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
    <?php else : ?>
      <p>Penulis di Hiboo Baby Skincare. Berbagi tips perawatan kulit bayi yang aman dan terpercaya.</p>
    <?php endif; ?>
  </div>
</div>

<!-- RELATED POSTS -->
<?php
$related = new WP_Query( array(
  'posts_per_page' => 3,
  'post__not_in'   => array( get_the_ID() ),
  'category__in'   => wp_get_post_categories( get_the_ID() ),
  'orderby'        => 'rand',
) );

if ( $related->have_posts() ) :
?>
<section class="related-section">
  <h2>Artikel Terkait</h2>
  <div class="related-grid">
    <?php
    $grad_classes = array( 'grad-1', 'grad-2', 'grad-3' );
    $j = 0;
    while ( $related->have_posts() ) : $related->the_post();
      $rel_cats = get_the_category();
      $rel_cat  = ! empty( $rel_cats ) ? $rel_cats[0]->name : 'Artikel';
    ?>
    <a href="<?php the_permalink(); ?>" class="related-card">
      <div class="related-card-img blog-thumb <?php echo esc_attr( $grad_classes[ $j % 3 ] ); ?>">
        <?php if ( has_post_thumbnail() ) :
          the_post_thumbnail( 'medium', array( 'style' => 'width:100%;height:100%;object-fit:cover;' ) );
        else : ?>
          <span style="font-size:48px;opacity:.3;">&#128221;</span>
        <?php endif; ?>
      </div>
      <div class="related-card-body">
        <div class="rc-cat"><?php echo esc_html( $rel_cat ); ?></div>
        <h3><?php the_title(); ?></h3>
        <div class="rc-meta"><?php echo get_the_date( 'j M Y' ); ?></div>
      </div>
    </a>
    <?php $j++; endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<?php endif; ?>

<!-- CTA BANNER -->
<section class="blog-cta-banner">
  <div class="blog-cta-inner">
    <h2>Coba Produk Hiboo Sekarang</h2>
    <p>Skincare bayi yang aman, alami, dan terpercaya. BPOM Certified & Halal MUI.</p>
    <a href="<?php echo esc_url( home_url( '/produk/' ) ); ?>">Belanja Sekarang &rarr;</a>
  </div>
</section>

<?php get_footer(); ?>
