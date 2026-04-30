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
<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-seo
        :title="$title"
        :description="$description"
        :keywords="$keywords"
        :og-image="$ogImage"
        :og-type="$ogType"
        :canonical="$canonical"
        :page-type="$pageType"
        :breadcrumbs="$breadcrumbs"
    />

    {{-- Page-specific JSON-LD (WebSite, SoftwareApplication, Person, FAQPage, etc.) --}}
    {{ $structuredData ?? '' }}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;1,9..144,300;1,9..144,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a href="#main-content" class="skip-link">Skip to content</a>

    {{-- Persistent legal-entity ribbon. Establishes the Pratyek↔Relynext
         Solutions relationship in the first pixel of every page so Meta
         reviewers (and humans) find it without scrolling. --}}
    <div class="entity-ribbon" role="complementary" aria-label="Legal entity">
        <div class="wrap-wide entity-ribbon-inner">
            <span>
                <strong>Pratyek</strong> is a product of
                <a href="{{ route('about') }}"><strong>Relynext Solutions</strong></a>, Mumbai.
            </span>
        </div>
    </div>

    <x-header />
    <main id="main-content">
        {{ $slot }}
    </main>
    <x-footer />
    {{-- Plausible Analytics — replace domain before launch --}}
    <script defer data-domain="pratyek.com" src="https://plausible.io/js/script.js"></script>
</body>
</html>
