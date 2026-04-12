<?php
/**
 * Template Name: Bahan Kami
 *
 * @package Hiboo_Child
 */

get_header();
$img = get_stylesheet_directory_uri() . '/assets/images';
?>

<!-- HERO -->
<section class="ing-hero">
  <div class="mochi-deco mochi-deco-1"></div>
  <div class="mochi-deco mochi-deco-2"></div>
  <div class="mochi-deco mochi-deco-3"></div>
  <div class="ing-hero-content">
    <div class="sh-tag">Bahan & Ingredients</div>
    <h1>Transparan. <em>Alami</em>.</h1>
    <p class="ing-hero-desc">Setiap bahan dalam produk Hiboo dipilih dengan hati-hati oleh tim dokter spesialis anak dan dermatologist. Kami percaya orang tua berhak tahu apa yang digunakan pada kulit si kecil.</p>
  </div>
</section>

<!-- PHILOSOPHY -->
<section class="philosophy-section">
  <div class="philosophy-content">
    <div class="sh-tag">Filosofi Kami</div>
    <h2>Bahan Alami, Tanpa Kompromi</h2>
    <p>Kami hanya menggunakan bahan-bahan yang aman dimakan — karena bayi sering memasukkan tangan ke mulut. Setiap ingredient melewati uji keamanan ketat sebelum digunakan dalam formulasi.</p>
  </div>
</section>

<!-- INGREDIENTS GRID -->
<section class="ingredients-section">
  <div class="section-header">
    <div class="sh-tag">Hero Ingredients</div>
    <h2>Bahan-Bahan Pilihan Kami</h2>
    <p>9 bahan hero yang menjadi fondasi setiap produk Hiboo.</p>
  </div>
  <div class="ingredients-grid">
    <?php
    $ingredients = array(
      array('name'=>'Coconut Oil','sub'=>'Cocos Nucifera Oil','desc'=>'Pelembap alami kaya asam laurat dengan sifat antibakteri & antiinflamasi. Memperkuat skin barrier bayi dan meredakan eczema secara alami.','tags'=>array('Baby Balm','Moisturizer')),
      array('name'=>'Japanese White Tomato','sub'=>'Solanum Lycopersicum Extract','desc'=>'Antioksidan premium dari Jepang yang memberikan efek brightening alami. Melindungi kulit bayi dari radikal bebas tanpa bahan kimia keras.','tags'=>array('Mochi Serum','Brightening')),
      array('name'=>'Hyaluronic Acid','sub'=>'Sodium Hyaluronate Complex','desc'=>'Menembus hingga lapisan terdalam kulit untuk hidrasi optimal. Memberikan kelembapan tahan lama dan menjaga kulit bayi tetap lembut sepanjang hari.','tags'=>array('Mochi Serum','Deep Hydration')),
      array('name'=>'Ceramide Complex','sub'=>'Ceramide NP + AP + EOP','desc'=>'Memperkuat lapisan pelindung kulit (skin barrier) yang masih rapuh pada bayi. Mencegah kehilangan kelembapan dan melindungi dari iritasi.','tags'=>array('Mochi Serum','Barrier Repair')),
      array('name'=>'Beeswax','sub'=>'Cera Alba','desc'=>'Membentuk lapisan pelindung alami yang breathable, mengunci kelembapan tanpa menyumbat pori. Ideal untuk kulit bayi yang rentan kering.','tags'=>array('Baby Balm','Protection')),
      array('name'=>'Vitamin E','sub'=>'Tocopheryl Acetate','desc'=>'Antioksidan kuat yang mempercepat pemulihan kulit rusak. Membantu menyembuhkan ruam, luka ringan, dan bekas gigitan serangga.','tags'=>array('Baby Balm','Healing')),
      array('name'=>'Shea Butter','sub'=>'Butyrospermum Parkii Butter','desc'=>'Pelembap intensif kaya vitamin A & F. Melembutkan kulit kasar dan kering, memberikan nutrisi mendalam tanpa rasa berminyak.','tags'=>array('Zzz Cream','Moisturizer')),
      array('name'=>'Essential Oil Blend','sub'=>'Lavender + Chamomile + Ylang Ylang','desc'=>'7 minyak esensial terpilih dengan efek calming. Aromaterapi alami yang membantu bayi rileks dan tidur lebih nyenyak.','tags'=>array('Zzz Cream','Calming')),
      array('name'=>'Zinc Oxide','sub'=>'Non-Nano Zinc Oxide','desc'=>'Physical sunscreen filter yang aman untuk bayi. Memberikan perlindungan broad-spectrum UV tanpa diserap ke dalam kulit.','tags'=>array('Sunscreen','SPF 50+')),
    );
    foreach ($ingredients as $ing) :
    ?>
    <div class="ing-card">
      <div class="ing-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3"/></svg>
      </div>
      <h3><?php echo esc_html($ing['name']); ?></h3>
      <div class="ing-subtitle"><?php echo esc_html($ing['sub']); ?></div>
      <p class="ing-desc"><?php echo esc_html($ing['desc']); ?></p>
      <div class="ing-tags-label">Ditemukan di:</div>
      <div class="ing-tags">
        <?php foreach ($ing['tags'] as $tag) : ?>
          <span><?php echo esc_html($tag); ?></span>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- FREE FROM -->
<section class="freefrom-section">
  <div class="section-header">
    <div class="sh-tag">Bebas Bahan Berbahaya</div>
    <h2>Yang TIDAK Ada di Produk Kami</h2>
    <p>Kami berkomitmen untuk TIDAK menggunakan bahan-bahan yang berpotensi membahayakan kulit bayi.</p>
  </div>
  <div class="freefrom-grid">
    <?php
    $free_from = array('Paraben', 'Alkohol', 'SLS / SLES', 'Mineral Oil', 'Pewangi Sintetis', 'Pewarna Buatan', 'Phthalates', 'Formaldehyde');
    foreach ($free_from as $item) :
    ?>
    <div class="freefrom-card">
      <div class="freefrom-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636"/></svg>
      </div>
      <h4><?php echo esc_html($item); ?></h4>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="ing-cta">
  <h2>Yakin dengan Bahan Kami?</h2>
  <p>Coba sendiri dan rasakan perbedaannya pada kulit si kecil.</p>
  <a href="<?php echo esc_url( home_url( '/produk/' ) ); ?>" class="btn-primary">Belanja Sekarang &rarr;</a>
</section>

<?php get_footer(); ?>
