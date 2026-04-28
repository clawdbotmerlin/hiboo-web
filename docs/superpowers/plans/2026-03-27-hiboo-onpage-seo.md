# Hiboo On-Page SEO Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Fully optimize on-page SEO for all 12 pages on hiboo.id — fix titles, add meta descriptions, enable OG tags, fix schema issues, and add 2 missing product pages.

**Architecture:** Rank Math SEO plugin is installed but unconfigured. All fixes go through Rank Math post meta (via WP-CLI over SSH) plus theme-level schema fixes. No WooCommerce — products are static WordPress pages.

**Tech Stack:** WordPress + GeneratePress + Hiboo Child Theme, Rank Math SEO, WP-CLI, SSH (`ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com`), WordPress root: `~/hiboo.id/`

---

## Audit Summary (Current State)

| Issue | Severity | Affected Pages |
|-------|----------|---------------|
| No meta descriptions | P0 | All 12 pages |
| Double site name in titles | P0 | All product pages (6) |
| No OG tags (social sharing broken) | P0 | All 12 pages |
| No canonical tags rendered | P1 | All pages |
| Schema `description` in English | P1 | All product pages (6) |
| No FAQ schema | P1 | Panduan Kulit |
| Missing product pages | P1 | Bye Ruam Combo, Mochi Glow 50ml |
| No breadcrumb schema | P2 | Product pages, inner pages |
| Blog is empty | P2 | Blog page |
| Rank Math Social Meta module not configured | P0 | All pages |

---

## File Map

| File | Action | Purpose |
|------|--------|---------|
| WP post meta (DB) | Modify via WP-CLI | rank_math_title, rank_math_description, rank_math_focus_keyword per page |
| `~/hiboo.id/wp-content/themes/hiboo-child/page-all-purpose-baby-balm.php` | Modify | Fix schema description language + add breadcrumb + FAQ schema |
| `~/hiboo.id/wp-content/themes/hiboo-child/page-mochi-glow-body-serum.php` | Modify | Same |
| `~/hiboo.id/wp-content/themes/hiboo-child/page-zzz-deep-sleep-baby-cream.php` | Modify | Same |
| `~/hiboo.id/wp-content/themes/hiboo-child/page-double-protection-sunscreen.php` | Modify | Same |
| `~/hiboo.id/wp-content/themes/hiboo-child/page-baby-balm-mini.php` | Modify | Same |
| `~/hiboo.id/wp-content/themes/hiboo-child/page-protection-combo.php` | Modify | Same |
| `~/hiboo.id/wp-content/themes/hiboo-child/page-panduan-kulit-bayi.php` | Modify | Add FAQ schema |
| New WP page: `/bye-ruam-combo/` | Create | Missing product page |
| New WP page: `/mochi-glow-serum-50ml/` | Create | Missing product page |

> **Note:** First, SSH in and check the actual theme template structure to confirm file paths before editing:
> ```bash
> ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
>   "ls ~/hiboo.id/wp-content/themes/hiboo-child/"
> ```

---

## Task 1: Enable Rank Math Social Meta Module

**Files:** Rank Math plugin settings (WordPress options table)

