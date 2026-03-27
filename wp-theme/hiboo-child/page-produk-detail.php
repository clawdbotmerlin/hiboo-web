<?php
/**
 * Template Name: Produk Detail
 *
 * Individual product detail page. Reads the page slug to load the correct
 * product data. Create child pages under /produk/ with matching slugs.
 *
 * Slugs:
 *   all-purpose-baby-balm
 *   mochi-glow-body-serum
 *   zzz-deep-sleep-baby-cream
 *   double-protection-sunscreen
 *   baby-balm-mini
 *   protection-combo
 *
 * @package Hiboo_Child
 */

get_header();
$img  = get_stylesheet_directory_uri() . '/assets/images';
$slug = get_queried_object()->post_name;

/* ── PRODUCT CATALOGUE ─────────────────────────────────────────────────── */
$catalogue = array(

  'all-purpose-baby-balm' => array(
    'seo_title'   => 'All Purpose Baby Balm 15g | Hiboo — Atasi Eczema & Ruam Popok',
    'seo_desc'    => 'All Purpose Baby Balm Hiboo 15g. 10% Coconut Oil + Vitamin E + Beeswax. Atasi eczema, ruam popok, gigitan serangga. BPOM, Halal MUI, Derma-Tested.',
    'keywords'    => 'baby balm, salep bayi, hiboo baby balm, eczema bayi, ruam popok, gigitan serangga bayi, skincare bayi BPOM',
    'schema_name' => 'All Purpose Baby Balm 15g',
    'schema_price'=> '54500',
    'schema_rev'  => '18200',
    'category'    => 'Baby Balm',
    'name'        => 'All Purpose Baby Balm',
    'tagline'     => '10% Coconut Oil · Vitamin E · Beeswax',
    'rating'      => '4.9',
    'reviews'     => '18.2K ulasan',
    'price'       => 'Rp54.500',
    'orig'        => 'Rp175.000',
    'disc'        => '-69%',
    'short_desc'  => 'Salep serbaguna pertama Indonesia dengan 10% Coconut Oil aktif. Dalam satu balm, atasi eczema, ruam popok, bekas gigitan serangga, dan kulit kering. Tekstur lembut, cepat meresap, aman untuk newborn 0+ bulan.',
    'main_img'    => 'balm-15g.png',
    'bg'          => '#FFF0E8',
    'thumbs'      => array(
      array( 'img' => 'balm-15g.png',    'alt' => 'Hiboo Baby Balm 15g' ),
      array( 'img' => 'balm-5g.png',     'alt' => 'Hiboo Baby Balm 5g travel size' ),
      array( 'img' => 'balm-box-15g.png','alt' => 'Hiboo Baby Balm packaging box' ),
      array( 'img' => 'all-products.png','alt' => 'Koleksi lengkap Hiboo' ),
    ),
    'sizes' => array(
      array( 'label' => '5g Travel', 'shopee' => 'https://shopee.co.id/Hiboo-All-Purpose-Baby-Balm-5g-Travel-Size-with-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Moisturizer-Salep-Anak-Ruam-Popok-i.731537794.21093135682', 'tiktok' => 'https://www.tiktok.com/view/product/1729736568807458217' ),
      array( 'label' => '15g',       'shopee' => 'https://shopee.co.id/Hiboo-Bye-Ruam-Combo-Mix-Size-All-Purpose-Baby-Balm-Set-15g-5g-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Calming-Moisturizer-Balsem-Salep-Anak-Bayi-Ruam-Popok-Skincare-A55-i.731537794.20393740811', 'tiktok' => 'https://www.tiktok.com/view/product/1730467194891502767' ),
    ),
    'benefits' => array(
      array( 'icon' => '🌴', 'title' => 'Atasi Eczema & Eksim',        'desc' => '10% Coconut Oil bekerja aktif meredakan kemerahan, gatal, dan kulit kering akibat eczema.' ),
      array( 'icon' => '👶', 'title' => 'Sembuhkan Ruam Popok',         'desc' => 'Beeswax membentuk lapisan pelindung yang mengurangi iritasi akibat kelembapan berlebih.' ),
      array( 'icon' => '🐝', 'title' => 'Hilangkan Bekas Gigitan',      'desc' => 'Vitamin E mempercepat regenerasi sel kulit dan meredakan bengkak akibat gigitan serangga.' ),
      array( 'icon' => '💧', 'title' => 'Melembabkan 24 Jam',           'desc' => 'Formula emolien mengunci kelembaban alami kulit bayi sepanjang hari di iklim tropis.' ),
      array( 'icon' => '🌿', 'title' => 'Aman Newborn 0+ Bulan',        'desc' => 'Hypoallergenic, tanpa paraben, alkohol, dan pewangi sintetis. Teruji dermatologis.' ),
    ),
    'ingredients' => 'Cera Alba (Beeswax), Cocos Nucifera (Coconut) Oil, Helianthus Annuus (Sunflower) Seed Oil, Tocopheryl Acetate (Vitamin E), Bisabolol, Chamomilla Recutita (Chamomile) Flower Extract, Lavandula Angustifolia (Lavender) Oil, Panthenol, Squalane.',
    'free_from'   => array( 'No Paraben', 'No Alkohol', 'No Pewangi Sintetis', 'No SLS', 'No Mineral Oil', 'No Formaldehyde' ),
    'usage' => array(
      array( 'title' => 'Bersihkan Area yang Akan Dirawat',   'desc' => 'Pastikan kulit bayi bersih dan kering sebelum mengaplikasikan balm.' ),
      array( 'title' => 'Ambil Secukupnya',                   'desc' => 'Ambil sedikit balm dengan ujung jari. Untuk newborn, cukup sebesar biji beras.' ),
      array( 'title' => 'Oleskan dengan Lembut',              'desc' => 'Ratakan ke area yang membutuhkan perawatan — ruam, bekas gigitan, atau kulit kering.' ),
      array( 'title' => 'Ulangi Sesuai Kebutuhan',            'desc' => 'Gunakan 2–3x sehari atau setiap kali mengganti popok untuk hasil optimal.' ),
    ),
    'reviews_score' => '4.9',
    'reviews_count' => '18.200',
    'reviews_list' => array(
      array( 'init' => 'RA', 'name' => 'Ratna Amelia',  'date' => '20 Maret 2026', 'stars' => 5, 'text' => 'Anak saya eczema parah, sudah coba banyak produk. Hiboo Baby Balm ini beneran works! Dalam 3 hari ruam-nya mulai membaik. Teksturnya gak bau dan gak lengket.' ),
      array( 'init' => 'FN', 'name' => 'Farah Nurul',   'date' => '12 Maret 2026', 'stars' => 5, 'text' => 'Ruam popok anak saya langsung sembuh dalam 2 hari. Biasanya mesti ke dokter, ini bisa atasi sendiri di rumah. Stok harus selalu ada di tas!' ),
      array( 'init' => 'YS', 'name' => 'Yuni Safitri',  'date' => '5 Maret 2026',  'stars' => 5, 'text' => 'Baby saya 3 bulan, kulitnya sensitif banget. Balm ini aman banget, gak ada reaksi apapun. Kulit jadi lebih lembut dan sehat.' ),
    ),
    'related' => array( 'mochi-glow-body-serum', 'zzz-deep-sleep-baby-cream', 'double-protection-sunscreen' ),
  ),

  'mochi-glow-body-serum' => array(
    'seo_title'   => 'Mochi Glow Body Serum 100ml | Hiboo — Kulit Bayi Glowing Selembut Mochi',
    'seo_desc'    => 'Mochi Glow Body Serum Hiboo. Japanese White Tomato + 7x Hyaluronic Acid + Ceramide. Kulit bayi glowing selembut mochi. BPOM Certified, Halal MUI, Derma-Tested.',
    'keywords'    => 'serum bayi, mochi glow serum, hiboo serum, hyaluronic acid bayi, ceramide bayi, japanese white tomato, serum kulit bayi Indonesia',
    'schema_name' => 'Mochi Glow Body Serum 100ml',
    'schema_price'=> '64400',
    'schema_rev'  => '8000',
    'category'    => 'Serum',
    'name'        => 'Mochi Glow Body Serum',
    'tagline'     => 'Japanese White Tomato · 7x Hyaluronic Acid · Ceramide',
    'rating'      => '4.9',
    'reviews'     => '8RB+ ulasan',
    'price'       => 'Rp64.400',
    'orig'        => 'Rp115.000',
    'disc'        => '-44%',
    'short_desc'  => 'Serum badan bayi dengan teknologi Jepang. Japanese White Tomato kaya antioksidan, 7x Hyaluronic Acid untuk hidrasi berlapis, dan Ceramide memperkuat skin barrier si kecil. Tekstur ringan, cepat menyerap, non-sticky — ideal untuk iklim tropis Indonesia.',
    'main_img'    => 'mochi-serum-100ml.png',
    'bg'          => '#E8F4FC',
    'thumbs'      => array(
      array( 'img' => 'mochi-serum-100ml.png', 'alt' => 'Mochi Glow Body Serum 100ml' ),
      array( 'img' => 'mochi-serum-50ml.png',  'alt' => 'Mochi Glow Body Serum 50ml' ),
      array( 'img' => 'mochi-face-15ml.png',   'alt' => 'Mochi Face Serum 15ml' ),
      array( 'img' => 'all-products.png',       'alt' => 'Koleksi lengkap Hiboo' ),
    ),
    'sizes' => array(
      array( 'label' => '15ml Face', 'shopee' => 'https://shopee.co.id/-DAPAT-COIN-PURSE-Hiboo-Mochi-Face-Serum-with-Japanese-White-Tomato-2-in-1-Face-Cream-Bayi-Lotion-Bayi-15-ml-Skincare-Bayi-Whitening-Glowing-C00-i.731537794.42957155057', 'tiktok' => 'https://www.tiktok.com/view/product/1730227434899997893' ),
      array( 'label' => '50ml',      'shopee' => 'https://shopee.co.id/Hiboo-Mochi-Skin-Serum-with-Japanese-White-Tomato-for-Baby-Face-Body-50-ml-C22-i.731537794.29763475776', 'tiktok' => 'https://www.tiktok.com/view/product/1730227434899997893' ),
      array( 'label' => '100ml',     'shopee' => 'https://shopee.co.id/Hiboo-Mochi-Glow-Body-Serum-with-Japanese-White-Tomato-2-in-1-Face-Cream-Bayi-Body-Lotion-Bayi-100-ml-Skincare-Newborn-Cream-C11-i.731537794.28813480562', 'tiktok' => 'https://www.tiktok.com/view/product/1729669411949020357' ),
    ),
    'benefits' => array(
      array( 'icon' => '✨', 'title' => 'Kulit Glowing Selembut Mochi',   'desc' => 'Japanese White Tomato sebagai antioksidan premium untuk kulit cerah dan bercahaya alami.' ),
      array( 'icon' => '💧', 'title' => 'Hidrasi Berlapis 24 Jam',         'desc' => '7x Hyaluronic Acid dengan berat molekul berbeda mengunci kelembaban dari dalam hingga permukaan kulit.' ),
      array( 'icon' => '🛡️', 'title' => 'Perkuat Skin Barrier',           'desc' => 'Ceramide NP, AP, dan EOP memperkuat lapisan pelindung kulit bayi yang masih tipis dan sensitif.' ),
      array( 'icon' => '🌿', 'title' => 'Hypoallergenic',                  'desc' => 'Tanpa pewangi sintetis, paraben, dan alkohol. Aman untuk bayi newborn 0+ bulan.' ),
      array( 'icon' => '☀️', 'title' => 'Formula Tropis',                  'desc' => 'Water-based, ringan, dan cepat menyerap — tidak lengket di cuaca Indonesia yang panas.' ),
    ),
    'ingredients' => 'Water, Glycerin, Butylene Glycol, Niacinamide, Sodium Hyaluronate, Hydrolyzed Hyaluronic Acid, Hyaluronic Acid, Sodium Acetylated Hyaluronate, Hydroxypropyltrimonium Hyaluronate, Sodium Hyaluronate Crosspolymer, Potassium Hyaluronate, Ceramide NP, Ceramide AP, Ceramide EOP, Solanum Lycopersicum (Tomato) Fruit Extract, Phytosphingosine, Cholesterol, Sodium Lauroyl Lactylate, Carbomer, Xanthan Gum, Ethylhexylglycerin, Disodium EDTA, 1,2-Hexanediol, Caprylyl Glycol.',
    'free_from'   => array( 'No Paraben', 'No Alkohol', 'No SLS', 'No Mineral Oil', 'No Pewangi Sintetis' ),
    'usage' => array(
      array( 'title' => 'Bersihkan Kulit Bayi',     'desc' => 'Mandikan si kecil seperti biasa. Kulit boleh sedikit lembab, tidak perlu dikeringkan total.' ),
      array( 'title' => 'Tuang Serum Secukupnya',   'desc' => 'Tuang 2–3 tetes ke telapak tangan. Untuk seluruh badan, gunakan 5–8 tetes.' ),
      array( 'title' => 'Ratakan dengan Lembut',    'desc' => 'Usapkan merata ke seluruh badan dengan gerakan memutar. Fokus pada siku, lutut, dan pipi.' ),
      array( 'title' => 'Pijat Perlahan',           'desc' => 'Pijat 1–2 menit untuk penyerapan optimal dan efek relaksasi pada bayi.' ),
      array( 'title' => 'Gunakan 2x Sehari',        'desc' => 'Pagi setelah mandi dan malam sebelum tidur untuk hasil kulit mochi yang optimal.' ),
    ),
    'reviews_score' => '4.9',
    'reviews_count' => '8.000',
    'reviews_list' => array(
      array( 'init' => 'MA', 'name' => 'Mama Arya',   'date' => '15 Maret 2026', 'stars' => 5, 'text' => 'Udah pake 2 botol yang 100ml, kulit anak saya jadi lembut banget kayak mochi beneran! Gak lengket sama sekali, cepet nyerap. Wanginya juga lembut, anak saya suka dipijat pake ini sebelum tidur.' ),
      array( 'init' => 'SD', 'name' => 'Sinta Dewi',  'date' => '8 Maret 2026',  'stars' => 5, 'text' => 'Awalnya ragu karena baru pertama kali pakai serum buat bayi. Tapi setelah 2 minggu pemakaian, kulit baby saya yang kering jadi halus banget. Recommended!' ),
      array( 'init' => 'RP', 'name' => 'Rina Pratama','date' => '28 Feb 2026',   'stars' => 4, 'text' => 'Produknya bagus, kulit anak lembab seharian meskipun cuaca panas. Cuma sayang kemasannya agak susah ditekan, tapi overall produknya oke banget!' ),
    ),
    'related' => array( 'all-purpose-baby-balm', 'zzz-deep-sleep-baby-cream', 'double-protection-sunscreen' ),
  ),

  'zzz-deep-sleep-baby-cream' => array(
    'seo_title'   => 'Zzz Deep Sleep Baby Cream | Hiboo — Bantu Bayi Tidur Nyenyak',
    'seo_desc'    => 'Zzz Deep Sleep Baby Cream Hiboo. 7x Essential Oils + Shea Butter + Aloe Vera. Bantu bayi tidur lebih nyenyak, anti-kolik. BPOM, Halal MUI, Derma-Tested.',
    'keywords'    => 'krim tidur bayi, zzz baby cream, hiboo calming cream, bayi susah tidur, anti kolik bayi, essential oil bayi, skincare bayi Indonesia',
    'schema_name' => 'Zzz Deep Sleep Baby Cream 15g',
    'schema_price'=> '43500',
    'schema_rev'  => '10000',
    'category'    => 'Calming Cream',
    'name'        => 'Zzz Deep Sleep Baby Cream',
    'tagline'     => '7x Essential Oils · Shea Butter · Aloe Vera',
    'rating'      => '4.8',
    'reviews'     => '10RB+ ulasan',
    'price'       => 'Rp43.500',
    'orig'        => 'Rp112.500',
    'disc'        => '-61%',
    'short_desc'  => 'Calming cream pertama Indonesia dengan 7 essential oil pilihan — Lavender, Peppermint, Ginger, Eucalyptus, dan lebih. Bantu si kecil tidur lebih nyenyak, melegakan kolik, dan merilekskan otot. Aroma lembut yang menenangkan untuk rutinitas tidur malam.',
    'main_img'    => 'zzz-cream-30g.png',
    'bg'          => '#EDE7F6',
    'thumbs'      => array(
      array( 'img' => 'zzz-cream-30g.png',  'alt' => 'Zzz Deep Sleep Baby Cream 30g' ),
      array( 'img' => 'zzz-cream-15g.png',  'alt' => 'Zzz Deep Sleep Baby Cream 15g' ),
      array( 'img' => 'all-products.png',    'alt' => 'Koleksi lengkap Hiboo' ),
    ),
    'sizes' => array(
      array( 'label' => '15g', 'shopee' => 'https://shopee.co.id/hiboo-Zzz-Deep-Sleep-Baby-Cream-15-gr-7X-Essential-Tidur-Kolik-%E2%80%93-Calming-Baby-Cream-Skincare-Anak-Bayi-Newborn-Body-Lotion-Mama%E2%80%99s-Cream-i.731537794.24421851945', 'tiktok' => 'https://www.tiktok.com/view/product/1730471352733959343' ),
      array( 'label' => '30g', 'shopee' => 'https://shopee.co.id/hiboo-Zzz-Deep-Sleep-Baby-Cream-Set-30g-15g-7X-Essential-Tidur-Kolik-%E2%80%93-Calming-Baby-Cream-Skincare-Anak-Bayi-Newborn-Body-Lotion-Mama%E2%80%99s-B22-i.731537794.29651658818', 'tiktok' => 'https://www.tiktok.com/view/product/1730467387764933807' ),
    ),
    'benefits' => array(
      array( 'icon' => '🌙', 'title' => 'Tidur Nyenyak Lebih Lama',    'desc' => 'Aroma terapi dari 7 essential oil alami merangsang sistem saraf parasimpatis untuk tidur lebih dalam.' ),
      array( 'icon' => '🌿', 'title' => 'Redakan Kolik & Kembung',     'desc' => 'Minyak Ginger dan Peppermint melegakan perut bayi yang kembung dan mengurangi frekuensi kolik.' ),
      array( 'icon' => '💆', 'title' => 'Relaksasi Otot Bayi',         'desc' => 'Dipijatkan ke perut dan punggung untuk meredakan ketegangan otot bayi setelah seharian aktif.' ),
      array( 'icon' => '💧', 'title' => 'Melembabkan Semalaman',        'desc' => 'Shea Butter dan Aloe Vera menjaga kulit tetap lembab sepanjang malam tanpa rasa lengket.' ),
      array( 'icon' => '🛡️', 'title' => 'Aman untuk Bayi Newborn',    'desc' => 'Hypoallergenic, tanpa paraben dan alkohol. Teruji dermatologis, aman sejak 0 bulan.' ),
    ),
    'ingredients' => 'Aqua, Glycerin, Butyrospermum Parkii (Shea) Butter, Cetearyl Alcohol, Aloe Barbadensis Leaf Juice, Lavandula Angustifolia (Lavender) Oil, Mentha Piperita (Peppermint) Oil, Zingiber Officinale (Ginger) Root Oil, Eucalyptus Globulus Leaf Oil, Chamomilla Recutita Flower Extract, Rosmarinus Officinalis (Rosemary) Leaf Oil, Cananga Odorata Flower Oil, Panthenol, Allantoin, Tocopheryl Acetate, Carbomer, Triethanolamine, Ethylhexylglycerin, Phenoxyethanol.',
    'free_from'   => array( 'No Paraben', 'No Alkohol', 'No SLS', 'No Mineral Oil', 'No Pewangi Sintetis', 'No Formaldehyde' ),
    'usage' => array(
      array( 'title' => 'Gunakan Sebelum Tidur',          'desc' => 'Aplikasikan Zzz Cream 15–30 menit sebelum waktu tidur si kecil untuk efek optimal.' ),
      array( 'title' => 'Ambil Secukupnya',               'desc' => 'Ambil cream sebesar kacang polong untuk satu kali aplikasi.' ),
      array( 'title' => 'Pijat ke Perut & Punggung',      'desc' => 'Oleskan dan pijat lembut searah jarum jam di perut untuk anti-kolik, dan punggung untuk relaksasi.' ),
      array( 'title' => 'Bisa Juga ke Dada & Telapak Kaki', 'desc' => 'Oleskan ke dada untuk melegakan pernapasan dan telapak kaki untuk relaksasi lebih dalam.' ),
    ),
    'reviews_score' => '4.8',
    'reviews_count' => '10.000',
    'reviews_list' => array(
      array( 'init' => 'FM', 'name' => 'Fitri Maharani', 'date' => '18 Maret 2026', 'stars' => 5, 'text' => 'Zzz Cream-nya magical! Baby saya yang biasa bangun 4x semalam, sekarang tidur nyenyak sampe subuh. Wanginya calming banget. Highly recommended buat mamah baru!' ),
      array( 'init' => 'NR', 'name' => 'Novi Rahayu',   'date' => '10 Maret 2026', 'stars' => 5, 'text' => 'Awalnya skeptis, tapi beneran kerja. Anak saya yang koliknya parah jadi jauh lebih tenang setelah rutin dipijat pakai cream ini. Terima kasih Hiboo!' ),
      array( 'init' => 'AS', 'name' => 'Ayu Sari',      'date' => '1 Maret 2026',  'stars' => 4, 'text' => 'Wanginya enak, lembut di kulit bayi. Anak saya tidur lebih cepat. Tapi buat yang sensitif aroma, mungkin aromanya cukup kuat ya. Overall bagus!' ),
    ),
    'related' => array( 'all-purpose-baby-balm', 'mochi-glow-body-serum', 'double-protection-sunscreen' ),
  ),

  'double-protection-sunscreen' => array(
    'seo_title'   => 'Double Protection Sunscreen SPF 50+ PA++++ | Hiboo Baby',
    'seo_desc'    => 'Physical Mochi Sunscreen Hiboo SPF 50+ PA++++. Perlindungan ganda UV + anti-nyamuk. Citronella + Lavender Oil. Water Resistant. BPOM, Halal, Derma-Tested.',
    'keywords'    => 'sunscreen bayi, tabir surya bayi, spf 50 bayi, hiboo sunscreen, physical sunscreen bayi, anti nyamuk bayi, perlindungan uv bayi Indonesia',
    'schema_name' => 'Double Protection Sunscreen SPF 50+ PA++++ 30ml',
    'schema_price'=> '74500',
    'schema_rev'  => '789',
    'category'    => 'Sunscreen',
    'name'        => 'Double Protection Sunscreen',
    'tagline'     => 'SPF 50+ PA++++ · Citronella Oil · Water Resistant',
    'rating'      => '4.9',
    'reviews'     => '789 ulasan',
    'price'       => 'Rp74.500',
    'orig'        => 'Rp225.000',
    'disc'        => '-67%',
    'short_desc'  => 'Sunscreen bayi pertama Indonesia dengan perlindungan ganda — physical UV filter SPF 50+ PA++++ sekaligus anti-nyamuk dengan Citronella dan Lavender Oil. Water resistant, non-greasy, bebas nano-particle. Satu produk untuk dua perlindungan lengkap.',
    'main_img'    => 'mochi-sunscreen-30ml.png',
    'bg'          => '#E8F5E4',
    'thumbs'      => array(
      array( 'img' => 'mochi-sunscreen-30ml.png', 'alt' => 'Hiboo Physical Mochi Sunscreen 30ml' ),
      array( 'img' => 'all-products.png',          'alt' => 'Koleksi lengkap Hiboo' ),
    ),
    'sizes' => array(
      array( 'label' => '30ml', 'shopee' => 'https://shopee.co.id/Hiboo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-Double-Protection-Skincare-Bayi-Anti-Nyamuk-Perlindungan-UVA-UVB-S11-i.731537794.56101681763', 'tiktok' => 'https://www.tiktok.com/view/product/1730856220718367941' ),
    ),
    'benefits' => array(
      array( 'icon' => '☀️', 'title' => 'SPF 50+ PA++++ Perlindungan Maksimal', 'desc' => 'Physical sunscreen dengan Zinc Oxide memblokir UVA dan UVB secara fisik, aman untuk kulit bayi.' ),
      array( 'icon' => '🦟', 'title' => 'Anti-Nyamuk Alami',                    'desc' => 'Citronella dan Lavender Oil sebagai insect repellent alami — tanpa DEET yang berbahaya.' ),
      array( 'icon' => '💧', 'title' => 'Water Resistant',                       'desc' => 'Formulasi tahan air untuk aktivitas luar ruangan dan bermain air di pantai.' ),
      array( 'icon' => '🌿', 'title' => 'Physical Formula',                      'desc' => 'Bebas chemical filter (Oxybenzone, Octinoxate) yang berbahaya. Non-nano Zinc Oxide aman untuk bayi.' ),
      array( 'icon' => '👶', 'title' => 'Non-Greasy & Ringan',                  'desc' => 'Tekstur yang nyaman di kulit bayi — tidak putih berlebih (white cast minimal) dan tidak lengket.' ),
    ),
    'ingredients' => 'Aqua, Zinc Oxide (25%), Cyclopentasiloxane, Dimethicone, Butylene Glycol, PEG-10 Dimethicone, Lauryl PEG-9 Polydimethylsiloxyethyl Dimethicone, Cymbopogon Nardus (Citronella) Oil, Lavandula Angustifolia (Lavender) Oil, Niacinamide, Tocopheryl Acetate, Allantoin, Panthenol, Sodium Hyaluronate, Triethoxycaprylylsilane, Disteardimonium Hectorite, Ethylhexylglycerin, Phenoxyethanol.',
    'free_from'   => array( 'No Oxybenzone', 'No Octinoxate', 'No Paraben', 'No Alkohol', 'No DEET', 'No Nano-Particle' ),
    'usage' => array(
      array( 'title' => 'Aplikasikan 15 Menit Sebelum Keluar',  'desc' => 'Oleskan ke seluruh area tubuh yang akan terpapar matahari sebelum beraktivitas di luar.' ),
      array( 'title' => 'Gunakan Secukupnya',                   'desc' => 'Ambil cream seukuran koin 500 rupiah untuk wajah dan badan. Pastikan rata dan menyeluruh.' ),
      array( 'title' => 'Ulangi Setiap 2 Jam',                 'desc' => 'Reapply setiap 2 jam, atau segera setelah berenang atau berkeringat banyak.' ),
      array( 'title' => 'Cocok untuk Bayi 6 Bulan ke Atas',    'desc' => 'Direkomendasikan untuk bayi usia 6 bulan ke atas. Untuk newborn, hindari paparan sinar matahari langsung.' ),
    ),
    'reviews_score' => '4.9',
    'reviews_count' => '789',
    'reviews_list' => array(
      array( 'init' => 'LK', 'name' => 'Lina Kusuma',  'date' => '22 Maret 2026', 'stars' => 5, 'text' => 'Akhirnya nemu sunscreen bayi yang gak bikin kulit anak saya gatal! SPF-nya juga oke banget, walaupun main di pantai seharian kulitnya gak gosong. Plus bonus anti-nyamuk yang beneran kerja.' ),
      array( 'init' => 'PW', 'name' => 'Putri Widya',  'date' => '14 Maret 2026', 'stars' => 5, 'text' => 'Suka banget! Produknya ringan, gak greasy, dan gak ada white cast berlebih. Anak saya 8 bulan, kulitnya oke-oke aja. Repeat order sudah pasti!' ),
      array( 'init' => 'DH', 'name' => 'Dian Hayati',  'date' => '6 Maret 2026',  'stars' => 5, 'text' => 'Double protection beneran! Nyamuk gak mau deket sama anak saya kalau udah dipakein ini. Dan kulitnya tetap terlindungi dari sinar matahari. Value for money banget.' ),
    ),
    'related' => array( 'all-purpose-baby-balm', 'mochi-glow-body-serum', 'zzz-deep-sleep-baby-cream' ),
  ),

  'baby-balm-mini' => array(
    'seo_title'   => 'Baby Balm Mini 5g Travel Size | Hiboo — Solusi Cepat di Mana Saja',
    'seo_desc'    => 'Hiboo All Purpose Baby Balm 5g Travel Size. 10% Coconut Oil + Vitamin E + Beeswax. Solusi eczema & ruam popok untuk tas bayi. BPOM, Halal, Derma-Tested.',
    'keywords'    => 'baby balm travel, baby balm mini, hiboo balm 5g, salep bayi kecil, balm bayi tas, ruam popok travel',
    'schema_name' => 'All Purpose Baby Balm 5g Travel Size',
    'schema_price'=> '31500',
    'schema_rev'  => '10000',
    'category'    => 'Baby Balm',
    'name'        => 'Baby Balm Mini',
    'tagline'     => '10% Coconut Oil · Vitamin E · Beeswax',
    'rating'      => '4.9',
    'reviews'     => '10RB+ ulasan',
    'price'       => 'Rp31.500',
    'orig'        => 'Rp100.000',
    'disc'        => '-69%',
    'short_desc'  => 'Versi travel size All Purpose Baby Balm 15g yang sudah viral. Ukuran 5g yang muat di semua tas bayi — untuk perjalanan, ke mall, atau jaga-jaga saat di luar rumah. Formula sama, ukuran lebih praktis.',
    'main_img'    => 'balm-5g.png',
    'bg'          => '#FFF0E8',
    'thumbs'      => array(
      array( 'img' => 'balm-5g.png',    'alt' => 'Hiboo Baby Balm Mini 5g' ),
      array( 'img' => 'balm-15g.png',   'alt' => 'Hiboo Baby Balm 15g' ),
      array( 'img' => 'all-products.png','alt' => 'Koleksi lengkap Hiboo' ),
    ),
    'sizes' => array(
      array( 'label' => '5g Travel', 'shopee' => 'https://shopee.co.id/Hiboo-All-Purpose-Baby-Balm-5g-Travel-Size-with-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Moisturizer-Salep-Anak-Ruam-Popok-i.731537794.21093135682', 'tiktok' => 'https://www.tiktok.com/view/product/1729736568807458217' ),
      array( 'label' => '15g Full',  'shopee' => 'https://shopee.co.id/Hiboo-Bye-Ruam-Combo-Mix-Size-All-Purpose-Baby-Balm-Set-15g-5g-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Calming-Moisturizer-Balsem-Salep-Anak-Bayi-Ruam-Popok-Skincare-A55-i.731537794.20393740811', 'tiktok' => 'https://www.tiktok.com/view/product/1730467194891502767' ),
    ),
    'benefits' => array(
      array( 'icon' => '👜', 'title' => 'Muat di Semua Tas Bayi',    'desc' => '5g super compact — masuk ke diaper bag, clutch mama, atau bahkan saku celana.' ),
      array( 'icon' => '🌴', 'title' => 'Formula Identik 15g',       'desc' => '10% Coconut Oil, Vitamin E, dan Beeswax yang sama dengan versi 15g. Tidak ada kompromi kualitas.' ),
      array( 'icon' => '🚀', 'title' => 'Solusi Cepat Darurat',      'desc' => 'Ruam mendadak saat jalan? Gigitan serangga di taman? Satu kali oles, si kecil tenang kembali.' ),
      array( 'icon' => '✈️', 'title' => 'Travel-Friendly',           'desc' => 'Lolos aturan cairan pesawat 100ml. Bawa ke mana saja tanpa khawatir.' ),
    ),
    'ingredients' => 'Cera Alba (Beeswax), Cocos Nucifera (Coconut) Oil, Helianthus Annuus (Sunflower) Seed Oil, Tocopheryl Acetate (Vitamin E), Bisabolol, Chamomilla Recutita (Chamomile) Flower Extract, Lavandula Angustifolia (Lavender) Oil, Panthenol, Squalane.',
    'free_from'   => array( 'No Paraben', 'No Alkohol', 'No Pewangi Sintetis', 'No SLS', 'No Mineral Oil' ),
    'usage' => array(
      array( 'title' => 'Ambil Sedikit dari Tin',    'desc' => 'Ambil balm dengan ujung jari bersih. Seukuran biji kacang cukup untuk area kecil.' ),
      array( 'title' => 'Hangatkan di Telapak Tangan', 'desc' => 'Gosok sebentar di antara kedua jari untuk melunakkan balm sebelum diaplikasikan.' ),
      array( 'title' => 'Oleskan Tipis-Tipis',       'desc' => 'Oleskan ke area yang membutuhkan — ruam, bekas gigitan, bibir kering, atau siku.' ),
    ),
    'reviews_score' => '4.9',
    'reviews_count' => '10.000',
    'reviews_list' => array(
      array( 'init' => 'RD', 'name' => 'Rini Dewi',   'date' => '19 Maret 2026', 'stars' => 5, 'text' => 'Selalu ada di tas bayi saya! Kecil tapi powerful. Anak saya 6 bulan, kalau keluar rumah ini wajib dibawa. Manjur banget buat ruam mendadak.' ),
      array( 'init' => 'HM', 'name' => 'Hana Mulia',  'date' => '11 Maret 2026', 'stars' => 5, 'text' => 'Beli 3 sekaligus buat stock. Taruh di tas, mobil, dan kamar nenek. Worth it banget harganya. Formula sama kayak yang 15g.' ),
      array( 'init' => 'CI', 'name' => 'Citra Indah', 'date' => '2 Maret 2026',  'stars' => 5, 'text' => 'Perfect travel companion! Waktu liburan ke Bali, ini penyelamat banget. Anak saya kena gigitan serangga, langsung oles langsung membaik.' ),
    ),
    'related' => array( 'all-purpose-baby-balm', 'mochi-glow-body-serum', 'zzz-deep-sleep-baby-cream' ),
  ),

  'protection-combo' => array(
    'seo_title'   => 'Protection Combo | Hiboo — Sunscreen + Baby Balm Perlindungan Lengkap',
    'seo_desc'    => 'Hiboo Protection Combo: Double Protection Sunscreen 30ml + All Purpose Baby Balm 15g. Satu paket perlindungan UV, anti-nyamuk, dan perawatan kulit bayi. Hemat lebih banyak.',
    'keywords'    => 'paket skincare bayi, protection combo hiboo, sunscreen balm bayi, combo skincare bayi, bundling baby skincare',
    'schema_name' => 'Hiboo Protection Combo (Sunscreen 30ml + Baby Balm 15g)',
    'schema_price'=> '74500',
    'schema_rev'  => '185',
    'category'    => 'Combo Set',
    'name'        => 'Protection Combo',
    'tagline'     => 'Double Protection Sunscreen + All Purpose Baby Balm',
    'rating'      => '4.9',
    'reviews'     => '185 ulasan',
    'price'       => 'Rp74.500',
    'orig'        => 'Rp225.000',
    'disc'        => '-67%',
    'short_desc'  => 'Paket perlindungan terlengkap untuk si kecil. Double Protection Sunscreen SPF 50+ PA++++ anti-nyamuk + All Purpose Baby Balm 15g untuk eczema dan ruam popok. Beli paket, hemat lebih banyak daripada beli satuan.',
    'main_img'    => 'mochi-face-15ml.png',
    'bg'          => '#E8F4FC',
    'thumbs'      => array(
      array( 'img' => 'mochi-face-15ml.png',      'alt' => 'Hiboo Protection Combo' ),
      array( 'img' => 'mochi-sunscreen-30ml.png',  'alt' => 'Double Protection Sunscreen 30ml' ),
      array( 'img' => 'balm-15g.png',              'alt' => 'All Purpose Baby Balm 15g' ),
    ),
    'sizes' => array(
      array( 'label' => 'Combo Set', 'shopee' => 'https://shopee.co.id/Hiboo-Protection-Combo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-All-Purpose-Baby-Balm-15g-Ruam-Popok-Double-Protection-Skincare-Bayi-Anti-Nyamuk-S22-i.731537794.47951864741', 'tiktok' => 'https://www.tiktok.com/view/product/1731051527830078957' ),
    ),
    'benefits' => array(
      array( 'icon' => '💰', 'title' => 'Hemat vs Beli Satuan',         'desc' => 'Hemat hingga 67% dibanding harga normal. Dua produk unggulan dalam satu pembelian.' ),
      array( 'icon' => '☀️', 'title' => 'Perlindungan Luar & Dalam',    'desc' => 'Sunscreen untuk aktivitas luar ruangan, Baby Balm untuk perawatan kulit sehari-hari.' ),
      array( 'icon' => '🦟', 'title' => 'UV + Anti-Nyamuk + Skincare',  'desc' => 'Satu paket mengatasi tiga kebutuhan utama si kecil — UV protection, insect repellent, dan skin repair.' ),
      array( 'icon' => '🎁', 'title' => 'Hadiah Sempurna',              'desc' => 'Paket kombo yang jadi kado baby shower atau hadiah untuk sahabat yang baru melahirkan.' ),
    ),
    'ingredients' => 'Lihat deskripsi masing-masing produk: Double Protection Sunscreen SPF 50+ dan All Purpose Baby Balm 15g.',
    'free_from'   => array( 'No Paraben', 'No Alkohol', 'No Pewangi Sintetis', 'No SLS', 'No DEET', 'No Nano-Particle' ),
    'usage' => array(
      array( 'title' => 'Pagi Hari',         'desc' => 'Oleskan Double Protection Sunscreen 15 menit sebelum si kecil keluar rumah.' ),
      array( 'title' => 'Saat Ganti Popok',  'desc' => 'Oleskan Baby Balm ke area popok setiap kali mengganti untuk mencegah dan mengobati ruam.' ),
      array( 'title' => 'Saat Aktivitas Luar', 'desc' => 'Reapply sunscreen setiap 2 jam. Gunakan balm untuk area gigitan atau iritasi.' ),
    ),
    'reviews_score' => '4.9',
    'reviews_count' => '185',
    'reviews_list' => array(
      array( 'init' => 'MS', 'name' => 'Maya Sari',   'date' => '21 Maret 2026', 'stars' => 5, 'text' => 'Dua produk favorit saya jadi satu paket! Langsung beli 2 paket untuk stock. Pengiriman cepat, packaging aman. Harganya jauh lebih hemat.' ),
      array( 'init' => 'TN', 'name' => 'Tia Nur',    'date' => '9 Maret 2026',  'stars' => 5, 'text' => 'Ini kado yang saya kasih ke adik yang baru melahirkan. Katanya dua-duanya bagus banget dan langsung jadi favorit. Especially sunscreen-nya yang anti nyamuk itu genius!' ),
      array( 'init' => 'WA', 'name' => 'Wina Anggi', 'date' => '28 Feb 2026',   'stars' => 4, 'text' => 'Value for money! Dua produk bagus dalam satu harga yang terjangkau. Sudah repeat order 3x. Kalau bisa dikasih pilihan lebih banyak variannya ya.' ),
    ),
    'related' => array( 'all-purpose-baby-balm', 'mochi-glow-body-serum', 'zzz-deep-sleep-baby-cream' ),
  ),

); // end $catalogue

