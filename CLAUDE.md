# Pratyek Website — Claude Code Build Spec

> **Place this file at the repo root as `CLAUDE.md`.** Claude Code reads it automatically on every session. This is the source of truth for the public-facing Pratyek website (`pratyek.com`). The product engineering CLAUDE.md (the WhatsApp app) is a separate document that lives in a separate repo — do not confuse the two.
>
> **Document version:** v1 — initial build spec for the multi-page marketing site.

---

## 0. What this is and what to build

You are building a new, multi-page marketing website for **Pratyek**, a household concierge product that lives inside WhatsApp. The current site is a single long landing page at `pratyek.com`. This new site replaces it with a proper multi-page architecture covering every capability of the product, and addresses a critical compliance issue with Meta (see §1).

**Target audience.** Indian household CFOs aged 30–55 — the one person in every Indian family who keeps track of bills, renewals, warranties, maids, appliances, school fees. They are urban, English-comfortable, but live in mixed-language households.

**Tone.** Editorial. Warm. Plain-spoken. Confident without being loud. The site should read like a thoughtful product company's site — not a startup landing page covered in gradients, badges, and "Trusted by 10x teams" testimonials.

**Aesthetic anchor.** Silicon Valley quality (Linear, Stripe, Vercel, Notion-tier editorial polish) executed in a distinctly Indian register — Devanagari accents, Indian product names visible in the UI mockups (Adani Electricity, Tata Play, JioFiber, BMC, BBMP, Bajaj Allianz), Hinglish in the chat scenes, "Kasam se" stamp, festival language. The result should feel like a global-quality product that happens to be deeply Indian — not an Indian product apologising for being Indian.

**Critical UI rule.** **No emojis anywhere on the site, with one exception: the WhatsApp chat illustrations may use the small handful of emojis that appear in real WhatsApp chats** (👍 🙏 ❤️ 📷 — these are part of the chat illustration, not site decoration). Everywhere else — features, navigation, footer, headers, anywhere — use **inline SVG icons in the same stroke style as the rest of the site.** No 🚀 in CTAs, no 🇮🇳 in headings, no ✨ as bullet decoration. Ever.

---

## 1. Critical context: Meta rejection and Relynext Solutions

**This section is the single most important compliance requirement on the site.** Read it twice.

Meta has rejected our WhatsApp Business display name registration. The reason: **the parent company "Relynext Solutions Private Limited" is not visible anywhere on the current `pratyek.com` website.** Meta's reviewers expect a clear, unambiguous link from the consumer-facing brand (Pratyek) to the legal entity that signs the WhatsApp Business contract (Relynext Solutions Private Limited).

**What this means for every page on the new site:**

1. **Every footer must prominently display the parent company relationship.** The exact line is:

   > **Pratyek is a product of Relynext Solutions Private Limited.**

   This must appear on every page of the site, not just one. It must be readable (not buried in 8px grey text). The footer is also where the legal entity's full registered address, CIN, and contact email live (placeholders Nisarg will fill in).

2. **The About page must lead with the parent company relationship.** When a Meta reviewer clicks "About" looking for the legal entity, they should find it within the first viewport, not buried halfway down the page.

3. **The Privacy Policy and Terms of Service must name "Relynext Solutions Private Limited" as the data controller / contracting entity** — not "Pratyek". Pratyek is the product; Relynext is the legal name on the contract.

4. **Page footer markup must include the legal name in machine-readable Schema.org JSON-LD** as the `Organization` (see §8). This helps automated reviewers as well as humans.

5. **Do not use construction like "Pratyek by Relynext"** in display copy — that is too cute. Use **"Pratyek is a product of Relynext Solutions Private Limited"** or **"A Relynext Solutions product"** as the canonical phrasings.

If a Meta reviewer lands on any page of the site and cannot, within 10 seconds, identify the legal entity behind Pratyek, the rebuild has failed its primary compliance objective.

---

## 2. Tech stack (LOCKED)

The user explicitly said: **"simple Laravel based website with HTML, CSS and Javascript, no complex technologies."** Honour this. Do not introduce anything below in §2.2 unless the user explicitly approves.

### 2.1 What to use

| Layer | Choice | Notes |
|---|---|---|
| Framework | **Laravel 11** (PHP 8.3) | Latest LTS, simple Blade-rendered pages |
| Templating | **Blade** | Server-rendered. One layout, multiple page views, reusable Blade components |
| Styling | **Plain CSS** with CSS custom properties | Single `app.css` file. No preprocessors. No Tailwind compilation. |
| JavaScript | **Vanilla JS** | One small `app.js` for FAQ accordion, mobile menu toggle, smooth scroll. Nothing else. |
| Asset bundling | Laravel's default **Vite pipeline** | Only because it's the framework default; we use it as a CSS/JS minifier, not a build tool |
| Fonts | **Google Fonts** (Fraunces + Inter) | Loaded via standard `<link>` with `preconnect` |
| Icons | **Inline SVG** | Hand-coded, Lucide-style stroke icons (1.5–2px stroke, `currentColor`, 24×24 viewBox). Stored in a Blade partial / component. |
| Forms | **Laravel form requests + Blade** | Server-side validated. No client-side libraries. |
| Search | None | Static site, no search needed |
| CMS | None | Content lives in Blade templates. |
| Analytics | **Plausible** (privacy-friendly) | Lightweight, no cookie banner needed. Add the snippet in the layout. |
| Sitemap | Generated via Laravel route or a static `/public/sitemap.xml` | Either approach is fine |

### 2.2 What NOT to use (do not introduce these)

- **No React, Vue, Svelte, Angular, Inertia, Livewire.** The site is server-rendered Blade. Period.
- **No Tailwind, Bootstrap, Bulma, or any CSS framework.** Plain CSS with the design tokens defined in §3.
- **No TypeScript.** Plain JS in the one small `app.js`.
- **No client-side state management, animation libraries, jQuery, Lodash.** None of it is needed.
- **No headless CMS, Strapi, Sanity, etc.** Content lives in Blade templates.
- **No Docker / Kubernetes setup at this stage.** Standard Laravel Forge deploy from GitHub.
- **No PWA service worker, no offline mode.** Marketing site.
- **No A/B testing harness.** Not at this stage.

### 2.3 Repository layout

