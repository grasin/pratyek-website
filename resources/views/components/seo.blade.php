@props([
    'title'       => 'Pratyek',
    'description' => 'Pratyek is a WhatsApp-native household concierge for Indian families, by Relynext Solutions.',
    'keywords'    => 'WhatsApp household concierge India, Indian family bill reminder, DPDP compliant family assistant, household management WhatsApp, Pratyek',
    'ogImage'     => '/og/default.svg',
    'ogType'      => 'website',
    'canonical'   => '',
    'pageType'    => 'WebPage',
    'breadcrumbs' => null,
])
@php
    /* ---------- Title (smart suffix, 60-char target) -------------- */
    $brand     = 'Pratyek';
    $fullTitle = $title;
    if (stripos($title, $brand) === false) {
        $fullTitle = $title . ' | ' . $brand;
    }

    /* ---------- Canonical (stable, absolute, always production) ---- */
    /* SEO canonical must be the public production URL regardless of
       where the request was served from (local dev, staging, CDN). */
    $base         = rtrim(env('CANONICAL_URL', 'https://pratyek.com'), '/');
    $path         = request()->getRequestUri();
    $canonicalUrl = $canonical ?: $base . $path;
    $absoluteOg   = preg_match('#^https?://#', $ogImage) ? $ogImage : $base . $ogImage;
@endphp

<title>{{ $fullTitle }}</title>
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta name="theme-color" content="#EFE8D8">
<meta name="format-detection" content="telephone=no">
<meta name="author" content="Relynext Solutions">
<meta name="publisher" content="Relynext Solutions">
<meta name="geo.region" content="IN">
<meta name="geo.placename" content="Mumbai">
<meta name="geo.country" content="India">
<link rel="canonical" href="{{ $canonicalUrl }}">

{{-- Open Graph --}}
<meta property="og:title" content="{{ $fullTitle }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $absoluteOg }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Pratyek &mdash; WhatsApp household concierge for Indian families">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:site_name" content="Pratyek">
<meta property="og:locale" content="en_IN">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $fullTitle }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $absoluteOg }}">
<meta name="twitter:image:alt" content="Pratyek &mdash; WhatsApp household concierge for Indian families">

{{-- Favicon (inline SVG so we never 404) --}}
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="alternate icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/favicon.svg">

{{-- hreflang (only declared languages we actually serve) --}}
<link rel="alternate" hreflang="en-IN" href="{{ $canonicalUrl }}">
<link rel="alternate" hreflang="x-default" href="{{ $canonicalUrl }}">

{{-- Schema.org Organization (every page) --}}
<script type="application/ld+json">@verbatim
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "https://pratyek.com/#organization",
  "name": "Relynext Solutions",
  "alternateName": "Pratyek",
  "legalName": "Relynext Solutions",
  "url": "https://pratyek.com",
  "logo": {
    "@type": "ImageObject",
    "url": "https://pratyek.com/favicon.svg",
    "width": 512,
    "height": 512
  },
  "description": "Relynext Solutions is the maker of Pratyek, a WhatsApp-native household concierge for Indian families. DPDP-compliant, India-hosted, no ads, no data sold.",
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
    "addressLocality": "Mumbai",
    "addressRegion": "Maharashtra",
    "addressCountry": "IN"
  },
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "+91-93720-23537",
      "contactType": "customer support",
      "areaServed": "IN",
      "availableLanguage": ["en", "hi", "mr", "ta", "te", "kn", "bn", "gu", "pa"]
    },
    {
      "@type": "ContactPoint",
      "email": "hello@pratyek.com",
      "contactType": "customer support",
      "areaServed": "IN"
    }
  ],
  "knowsAbout": [
    "household management",
    "WhatsApp business automation",
    "Digital Personal Data Protection Act 2023",
    "Indian family services"
  ],
  "areaServed": {
    "@type": "Country",
    "name": "India"
  }
}
@endverbatim</script>

{{-- Per-page WebPage / page-type marker --}}
@php
    /* Build JSON-LD inside @php so Laravel 11's @context Blade
       directive doesn't eat our JSON-LD '@context' string keys. */
    $atContext = '@context';
    $atType    = '@type';
    $atId      = '@id';

    $webPageJson = json_encode([
        $atContext    => 'https://schema.org',
        $atType       => $pageType,
        $atId         => $canonicalUrl . '#webpage',
        'url'         => $canonicalUrl,
        'name'        => $fullTitle,
        'description' => $description,
        'isPartOf'    => [$atType => 'WebSite', $atId => 'https://pratyek.com/#website'],
        'about'       => [$atId => 'https://pratyek.com/#organization'],
        'inLanguage'  => 'en-IN',
        'publisher'   => [$atId => 'https://pratyek.com/#organization'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
@endphp
<script type="application/ld+json">{!! $webPageJson !!}</script>

@if ($breadcrumbs)
@php
    $breadcrumbJson = json_encode([
        $atContext        => 'https://schema.org',
        $atType           => 'BreadcrumbList',
        'itemListElement' => collect($breadcrumbs)->map(fn ($b, $i) => [
            $atType    => 'ListItem',
            'position' => $i + 1,
            'name'     => $b['name'],
            'item'     => str_starts_with($b['url'] ?? '', 'http') ? $b['url'] : $base . ($b['url'] ?? ''),
        ])->values()->all(),
    ], JSON_UNESCAPED_SLASHES);
@endphp
<script type="application/ld+json">{!! $breadcrumbJson !!}</script>
@endif