/* ── LOAD PRODUCT OR 404 ─────────────────────────────────────────────── */
if ( ! isset( $catalogue[ $slug ] ) ) {
  // Fallback to first product if slug doesn't match
  $product = reset( $catalogue );
} else {
  $product = $catalogue[ $slug ];
}

// Default Shopee/TikTok for first size
$default_shopee = $product['sizes'][0]['shopee'];
$default_tiktok = $product['sizes'][0]['tiktok'];
$size_count     = count( $product['sizes'] );
?>

<!-- SEO meta injected via wp_head filter in functions.php if needed -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "<?php echo esc_js( $product['schema_name'] ); ?>",
  "description": "<?php echo esc_js( $product['seo_desc'] ); ?>",
  "image": "<?php echo esc_url( $img . '/products/' . $product['main_img'] ); ?>",
  "brand": { "@type": "Brand", "name": "Hiboo" },
  "offers": {
    "@type": "Offer",
    "price": "<?php echo esc_attr( $product['schema_price'] ); ?>",
    "priceCurrency": "IDR",
    "availability": "https://schema.org/InStock",
    "seller": { "@type": "Organization", "name": "PT Hiboo Indonesia" }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?php echo esc_attr( $product['rating'] ); ?>",
    "reviewCount": "<?php echo esc_attr( $product['schema_rev'] ); ?>"
  }
}
</script>

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
  <a href="<?php echo esc_url( home_url( '/produk/' ) ); ?>">Produk</a>
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg>
  <span class="current"><?php echo esc_html( $product['name'] ); ?></span>
