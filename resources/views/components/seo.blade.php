@props([
    'title'       => 'Pratyek',
    'description' => 'Pratyek is a WhatsApp-native household concierge for Indian families.',
    'ogImage'     => '/og/home.png',
    'canonical'   => '',
])
@php
    $fullTitle    = $title . ' — Pratyek';
    $canonicalUrl = $canonical ?: request()->url();
    $canonicalEn  = $canonicalUrl;
    $canonicalHi  = $canonicalUrl; // hi-IN version placeholder
@endphp

<title>{{ $fullTitle }}</title>
<meta name="description" content="{{ $description }}">
<meta name="robots" content="index, follow, max-image-preview:large">
<meta name="theme-color" content="#EFE8D8">
<link rel="canonical" href="{{ $canonicalUrl }}">

<!-- Open Graph -->
<meta property="og:title" content="{{ $fullTitle }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Pratyek">
<meta property="og:locale" content="en_IN">
<meta property="og:locale:alternate" content="hi_IN">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $fullTitle }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $ogImage }}">
<meta name="twitter:site" content="@pratyek_app">

<!-- Favicon -->
<link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="manifest" href="/favicon/site.webmanifest">

<!-- hreflang -->
<link rel="alternate" hreflang="en-in" href="{{ $canonicalEn }}">
<link rel="alternate" hreflang="hi-in" href="{{ $canonicalHi }}">
<link rel="alternate" hreflang="x-default" href="{{ $canonicalEn }}">

<!-- Schema.org Organization JSON-LD (every page) -->
<script type="application/ld+json">
@verbatim
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
@endverbatim
</script>
