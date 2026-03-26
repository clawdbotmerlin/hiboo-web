---
name: hiboo-brand
description: Apply Hiboo baby skincare brand guidelines, voice, and visual identity to all creative outputs. Use this skill whenever creating any content for Hiboo — including websites, landing pages, e-commerce pages, social media content, ad creatives, presentations, documents, email campaigns, packaging copy, product descriptions, or marketing materials. Also trigger when the user mentions hiboo, baby skincare, mochi skin, mochi hada, or any Hiboo product names (Baby Balm, Mochi Skin Serum, Zzz Calming Cream, Mochi Sunscreen). Use for both design/visual work AND copywriting/messaging work.
---

# Hiboo Brand Skill

This skill ensures all creative outputs for Hiboo are consistent with the brand's visual identity, voice, messaging, and product positioning. It covers design, copy, and strategy.

## Brand Overview

**hiboo** is an Indonesian baby skincare brand founded in September 2023 by Juan Adiputra Kartawidjaja. The brand went viral on TikTok within 4 months of launch, achieving #1 in Baby Skincare category with 7,000% monthly buyer growth. Hiboo won the Brand Choice Awards 2024 for Baby Balm category.

**Core Concept:** Mochi Hada (もち肌) — skin as soft as Japanese mochi. The brand blends Japanese skincare philosophy with products specifically formulated for Indonesian babies in a tropical climate.

**Three Japanese Principles:**
1. **Tei Arerugī-sei (低アレルギー性)** — Hypoallergenic
2. **Ten'nen (天然)** — Natural
3. **Yawarakai (柔らかい)** — Gentle

**Certifications:** BPOM certified, Halal MUI certified, Dermatologically tested in Europe. Formulated by Pediatricians and Dermatologists.

**Target Audience:** Indonesian mothers (primary), ages 22–38, digitally savvy, active on TikTok/Instagram/WhatsApp, shopping on Shopee/Tokopedia/TikTok Shop. They prioritize safety certifications (BPOM, Halal), natural ingredients, and peer recommendations.

## Brand Visual Identity

### Colors

| Role | Name | Hex | Usage |
|------|------|-----|-------|
| Primary | Hiboo Sky Blue | `#4AAFE0` | Logo, buttons, accents, product lids |
| Primary Dark | Deep Blue | `#2D8EC4` | Hover states, headers, emphasis |
| Navy | Hiboo Navy | `#1B5F8A` | Footer, dark backgrounds, announcement bars |
| Background | Cream | `#FFFCF8` | Page backgrounds |
| Background Alt | Ice Blue | `#F0F8FD` | Card backgrounds, product displays |
| Warm | Warm Cream | `#FFF6ED` | Alternate sections, warm accents |
| Baby Blue | Baby | `#E8F4FB` | Trust badges, icon backgrounds, subtle highlights |
| Text | Charcoal | `#1E2D3D` | Body text, headings |
| Muted | Slate | `#6B7D8D` | Secondary text, descriptions |
| Light | Silver | `#A8BCC8` | Borders, disabled states, placeholder text |
| Accent Gold | Award Gold | `#E8A838` | Ratings, awards, special highlights |
| Accent Green | Sage | `#8BC4A0` | "New" badges, natural/organic callouts |

**CRITICAL:** Never use purple, neon, dark red, or black as primary colors. The brand palette is soft, warm, and baby-safe feeling. Avoid high-contrast aggressive color combinations.

### Typography

| Role | Font | Weight | Fallback |
|------|------|--------|----------|
| Display/Headings | Playfair Display | 400, 600 | Georgia, serif |
| Body/UI | Nunito | 300–800 | system-ui, sans-serif |

**Usage Rules:**
- Headlines use Playfair Display (serif) for elegance and trust
- All body text, buttons, navigation, and UI elements use Nunito (sans-serif)
- Japanese text (もち肌, ベビーバーム, etc.) uses Nunito at lighter weights
- Never use Inter, Roboto, Arial, or generic system fonts
- Google Fonts import: `https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap`