</div>

<!-- PRODUCT DETAIL -->
<section class="pdp-section">
  <div class="pdp-grid">

    <!-- LEFT: Gallery -->
    <div class="pdp-gallery">
      <div class="pdp-main-img" style="background:linear-gradient(160deg, <?php echo esc_attr($product['bg']); ?>, #FFFCF8);">
        <img id="pdpMainImg"
             src="<?php echo esc_url( $img . '/products/' . $product['main_img'] ); ?>"
             alt="Hiboo <?php echo esc_attr( $product['name'] ); ?>"
             width="380" height="380" loading="eager">
      </div>
      <?php if ( count( $product['thumbs'] ) > 1 ) : ?>
      <div class="pdp-thumbs">
        <?php foreach ( $product['thumbs'] as $i => $thumb ) : ?>
        <div class="pdp-thumb <?php echo $i === 0 ? 'active' : ''; ?>"
             onclick="hibooChangeImg(this,'<?php echo esc_url( $img . '/products/' . $thumb['img'] ); ?>')">
          <img src="<?php echo esc_url( $img . '/products/' . $thumb['img'] ); ?>"
               alt="<?php echo esc_attr( $thumb['alt'] ); ?>" width="60" height="60" loading="lazy">
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>

    <!-- RIGHT: Product Info -->
    <div class="pdp-info">
      <div class="pdp-category"><?php echo esc_html( $product['category'] ); ?></div>
      <h1 class="pdp-name"><?php echo esc_html( $product['name'] ); ?></h1>
      <p class="pdp-tagline"><?php echo esc_html( $product['tagline'] ); ?></p>

      <div class="pdp-rating">
        <span class="pdp-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <span class="pdp-rating-text"><strong><?php echo esc_html( $product['rating'] ); ?></strong> (<?php echo esc_html( $product['reviews'] ); ?>)</span>
      </div>

      <div class="pdp-price">
        <span class="original"><?php echo esc_html( $product['orig'] ); ?></span>
        <span class="current"><?php echo esc_html( $product['price'] ); ?></span>
        <span class="disc-badge"><?php echo esc_html( $product['disc'] ); ?></span>
      </div>

      <p class="pdp-short-desc"><?php echo esc_html( $product['short_desc'] ); ?></p>

      <!-- Size Selector -->
      <?php if ( $size_count > 1 ) : ?>
      <div class="pdp-option-label">Pilih Ukuran:</div>
      <div class="size-selector" id="pdpSizeSelector">
        <?php foreach ( $product['sizes'] as $i => $sz ) : ?>
        <button class="size-btn <?php echo $i === 0 ? 'active' : ''; ?>"
                onclick="hibooSelectSize(this)"
                data-shopee="<?php echo esc_attr( $sz['shopee'] ); ?>"
                data-tiktok="<?php echo esc_attr( $sz['tiktok'] ); ?>">
          <?php echo esc_html( $sz['label'] ); ?>
        </button>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <!-- Marketplace Buttons -->
      <div class="pdp-marketplace-btns">
        <a id="pdpShopeeBtn"
           href="<?php echo esc_url( $default_shopee ); ?>"
           target="_blank" rel="noopener" class="mp-btn mp-btn-shopee">
          <svg viewBox="0 0 24 24" fill="white"><path d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007Z"/></svg>
          Beli di Shopee
        </a>
        <a id="pdpTiktokBtn"
           href="<?php echo esc_url( $default_tiktok ); ?>"
           target="_blank" rel="noopener" class="mp-btn mp-btn-tiktok">
          <svg viewBox="0 0 24 24" fill="white"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1v-3.5a6.37 6.37 0 0 0-.79-.05A6.34 6.34 0 0 0 3.15 15.2a6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.73a8.19 8.19 0 0 0 4.77 1.52V6.8a4.84 4.84 0 0 1-1.01-.11Z"/></svg>
          Beli di TikTok Shop
        </a>
      </div>

      <!-- Trust Badges -->
      <div class="pdp-trust">
        <div class="trust-item cert-bpom">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.746 3.746 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/></svg>
          </div>
          <div class="trust-text">BPOM<small>Certified</small></div>
        </div>
        <div class="trust-item cert-halal">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#10B981"><path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 2.25 2.25 3.75-5.25m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/></svg>
          </div>
          <div class="trust-text">Halal MUI<small>Sertifikasi</small></div>
        </div>
        <div class="trust-item">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#2A7AB5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
          </div>
          <div class="trust-text">Derma-Tested<small>Teruji Klinis</small></div>
        </div>
      </div>

    </div><!-- /.pdp-info -->
  </div><!-- /.pdp-grid -->