- [ ] **Step 1: Enable Social Meta module in Rank Math via WP-CLI**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cd ~/hiboo.id && /usr/local/bin/wp eval '
    \$modules = get_option(\"rank_math_modules\", []);
    \$modules[\"rich-snippet\"] = true;
    \$modules[\"sitemap\"] = true;
    update_option(\"rank_math_modules\", \$modules);
    echo \"Modules updated\n\";
  '"
```

- [ ] **Step 2: Enable OG/Twitter in Rank Math titles settings**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cd ~/hiboo.id && /usr/local/bin/wp option patch update rank_math_general_settings \
    social_url_facebook 'https://www.instagram.com/hiboo.baby/' 2>/dev/null; \
   /usr/local/bin/wp eval '
    \$settings = get_option(\"rank_math_titles\", []);
    \$settings[\"open_graph_image_id\"] = 0;
    \$settings[\"twitter_card_type\"] = \"summary_large_image\";
    update_option(\"rank_math_titles\", \$settings);
    echo \"Social meta enabled\n\";
  '"
```

- [ ] **Step 3: Verify Rank Math is active and OG tags appear on homepage**

```bash
curl -s https://hiboo.id | grep -i 'og:title\|og:description\|og:image' | head -5
```

Expected output: lines containing `<meta property="og:title"`, `og:description"`, `og:image"`. If empty, proceed to Task 2 first (set titles), then recheck.

- [ ] **Step 4: Commit note**

```bash
# No code commit needed — WP options updated via WP-CLI
echo "Task 1 complete: Rank Math Social Meta enabled"
```

---

## Task 2: Fix Homepage SEO

**WP Page ID: 5** | URL: `https://hiboo.id/`

- [ ] **Step 1: Set Rank Math title, description, and focus keyword for homepage**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cd ~/hiboo.id && \
   /usr/local/bin/wp post meta update 5 rank_math_title 'Skincare Bayi Selembut Mochi | Hiboo — BPOM & Halal' && \
   /usr/local/bin/wp post meta update 5 rank_math_description 'Hiboo skincare bayi Indonesia. Diformulasikan dokter anak & dermatologist. BPOM certified, Halal MUI, hypoallergenic. Aman newborn 0+ bulan. Gratis ongkir.' && \
   /usr/local/bin/wp post meta update 5 rank_math_focus_keyword 'skincare bayi Indonesia' && \
   echo 'Homepage meta updated'"
```

- [ ] **Step 2: Verify title and description in rendered HTML**

```bash
curl -s https://hiboo.id | grep -E '<title>|meta name="description"' | head -5
```

Expected:
```
<title>Skincare Bayi Selembut Mochi | Hiboo — BPOM & Halal</title>
<meta name="description" content="Hiboo skincare bayi Indonesia. Diformulasikan dokter anak &amp; dermatologist..."/>
```

- [ ] **Step 3: Verify OG tags are now present**

```bash
curl -s https://hiboo.id | grep 'og:' | head -8
```

Expected: `og:title`, `og:description`, `og:image`, `og:url` all present.

---

## Task 3: Fix Products Category Page SEO

**WP Page ID: 6** | URL: `https://hiboo.id/produk/`

- [ ] **Step 1: Set Rank Math meta for /produk/ page**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cd ~/hiboo.id && \
   /usr/local/bin/wp post meta update 6 rank_math_title 'Produk Skincare Bayi Hiboo | Balm, Serum, Sunscreen Bayi' && \
   /usr/local/bin/wp post meta update 6 rank_math_description 'Belanja skincare bayi Hiboo: Baby Balm, Mochi Glow Serum, Zzz Baby Cream, Sunscreen bayi. BPOM certified, Halal MUI. Aman newborn 0+ bulan. Gratis ongkir.' && \
   /usr/local/bin/wp post meta update 6 rank_math_focus_keyword 'produk skincare bayi' && \
   echo 'Produk page meta updated'"
```

- [ ] **Step 2: Verify**

```bash
curl -s https://hiboo.id/produk/ | grep -E '<title>|name="description"' | head -3
```

Expected title: `Produk Skincare Bayi Hiboo | Balm, Serum, Sunscreen Bayi`

---

## Task 4: Fix All Product Pages SEO (Batch via WP-CLI)

**WP Page IDs:** 17 (Baby Balm), 18 (Mochi Serum), 19 (Zzz Cream), 20 (Sunscreen), 21 (Balm Mini), 22 (Protection Combo)

**Root cause:** post_title contains `| Hiboo` already, causing doubled brand name. Fix by setting explicit rank_math_title.

- [ ] **Step 1: Run batch meta update for all 6 product pages**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com "cd ~/hiboo.id && \

/usr/local/bin/wp post meta update 17 rank_math_title 'All Purpose Baby Balm Hiboo 15g | Balm Eczema & Ruam Popok' && \
/usr/local/bin/wp post meta update 17 rank_math_description 'All Purpose Baby Balm Hiboo 15g. 10% Coconut Oil + Vitamin E + Beeswax. Atasi eczema, ruam popok, gigitan serangga. BPOM certified, Halal MUI, Derma-Tested.' && \
/usr/local/bin/wp post meta update 17 rank_math_focus_keyword 'baby balm bayi' && \

/usr/local/bin/wp post meta update 18 rank_math_title 'Mochi Glow Body Serum Hiboo 100ml | Japanese White Tomato + HA' && \
/usr/local/bin/wp post meta update 18 rank_math_description 'Mochi Glow Body Serum Hiboo 100ml. Japanese White Tomato + 7x Hyaluronic Acid + Ceramide. Kulit bayi glowing selembut mochi. BPOM certified, Halal MUI.' && \
/usr/local/bin/wp post meta update 18 rank_math_focus_keyword 'serum bayi' && \

/usr/local/bin/wp post meta update 19 rank_math_title 'Zzz Deep Sleep Baby Cream Hiboo 15g | Krim Tidur Bayi' && \
/usr/local/bin/wp post meta update 19 rank_math_description 'Zzz Deep Sleep Baby Cream Hiboo 15g. Lavender + Chamomile + Shea Butter. Bantu bayi tidur lebih nyenyak. BPOM certified, Halal MUI, Derma-Tested.' && \
/usr/local/bin/wp post meta update 19 rank_math_focus_keyword 'krim tidur bayi' && \

/usr/local/bin/wp post meta update 20 rank_math_title 'Sunscreen Bayi Hiboo 30ml | SPF 30+ PA+++ Aman Newborn 0+ Bulan' && \
/usr/local/bin/wp post meta update 20 rank_math_description 'Double Protection Sunscreen Hiboo 30ml. SPF 30+ PA+++ dengan Zinc Oxide. Aman untuk bayi newborn 0+ bulan. Bebas paraben & SLS. BPOM certified, Halal MUI.' && \
/usr/local/bin/wp post meta update 20 rank_math_focus_keyword 'sunscreen bayi' && \

/usr/local/bin/wp post meta update 21 rank_math_title 'Baby Balm Mini Hiboo 5g | Balm Bayi Travel Size' && \
/usr/local/bin/wp post meta update 21 rank_math_description 'Baby Balm Mini Hiboo 5g ukuran travel. 10% Coconut Oil + Vitamin E + Beeswax. Praktis untuk perjalanan. BPOM certified, Halal MUI, Derma-Tested.' && \
/usr/local/bin/wp post meta update 21 rank_math_focus_keyword 'baby balm mini bayi' && \

/usr/local/bin/wp post meta update 22 rank_math_title 'Protection Combo Hiboo | Sunscreen + Baby Balm Bundling Hemat' && \
/usr/local/bin/wp post meta update 22 rank_math_description 'Paket Protection Combo Hiboo: Double Protection Sunscreen + All Purpose Baby Balm. Lindungi kulit bayi dari sinar UV & iritasi. Bundling hemat lebih praktis.' && \
/usr/local/bin/wp post meta update 22 rank_math_focus_keyword 'skincare bayi bundling' && \

echo 'All product pages meta updated'"
```

- [ ] **Step 2: Spot-check one product page for correct title and description**

```bash
curl -s https://hiboo.id/all-purpose-baby-balm/ | grep -E '<title>|name="description"' | head -3
```

Expected:
```
<title>All Purpose Baby Balm Hiboo 15g | Balm Eczema & Ruam Popok</title>
<meta name="description" content="All Purpose Baby Balm Hiboo 15g. 10% Coconut Oil..."/>
```

- [ ] **Step 3: Check all product titles are clean (no doubled brand)**

```bash
for slug in all-purpose-baby-balm mochi-glow-body-serum zzz-deep-sleep-baby-cream double-protection-sunscreen baby-balm-mini protection-combo; do
  echo "--- $slug ---"
  curl -s https://hiboo.id/$slug/ | grep '<title>' | head -1
done
```

Expected: each title is unique, no title contains "Hiboo" twice.

---

## Task 5: Fix Support Pages SEO (Tentang, Bahan, Panduan, Blog)

**WP Page IDs:** 7 (Tentang), 8 (Bahan), 9 (Panduan Kulit), 10 (Blog)

- [ ] **Step 1: Update meta for support pages**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com "cd ~/hiboo.id && \

/usr/local/bin/wp post meta update 7 rank_math_title 'Tentang Hiboo | Skincare Bayi Indonesia BPOM & Halal MUI' && \
/usr/local/bin/wp post meta update 7 rank_math_description 'Kenali Hiboo, brand skincare bayi Indonesia terinspirasi filosofi mochi Jepang. Diformulasikan dokter anak & dermatologist. BPOM certified, Halal MUI, Derma-Tested.' && \
/usr/local/bin/wp post meta update 7 rank_math_focus_keyword 'tentang hiboo skincare bayi' && \

/usr/local/bin/wp post meta update 8 rank_math_title 'Bahan Kami | Formula Hypoallergenic Natural & Gentle | Hiboo' && \
/usr/local/bin/wp post meta update 8 rank_math_description 'Formula Hiboo: hypoallergenic, bebas paraben, SLS, mineral oil & pewangi buatan. Bahan alami pilihan aman untuk kulit sensitif bayi newborn 0+ bulan.' && \
/usr/local/bin/wp post meta update 8 rank_math_focus_keyword 'bahan skincare bayi aman' && \

/usr/local/bin/wp post meta update 9 rank_math_title 'Panduan Kulit Bayi | Solusi Eczema, Ruam Popok, Biang Keringat' && \
/usr/local/bin/wp post meta update 9 rank_math_description 'Panduan lengkap masalah kulit bayi: eczema, ruam popok, biang keringat, gigitan serangga. Tips dari dokter anak & solusi skincare Hiboo yang aman.' && \
/usr/local/bin/wp post meta update 9 rank_math_focus_keyword 'panduan kulit bayi' && \

/usr/local/bin/wp post meta update 10 rank_math_title 'Blog & Tips Perawatan Kulit Bayi | Hiboo' && \
/usr/local/bin/wp post meta update 10 rank_math_description 'Tips perawatan kulit bayi dari dokter anak & dermatologist. Artikel seputar eczema, ruam popok, biang keringat, dan skincare bayi terpercaya di Indonesia.' && \
/usr/local/bin/wp post meta update 10 rank_math_focus_keyword 'tips perawatan kulit bayi' && \

echo 'Support pages meta updated'"
```

- [ ] **Step 2: Verify Panduan Kulit title and description**

```bash
curl -s https://hiboo.id/panduan-kulit/ | grep -E '<title>|name="description"' | head -3
```

Expected:
```
<title>Panduan Kulit Bayi | Solusi Eczema, Ruam Popok, Biang Keringat</title>
<meta name="description" content="Panduan lengkap masalah kulit bayi..."/>
```

---

## Task 6: Fix Product Schema Descriptions (Indonesian Language)

**Problem:** Current product JSON-LD schema `description` fields are in English. Page content is Bahasa Indonesia — mismatch confuses Google's entity understanding.

**Files to check and edit:** Child theme PHP templates for each product page.

- [ ] **Step 1: Find the product page template files**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "ls ~/hiboo.id/wp-content/themes/hiboo-child/ | grep -i 'balm\|serum\|cream\|sun\|mini\|combo\|panduan'"
```

Expected: list of PHP template files like `page-all-purpose-baby-balm.php`, `page-mochi-glow-body-serum.php`, etc.

- [ ] **Step 2: Update Baby Balm schema description to Indonesian**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "grep -n 'description' ~/hiboo.id/wp-content/themes/hiboo-child/page-all-purpose-baby-balm.php | head -5"
```

Find the JSON-LD description line, then replace with:

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "sed -i 's/All Purpose Baby Balm Hiboo 15g with 10% Coconut Oil, Vitamin E, Beeswax. Addresses eczema, diaper rash, insect bites. BPOM, Halal MUI, Dermatologically-tested./Baby Balm serba guna Hiboo 15g. Mengandung 10% Coconut Oil, Vitamin E, Beeswax. Mengatasi eczema, ruam popok, gigitan serangga. BPOM certified, Halal MUI, Dermatologically-tested./' ~/hiboo.id/wp-content/themes/hiboo-child/page-all-purpose-baby-balm.php"
```

- [ ] **Step 3: Repeat for each product — update schema descriptions to Indonesian**

Descriptions to use per product:
```
Baby Balm 15g:  "Baby Balm serba guna Hiboo 15g. 10% Coconut Oil + Vitamin E + Beeswax. Atasi eczema, ruam popok, gigitan serangga. BPOM, Halal MUI, Derma-Tested."
Mochi Serum:    "Mochi Glow Body Serum Hiboo 100ml. Japanese White Tomato + 7x Hyaluronic Acid + Ceramide. Kulit bayi glowing selembut mochi. BPOM, Halal MUI."
Zzz Cream:      "Zzz Deep Sleep Baby Cream Hiboo 15g. Lavender + Chamomile + Shea Butter. Bantu bayi tidur lebih nyenyak. BPOM certified, Halal MUI, Derma-Tested."
Sunscreen:      "Sunscreen bayi Hiboo 30ml SPF 30+ PA+++. Zinc Oxide formula ringan. Aman newborn 0+ bulan. Bebas paraben & SLS. BPOM certified, Halal MUI."
Balm Mini:      "Baby Balm Mini Hiboo 5g ukuran travel. 10% Coconut Oil + Vitamin E + Beeswax. Praktis untuk perjalanan. BPOM certified, Halal MUI, Derma-Tested."
Protection Combo: "Paket Protection Combo Hiboo: Double Protection Sunscreen + All Purpose Baby Balm. Perlindungan lengkap kulit bayi dari UV & iritasi. BPOM, Halal MUI."
```

- [ ] **Step 4: Validate product schema with Rich Results Test**

Go to: https://search.google.com/test/rich-results
Enter URL: `https://hiboo.id/all-purpose-baby-balm/`
Expected: ✅ Product rich result detected, no errors.

---

## Task 7: Add FAQ Schema to Panduan Kulit Page

**The `/panduan-kulit/` page has an H2 "Pertanyaan yang Sering Diajukan" section — add FAQPage schema.**

- [ ] **Step 1: Find the Panduan Kulit template file**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "ls ~/hiboo.id/wp-content/themes/hiboo-child/ | grep panduan"
```

- [ ] **Step 2: Add FAQPage JSON-LD block before `</head>` in the template**

Add this schema block (after reading the actual FAQ questions from the page first):

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "grep -n 'Pertanyaan\|FAQ\|Sering Diajukan' ~/hiboo.id/wp-content/themes/hiboo-child/page-panduan-kulit-bayi.php | head -10"
```

Then inject the FAQ schema (adapt Q&A from actual page content):

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Kapan sebaiknya mulai menggunakan skincare untuk bayi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bayi baru lahir (newborn) sudah bisa menggunakan produk skincare yang diformulasikan khusus seperti Hiboo Baby Balm. Pastikan produk BPOM certified, hypoallergenic, dan bebas paraben."
      }
    },
    {
      "@type": "Question",
      "name": "Bagaimana cara mengatasi eczema pada bayi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Eczema pada bayi dapat diatasi dengan menjaga kelembapan kulit menggunakan pelembap hypoallergenic, menghindari sabun berparfum, dan menggunakan pakaian berbahan katun. Hiboo Baby Balm mengandung Coconut Oil dan Vitamin E yang membantu menenangkan kulit eczema."
      }
    },
    {
      "@type": "Question",
      "name": "Apakah produk Hiboo aman untuk newborn 0 bulan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ya, semua produk Hiboo aman untuk newborn 0+ bulan. Formulasi hypoallergenic, bebas paraben, SLS, dan pewangi buatan. BPOM certified dan Dermatologically-tested untuk kulit bayi sensitif."
      }
    }
  ]
}
</script>
```

- [ ] **Step 3: Validate FAQ schema**

```bash
curl -s https://hiboo.id/panduan-kulit/ | grep -A5 'FAQPage'
```

Then test at: https://search.google.com/test/rich-results?url=https://hiboo.id/panduan-kulit/
Expected: ✅ FAQ rich result detected.

---

## Task 8: Create Missing Product Pages

**2 products appear in `/produk/` grid but have no dedicated WP pages.**

### 8A: Bye Ruam Combo

- [ ] **Step 1: Create WP page for Bye Ruam Combo**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cd ~/hiboo.id && /usr/local/bin/wp post create \
    --post_type=page \
    --post_title='Bye Ruam Combo | Hiboo' \
    --post_name='bye-ruam-combo' \
    --post_status=publish \
    --porcelain"
```

