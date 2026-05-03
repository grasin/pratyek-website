@props([
    'title'       => 'Pratyek',
    'description' => 'Pratyek is India\'s household jugaad system, built inside WhatsApp for every Indian home.',
    'keywords'    => 'household management app India, family management app India, home management app India, Indian household productivity tool, WhatsApp household assistant, household jugaad system India, Pratyek',
    'ogImage'     => '/og/default.svg',
    'ogType'      => 'website',
    'canonical'   => '',
    'pageType'    => 'WebPage',
    'breadcrumbs' => null,
])
@php
    $brand = 'Pratyek';
    $fullTitle = stripos($title, $brand) === false ? $title . ' | ' . $brand : $title;
    $base = rtrim(env('CANONICAL_URL', 'https://pratyek.com'), '/');
    $path = request()->getRequestUri();
    $canonicalUrl = $canonical ?: $base . $path;
    $absoluteOg = preg_match('#^https?://#', $ogImage) ? $ogImage : $base . $ogImage;
@endphp

<title>{{ $fullTitle }}</title>
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:160, max-video-preview:-1">
<meta name="theme-color" content="#F8F1E4">
<meta name="format-detection" content="telephone=no">
<meta name="author" content="Pratyek">
<meta name="publisher" content="Pratyek">
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
<meta property="og:image:alt" content="Pratyek &mdash; India&apos;s household jugaad system">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:site_name" content="Pratyek">
<meta property="og:locale" content="en_IN">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $fullTitle }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $absoluteOg }}">
<meta name="twitter:image:alt" content="Pratyek &mdash; India&apos;s household jugaad system">

{{-- Favicon --}}
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="alternate icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/favicon.svg">

<link rel="alternate" hreflang="en-IN" href="{{ $canonicalUrl }}">
<link rel="alternate" hreflang="x-default" href="{{ $canonicalUrl }}">

<script type="application/ld+json">@verbatim
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "https://pratyek.com/#organization",
  "name": "Pratyek",
  "alternateName": ["\u092a\u094d\u0930\u0924\u094d\u092f\u0947\u0915", "Pratyek household jugaad system", "Pratyek family management app"],
  "url": "https://pratyek.com",
  "logo": {
    "@type": "ImageObject",
    "url": "https://pratyek.com/favicon.svg",
    "width": 512,
    "height": 512
  },
  "image": "https://pratyek.com/og/default.svg",
  "slogan": "India's household jugaad system, built inside WhatsApp.",
  "description": "Pratyek is India's household jugaad system, built inside WhatsApp for every Indian home. DPDP-aware, India-hosted, no ads, no data sold.",
  "disambiguatingDescription": "Pratyek is a WhatsApp-native household and family management system for Indian families, distinct from any other entity sharing the name.",
  "foundingDate": "2026",
  "foundingLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Mumbai",
      "addressRegion": "Maharashtra",
      "addressCountry": "IN"
    }
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
    "household management app India",
    "family management app India",
    "home management app India",
    "household jugaad system India",
    "WhatsApp household assistant",
    "family organizer India",
    "family organiser India",
    "family bill reminders",
    "Indian household productivity",
    "shared family dashboard",
    "shared family tasks",
    "domestic staff salary tracking",
    "maid salary tracker",
    "appliance warranty management",
    "warranty tracker India",
    "bill reminder app India",
    "vehicle insurance renewal reminders",
    "Digital Personal Data Protection Act 2023",
    "DigiLocker",
    "Indian family services",
    "WhatsApp business automation"
  ],
  "knowsLanguage": [
    {"@type": "Language", "name": "English",   "alternateName": "en"},
    {"@type": "Language", "name": "Hindi",     "alternateName": "hi"},
    {"@type": "Language", "name": "Marathi",   "alternateName": "mr"},
    {"@type": "Language", "name": "Tamil",     "alternateName": "ta"},
    {"@type": "Language", "name": "Telugu",    "alternateName": "te"},
    {"@type": "Language", "name": "Kannada",   "alternateName": "kn"},
    {"@type": "Language", "name": "Bengali",   "alternateName": "bn"},
    {"@type": "Language", "name": "Gujarati",  "alternateName": "gu"},
    {"@type": "Language", "name": "Punjabi",   "alternateName": "pa"}
  ],
  "areaServed": {
    "@type": "Country",
    "name": "India"
  }
}
@endverbatim</script>

@php
    $atContext = '@context';
    $atType = '@type';
    $atId = '@id';

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