### Logo

- The hiboo logo features a custom "hb" monogram integrated with a hippo character silhouette, followed by the wordmark "hiboo" in a custom rounded typeface
- Logo color: `#4AAFE0` (Hiboo Sky Blue) on light backgrounds
- Logo on dark backgrounds: White (`#FFFFFF`)
- The logo must never be recreated in code — always use the actual logo image file
- Minimum clear space: equal to the height of the "h" character on all sides
- Logo files are stored in `assets/` directory

### Mascot

- Hiboo's mascot is a cute, friendly **hippo** character
- Appears on all product packaging in outline/line art style using Hiboo Sky Blue
- The hippo represents gentleness, protection, and playfulness
- In digital contexts, the hippo can appear as decorative elements but should not overwhelm the content
- The hippo family (parent + baby hippo) appears on packaging to represent the parent-child bond

### Design Principles

1. **Soft & Approachable** — Rounded corners (16–24px), generous padding, soft shadows. Never sharp edges or harsh contrasts.
2. **Clean & Trustworthy** — Ample white space, clear hierarchy, visible certifications. Parents need to feel safe.
3. **Japanese-Inspired Subtlety** — Subtle use of Japanese characters as decorative watermarks (もち肌 at low opacity). Not anime or overtly Japanese — refined and minimal.
4. **Tropical Warmth** — Warm cream backgrounds, soft gradients blending blue and peach. Reflects Indonesia's warmth.
5. **Mobile-First** — 73% of Indonesian moms shop via mobile. Design for small screens first.

### UI Component Patterns