Note the returned page ID (e.g., 23).

- [ ] **Step 2: Set SEO meta for Bye Ruam Combo (replace {ID} with actual ID)**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cd ~/hiboo.id && \
   /usr/local/bin/wp post meta update {ID} rank_math_title 'Bye Ruam Combo Hiboo | 2x Baby Balm 15g Paket Hemat Ruam Popok' && \
   /usr/local/bin/wp post meta update {ID} rank_math_description 'Bye Ruam Combo Hiboo: 2x All Purpose Baby Balm 15g. Solusi lengkap ruam popok, eczema, gigitan serangga untuk bayi. Bundling hemat. BPOM, Halal MUI.' && \
   /usr/local/bin/wp post meta update {ID} rank_math_focus_keyword 'paket skincare bayi ruam popok' && \
   echo 'Bye Ruam Combo meta updated'"
```

- [ ] **Step 3: Assign product page template (copy from Baby Balm template)**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cp ~/hiboo.id/wp-content/themes/hiboo-child/page-all-purpose-baby-balm.php \
      ~/hiboo.id/wp-content/themes/hiboo-child/page-bye-ruam-combo.php"
```

Then edit `page-bye-ruam-combo.php` to update: product name, images, prices, schema, ingredients, benefits for the combo pack.

- [ ] **Step 4: Verify page is live**

