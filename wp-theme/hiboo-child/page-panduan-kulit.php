<?php
/**
 * Template Name: Panduan Kulit
 *
 * @package Hiboo_Child
 */

get_header();
$img = get_stylesheet_directory_uri() . '/assets/images';
?>

<!-- HERO -->
<section class="guide-hero">
  <h1>Panduan Kulit Bayi</h1>
  <p>Kenali masalah kulit si kecil dan temukan solusi yang tepat</p>
</section>

<!-- CONCERN SECTIONS -->
<?php
$concerns = array(
  array(
    'bg'    => 'concern-white-bg',
    'icon'  => '&#128301;',
    'iclass'=> 'eczema',
    'title' => 'Eczema pada Bayi',
    'intro' => 'Eczema (dermatitis atopik) adalah kondisi kulit kronis yang sangat umum pada bayi, ditandai dengan kulit kering, merah, gatal, dan bersisik. Sekitar 1 dari 5 bayi di Indonesia mengalami eczema.',
    'symptoms' => array('Kulit kering dan kasar yang terasa seperti amplas','Bercak merah yang gatal, terutama di pipi dan dahi','Kulit bersisik atau mengelupas di area lipatan','Bayi sering menggaruk atau rewel karena gatal'),
    'tips'  => array('Jaga kelembapan kulit bayi dengan rutin menggunakan pelembap setelah mandi','Gunakan sabun bayi yang lembut dan bebas pewangi sintetis','Pakaikan baju berbahan katun lembut, hindari wol atau bahan kasar','Jaga suhu ruangan tetap sejuk dan hindari keringat berlebih'),
    'product' => 'All Purpose Baby Balm',
    'product_img' => 'balm-15g.png',
    'product_price' => 'Rp54.500',
  ),
  array(
    'bg'    => 'concern-alt-bg',
    'icon'  => '&#128696;',
    'iclass'=> 'ruam',
    'title' => 'Ruam Popok',
    'intro' => 'Ruam popok terjadi ketika kulit bayi terlalu lama terpapar kelembapan dari urine dan feses. Area popok menjadi merah, iritasi, dan tidak nyaman.',
    'symptoms' => array('Kemerahan di area yang tertutup popok','Kulit yang terlihat mengkilap atau melepuh','Bayi rewel terutama saat ganti popok','Area yang terasa hangat saat disentuh'),
    'tips'  => array('Ganti popok sesering mungkin, minimal setiap 2-3 jam','Bersihkan area popok dengan lembut menggunakan air hangat','Biarkan kulit terbuka sebentar sebelum memakai popok baru','Gunakan balm pelindung sebagai barrier antara kulit dan popok'),
    'product' => 'All Purpose Baby Balm',
    'product_img' => 'balm-15g.png',
    'product_price' => 'Rp54.500',
  ),
  array(
    'bg'    => 'concern-white-bg',
    'icon'  => '&#9728;&#65039;',
    'iclass'=> 'keringat',
    'title' => 'Biang Keringat',
    'intro' => 'Biang keringat (miliaria) sangat umum pada bayi di iklim tropis Indonesia. Terjadi ketika kelenjar keringat tersumbat dan keringat terperangkap di bawah kulit.',
    'symptoms' => array('Bintik-bintik merah kecil di lipatan kulit','Kulit yang terasa kasar seperti amplas','Muncul di area leher, dada, punggung, dan lipatan'),
    'tips'  => array('Pastikan ruangan sejuk dengan sirkulasi udara baik','Pakaikan baju longgar berbahan katun','Mandikan bayi dengan air suam-suam kuku','Hindari bedak tabur — justru bisa menyumbat pori'),
    'product' => 'Mochi Glow Body Serum',
    'product_img' => 'mochi-serum-100ml.png',
    'product_price' => 'Rp64.400',
  ),
  array(
    'bg'    => 'concern-alt-bg',
    'icon'  => '&#128030;',
    'iclass'=> 'serangga',
    'title' => 'Gigitan Serangga',
    'intro' => 'Gigitan nyamuk dan serangga pada bayi dapat menyebabkan reaksi yang lebih hebat dibanding orang dewasa karena sistem imun mereka belum matang.',
    'symptoms' => array('Bentol merah yang membengkak','Area gigitan terasa panas dan gatal','Bayi menjadi rewel dan tidak nyaman'),
    'tips'  => array('Gunakan kelambu saat tidur','Oleskan balm pelindung sebelum keluar rumah','Jangan menggaruk area gigitan','Kompres dingin untuk meredakan bengkak'),
    'product' => 'All Purpose Baby Balm',
    'product_img' => 'balm-5g.png',
    'product_price' => 'Rp31.500',
  ),
  array(
    'bg'    => 'concern-white-bg',
    'icon'  => '&#127769;',
    'iclass'=> 'tidur',
    'title' => 'Susah Tidur',
    'intro' => 'Gangguan tidur pada bayi dapat disebabkan oleh berbagai faktor termasuk kolik, overstimulasi, dan ketidaknyamanan kulit. Tidur berkualitas sangat penting untuk tumbuh kembang.',
    'symptoms' => array('Sulit tertidur meski sudah lelah','Sering terbangun di malam hari','Rewel dan menangis menjelang tidur'),
    'tips'  => array('Ciptakan rutinitas tidur yang konsisten','Redupkan lampu 30 menit sebelum tidur','Gunakan aromaterapi calming yang aman untuk bayi','Pijat lembut sebelum tidur dengan krim calming'),
    'product' => 'Zzz Deep Sleep Baby Cream',
    'product_img' => 'zzz-cream-30g.png',
    'product_price' => 'Rp43.500',
  ),
);