```
pratyek-website/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── PageController.php       — one controller, one method per page
│           └── ContactController.php    — handles contact form submissions
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php            — base layout: <html>, <head>, header, footer, slot
│   │   ├── components/
│   │   │   ├── header.blade.php         — sticky top bar with nav
│   │   │   ├── footer.blade.php         — site-wide footer with Relynext block
│   │   │   ├── seo.blade.php            — accepts title/description/og-image, renders meta tags + JSON-LD
│   │   │   ├── chat-scene.blade.php     — reusable WhatsApp scene component
│   │   │   ├── feature-card.blade.php   — reusable feature card with SVG icon + title + description
│   │   │   ├── faq-item.blade.php       — accordion item
│   │   │   ├── icon.blade.php           — outputs an SVG icon by name (see §7)
│   │   │   └── cta.blade.php            — reusable call-to-action block
│   │   ├── pages/
│   │   │   ├── home.blade.php
│   │   │   ├── product.blade.php
│   │   │   ├── features.blade.php
│   │   │   ├── trust.blade.php
│   │   │   ├── about.blade.php
│   │   │   ├── faq.blade.php
│   │   │   ├── contact.blade.php
│   │   │   └── legal/
│   │   │       ├── privacy-policy.blade.php
│   │   │       ├── terms.blade.php
│   │   │       └── dpdp.blade.php
│   │   └── partials/
│   │       └── icons/                   — one Blade partial per SVG icon (optional, can use single component instead)
│   ├── css/
│   │   └── app.css                      — single CSS file, well-organized, with CSS custom properties
│   └── js/
│       └── app.js                       — vanilla JS for FAQ, mobile menu, smooth scroll
├── public/
│   ├── og/                              — Open Graph images per page
│   ├── favicon/                         — favicon.ico, apple-touch-icon, etc.
│   ├── robots.txt
│   └── sitemap.xml                      — generated or static
├── routes/
│   └── web.php                          — one route per page
└── ...
```

---

## 3. Brand system

The current `pratyek.com` landing page already establishes the brand language. Reuse it. Do not re-invent.

### 3.1 Colors (CSS custom properties)

```css
:root {
  /* Foundation */
  --paper:      #EFE8D8;       /* main background — warm cream */
  --ink:        #121110;       /* primary text */
  --ink-soft:   #3C3A35;       /* body copy that isn't headlines */
  --ink-mute:   #7A7267;       /* captions, metadata, fine print */
  --rule:       rgba(18, 17, 16, 0.12);
  --rule-faint: rgba(18, 17, 16, 0.06);

  /* Accent */
  --red:        #B8321E;       /* the single brand accent. Use sparingly. */

  /* Status (functional, used in product UI mockups only) */
  --green:      #0F6E56;       /* paid, ok, success */
  --amber:      #C98A04;       /* due soon, warning */

  /* WhatsApp chat surface (used only in chat illustrations) */
  --wa-chat-bg: #E8E0D2;
  --wa-out:     #DCF8C6;
  --wa-in:      #ffffff;

  /* Spacing scale */
  --space-1: 4px;
  --space-2: 8px;
  --space-3: 12px;
  --space-4: 16px;
  --space-5: 24px;
  --space-6: 32px;
  --space-7: 48px;
  --space-8: 64px;
  --space-9: 96px;
  --space-10: 128px;
}
```

**Discipline:** the red is precious. Use it for:
- The single dot in the wordmark (`Pratyek<dot>`)
- Italic emphasis in serif headlines (`<em>` inside `<h1>`)
- Hover state on primary CTAs
- The "Kasam se" stamp
- Active state on navigation
- Critical status pills (overdue, expired)

Never use red for body text, decorative borders, or anything where black/grey would do.

### 3.2 Typography

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;1,9..144,300;1,9..144,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
```

| Use | Family | Weight | Notes |
|---|---|---|---|
| Display headlines (h1, hero) | Fraunces | 300 | Light. Italic for emphasis. Letter-spacing −0.028em. Line-height 1.08. |
| Section headlines (h2) | Fraunces | 300 | Letter-spacing −0.02em. Line-height 1.15. |
| Subheads (h3) | Fraunces | 400 | Letter-spacing −0.01em. |
| Editorial body (story sections, "why" copy) | Fraunces | 300 | 21px on desktop, line-height 1.5. Use this for emotional/narrative copy. |
| UI body, captions, navigation | Inter | 400 / 500 | 14–16px. |
| Buttons, kickers, labels | Inter | 500 | 12–14px. Letter-spacing 0–0.02em depending on context. |
| Devanagari accents | Fraunces (or system serif fallback) | 400 | Use the actual Devanagari character `प्रत्येक` — don't fake it with Latin glyphs. |
| Numbers in product mockups | Inter | 500 | `font-variant-numeric: tabular-nums` always. |

**Editorial typographic moves to use generously:**
- `text-wrap: balance` on headlines, `text-wrap: pretty` on body
- Italic Fraunces for emphasis inside Fraunces headlines (this is the brand's signature move — see existing landing)
- Drop caps in long-form copy where appropriate (use a `<span class="dropcap">` pattern, don't use `:first-letter` because it's brittle)
- Pull-quotes for testimonials or highlights — large italic Fraunces, no quote marks decoration, just typography
- Margin notes using `position: absolute` aside in wide layouts (≥1024px), folding into inline italics on mobile

### 3.3 Voice and copy register

Read the current landing page (`pratyek-landing_22.html`) carefully. The voice is:

- **Indian English, not American.** "It's been three months" not "It's been 3 months." "Maid" not "domestic helper" (though both exist in Indian English; pick the register that matches the audience — middle-class urban families say "maid"). Use "lakh" and "crore" for amounts where natural. Use ₹ symbol (with space: ₹ 4,237 or compact: ₹4,237 — be consistent; existing site uses no-space).
- **Specific, not generic.** "Adani Electricity bill, ₹4,237" not "your electricity bill." "Bajaj Allianz car policy" not "your car insurance." Real names, real numbers, real dates.
- **Hinglish where it lives.** Chat scenes carry Hindi/Hinglish: "Kamala ko April salary de diya, 6 hazaar." Marketing copy stays in English with occasional Hindi accents ("Kasam se", "rishta").
- **Plain-spoken, not corporate.** "We don't keep IDs" not "We are committed to protecting your sensitive identity documents."
- **Confident, not boastful.** "Pratyek remembers" not "Pratyek's revolutionary AI-powered memory."
- **No emojis in body copy.** Repeat: no emojis. Iconography is SVG.

**Date format:** `1 May 2026` (DD MMM YYYY). Not `May 1, 2026`. Not `01/05/2026`.
**Currency:** `₹4,237` or `₹45,000`. Use Indian number grouping (lakh/crore) where natural: `₹3,50,000` for three-fifty-thousand, `₹1,25,00,000` for one-and-quarter crore.
**Phone format in copy:** `+91 98XXX XXXXX` (with the Indian country code).

### 3.4 Layout and grid

- **Max content widths:** narrow `680px` for editorial copy, `820px` for wider sections, `1280px` for product mockups and feature grids.
- **Side padding:** `28px` desktop, `22px` mobile.
- **Section padding (vertical):** `90px` desktop, `60px` mobile (these are spacing between sections — use `--space-9` and `--space-7`).
- **Hairline rules between sections:** `1px solid var(--rule-faint)` — never use thicker borders for section separation.

### 3.5 Imagery and illustration policy

- **No stock photography.** Anywhere. Ever.
- **No 3D illustrations / Lottie animations.** None.
- **No emoji.** Said it three times now.
- **Yes to:** SVG icons (Lucide-style), product UI mockups (the WhatsApp chat scenes and the Memory dashboard mockup from the existing landing), Devanagari typography as visual element, CSS-rendered "PASSPORT" and "PDF" file stubs as in the existing landing.
- **One illustrated wordmark:** the Pratyek wordmark with the small red dot. That's it.
- **Open Graph images:** generated programmatically (server-side rendered Blade view → screenshot, OR hand-designed in Figma and exported). Match the cream/red brand. One per page.

### 3.6 Micro-interactions

Restrained. Specific. Never decorative.

- **Buttons:** background transition `var(--ink) → var(--red)` on hover, 0.15s ease.
- **Links:** underline-on-hover only. Don't decorate by default.
- **FAQ accordion:** smooth max-height transition, the `+` rotates 45° to become `×` (already in existing landing).
- **Scroll reveal:** subtle. If used at all, fade + 8px translate-y, 0.4s ease, triggered with IntersectionObserver. Don't put this on every element.
- **No parallax. No carousels. No autoplaying videos.**

---

## 4. Information architecture (sitemap)

Nine pages. No more. Each page must justify its existence — if a page's content fits naturally inside another page, merge them.

```
/                       Home
/product                How it works (the two surfaces, the memory model)
/features               Features (organized into 12 thematic categories)
/trust                  Trust & Privacy (DPDP, no ads, no data sold, DigiLocker)
/about                  About — Relynext Solutions, Pratyek's mission, team
/faq                    FAQ
/contact                Contact
/legal/privacy-policy   Privacy Policy
/legal/terms            Terms of Service
/legal/dpdp             DPDP Act compliance (referenced from Trust)
```

Optionally:
```
/beta                   Beta application info — links to existing Tally form
                        (could also be merged into Home as the primary CTA)
