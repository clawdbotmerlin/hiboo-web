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
  <h1>Panduan Pemakaian</h1>
  <p>Kenali masalah kulit si kecil dan temukan solusi serta cara pakai yang tepat</p>
</section>

<!-- CONCERN SECTIONS -->
<?php
$concerns = array(

  array(
    'id'     => 'ruam',
    'bg'     => 'concern-white-bg',
    'iclass' => 'eczema',
    'icon'   => '🌿',
    'title'  => 'Ruam / Eczema / Biang Keringat',
    'intro'  => 'Kondisi kulit yang paling umum dialami bayi di Indonesia — dipicu oleh iklim tropis yang panas dan lembab. Ruam, eksim, dan biang keringat sering muncul bersamaan dan membutuhkan penanganan yang tepat.',
    'products' => array(
      array(
        'name' => 'All Purpose Baby Balm',
        'img'  => 'balm-15g.png',
        'price'=> 'Rp54.500',
        'slug' => 'all-purpose-baby-balm',
        'ingredients' => array(
          array('name' => 'Coconut Oil',  'desc' => 'Membantu mengurangi ruam popok serta membantu memperkuat skin barrier baby.'),
          array('name' => 'Vitamin E',    'desc' => 'Membantu memudarkan bekas kemerahan dan gigitan nyamuk/serangga.'),
          array('name' => 'Beeswax',      'desc' => 'Membantu mengurangi kemerahan pada kulit baby.'),
        ),
      ),
      array(
        'name' => 'Zzz Baby Calming Cream',
        'img'  => 'zzz-cream-30g.png',
        'price'=> 'Rp43.500',
        'slug' => 'zzz-deep-sleep-baby-cream',
        'ingredients' => array(
          array('name' => 'Peppermint Oil', 'desc' => 'Membantu melegakan pernapasan bayi agar terasa lebih nyaman.'),
          array('name' => 'Fennel Oil',     'desc' => 'Membantu meredakan rasa tidak nyaman pada perut seperti kembung.'),
          array('name' => 'Lavender Oil',   'desc' => 'Membantu memberikan efek menenangkan sebelum tidur.'),
        ),
      ),
      array(
        'name' => 'Physical Mochi Sunscreen',
        'img'  => 'mochi-sunscreen-30ml.png',
        'price'=> 'Rp74.500',
        'slug' => 'double-protection-sunscreen',
        'ingredients' => array(
          array('name' => 'Japanese White Tomato', 'desc' => 'Membantu menjaga kulit anak agar tetap tampak sehat dan cerah.'),
          array('name' => 'Zinc Oxide',            'desc' => 'Membantu melindungi kulit anak dari sinar UVA dan UVB.'),
          array('name' => 'Titanium Dioxide',      'desc' => 'Membantu memantulkan sinar matahari agar tidak merusak kulit anak.'),
        ),
      ),
    ),
    'facts' => array(
      '1 dari 3 anak Indonesia mengalami biang keringat — kamu tidak sendirian.',
      'Indonesia adalah negara tropis yang panas dan lembab — ini faktor utama munculnya biang keringat.',
      'Biang keringat termasuk kategori heat rash yang bisa memperburuk kondisi ruam dan eczema.',
    ),
    'saran' => array(
      'Usahakan pakai baju yang tipis dan menyerap keringat.',
      'Jangan terlalu lama bermain di luar ruangan saat cuaca panas.',
      'Mandi dengan air sejuk, hindari air yang terlalu panas.',
      'Keringkan kulit dengan lembut, jangan digosok-gosok dengan handuk.',
      'Hindari bedak tabur karena bisa menyumbat pori-pori.',
    ),
    'cara_pakai' => array(
      'Gunakan All Purpose Baby Balm setiap habis mandi di area yang terkena biang keringat dan area yang rawan (leher, lipatan leher, punggung, ketiak, selangkangan, area popok, siku dalam, belakang lutut, lipatan paha dan lengan).',
      'Hindari pemakaian krim saat beraktivitas di luar ruangan — cukup Physical Mochi Sunscreen saja secara tipis.',
      'Jika biang keringat terlalu parah sampai mengganggu tidur, tingkatkan kualitas tidur dengan Zzz Baby Calming Cream yang dioleskan tipis di dada.',
    ),
  ),

  array(
    'id'     => 'kering',
    'bg'     => 'concern-alt-bg',
    'iclass' => 'kering',
    'icon'   => '💧',
    'title'  => 'Kulit Kering',
    'intro'  => 'Kulit kering pada bayi sering terjadi karena terlalu banyak berada di ruangan ber-AC atau karena faktor genetik. Kulit kering lebih rentan iritasi dan membutuhkan perawatan ekstra.',
    'products' => array(
      array(
        'name' => 'Mochi Glow Body Serum',
        'img'  => 'mochi-serum-100ml.png',
        'price'=> 'Rp64.400',
        'slug' => 'mochi-glow-body-serum',
        'ingredients' => array(
          array('name' => 'Japanese White Tomato', 'desc' => 'Membantu menjaga kulit anak agar tetap tampak sehat dan cerah.'),
          array('name' => 'Chamomile',             'desc' => 'Membantu menenangkan kulit anak yang sensitif.'),
          array('name' => 'Ceramide',              'desc' => 'Membantu memperkuat skin barrier kulit anak.'),
        ),
      ),
      array(
        'name' => 'All Purpose Baby Balm',
        'img'  => 'balm-15g.png',
        'price'=> 'Rp54.500',
        'slug' => 'all-purpose-baby-balm',
        'ingredients' => array(
          array('name' => 'Coconut Oil', 'desc' => 'Membantu mengurangi ruam popok serta membantu memperkuat skin barrier baby.'),
          array('name' => 'Vitamin E',   'desc' => 'Membantu memudarkan bekas kemerahan dan gigitan nyamuk/serangga.'),
          array('name' => 'Beeswax',     'desc' => 'Membantu mengurangi kemerahan pada kulit baby.'),
        ),
      ),
      array(
        'name' => 'Zzz Baby Calming Cream',
        'img'  => 'zzz-cream-30g.png',
        'price'=> 'Rp43.500',
        'slug' => 'zzz-deep-sleep-baby-cream',
        'ingredients' => array(
          array('name' => 'Peppermint Oil', 'desc' => 'Membantu melegakan pernapasan bayi agar terasa lebih nyaman.'),
          array('name' => 'Fennel Oil',     'desc' => 'Membantu meredakan rasa tidak nyaman pada perut seperti kembung.'),
          array('name' => 'Lavender Oil',   'desc' => 'Membantu memberikan efek menenangkan sebelum tidur.'),
        ),
      ),
      array(
        'name' => 'Physical Mochi Sunscreen',
        'img'  => 'mochi-sunscreen-30ml.png',
        'price'=> 'Rp74.500',
        'slug' => 'double-protection-sunscreen',
        'ingredients' => array(
          array('name' => 'Japanese White Tomato', 'desc' => 'Membantu menjaga kulit anak agar tetap tampak sehat dan cerah.'),
          array('name' => 'Zinc Oxide',            'desc' => 'Membantu melindungi kulit anak dari sinar UVA dan UVB.'),
          array('name' => 'Titanium Dioxide',      'desc' => 'Membantu memantulkan sinar matahari agar tidak merusak kulit anak.'),
        ),
      ),
    ),
    'facts' => array(
      'Kulit kering sering terjadi karena terlalu banyak di ruangan ber-AC, tapi ada juga yang karena faktor genetik.',
      'Tandanya kulit agak kasar, kadang kalau sudah parah sampai bersisik halus atau terasa gatal.',
      'Kulit kering lebih rentan iritasi sehingga butuh perawatan ekstra.',
    ),
    'saran' => array(
      'Usahakan jangan 24 jam terus-menerus di ruangan ber-AC, campurkan dengan waktu di luar atau semi-outdoor.',
      'Perbanyak minum air agar kulit terhidrasi dari dalam.',
      'Cek kembali skincare yang dipakai — hindari produk dengan bahan yang terlalu "keras" untuk kulit bayi.',
    ),
    'cara_pakai' => array(
      'Gunakan Mochi Face Serum di wajah dan Mochi Glow Baby Serum di badan. Hypoallergenic, cocok untuk kulit yang cenderung rentan iritasi. Formulanya Japanese White Tomato dengan kadar efektif, dilengkapi Ceramide sebagai moisturizer.',
      'Setelah Mochi Glow Baby Serum, gunakan All Purpose Baby Balm untuk mengunci kelembaban agar tetap lembap. Gunakan di area wajah dan area yang kering.',
      'Karena disarankan untuk tidak selalu bermain di ruangan ber-AC, jangan lupa gunakan Physical Mochi Sunscreen.',
      'Jika kulit sudah terlalu parah sampai mengganggu tidur (terutama saat tidur di ruangan ber-AC), tingkatkan kualitas tidur dengan Zzz Baby Calming Cream yang dioleskan tipis di dada.',
    ),
  ),

  array(
    'id'     => 'kusam',
    'bg'     => 'concern-white-bg',
    'iclass' => 'kusam',
    'icon'   => '✨',
    'title'  => 'Kulit Kusam dan Tidak Sehat',
    'intro'  => 'Kulit kusam pada bayi bukan semata-mata faktor genetik — 70–80% disebabkan oleh faktor lingkungan seperti paparan sinar matahari, kurang hidrasi, dan iklim tropis Indonesia.',
    'products' => array(
      array(
        'name' => 'Mochi Glow Body Serum',
        'img'  => 'mochi-serum-100ml.png',
        'price'=> 'Rp64.400',
        'slug' => 'mochi-glow-body-serum',
        'ingredients' => array(
          array('name' => 'Japanese White Tomato', 'desc' => 'Membantu menjaga kulit anak agar tetap tampak sehat dan cerah.'),
          array('name' => 'Chamomile',             'desc' => 'Membantu menenangkan kulit anak yang sensitif.'),
          array('name' => 'Ceramide',              'desc' => 'Membantu memperkuat skin barrier kulit anak.'),
        ),
      ),
      array(
        'name' => 'Physical Mochi Sunscreen',
        'img'  => 'mochi-sunscreen-30ml.png',
        'price'=> 'Rp74.500',
        'slug' => 'double-protection-sunscreen',
        'ingredients' => array(
          array('name' => 'Japanese White Tomato', 'desc' => 'Membantu menjaga kulit anak agar tetap tampak sehat dan cerah.'),
          array('name' => 'Zinc Oxide',            'desc' => 'Membantu melindungi kulit anak dari sinar UVA dan UVB.'),
          array('name' => 'Titanium Dioxide',      'desc' => 'Membantu memantulkan sinar matahari agar tidak merusak kulit anak.'),
        ),
      ),
    ),
    'facts' => array(
      '70–80% kulit cerah atau kusam bukan karena genetik, tapi dari faktor lingkungan.',
      'Genetik hanya mempengaruhi warna dasar kulit — kusam sering terjadi karena kulit kering, kurang bersih, dan paparan matahari.',
      'Anak dengan kulit sawo matang pun bisa terlihat glowing dan sehat dengan perawatan yang tepat.',
      'Indonesia sebagai negara tropis membuat kulit anak lebih mudah kusam dibanding negara beriklim dingin.',
    ),
    'saran' => array(
      'Hindari paparan matahari terlalu lama dan ekstrim — sering pakai topi atau bernaung di bawah pohon.',
      'Lakukan perawatan kulit secara rutin dan tepat.',
      'Perbanyak minum air putih agar kulit terhidrasi dari dalam.',
    ),
    'cara_pakai' => array(
      'Gunakan Mochi Face Serum di wajah dan Mochi Glow Body Serum di badan setiap habis mandi. Formulanya mengandung Japanese White Tomato dengan kadar efektif — satu-satunya di Indonesia — yang terbukti dalam banyak jurnal ilmiah efektif untuk mencerahkan dan menyehatkan kulit.',
      'Jangan lupa gunakan Physical Mochi Sunscreen dan ulangi setiap 3 jam sekali. Sunscreen mengandung SPF 50+ PA++++ sekaligus Japanese White Tomato — melindungi dari UV sekaligus mencerahkan.',
    ),
  ),

);