```bash
curl -I https://hiboo.id/bye-ruam-combo/
```

Expected: `HTTP/2 200`

### 8B: Mochi Glow Serum 50ml

- [ ] **Step 1: Create WP page for Mochi Glow 50ml**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cd ~/hiboo.id && /usr/local/bin/wp post create \
    --post_type=page \
    --post_title='Mochi Glow Body Serum 50ml | Hiboo' \
    --post_name='mochi-glow-serum-50ml' \
    --post_status=publish \
    --porcelain"
```

- [ ] **Step 2: Set SEO meta (replace {ID} with actual ID)**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cd ~/hiboo.id && \
   /usr/local/bin/wp post meta update {ID} rank_math_title 'Mochi Glow Body Serum Hiboo 50ml | Japanese White Tomato + HA' && \
   /usr/local/bin/wp post meta update {ID} rank_math_description 'Mochi Glow Body Serum Hiboo 50ml. Japanese White Tomato + 7x Hyaluronic Acid + Ceramide. Kulit bayi glowing selembut mochi. Ukuran ekonomis. BPOM, Halal MUI.' && \
   /usr/local/bin/wp post meta update {ID} rank_math_focus_keyword 'serum bayi 50ml' && \
   echo 'Mochi Glow 50ml meta updated'"
```