</section>

<!-- PRODUCT TABS -->
<section class="pdp-tabs-section">
  <div class="pdp-tabs-nav">
    <button class="tab-btn active" data-tab="desc">Deskripsi</button>
    <button class="tab-btn" data-tab="bahan">Bahan &amp; Ingredients</button>
    <button class="tab-btn" data-tab="usage">Cara Pakai</button>
    <button class="tab-btn" data-tab="reviews">Ulasan</button>
  </div>

  <!-- Tab: Deskripsi -->
  <div class="tab-panel active" id="pdp-tab-desc">
    <div class="tab-desc">
      <h3>Manfaat Utama</h3>
      <ul class="benefits-list">
        <?php foreach ( $product['benefits'] as $b ) : ?>
        <li>
          <span class="b-icon"><?php echo $b['icon']; ?></span>
          <span><strong><?php echo esc_html( $b['title'] ); ?></strong> &mdash; <?php echo esc_html( $b['desc'] ); ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <!-- Tab: Bahan -->
  <div class="tab-panel" id="pdp-tab-bahan">
    <div class="tab-bahan">
      <h3 class="playfair" style="font-size:22px;font-weight:600;margin-bottom:16px;">Daftar Bahan / Ingredients</h3>
      <p class="ingredients-text"><?php echo esc_html( $product['ingredients'] ); ?></p>

      <h3 class="playfair" style="font-size:22px;font-weight:600;margin:32px 0 16px;">Bebas Bahan Berbahaya</h3>
      <div class="free-badges">
        <?php foreach ( $product['free_from'] as $fb ) : ?>
        <span class="free-badge"><?php echo esc_html( $fb ); ?></span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- Tab: Cara Pakai -->
  <div class="tab-panel" id="pdp-tab-usage">
    <div class="tab-usage">
      <h3 class="playfair" style="font-size:22px;font-weight:600;margin-bottom:24px;">Cara Pemakaian</h3>
      <ol class="usage-steps">
        <?php foreach ( $product['usage'] as $i => $step ) : ?>
        <li class="usage-step">
          <div class="usage-step-num"><?php echo $i + 1; ?></div>
          <div class="usage-step-content">
            <h4><?php echo esc_html( $step['title'] ); ?></h4>
            <p><?php echo esc_html( $step['desc'] ); ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>

  <!-- Tab: Ulasan -->
  <div class="tab-panel" id="pdp-tab-reviews">
    <div class="tab-reviews">
      <div class="reviews-summary">
        <div class="reviews-big-score">
          <div class="score"><?php echo esc_html( $product['reviews_score'] ); ?></div>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <div class="count"><?php echo esc_html( $product['reviews_count'] ); ?> ulasan</div>
        </div>
      </div>

      <?php foreach ( $product['reviews_list'] as $r ) : ?>
      <div class="review-card">
        <div class="review-header">
          <div class="review-avatar"><?php echo esc_html( $r['init'] ); ?></div>
          <div class="review-meta">
            <div class="name"><?php echo esc_html( $r['name'] ); ?></div>
            <div class="date"><?php echo esc_html( $r['date'] ); ?></div>
          </div>
        </div>
        <div class="review-stars"><?php echo str_repeat( '&#9733;', $r['stars'] ); ?><?php echo str_repeat( '&#9734;', 5 - $r['stars'] ); ?></div>
        <p><?php echo esc_html( $r['text'] ); ?></p>
        <div class="review-badge">&#10003; Pembelian Terverifikasi</div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- RELATED PRODUCTS -->