foreach ($concerns as $idx => $c) :
?>
<div class="concern-block <?php echo esc_attr($c['bg']); ?>" id="<?php echo esc_attr($c['id']); ?>">
  <div class="concern-inner">

    <!-- HEADER -->
    <div class="concern-header">
      <div class="concern-icon <?php echo esc_attr($c['iclass']); ?>"><?php echo $c['icon']; ?></div>
      <h2><?php echo esc_html($c['title']); ?></h2>
    </div>
    <p class="concern-intro"><?php echo esc_html($c['intro']); ?></p>

    <!-- PRODUCTS ROW -->
    <div class="concern-products-label">Produk yang Digunakan</div>
    <div class="concern-products-row">
      <?php foreach ($c['products'] as $prod) : ?>
      <a href="<?php echo esc_url( home_url( '/produk/' . $prod['slug'] . '/' ) ); ?>" class="concern-prod-card">
        <div class="concern-prod-img">
          <img src="<?php echo $img; ?>/products/<?php echo esc_attr($prod['img']); ?>" alt="<?php echo esc_attr($prod['name']); ?>" loading="lazy">
        </div>
        <div class="concern-prod-info">
          <div class="concern-prod-name"><?php echo esc_html($prod['name']); ?></div>
          <div class="concern-prod-price"><?php echo esc_html($prod['price']); ?></div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>

    <!-- INGREDIENTS TABLE -->
    <div class="concern-ingredients">
      <div class="concern-section-label">Kandungan Penting</div>
      <?php foreach ($c['products'] as $prod) : ?>
      <div class="concern-ing-group">
        <div class="concern-ing-product"><?php echo esc_html($prod['name']); ?></div>
        <ul class="concern-ing-list">
          <?php foreach ($prod['ingredients'] as $ing) : ?>
          <li><strong><?php echo esc_html($ing['name']); ?></strong> — <?php echo esc_html($ing['desc']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- FACTS + SARAN in 2-col -->
    <div class="concern-two-col">
      <div class="concern-col">
        <div class="concern-section-label">Fakta</div>
        <ul class="concern-facts-list">
          <?php foreach ($c['facts'] as $fact) : ?>
          <li><?php echo esc_html($fact); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="concern-col">
        <div class="concern-section-label">Saran</div>
        <ul class="concern-saran-list">
          <?php foreach ($c['saran'] as $s) : ?>
          <li><?php echo esc_html($s); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <!-- CARA PAKAI -->
    <div class="concern-usage">
      <div class="concern-section-label">Cara Pakai</div>
      <ol class="concern-usage-steps">
        <?php foreach ($c['cara_pakai'] as $step) : ?>
        <li><?php echo esc_html($step); ?></li>
        <?php endforeach; ?>
      </ol>
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
      array('q'=>'Berapa kali sehari produk Hiboo bisa dipakai?','a'=>'Baby Balm bisa diaplikasikan 2-3 kali sehari atau sesuai kebutuhan. Mochi Glow Serum direkomendasikan 2 kali sehari setelah mandi. Zzz Baby Calming Cream digunakan 1 kali menjelang tidur.'),
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
