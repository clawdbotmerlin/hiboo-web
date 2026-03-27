<?php
/**
 * Template Name: Tentang Kami
 *
 * @package Hiboo_Child
 */

get_header();
$img = get_stylesheet_directory_uri() . '/assets/images';
?>

<!-- HERO -->
<section class="about-hero">
  <div class="mochi-shape mh-1"></div>
  <div class="mochi-shape mh-2"></div>
  <div class="mochi-shape mh-3"></div>
  <div class="about-hero-text">
    <div class="about-hero-tag">Tentang Hiboo</div>
    <h1>Cerita di Balik <em>Hiboo</em></h1>
    <p class="about-hero-subtitle">Skincare bayi Indonesia yang terinspirasi dari kelembutan mochi Jepang. Diciptakan dengan cinta, dipercaya oleh puluhan ribu keluarga.</p>
  </div>
  <div class="about-hero-image">
    <img src="<?php echo $img; ?>/products/all-products.png" alt="Koleksi produk Hiboo Baby Skincare" loading="eager">
  </div>
</section>

<!-- BRAND STORY -->
<section class="story-section section-pad">
  <div class="section-header">
    <div class="sh-tag">Cerita Kami</div>
    <h2>Berawal dari Cinta Seorang Ibu</h2>
  </div>
  <div class="story-grid">
    <div class="story-text">
      <p>Hiboo lahir dari keresahan sekelompok ibu Indonesia yang kesulitan menemukan produk perawatan kulit bayi yang benar-benar lembut dan aman. Banyak produk di pasaran mengandung bahan kimia keras yang justru memperburuk kulit sensitif si kecil. Kami bertekad menciptakan sesuatu yang lebih baik.</p>
      <p>Terinspirasi dari filosofi kecantikan Jepang <em>"mochi hada"</em> (kulit selembut mochi), kami mengembangkan rangkaian produk yang menggabungkan kehalusan tradisi Jepang dengan kebutuhan spesifik iklim tropis Indonesia.</p>
      <p>Bersama tim dokter spesialis anak dan dermatologist berpengalaman, kami memformulasikan setiap produk dengan bahan-bahan alami pilihan yang telah teruji klinis. Hasilnya: skincare bayi yang tidak hanya aman untuk newborn 0+ bulan, tetapi juga efektif merawat kulit sensitif di iklim tropis.</p>
    </div>
    <div class="story-image">
      <div class="story-image-container">
        <img src="<?php echo $img; ?>/products/all-products.png" alt="Rangkaian produk Hiboo" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- CERTIFICATIONS -->
<section class="cert-section section-pad">
  <div class="mochi-shape cm-1"></div>
  <div class="mochi-shape cm-2"></div>
  <div class="section-header">
    <div class="sh-tag">Sertifikasi & Keamanan</div>
    <h2>Keamanan adalah Prioritas Utama</h2>
    <p>Setiap produk Hiboo telah melewati standar keamanan tertinggi untuk melindungi kulit si kecil.</p>
  </div>
  <div class="cert-grid">
    <div class="cert-card cert-bpom-card">
      <div class="cert-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/></svg>
      </div>
      <h3>BPOM Certified</h3>
      <p>Terdaftar resmi di Badan POM Indonesia. Setiap produk telah melalui uji keamanan dan kualitas sesuai standar nasional.</p>
    </div>
    <div class="cert-card cert-halal-card">
      <div class="cert-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#10B981"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/></svg>
      </div>
      <h3>Halal MUI</h3>
      <p>Bersertifikasi halal dari Majelis Ulama Indonesia. Bahan-bahan yang digunakan 100% halal dan aman.</p>
    </div>
    <div class="cert-card cert-derma-card">
      <div class="cert-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#D4A04A"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
      </div>
      <h3>Dermatologically Tested</h3>
      <p>Teruji secara dermatologis di laboratorium internasional. Aman untuk kulit bayi paling sensitif.</p>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="stats-section">
  <div class="stats-grid">
    <div class="stat-item"><div class="stat-num">50K+</div><div class="stat-label">Keluarga bahagia<br>di seluruh Indonesia</div></div>
    <div class="stat-item"><div class="stat-num">4.9&#9733;</div><div class="stat-label">Rating rata-rata<br>di marketplace</div></div>
    <div class="stat-item"><div class="stat-num">7000%</div><div class="stat-label">Pertumbuhan dalam<br>4 bulan pertama</div></div>
    <div class="stat-item"><div class="stat-num">0%</div><div class="stat-label">Bahan kimia berbahaya<br>dalam setiap produk</div></div>
  </div>
</section>

<!-- TEAM -->
<section class="team-section section-pad">
  <div class="section-header">
    <div class="sh-tag">Tim Kami</div>
    <h2>Dipimpin oleh Para Ahli</h2>
  </div>
  <p class="team-desc">Setiap produk Hiboo dikembangkan oleh tim multidisiplin yang berkomitmen pada keamanan dan kualitas tertinggi.</p>
  <div class="team-grid">
    <div class="team-card">
      <div class="team-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg>
      </div>
      <h3>Pediatrician</h3>
      <p>Dokter spesialis anak berpengalaman yang memastikan setiap formula aman untuk bayi sejak 0 bulan.</p>
    </div>
    <div class="team-card">
      <div class="team-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#10B981"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3"/></svg>
      </div>
      <h3>Dermatologist</h3>
      <p>Ahli kulit yang menguji setiap produk untuk memastikan keamanan pada kulit bayi paling sensitif.</p>
    </div>
    <div class="team-card">
      <div class="team-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#D4845A"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/></svg>
      </div>
      <h3>Mom Founders</h3>
      <p>Para ibu Indonesia yang memahami kebutuhan nyata perawatan kulit bayi di iklim tropis.</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner">
  <h2>Mulai Perjalanan <em>Mochi Skin</em> Si Kecil</h2>
  <p>Dapatkan starter kit Hiboo dengan diskon 25% untuk pembelian pertama Anda.</p>
  <a href="<?php echo esc_url( home_url( '/produk/' ) ); ?>" class="btn-primary">Belanja Sekarang &rarr;</a>
</section>

<?php get_footer(); ?>
