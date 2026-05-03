# Pratyek Website - Current Build Notes

This file is the current source of truth for the public Pratyek marketing site.

## Operational Memory

- After development work is complete, run the relevant verification, commit the finished changes, and push the current branch unless the user explicitly asks not to.

## Current Meta Status

Meta has approved use of the Pratyek display name. The site should now be Pratyek-first.

- Do not lead pages with Relynext details.
- Do not put Relynext in page titles, descriptions, SEO keywords, schema, About, Contact, FAQ, Trust, legal copy, or top-of-page banners.
- Keep Relynext Solutions only in the site footer legal block.
- Do not mention the entity type in public copy.

## Product Positioning

Pratyek is a WhatsApp-native household concierge for Indian families. WhatsApp is the capture surface; the Memory dashboard is the retrieval surface. The website should quickly show how a WhatsApp message, bill, voice note, or document turns into a structured dashboard record.

## Pages

- `/` Home
- `/product` How it works
- `/features` Memory-aligned features
- `/trust` Trust and privacy
- `/about` Product mission and team
- `/faq` FAQ
- `/contact` WhatsApp, email, and contact form
- `/legal/privacy-policy`
- `/legal/terms`
- `/legal/dpdp`
- `/why-pratyek` remains a legacy redirect to `/about`

## Stack

- Laravel Blade pages
- Plain CSS in `resources/css/app.css`
- Vanilla JS in `resources/js/app.js`
- Vite for CSS/JS builds
- No React, Vue, Tailwind, Bootstrap, Livewire, or Inertia

## Brand And Content

- Keep the copy concise, specific, and Indian-English.
- Use real household examples: Adani Electricity, BMC, JioFiber, Tata Play, staff salary, insurance renewals, school fees.
- No emojis in site UI. WhatsApp chat illustrations may use real chat-like emoji only if needed.
- Keep the bright current palette: warm haldi paper, vermilion CTA, peacock green product surfaces, marigold recall accents.
- Prefer illustrations that show transformation: WhatsApp input -> extraction -> Memory dashboard record.

## Footer Rule

The footer is the only place for Relynext Solutions and the legal business details. Do not duplicate this block elsewhere.

## Verification

Before committing, run:

- `npm run build`
- `php artisan test`
- A rendered-page sweep confirming Relynext and legal identifiers appear only inside `<footer>`.