- [ ] **Step 3: Assign and customize template**

```bash
ssh -i ~/.ssh/hiboo_domainesia -p 64000 madpadel@como.id.rapidplex.com \
  "cp ~/hiboo.id/wp-content/themes/hiboo-child/page-mochi-glow-body-serum.php \
      ~/hiboo.id/wp-content/themes/hiboo-child/page-mochi-glow-serum-50ml.php"
```

Edit: update size (50ml), price (Rp95.900), schema, image filename.

- [ ] **Step 4: Verify**

```bash
curl -I https://hiboo.id/mochi-glow-serum-50ml/
```

Expected: `HTTP/2 200`

---

## Task 9: Verify All Pages via Final Audit

- [ ] **Step 1: Run full title/description audit across all pages**

```bash
for url in "" "produk/" "tentang-kami/" "bahan-kami/" "panduan-kulit/" "blog/" \
           "all-purpose-baby-balm/" "mochi-glow-body-serum/" "zzz-deep-sleep-baby-cream/" \
           "double-protection-sunscreen/" "baby-balm-mini/" "protection-combo/"; do
  echo "=== hiboo.id/$url ==="
  curl -s "https://hiboo.id/$url" | grep -E '<title>|name="description"' | head -2
done
```

Expected: Every URL has a unique `<title>` (no doubled brand names) and a `<meta name="description">`.

