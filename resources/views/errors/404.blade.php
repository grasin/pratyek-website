<x-layouts.app
    title="Page not found — Pratyek"
    description="The page you were looking for doesn't exist. Try the home page, or start using Pratyek on WhatsApp."
    keywords="404, page not found, Pratyek"
    og-image="/og/default.svg"
    page-type="WebPage"
>

<section class="page-intro">
    <div class="wrap-narrow" style="text-align: center;">
        <p class="hero-eyebrow" style="justify-content: center;">404 &middot; Not found</p>
        <h1 style="margin-bottom: var(--space-5);">
            We couldn't find that page. <em>Don't worry &mdash; we remember everything else.</em>
        </h1>
        <p class="lede" style="margin-inline: auto;">
            The link may be old, or we may have moved the page. Pratyek is a product of
            <strong>Relynext Solutions</strong> and lives just one tap away &mdash; try one of these instead:
        </p>
    </div>
</section>

<section class="section-tight">
    <div class="wrap-narrow">
        <ul class="trust-list" style="font-family: 'Inter', sans-serif; font-size: 16px;">
            <li><a href="{{ route('home') }}"     style="color: var(--ink); text-decoration: underline; text-decoration-color: var(--rule-strong); text-underline-offset: 3px;">Home</a> &mdash; what Pratyek is, in one paragraph</li>
            <li><a href="{{ route('product') }}"  style="color: var(--ink); text-decoration: underline; text-decoration-color: var(--rule-strong); text-underline-offset: 3px;">Product</a> &mdash; how it works, the two surfaces, the memory model</li>
            <li><a href="{{ route('features') }}" style="color: var(--ink); text-decoration: underline; text-decoration-color: var(--rule-strong); text-underline-offset: 3px;">Features</a> &mdash; the twelve categories Pratyek tracks</li>
            <li><a href="{{ route('trust') }}"    style="color: var(--ink); text-decoration: underline; text-decoration-color: var(--rule-strong); text-underline-offset: 3px;">Trust &amp; Privacy</a> &mdash; DPDP, DigiLocker, Bangalore servers</li>
            <li><a href="{{ route('faq') }}"      style="color: var(--ink); text-decoration: underline; text-decoration-color: var(--rule-strong); text-underline-offset: 3px;">FAQ</a> &mdash; 25 questions, answered</li>
            <li><a href="{{ route('contact') }}"  style="color: var(--ink); text-decoration: underline; text-decoration-color: var(--rule-strong); text-underline-offset: 3px;">Contact</a> &mdash; <span style="color: var(--ink-mute);">hello@pratyek.com</span></li>
        </ul>
    </div>
</section>

<section class="cta-block">
    <div class="wrap">
        <h2>Or just start using Pratyek.</h2>
        <p>That's the only thing most visitors are here to do anyway.</p>
        <div class="cta-block-actions">
            <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                <x-icon name="whatsapp" />
                Start on WhatsApp
            </a>
            <a href="{{ route('home') }}" class="btn-link">
                Back to home
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