<?php
$related_products = array(
  'all-purpose-baby-balm'     => array( 'img' => 'balm-15g.png',           'bg' => 'pc-peach',    'badge' => 'Bestseller', 'bc' => 'hot', 'disc' => '-69%', 'cat' => 'Balm &middot; 15g',     'name' => 'All Purpose Baby Balm',    'orig' => 'Rp175.000', 'price' => 'Rp54.500', 'rate' => '4.9', 'rev' => '18.2K', 'shopee' => 'https://shopee.co.id/Hiboo-Bye-Ruam-Combo-Mix-Size-All-Purpose-Baby-Balm-Set-15g-5g-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Calming-Moisturizer-Balsem-Salep-Anak-Bayi-Ruam-Popok-Skincare-A55-i.731537794.20393740811', 'tiktok' => 'https://www.tiktok.com/view/product/1730467194891502767' ),
  'mochi-glow-body-serum'     => array( 'img' => 'mochi-serum-100ml.png',   'bg' => 'pc-blue',     'badge' => '',           'bc' => '',    'disc' => '-44%', 'cat' => 'Serum &middot; 100ml',   'name' => 'Mochi Glow Body Serum',    'orig' => 'Rp115.000', 'price' => 'Rp64.400', 'rate' => '4.9', 'rev' => '8RB+',  'shopee' => 'https://shopee.co.id/Hiboo-Mochi-Glow-Body-Serum-with-Japanese-White-Tomato-2-in-1-Face-Cream-Bayi-Body-Lotion-Bayi-100-ml-Skincare-Newborn-Cream-C11-i.731537794.28813480562', 'tiktok' => 'https://www.tiktok.com/view/product/1729669411949020357' ),
  'zzz-deep-sleep-baby-cream' => array( 'img' => 'zzz-cream-30g.png',       'bg' => 'pc-lavender', 'badge' => '',           'bc' => '',    'disc' => '-61%', 'cat' => 'Calming &middot; 15g',   'name' => 'Zzz Deep Sleep Cream',     'orig' => 'Rp112.500', 'price' => 'Rp43.500', 'rate' => '4.8', 'rev' => '10RB+', 'shopee' => 'https://shopee.co.id/hiboo-Zzz-Deep-Sleep-Baby-Cream-15-gr-7X-Essential-Tidur-Kolik-%E2%80%93-Calming-Baby-Cream-Skincare-Anak-Bayi-Newborn-Body-Lotion-Mama%E2%80%99s-Cream-i.731537794.24421851945', 'tiktok' => 'https://www.tiktok.com/view/product/1730471352733959343' ),
  'double-protection-sunscreen'=> array( 'img' => 'mochi-sunscreen-30ml.png','bg' => 'pc-gold',     'badge' => 'New',        'bc' => 'new', 'disc' => '-67%', 'cat' => 'Sunscreen &middot; 30ml', 'name' => 'Double Protection Sunscreen','orig' => 'Rp225.000', 'price' => 'Rp74.500', 'rate' => '4.9', 'rev' => '789',   'shopee' => 'https://shopee.co.id/Hiboo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-Double-Protection-Skincare-Bayi-Anti-Nyamuk-Perlindungan-UVA-UVB-S11-i.731537794.56101681763', 'tiktok' => 'https://www.tiktok.com/view/product/1730856220718367941' ),
  'baby-balm-mini'            => array( 'img' => 'balm-5g.png',             'bg' => 'pc-peach',    'badge' => '',           'bc' => '',    'disc' => '-69%', 'cat' => 'Balm &middot; 5g',       'name' => 'Baby Balm Mini',           'orig' => 'Rp100.000', 'price' => 'Rp31.500', 'rate' => '4.9', 'rev' => '10RB+', 'shopee' => 'https://shopee.co.id/Hiboo-All-Purpose-Baby-Balm-5g-Travel-Size-with-10-Coconut-Oil-Vit-E-Beeswax-Natural-Nourishing-Moisturizer-Salep-Anak-Ruam-Popok-i.731537794.21093135682', 'tiktok' => 'https://www.tiktok.com/view/product/1729736568807458217' ),
  'protection-combo'          => array( 'img' => 'mochi-face-15ml.png',     'bg' => 'pc-mint',     'badge' => 'Combo',      'bc' => 'hot', 'disc' => '-67%', 'cat' => 'Combo Set',              'name' => 'Protection Combo',         'orig' => 'Rp225.000', 'price' => 'Rp74.500', 'rate' => '4.9', 'rev' => '185',   'shopee' => 'https://shopee.co.id/Hiboo-Protection-Combo-Physical-Mochi-Sunscreen-Anak-30-ml-SPF-50-PA-All-Purpose-Baby-Balm-15g-Ruam-Popok-Double-Protection-Skincare-Bayi-Anti-Nyamuk-S22-i.731537794.47951864741', 'tiktok' => 'https://www.tiktok.com/view/product/1731051527830078957' ),
);
?>
<section class="related-section">
  <div style="max-width:1100px;margin:0 auto;">
    <div class="section-header">
      <div class="sh-tag">Rekomendasi</div>
      <h2>Produk Terkait</h2>
      <p>Lengkapi rutinitas perawatan kulit si kecil dengan produk Hiboo lainnya</p>
    </div>
    <div class="related-grid">
      <?php foreach ( $product['related'] as $rel_slug ) :
        if ( ! isset( $related_products[ $rel_slug ] ) ) continue;
        $rp = $related_products[ $rel_slug ];
      ?>
      <div class="product-card"
           data-href="<?php echo esc_url( home_url( '/produk/' . $rel_slug . '/' ) ); ?>">
        <?php if ( $rp['badge'] ) : ?>
          <span class="product-card-badge <?php echo esc_attr( $rp['bc'] ); ?>"><?php echo $rp['badge']; ?></span>
        <?php endif; ?>
        <span class="product-card-badge disc"><?php echo $rp['disc']; ?></span>
        <div class="product-img">
          <div class="product-img-bg <?php echo esc_attr( $rp['bg'] ); ?>">
            <img src="<?php echo esc_url( $img . '/products/' . $rp['img'] ); ?>"
                 alt="Hiboo <?php echo esc_attr( $rp['name'] ); ?>"
                 width="200" height="260" loading="lazy">
          </div>
          <div class="product-quick-links">
            <a href="<?php echo esc_url( $rp['shopee'] ); ?>" target="_blank" rel="noopener" class="pql-shopee">
              <svg viewBox="0 0 24 24" fill="white"><path d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007Z"/></svg>Shopee
            </a>
            <a href="<?php echo esc_url( $rp['tiktok'] ); ?>" target="_blank" rel="noopener" class="pql-tiktok">
              <svg viewBox="0 0 24 24" fill="white"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1v-3.5a6.37 6.37 0 0 0-.79-.05A6.34 6.34 0 0 0 3.15 15.2a6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.34-6.34V8.73a8.19 8.19 0 0 0 4.77 1.52V6.8a4.84 4.84 0 0 1-1.01-.11Z"/></svg>TikTok
            </a>
          </div>
        </div>
        <div class="product-info">
          <div class="p-category"><?php echo $rp['cat']; ?></div>
          <h3><?php echo esc_html( $rp['name'] ); ?></h3>
          <div class="product-footer">
            <div class="product-price">
              <span class="original"><?php echo $rp['orig']; ?></span>
              <span class="current"><?php echo $rp['price']; ?></span>
            </div>
            <div class="product-rating">&#9733; <?php echo $rp['rate']; ?> <span>(<?php echo $rp['rev']; ?>)</span></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