- [ ] **Step 2: Verify OG tags on homepage and one product**

```bash
curl -s https://hiboo.id | grep 'og:' | head -6
curl -s https://hiboo.id/all-purpose-baby-balm/ | grep 'og:' | head -6
```

Expected: `og:title`, `og:description`, `og:image` present on both.

- [ ] **Step 3: Submit sitemap to Google Search Console**

Manual step — go to: https://search.google.com/search-console
Add property: `hiboo.id`
Go to Sitemaps → Enter: `sitemap_index.xml` → Submit

- [ ] **Step 4: Run Rich Results Test on product and FAQ pages**

- https://search.google.com/test/rich-results?url=https://hiboo.id/all-purpose-baby-balm/ → Expect: ✅ Product
- https://search.google.com/test/rich-results?url=https://hiboo.id/panduan-kulit/ → Expect: ✅ FAQ

---

## Self-Review

**Spec coverage:**
- ✅ All 12 existing pages get title + description + focus keyword (Tasks 2–5)
- ✅ OG/social meta enabled globally (Task 1)
- ✅ Product schema descriptions translated to Indonesian (Task 6)
- ✅ FAQ schema added to Panduan Kulit (Task 7)
- ✅ 2 missing product pages created (Task 8)
- ✅ Final audit + GSC submission (Task 9)

**Not covered in this plan (out of scope for on-page SEO):**
- Blog content creation (separate plan: content SEO)
- Link building (separate plan)
- Core Web Vitals optimization (separate plan: technical SEO)
- Breadcrumb schema (low priority, can be done in a follow-up task)