foreach ($concerns as $c) :
?>
<div class="concern-block <?php echo esc_attr($c['bg']); ?>">
  <div class="concern-inner">
    <div class="concern-header">
      <div class="concern-icon <?php echo esc_attr($c['iclass']); ?>"><?php echo $c['icon']; ?></div>
      <h2><?php echo esc_html($c['title']); ?></h2>
    </div>
    <div class="concern-body">
      <p><strong>Apa itu <?php echo strtolower(explode(' ', $c['title'])[0]); ?>?</strong> <?php echo esc_html($c['intro']); ?></p>

      <h3>Gejala yang Perlu Diperhatikan</h3>
      <ul>
        <?php foreach ($c['symptoms'] as $s) : ?>
          <li><?php echo esc_html($s); ?></li>
        <?php endforeach; ?>
      </ul>

      <h3>Tips untuk Orang Tua</h3>
      <ul>
        <?php foreach ($c['tips'] as $t) : ?>
          <li><?php echo esc_html($t); ?></li>
        <?php endforeach; ?>
      </ul>

      <div class="reco-card">
        <img src="<?php echo $img; ?>/products/<?php echo esc_attr($c['product_img']); ?>" alt="<?php echo esc_attr($c['product']); ?>">
        <div class="reco-info">
          <div class="reco-label">Produk Rekomendasi</div>
          <div class="reco-name"><?php echo esc_html($c['product']); ?></div>
          <div class="reco-price"><?php echo $c['product_price']; ?></div>
        </div>
        <a href="https://shopee.co.id/hiboobaby" target="_blank" rel="noopener" class="reco-link">Beli di Shopee &rarr;</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- FAQ -->
<section class="faq-section">
  <div class="faq-inner">
    <h2>Pertanyaan yang Sering Diajukan</h2>
    <?php
    $faqs = array(
      array('q'=>'Apakah produk Hiboo aman untuk newborn?','a'=>'Ya, semua produk Hiboo diformulasikan khusus untuk bayi sejak 0 bulan (newborn). Telah diuji dermatologis, hypoallergenic, dan bersertifikasi BPOM serta Halal MUI.'),
      array('q'=>'Berapa kali sehari produk Hiboo bisa dipakai?','a'=>'Baby Balm bisa diaplikasikan 2-3 kali sehari atau sesuai kebutuhan. Mochi Glow Serum direkomendasikan 2 kali sehari setelah mandi. Zzz Deep Sleep Cream digunakan 1 kali menjelang tidur.'),
      array('q'=>'Apakah produk Hiboo bisa dipakai bersamaan dengan obat dokter?','a'=>'Produk Hiboo menggunakan bahan natural yang umumnya aman digunakan bersamaan dengan obat resep dokter. Namun, kami sarankan untuk berkonsultasi dengan dokter anak Anda terlebih dahulu.'),
      array('q'=>'Bagaimana cara menyimpan produk Hiboo?','a'=>'Simpan di tempat sejuk dan kering, hindari paparan sinar matahari langsung. Tidak perlu disimpan di kulkas kecuali disebutkan di kemasan.'),
      array('q'=>'Apakah ada efek samping produk Hiboo?','a'=>'Risiko efek samping sangat minimal karena diformulasikan hypoallergenic. Untuk penggunaan pertama, lakukan patch test di area kecil kulit bayi dan tunggu 24 jam.'),
    );
    foreach ($faqs as $faq) :
    ?>
    <div class="faq-item">
      <button class="faq-question">
        <?php echo esc_html($faq['q']); ?>
        <svg class="faq-chevron" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
      </button>
      <div class="faq-answer">
        <div class="faq-answer-inner"><?php echo esc_html($faq['a']); ?></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="guide-cta">
  <h2>Siap Merawat Kulit Si Kecil?</h2>
  <p>Temukan produk Hiboo yang tepat untuk kebutuhan kulit bayi Anda.</p>
  <div class="guide-cta-btns">
    <a href="<?php echo esc_url( home_url( '/produk/' ) ); ?>" class="btn-primary">Belanja Sekarang &rarr;</a>
    <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="btn-secondary">Konsultasi Gratis</a>
  </div>
</section>

<?php get_footer(); ?>