/* PDP — Gallery */
function hibooChangeImg(thumb, src) {
  document.getElementById('pdpMainImg').src = src;
  document.querySelectorAll('.pdp-thumb').forEach(function(t){ t.classList.remove('active'); });
  thumb.classList.add('active');
}

/* PDP — Size selector updates buy buttons */
function hibooSelectSize(btn) {
  document.querySelectorAll('.size-btn').forEach(function(b){ b.classList.remove('active'); });
  btn.classList.add('active');
  var shopeeBtn = document.getElementById('pdpShopeeBtn');
  var tiktokBtn = document.getElementById('pdpTiktokBtn');
  if (shopeeBtn && btn.dataset.shopee) shopeeBtn.href = btn.dataset.shopee;
  if (tiktokBtn && btn.dataset.tiktok) tiktokBtn.href = btn.dataset.tiktok;
}

/* PDP — Tabs */
document.querySelectorAll('.pdp-tabs-nav .tab-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var tab = this.dataset.tab;
    document.querySelectorAll('.pdp-tabs-nav .tab-btn').forEach(function(b){ b.classList.remove('active'); });
    document.querySelectorAll('.pdp-tabs-section .tab-panel').forEach(function(p){ p.classList.remove('active'); });
    this.classList.add('active');
    var panel = document.getElementById('pdp-tab-' + tab);
    if (panel) panel.classList.add('active');
  });
});
</script>

<?php get_footer(); ?>