- **Buttons:** Fully rounded (border-radius: 100px), primary uses #4AAFE0 background with white text
- **Cards:** border-radius: 20–24px, 1px border rgba(0,0,0,0.04), subtle hover lift (translateY -4px to -6px)
- **Trust badges:** Rounded rectangles with Baby Blue (#E8F4FB) background, icon + text layout
- **Product cards:** Gradient background behind product image, quick-add button appears on hover
- **Section spacing:** 80–100px vertical padding between major sections
- **Announcement bar:** Navy background, centered text, promo code highlighted

## Brand Voice & Messaging

### Tone of Voice

- **Warm & Caring** — Like a trusted friend who happens to be a pediatrician
- **Confident but Not Pushy** — State benefits clearly, never aggressive selling
- **Educational** — Teach moms about baby skincare, ingredients, and tropical climate challenges
- **Bilingual** — Primary copy in Bahasa Indonesia. Japanese terms used as brand-specific vocabulary (Mochi Hada, Yawarakai). English for technical/scientific credibility

### Language Rules

- Primary language: **Bahasa Indonesia** for all customer-facing content
- Use "Moms" (not "Ibu" alone) — Hiboo's audience identifies with the modern "Moms" term
- Use "si Kecil" (the little one) when referring to the baby
- Always capitalize product names: "All Purpose Baby Balm", "Mochi Skin Serum", "Zzz Deep Sleep Baby Cream"
- Include Japanese terms with translations on first use: "Mochi Hada (もち肌) — kulit selembut mochi"
- Use "Diformulasikan oleh Dokter Spesialis Anak & Kulit" (not "Formulated by doctors")
- Trust signals in Bahasa: "Teruji Dermatologis", "Bahan Alami", "Aman untuk Newborn"

### Key Messaging Pillars

1. **"Kulit Bayi Selembut Mochi"** — The hero tagline. Always available for headlines.
2. **3 Japanese Principles** — Hypoallergenic, Natural, Gentle. Core differentiator.
3. **Tropical Climate Formulation** — Lightweight, fast-absorbing, designed for 28–34°C humidity
4. **Doctor-Formulated Trust** — Pediatrician + Dermatologist formulated. BPOM + Halal + European derma-tested.
5. **Real Results** — #1 TikTok Baby Skincare, 50K+ happy families, 4.9★ rating, Brand Choice Award 2024

### Phrases to Always Include (where relevant)

- "BPOM & Halal Certified"
- "Diformulasikan oleh Dokter Spesialis Anak & Kulit"
- "Aman untuk Newborn (0+ Bulan)"
- "Tanpa Alkohol, Paraben, & Pewangi Sintetis"
- "#1 Baby Skincare di TikTok"

### Phrases to Never Use

- "Termurah" / "Paling Murah" (cheapest) — Hiboo is affordable premium, not budget
- "Dijamin" / "Garansi Sembuh" (guaranteed cure) — avoid medical claims
- "Chemical-free" — scientifically inaccurate, use "Bahan Alami" instead
- Anything that implies the product treats or cures medical conditions

## Product Catalog

For detailed product information, formulations, and copy guidelines, read `references/products.md`.

### Quick Reference

| Product | Key Ingredients | Hero Benefit | Price Range |
|---------|----------------|--------------|-------------|
| All Purpose Baby Balm (5g, 15g) | 10% Coconut Oil, Vitamin E, Beeswax | Eczema, ruam popok, gigitan serangga | Rp 35K–79K |
| Mochi Skin Serum (15ml, 50ml, 100ml) | Japanese White Tomato, 7x Hyaluronic Acid, Ceramide | Glowing mochi skin, brightening | Rp 49K–129K |
| Zzz Deep Sleep Baby Cream (15g, 30g) | 7x Essential Oils (Lavender, Peppermint, Ginger, etc.) | Better sleep, anti-kolik | Rp 49K–89K |
| Mochi Sunscreen SPF 50+ PA++++ (30ml) | Physical sunscreen, 2x Protection | UV protection, anti-nyamuk | Rp 89K–119K |

## E-Commerce & Marketplace Guidelines

For Shopee, Tokopedia, TikTok Shop, and website-specific guidelines, read `references/ecommerce.md`.

### Quick Rules

- **Hero image:** Clean product on soft gradient (blue-to-cream), BPOM + Halal badges visible
- **Title format:** `[BPOM] [HALAL] hiboo [Product Name] [Size] — [Key Benefit]`
- **Always show:** Star rating, review count, trust certifications
- **Price display:** Show original price crossed out when on promo
- **Bundles:** Always offer bundled pricing — Indonesian moms love value packs
- **Free shipping:** "Gratis Ongkir se-Indonesia" is a key conversion driver

## Social Media Guidelines

For platform-specific content guidelines, read `references/social-media.md`.

### Quick Rules

- **Instagram (@hiboo.baby):** Educational carousels, product showcases, testimonial reposts, 40K+ followers
- **TikTok (@hiboo.baby):** Demo videos, before/after, mom testimonials, live shopping. 217K+ followers
- **Hashtags:** #hiboomochiskin #hiboo #babyskincareIndonesia #kulitbayisehat #mochihada
- **Celebrity association:** Loved by Jessica Iskandar & Hagia (use only with permission)
- **UGC:** Encourage and repost real mom reviews — authenticity over polish

## Ad Creative Guidelines

For ad copy templates and campaign structures, read `references/ad-creative.md`.

### Quick Rules

- **Hook in first 2 seconds** — Always lead with the problem (ruam, eczema, susah tidur) or the result (kulit mochi)
- **Show product within 3 seconds** — Don't bury the product
- **Trust stack:** BPOM + Halal + Derma-Tested badges always visible in static ads
- **Social proof:** Include star rating + review count in every ad
- **CTA language:** "Belanja Sekarang", "Coba Sekarang", "Dapatkan Diskon" — never "Beli" alone (too transactional)
- **Promo mechanic:** Always lead with a deal — "Beli 2 Hemat 20%", "Gratis Ongkir", flash sale countdowns

## File References

- `references/products.md` — Detailed product catalog with ingredients, claims, copy templates
- `references/ecommerce.md` — Marketplace optimization, listing SEO, pricing strategy
- `references/social-media.md` — Platform-specific content playbooks
- `references/ad-creative.md` — Ad copy templates, campaign structures, audience targeting
- `assets/` — Logo files, product images, brand assets