```

**Top navigation (header):** Product · Features · Trust · About · FAQ · [Apply for beta button]
**Footer navigation:** all 9 pages plus social/contact.

The "Apply for beta" button is the **only primary CTA on the site** and must point to `https://tally.so/r/2ExJyD` (existing Tally form). Every page has this CTA in the header. The home page additionally has it in the hero.

---

## 5. Page-by-page specifications

### 5.1 Home (`/`)

**Purpose.** Convert a curious visitor into a beta applicant. Communicate, in under 30 seconds, what Pratyek is, who it's for, and why it's different.

**Sections (in order):**

1. **Header.** Sticky top bar. Pratyek wordmark left, nav center (Product · Features · Trust · About · FAQ), "Apply for beta" button right. On mobile: wordmark + hamburger menu.

2. **Hero.** Headline + sub + primary CTA. Reuse the existing landing's hero structure:
   - Headline: *"Your family's WhatsApp forgets everything. <em>We built something that remembers.</em>"*
   - Sub-line under CTA: *"In private beta, Apr–Jun 2026 · no app to install"*
   - CTA: "Apply for private beta"
   - Constrained to `--wrap` (680px). Generous top padding (90px). Headline at clamp(34px, 5.2vw, 52px), Fraunces 300.

3. **Why (the founder's story).** The Diwali-bonus-paid-twice story from the existing landing. Editorial Fraunces 300, 21px, narrow column. Three paragraphs. Sign-off: "Rohan, founder · Mumbai" — but **change this** to match the actual founder name (Nisarg). Keep it warm.

4. **Two surfaces.** Reuse the `surfaces` section from the existing landing — left side WhatsApp chat illustration, right side Memory dashboard mockup, with the dotted bridge labelled "feeds" between them. This is the product's defining metaphor: WhatsApp is for input, dashboard is for retrieval.

5. **Scenes (4–6 chat illustrations).** Reuse the existing scene components — Papa forwards electricity bill, Mummy's voice note about the maid's salary, rent coordination, attendance log, renewal nudge, passport→DigiLocker redirect, Sunday digest, Hinglish question. Don't include all 8 from the existing landing on the home page; pick the 4 strongest and link to `/product` for the full set.

6. **Promise.** The "Kasam se · No ads. No data sold. Ever." block from the existing landing, with its red border, off-axis stamp, and the line about WhatsApping our mothers. Keep this exactly as it is — it's the brand's most distinctive visual moment.

7. **3 short FAQs.** Pulled from `/faq`: Is this an app? Can you join my existing family group? What languages? Each links to the full FAQ.

8. **Footer.** As specified in §6.2.

### 5.2 Product / How it works (`/product`)

**Purpose.** Show the visitor *how* Pratyek works — the two surfaces, the memory model, what gets captured, what gets remembered, what's done about it.

**Sections:**

1. **Header.**

2. **Page headline.** Fraunces 300, large. *"WhatsApp writes. The dashboard reads."* Sub: A short paragraph explaining the two-surface model.

3. **The two surfaces, expanded.** Same components as on Home but with deeper captions. Two beats:
   - **WhatsApp = capture.** Forward documents, send voice notes in any language, ask questions in Hinglish. This is where the family already lives; we don't ask them to leave.
   - **`pratyek.com/memory` = retrieval and coordination.** Everything sorted by category, filterable by date, by family member, by status. Search across everything.

4. **The memory model.** A short editorial section explaining what Pratyek captures and what it doesn't:
   - **What it captures:** bills, warranty cards, insurance policies, vehicle docs, appliance service cycles, staff attendance and salary, subscription deliveries (milk, newspaper, OTT), occasions (birthdays, anniversaries, festival prep), shopping list, todos, calendar events, family contacts.
   - **What it never captures:** Aadhaar numbers, PAN images, passport scans, mediclaim cards. Anything sensitive gets redirected to **DigiLocker**, the government's own vault. We hold metadata only — when the passport expires, who issued it — never the image.

5. **8 chat scenes (full set).** All eight scenes from the existing landing: bill, voice note, rent, attendance, renewal, passport, Sunday digest, Hinglish query. Each in its own card, with the captioned "scene-cap" prose above.

6. **The Memory dashboard.** The full Memory dashboard mockup from the existing landing (Bills view with KPIs, tabs, table). Include a caption explaining: "Every household sees their own dashboard. Sidebar lets you filter by category. The chrome is a real product, not a marketing screenshot."

7. **CTA.** "Ready to apply?" with the Tally link.

8. **Footer.**

### 5.3 Features (`/features`)

**Purpose.** Comprehensive coverage of every capability Pratyek will offer. This is the long page that proves the product is serious.

**Structure.** Twelve thematic categories, each with a short intro and a list of specific things tracked. Use the **entity taxonomy** as the source of truth. Don't expose tier internal terminology (Tier A, Tier B, Tier C) on the public site — instead, mark Tier B/C features with a small, restrained "Coming soon" pill where useful, but keep the focus on the full long-term scope.

**The 12 categories** (in this order):

1. **Bills & utilities.** Electricity (Adani, BSES, BESCOM, BEST, MSEDCL, TANGEDCO, KSEB, etc. — actually name a handful of DISCOMs to demonstrate specificity), water, piped gas, LPG cylinder, broadband, mobile postpaid/prepaid, DTH, society maintenance.

2. **Renewals & expiry tracking.** Motor insurance, health insurance / mediclaim, life insurance, home insurance, vehicle PUC, driving licence, vehicle registration (15-year), passport, professional licences.

3. **Documents & IDs.** Pratyek refuses to store IDs. It points to **DigiLocker**, India's official document vault, and remembers expiry dates only. No image. No number. Just the metadata Pratyek needs to nudge you when something is about to lapse.

4. **Vehicles.** Identity (registration, model, year), insurance, PUC, FASTag balance, service cycle, fines & challans (read-only reminder), 15-year re-registration.

5. **Domestic staff.** Maid, cook, driver, nanny, gardener, part-time help. Pratyek tracks attendance (logged casually by voice or text), monthly salary, leaves, festival bonuses (Diwali, Eid, Onam, Bihu), and a reference to their ID document if you've stored it in DigiLocker.

6. **Appliances & warranties.** AC, washing machine, refrigerator, water purifier, geyser, microwave, TV, RO filter, inverter. Pratyek remembers what you bought, when, where from, the warranty period, and the next scheduled service.

7. **Subscriptions & deliveries.** Daily milk, newspaper, water cans, tiffin services, OTT (Netflix, Hotstar, Prime, Spotify), Tata Play / Airtel Digital TV bundles. Pratyek can pause and resume on command ("pause milk 10–17 May").

8. **Family & occasions.** Birthdays, anniversaries, death anniversaries (shraadh — supports Hindu calendar), festival prep windows (Diwali, Onam, Eid, Pongal, Christmas — N-week runway reminders), gift history per person.

9. **Health.** Medication refills (BP, diabetes, thyroid), periodic tests (lipid profile, HbA1c), elder care reminders, children's milestones (height/weight, vaccinations), pet care (vaccinations, deworming, vet visits, grooming).

10. **Education.** School fees (term-wise), tuition fees, exam dates, school transport fees, coaching class fees (IIT/NEET prep), uniform/clothing sizing updates (quarterly for under-10s).

11. **Finance.** EMIs (home, car, personal), SIPs, tax deadlines (advance tax, ITR), credit card due dates, PPF / NPS / Sukanya Samriddhi contribution windows, property tax (BBMP, BMC, MCD, GHMC, etc., city-aware). **Note:** Pratyek never touches payment credentials, never auto-pays anything. It only remembers and nudges.

12. **Coordination (shared family state).** Shared shopping list, todos with assignment, family contacts (doctor, plumber, school, pharmacy), shared calendar, household announcements, holiday list management (office holidays per parent + school per kid + public holidays merged), meal planning (Tier C).

**Layout for each category.** A two-column grid on wide screens: left column has the category name (Fraunces, larger), a 1-paragraph intro, and an SVG icon. Right column has a clean unordered list of specific things tracked, with brand and provider names visible. Hairline rule between categories.

**Bottom of page.** "If something you'd want isn't here yet, tell us — we capture every request and reply with a status. See the **My Requests** dashboard inside the product."

### 5.4 Trust & Privacy (`/trust`)

**Purpose.** Earn the visitor's trust at the depth required for a household to invite a third party into their family WhatsApp behaviour.

**Sections:**

1. **Headline.** *"Built for one family at a time. Quiet about the rest."*

2. **The promise (reuse the Kasam se block).** No ads. No data sold. Ever. With the same off-axis "Kasam se" stamp.

3. **What we never store.**
   - Aadhaar numbers, PAN card images, passport scans, mediclaim card images, driving licence images.
   - Bank account numbers, credit card numbers, UPI PINs.
   - Anything in your personal WhatsApp groups — we do not and cannot read those.

4. **DigiLocker, by default.** When you forward a document that contains sensitive ID data, Pratyek refuses to store it and points you to **DigiLocker**, the government's own vault. We remember the expiry date, never the image.

5. **DPDP Act, built in.** India's Digital Personal Data Protection Act, 2023 governs how we handle your data. Affirmative consent. Exportable. Deletable within 30 days. No dark patterns. Link to `/legal/dpdp` for the detailed compliance page.

6. **Servers in India.** Your data lives on servers in **DigitalOcean Bangalore (BLR1)**. Backups in India. Meta and our LLM partners are the only outbound connections, and only the minimum information they need to do their job.

7. **The two LLMs we use.** Be transparent: we use **Claude Opus** (from Anthropic) for designing how data is structured, and **Gemma** (from Google) for the day-to-day work of filing your bills. Both are accessed via OpenRouter. Neither is trained on your data.

8. **Data retention, plain language.** Bills and warranties: kept as long as you keep the entity. Voice notes: deleted after transcription, 7 days max. Raw forwarded media: deleted after extraction, 30 days max. Tell Pratyek "delete" in WhatsApp and everything's gone in 30 days, by law and by design.

9. **Who's behind Pratyek.** Pratyek is a product of **Relynext Solutions Private Limited**, registered in India. CIN, address, GST — link to `/about` for the full legal block.

10. **CTA + Footer.**

### 5.5 About (`/about`)

**Purpose.** Establish the legal entity (Relynext Solutions Private Limited), the people behind it, and what they're trying to build. **This page is critical for Meta verification — it must lead with the company relationship.**

**Sections:**

1. **Headline + lede.** *"Pratyek is a product of Relynext Solutions Private Limited."* Below, in editorial Fraunces, the mission paragraph: a short, plain-spoken statement of why this exists.

2. **The company.** A single-paragraph description of Relynext Solutions: what it is (an Indian product company), where it's registered, what it builds. Pratyek is its first product.

3. **The team.** One or two founder bios — name, photo (or initials in a circle if no photo), short paragraph each. Keep it human. (Nisarg will provide actual content; use placeholder lorem with `[Nisarg's bio]` markers for now.)

4. **Mission.** Why this product, in 4–6 sentences. The Indian household has an unrecognized labour: someone — usually one person, usually undervalued — keeps mental track of fifty things. Pratyek is the second mind for that person. We're building it patiently, family by family, in the language they already speak.

5. **Legal entity block (this is the Meta-facing block).** A hairline-bordered card containing:
   - Legal name: **Relynext Solutions Private Limited**
   - Registered address: [placeholder]
   - CIN: [placeholder]
   - GST: [placeholder]
   - Email: hello@pratyek.com (or whatever the chosen contact is)
   - Phone: [optional placeholder]
   This block must be visible in the first scroll on desktop, or at most one scroll-flick on mobile.

6. **Footer.**

### 5.6 FAQ (`/faq`)

**Purpose.** Answer everything a serious prospective user would ask before applying.

**Structure.** Accordion (reuse the existing landing's accordion logic — `+` rotates to `×`, click to expand). Group questions into 4 sections:

**About the product**
- Is Pratyek an app?
- Can Pratyek join my existing family WhatsApp group?
- What languages does Pratyek understand?
- Does it work outside India?
- What does it cost?

**About the data**
- Where is my data stored?
- Do you store my Aadhaar / PAN / passport?
- What happens to a voice note after I send it?
- Can I export everything?
- Can I delete everything?
- Do you sell data to advertisers? (No. Reiterate the Kasam se promise.)
- Are you DPDP-compliant?

**About the family use**
- Who in my family needs to use it?
- Does every family member need to install something?
- What if my parents only speak Hindi / Tamil / Bengali?
- Can my maid / driver use it?

**About the company**
- Who builds Pratyek?  (Relynext Solutions Private Limited.)
- Who do I contact if something goes wrong?
- How do I report a bug or request a feature?
- Are you hiring?

Aim for ~25 questions total. Be specific in answers — no fluff.

### 5.7 Contact (`/contact`)

**Purpose.** Provide a real way to reach the team without spam-baiting the email address.

**Layout.**

1. **Header.**

2. **Headline:** *"Tell us anything."*

3. **Two columns on desktop, stacked on mobile:**
   - **Left:** plain email and a short paragraph: "Email is the fastest. We read everything." Email displayed as `hello@pratyek.com` (link with `mailto:`). Below: a separate line for press, partnerships, support — same email but with appropriate prefixes if you want, or just `hello@`.
   - **Right:** a simple contact form (name, email, message, submit). Server-side validated via Laravel form request. On submit, route to a `ContactController@store` method that emails the message to a configured address (or stores it in a DB table — Nisarg's choice, default to mailto for v1).

4. **Below:** the legal entity block (same as on /about) — Relynext Solutions Private Limited, registered address, CIN, GST.

5. **Footer.**

### 5.8 Legal pages (`/legal/privacy-policy`, `/legal/terms`, `/legal/dpdp`)

**Purpose.** Boring, rigorous, plain-language. Lawyers will refine the wording later — for v1, write clear plain-English drafts that Nisarg can hand to a lawyer.

**Common structure for all three:**
- Page title
- Last updated: 1 April 2026 (or whatever the actual launch date is)
- Body: one section per topic, h2 headings, body paragraphs with no bullet ornament
- Footer

**Privacy Policy must include:**
- Who we are (Relynext Solutions Private Limited — full legal name and address)
- What we collect and why (categorized: messages forwarded, voice notes, derived metadata, device info, cookies)
- What we explicitly do NOT collect (Aadhaar, PAN, passport images, bank credentials, group chat content)
- Where data is stored (DigitalOcean Bangalore BLR1, India)
- Who we share with (Meta for WhatsApp delivery, OpenRouter for LLM, Sarvam for STT — all under data processing agreements)
- Retention periods (per data class)
- User rights under DPDP (consent withdrawal, export, deletion, correction, grievance)
- Contact for grievance officer (placeholder)

**Terms of Service must include:**
- Service description (Pratyek, run by Relynext Solutions Private Limited)
- Eligibility (must be 18+, must be the WhatsApp account holder)
- Account and household setup
- Acceptable use (no illegal use, no automated abuse, no impersonation)
- Service availability (best effort, no SLA in beta)
- Pricing and billing (free during beta; paid plans TBD)
- Termination (either side, any time, data export within 30 days)
- Liability limitations (standard)
- Governing law: India. Jurisdiction: courts of Mumbai.
- Contact

**DPDP page must include:**
- Plain explanation of DPDP Act, 2023
- How Pratyek complies, point by point: consent, purpose limitation, data minimization, retention, user rights
- The grievance officer's contact
- The Data Protection Board of India's contact (statutorily required)

These three pages are dense. Use Fraunces 400 for h2s, Inter or Fraunces 300 for body. Constrain to 680px wide. Generous line-height (1.65). No fancy layout.

---

## 6. Component library

### 6.1 Header (`<x-header />`)

Sticky top bar, sits over `var(--paper)`. Three-column flex on desktop:
- **Left:** Pratyek wordmark linking to `/` (Fraunces 400, 19px, with the small red dot)
- **Center:** nav links — Product · Features · Trust · About · FAQ. Inter 400, 14px. Hover: underline.
- **Right:** "Apply for beta" button (the primary CTA — black bg, paper text, hover red). Links to `https://tally.so/r/2ExJyD`.

On mobile (<768px): wordmark left, hamburger right. Tapping hamburger opens a full-screen overlay with the same nav links stacked, plus the CTA button at the bottom. Vanilla JS toggles a `[data-menu="open"]` attribute on `<body>` and the menu uses a CSS transition.

Active page indicator: the current page's nav link gets `color: var(--red)` and a 1.5px underline.

### 6.2 Footer (`<x-footer />`) — META-CRITICAL

This footer lives on every page. It's the single most important compliance element in the build (see §1).

**Layout (desktop, single row of 4 columns; mobile, stacked):**

**Column 1 — Brand and parent company.**
```
[Pratyek wordmark]
प्रत्येक

A product of Relynext Solutions Private Limited.

Mumbai, India.
```

**Column 2 — Product.**
- Home
- Product
- Features
- Trust & Privacy
- FAQ

**Column 3 — Company.**
- About
- Contact
- Apply for beta

**Column 4 — Legal.**
- Privacy Policy
- Terms of Service
- DPDP Compliance

**Bottom strip (full-width, separated by hairline rule):**

Left side, single line:
```
© 2026 Relynext Solutions Private Limited. All rights reserved.
CIN: [placeholder]    ·    GST: [placeholder]    ·    hello@pratyek.com
```

Right side: the small Devanagari mark `प्रत्येक` in red, decorative.

**Specifications:**
- Background: `var(--paper)`. Top border: `1px solid var(--rule-faint)`.
- Padding: 60px top, 32px bottom on desktop; 48px / 24px on mobile.
- Wordmark in column 1: same as header, 19px Fraunces.
- "A product of Relynext Solutions Private Limited" line: Inter 500, 14px, `color: var(--ink-soft)`. NOT muted to oblivion — it must be readable to a Meta reviewer scanning the page.
- All link text: Inter 400, 13.5px, `color: var(--ink-mute)`. Hover: `color: var(--ink)`.
- Bottom strip: 12.5px Inter 400, `color: var(--ink-mute)`.
- Devanagari mark: 14px, `color: var(--red)`, opacity 0.8.

### 6.3 Other components

- **`<x-icon name="..." class="..." />`.** Renders an inline SVG by name. See §7 for the icon catalogue.
- **`<x-cta />`.** Standard CTA block with optional headline/sub/button. Used at the bottom of `/product`, `/features`, `/trust`, `/about`.
- **`<x-chat-scene />`.** Reusable WhatsApp scene, accepts a slot for the conversation rows. Used on Home and Product.
- **`<x-feature-card />`.** Used inside the features grid. Props: icon name, title, description, optional list of items, optional "Coming soon" tag.
- **`<x-faq-item />`.** Accordion. Props: question (slot), answer (slot). Vanilla JS toggles `.open` class on click.
- **`<x-seo />`.** Meta tag block. Props: title, description, ogImage, canonicalUrl. Renders Open Graph, Twitter Card, JSON-LD. See §8.

---

## 7. Asset library — SVG icons

Hand-coded inline SVGs, all sharing a common visual language: 24×24 viewBox, 1.5–2px stroke (use 1.75 as default), `currentColor`, round line caps, round joins. Lucide-inspired but lighter weight and slightly more editorial.

Required icons (one Blade case in `<x-icon name="..." />` per icon):

| Name | Use |
|---|---|
| `bill` | Bills & utilities category |
| `renewal` | Renewals & expiry |
| `document` | Documents & IDs |
| `vehicle` | Vehicles |
| `staff` | Domestic staff |
| `appliance` | Appliances & warranties |
| `subscription` | Subscriptions |
| `occasion` | Family & occasions |
| `health` | Health |
| `education` | Education |
| `finance` | Finance |
| `coordination` | Coordination |
| `arrow-right` | CTAs and navigation |
| `arrow-down` | Scroll indicators |
| `chevron` | Disclosure |
| `check` | Confirmations |
| `plus` | FAQ closed state |
| `x` | FAQ open state, mobile menu close |
| `menu` | Mobile menu trigger |
| `search` | (only inside the dashboard mockup) |
| `external` | External link indicator (used on the Tally button) |
| `shield` | Trust / privacy section |
| `lock` | Security |
| `heart` | Care / family (used very sparingly) |
| `mail` | Contact email |
| `phone` | Contact phone |
| `clock` | Time / scheduling |
| `calendar` | Calendar feature |
| `whatsapp` | WhatsApp brand mark — only place WhatsApp's official green is allowed (#25D366). Use it sparingly. |

For each icon, ship a clean, hand-drawn SVG. Do not download from a library and embed minified output — clarity in source matters here so a future contributor can tweak.

---

## 8. SEO and meta tag requirements

This site lives or dies by how it ranks for "WhatsApp household manager India", "family bill reminders WhatsApp", "Indian family concierge", "DPDP compliant family assistant", and brand searches for "Pratyek". Get this right.

### 8.1 Per-page meta tags

Every page renders `<x-seo>` with props. The component outputs:

```html
<title>{{ $title }} — Pratyek</title>
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="…page-specific keywords…">
<meta name="robots" content="index, follow, max-image-preview:large">
<meta name="theme-color" content="#EFE8D8">
<link rel="canonical" href="{{ $canonical }}">

<!-- Open Graph -->
<meta property="og:title" content="{{ $title }} — Pratyek">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Pratyek">
<meta property="og:locale" content="en_IN">
<meta property="og:locale:alternate" content="hi_IN">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }} — Pratyek">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $ogImage }}">
<meta name="twitter:site" content="@pratyek_app">  {{-- placeholder, replace when handle exists --}}

<!-- Favicon set -->
<link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="manifest" href="/favicon/site.webmanifest">

<!-- hreflang (even if we only ship en for now, declare both for future) -->
<link rel="alternate" hreflang="en-in" href="{{ $canonicalEn }}">
<link rel="alternate" hreflang="hi-in" href="{{ $canonicalHi }}">
<link rel="alternate" hreflang="x-default" href="{{ $canonicalEn }}">
```

### 8.2 Per-page title and description (use exactly these as starting drafts)

| Page | `<title>` | `<meta description>` |
|---|---|---|
| Home | Pratyek — Your family's WhatsApp, with memory | Pratyek is a WhatsApp-native household concierge for Indian families. Forward bills, send voice notes — Pratyek remembers. A product of Relynext Solutions Pvt Ltd. |
| Product | How Pratyek works — WhatsApp writes, the dashboard reads | Pratyek captures from WhatsApp and surfaces back through pratyek.com/memory. Bills, warranties, renewals, staff, appliances — all sorted, all searchable. |
| Features | Features — Everything Pratyek remembers for your household | Bills, renewals, documents, vehicles, staff, appliances, subscriptions, occasions, health, education, finance, coordination — all in one second mind. |
| Trust | Trust & Privacy — DPDP-compliant by default, no ads, no data sold | Servers in India. No Aadhaar / PAN / passport storage. DigiLocker for sensitive IDs. Full DPDP compliance. Built by Relynext Solutions Private Limited. |
| About | About — Pratyek is a product of Relynext Solutions Private Limited | The company behind Pratyek. Mission, team, registered address, CIN. Building a second mind for the Indian household CFO. |
| FAQ | FAQ — Pratyek answers | What it is, where data lives, what languages it speaks, what it costs. The questions every family asks before they invite Pratyek in. |
| Contact | Contact Pratyek and Relynext Solutions | Email us. We read everything. Press, partnerships, support, feedback — hello@pratyek.com. Registered office: Mumbai, India. |
| Privacy Policy | Privacy Policy — Pratyek and Relynext Solutions | Plain-language privacy policy. What we collect, what we don't, where we store it, how to delete it. DPDP-compliant. |
| Terms | Terms of Service — Pratyek and Relynext Solutions | Terms governing your use of Pratyek, the WhatsApp-native household concierge by Relynext Solutions Private Limited. |
| DPDP | DPDP Act compliance — Pratyek | How Pratyek complies with India's Digital Personal Data Protection Act, 2023. Consent, retention, user rights, grievance officer. |

### 8.3 Schema.org JSON-LD

Inject one `<script type="application/ld+json">` block in the layout (every page) for the Organization:

```json
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Relynext Solutions Private Limited",
  "alternateName": "Pratyek",
  "url": "https://pratyek.com",
  "logo": "https://pratyek.com/og/logo.png",
  "description": "Relynext Solutions Private Limited is the maker of Pratyek, a WhatsApp-native household concierge for Indian families.",
  "foundingLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Mumbai",
      "addressRegion": "Maharashtra",
      "addressCountry": "IN"
    }
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "[placeholder]",
    "addressLocality": "Mumbai",
    "addressRegion": "Maharashtra",
    "postalCode": "[placeholder]",
    "addressCountry": "IN"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "email": "hello@pratyek.com",
    "contactType": "customer support",
    "areaServed": "IN",
    "availableLanguage": ["en", "hi", "mr", "ta", "te", "kn", "bn", "gu", "pa"]
  },
  "sameAs": [
    "[LinkedIn URL placeholder]",
    "[Twitter URL placeholder]"
  ]
}
```

On the Home page, additionally inject a `WebSite` block with `SearchAction` (even though we don't have search) so Google can build a sitelinks searchbox if it wants to:

```json
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Pratyek",
  "url": "https://pratyek.com",
  "publisher": {
    "@type": "Organization",
    "name": "Relynext Solutions Private Limited"
  }
}
```

On the Features page, inject a `SoftwareApplication` block describing Pratyek itself (operating system: WhatsApp + web; price: free during beta; DPDP-compliant).

On the FAQ page, inject a `FAQPage` with all questions and answers — this is a high-value SEO move that gets you rich results in search.

### 8.4 Sitemap and robots

`/public/robots.txt`:
```
User-agent: *
Allow: /
Disallow: /admin
Sitemap: https://pratyek.com/sitemap.xml
```

`/public/sitemap.xml` (static or generated): list all 9–10 public URLs with `<lastmod>`, `<changefreq>`, `<priority>`.

### 8.5 Performance

- Lighthouse Performance ≥ 95 on desktop, ≥ 85 on mobile.
- Lighthouse SEO = 100.
- Lighthouse Accessibility ≥ 95.
- Lighthouse Best Practices ≥ 95.
- LCP ≤ 1.5s on 4G, FID ≤ 100ms, CLS ≤ 0.05.
- Total page weight ≤ 200 KB on Home (including fonts), ≤ 350 KB on Features (longest page).
- No render-blocking JS. CSS is inlined for critical path or loaded via standard `<link>` (the site is small enough this doesn't matter much).
- Images: all SVG. If raster images are introduced (founder photos), serve as WebP with PNG fallback, max 800×800 at 80% quality.
- Fonts: `font-display: swap` (already the default in Google Fonts URL); preconnect to fonts.gstatic.com; only load the weights actually used.

### 8.6 Accessibility

- Semantic HTML throughout. `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`, `<h1>` once per page.
- All interactive elements keyboard-accessible. Focus styles visible (use a 2px solid `var(--ink)` outline with 2px offset).
- Color contrast: text on cream must hit AA at minimum (`var(--ink)` on `var(--paper)` is fine; `var(--ink-mute)` on `var(--paper)` is borderline — keep that for fine print only, never for body).
- All SVG icons that aren't decorative get `aria-label` or `<title>`. Decorative icons get `aria-hidden="true"`.
- All form inputs have associated `<label>`s.
- Skip-to-content link at the very top of `<body>` for keyboard users.
- The mobile menu must trap focus when open and close on `Escape`.

---

## 9. Footer requirements (CRITICAL — Meta compliance)

Repeating this section because it's the most important compliance element on the site.

The footer must, on every single page:

1. **State the parent company relationship clearly:** "Pratyek is a product of Relynext Solutions Private Limited." This text must be in the visible flow (not a tooltip, not behind a click), in at least 14px, in a color with sufficient contrast against the cream background (`var(--ink-soft)` or darker).

2. **Display the legal company name in the copyright line:** "© 2026 Relynext Solutions Private Limited. All rights reserved."

3. **Display CIN, GST, and contact email** in the bottom strip. Placeholders are acceptable in v1; Nisarg fills these in before launch.

4. **Include the company's Schema.org JSON-LD** as described in §8.3.

5. **Use "Pratyek is a product of Relynext Solutions Private Limited"** rather than cute alternatives like "by Relynext" or just "Relynext". The full company suffix matters for entity matching.

If a Meta reviewer disables JavaScript and inspects the rendered HTML, they should still find the parent-company text in clean DOM. Do not hydrate this text from JS. It is server-rendered, period.

---

## 10. Performance, accessibility, and quality bars

Already specified inline in §8.5 and §8.6. Restating the bar:

- Lighthouse: SEO 100, Accessibility ≥ 95, Performance ≥ 95 desktop / ≥ 85 mobile, Best Practices ≥ 95.
- Cross-browser tested in current Chrome, Safari, Firefox, Edge. iOS Safari and Chrome Android. (No IE.)
- Mobile-first: every page must be inspectable and beautiful at 375×667 (iPhone SE) before being inspected at desktop widths.
- No layout shift after font load. Use `font-display: swap` and reasonable fallback metrics.
- All links are real. No `href="#"` placeholders left in production. If a link is intentionally non-functional (e.g., social media handle not yet created), comment it out, don't leave a broken anchor.

---

## 11. Build phases

Work through these in order. Do not start a phase before the previous one is committable.

### Phase 0 — Foundation (1 day)
- Fresh Laravel 11 project, named `pratyek-website`. PHP 8.3.
- Set up the directory structure per §2.3.
- Install Plausible analytics snippet in the base layout (placeholder domain).
- Wire up routes for all 9 pages, each pointing to a placeholder Blade view that renders only `<x-header />`, an `<h1>`, and `<x-footer />`.
- Get Vite configured to build `app.css` and `app.js`. Confirm dev server runs.
- Confirm all 9 pages return 200 with the placeholder content.
- Commit: `chore: scaffold pratyek-website laravel project`.

### Phase 1 — Design system (1 day)
- Build `app.css`: CSS custom properties (§3.1), typography rules (§3.2), reusable utility classes (`.wrap`, `.wrap-wide`, `.wrap-scenes`, `.btn`, `.divider`, etc. — match the existing landing's class names where they're useful).
- Hand-code all SVG icons from §7 into a single Blade component `<x-icon name="..." />` that switches on the name prop.
- Build `<x-header />` and `<x-footer />` components per §6.1 and §6.2. Confirm the footer renders the Relynext Solutions block correctly on every page.
- Build `<x-seo />` component per §8.1. Test that `view-source:` on a page shows all required meta tags.
- Commit: `feat: design system, header, footer, seo component`.

### Phase 2 — Home page (2 days)
- Port the existing landing's hero, why, surfaces, scenes, promise sections into `pages/home.blade.php`. Reuse the existing CSS where it saves time; refactor only what's needed.
- Trim the scenes to 4 strongest (link to `/product` for the rest).
- Trim the FAQ to 3 questions (link to `/faq`).
- Update copy where needed: founder name, CTAs, anything stale.
- Polish: fonts, spacing, mobile responsiveness. Run a Lighthouse audit; fix any easy wins.
- Commit: `feat: home page`.

### Phase 3 — Product, Features, Trust (3 days)
- Build `pages/product.blade.php` per §5.2.
- Build `pages/features.blade.php` per §5.3, with all 12 thematic categories.
- Build `pages/trust.blade.php` per §5.4.
- Each page reuses components and shares the same visual rhythm (hero → editorial sections → CTA → footer).
- Commit each separately.

### Phase 4 — About, FAQ, Contact (2 days)
- Build `pages/about.blade.php` per §5.5. Lead with Relynext Solutions. Include the legal entity block.
- Build `pages/faq.blade.php` per §5.6. ~25 questions in 4 groups. JS accordion.
- Build `pages/contact.blade.php` per §5.7. Wire up the form to a `ContactController@store` that emails the message via Laravel Mail (use a configurable `MAIL_TO` env var).
- Commit each separately.

### Phase 5 — Legal pages (1 day)
- Build all three legal pages per §5.8. Plain language, dense text, narrow column. Last-updated date.
- Commit: `feat: legal pages`.

### Phase 6 — SEO finalization (1 day)
- Generate Open Graph images for each page (1200×630, brand-consistent — cream background, page title in Fraunces, "PRATYEK" wordmark and the "A Relynext Solutions product" line). Place in `/public/og/`.
- Set up favicon set: SVG, PNG 16×16, PNG 32×32, apple-touch-icon 180×180, web manifest. Place in `/public/favicon/`.
- Generate `sitemap.xml` and place in `/public/`. Verify it's accessible at `/sitemap.xml`.
- Write `robots.txt` per §8.4.
- Add the `WebSite` JSON-LD to home, the `SoftwareApplication` to features, the `FAQPage` to faq.
- Test in Google's Rich Results Test, Twitter Card Validator, Facebook Sharing Debugger, LinkedIn Post Inspector. Fix anything flagged.
- Commit: `feat: SEO assets and structured data`.

### Phase 7 — QA and ship (1–2 days)
- Lighthouse audit on every page. Hit the targets in §8.5.
- WAVE accessibility scan on every page. Fix all flagged issues.
- Manual cross-browser testing.
- Manual mobile testing on a real device.
- Spell check, link check, broken-image check.
- Verify the Relynext Solutions block on every footer.
- Verify the About page legal entity block is in the first viewport.
- Verify all SEO tags by viewing source on each page.
- Verify Schema.org JSON-LD via Google's Rich Results Test.
- Push to staging on Forge (Mumbai droplet, same one currently running pratyek.com).
- After stakeholder approval, push to production.

**Total: ~10 working days.**

---

## 12. What NOT to do (anti-patterns to avoid)

These have come up in similar builds; do not repeat them.

1. **Do not use emojis as decoration.** Stated three times. Stating again. SVG icons only. The only emojis on the site are inside the WhatsApp chat illustrations, where 👍 🙏 ❤️ 📷 are part of the chat surface and look natural — and even there, only the few that already appear on the existing landing.

2. **Do not let the hero become a feature carousel.** The hero is one strong line + one CTA. That's it.

3. **Do not paginate the FAQ or hide the answers behind a "load more".** All 25 answers are accordion-collapsed but available on first paint.

4. **Do not add a "Trusted by" testimonial strip** in the beta period. We have no testimonials yet, and a fake or vague one is worse than none. After public launch, add a real one.

5. **Do not invent statistics.** "Used by 10,000 families" is a lie until it's true. Don't write it.

6. **Do not introduce a JS framework "just for the contact form".** Server-rendered Laravel form. Done.

7. **Do not use generic stock photos of "Indian families looking happy at a phone".** They're insulting. The existing landing has zero photos and is stronger for it.

8. **Do not bury Relynext Solutions in a deep `/about` paragraph.** First viewport on `/about`. Every footer. Done.

9. **Do not use abbreviations in SEO copy.** "Digital Personal Data Protection" not just "DPDP" on first reference. Spell out the long form once, then abbreviate.

10. **Do not deploy without testing the WhatsApp Business name flow with Meta.** Once Relynext Solutions is visible on every page, re-submit the WhatsApp display name registration. If Meta still rejects, capture the exact rejection reason and surface it as a blocker before further iteration.

11. **Do not skip the legal pages "for now".** Privacy Policy, Terms, and DPDP must ship on day one. Meta reviewers click through to them. Lawyers can refine them in a v2 — but they must exist.

12. **Do not use Lorem Ipsum in shipped pages.** If content is missing (a founder bio, an address), use a clearly bracketed placeholder (`[Nisarg's bio — TODO]`) and add it to a TODO list at the bottom of this CLAUDE.md.

13. **Do not over-animate.** If you're tempted to add scroll-triggered reveals to every section, don't. Once or twice on a page is generous.

14. **Do not write "AI" anywhere on the site.** Per Meta's January 2026 policy, Pratyek is a household concierge performing concrete tasks — bill reminders, warranty filing, renewal nudges. We use LLMs internally; the user-facing language is **always** about what Pratyek does (remembers, files, nudges), never about what powers it. The Trust page is the single exception, where we transparently disclose the models used; everywhere else, no "AI", no "chatbot", no "assistant".

15. **Do not reuse the existing landing's HTML wholesale into one giant `home.blade.php`.** Decompose into reusable components. The existing landing is dense; a multi-page site is a chance to spread the content across pages with breathing room.

---

## 13. Open questions for Nisarg (capture and surface, do not guess)

Maintain this list at the top of every commit message touching content, until each is closed:

- [ ] Founder bio for Nisarg (and any co-founder) — name, role, 2–3 sentence bio, photo or initials
- [ ] Registered office address for Relynext Solutions Private Limited
- [ ] CIN (Corporate Identification Number)
- [ ] GST registration number
- [ ] Grievance officer name + email (DPDP requirement)
- [ ] Final canonical email (`hello@pratyek.com` is the working assumption)
- [ ] Social media handles (Twitter/X, LinkedIn) once they exist
- [ ] Plausible Analytics domain confirmation
- [ ] Confirmed launch date (drives "Last updated" in legal pages)
- [ ] Lawyer review of Privacy Policy, Terms, DPDP page

Do not deploy to production with any of these still as `[placeholder]` text. Surface them in QA.

---

## 14. Status

_Update at the end of each Claude Code session._

### Build phases
- [x] Phase 0 — Foundation _(Laravel 11 scaffolded, 10 routes wired, placeholder views, CSS design tokens, header+footer components, Vite build — 28 Apr 2026)_
- [ ] Phase 1 — Design system + components
- [ ] Phase 2 — Home page
- [ ] Phase 3 — Product, Features, Trust
- [ ] Phase 4 — About, FAQ, Contact
- [ ] Phase 5 — Legal pages
- [ ] Phase 6 — SEO finalization
- [ ] Phase 7 — QA and ship

### Open issues
_Track here as they come up._

---

*End of CLAUDE.md v1. This document is the source of truth for the Pratyek website build. Read §1 and §6.2 before writing a single line of code — they are the compliance ground truth that everything else serves.*
