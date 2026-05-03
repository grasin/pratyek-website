<x-layouts.app
    title="Trust &amp; Privacy — DPDP-Aware, India-Hosted | Pratyek"
    description="Servers in India. No Aadhaar / PAN / passport storage. DigiLocker for sensitive IDs. DPDP-aware privacy commitments. Built by Relynext Solutions Private Limited."
    keywords="DPDP compliance, India data residency, DigiLocker integration, no ads no data sold, household privacy India, Relynext Solutions Private Limited trust, Bangalore servers"
    og-image="/og/default.svg"
    page-type="WebPage"
    :breadcrumbs="[
        ['name' => 'Home',            'url' => '/'],
        ['name' => 'Trust & Privacy', 'url' => '/trust'],
    ]"
>

{{-- ============================================================
     Page intro
     ============================================================ --}}
<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">Trust &amp; Privacy</p>
        <h1>Built for one family at a time. <em>Quiet about the rest.</em></h1>
        <p class="lede" style="margin-top: var(--space-5);">
            For Pratyek to be useful, we have to be invited deep into your family's daily life. That's a
            responsibility we take seriously, and the rest of this page is what we've decided about it &mdash;
            written plainly, not in legal grey type.
        </p>
    </div>
</section>

{{-- ============================================================
     The promise (Kasam se)
     ============================================================ --}}
<section class="promise">
    <div class="wrap">
        <div class="promise-card">
            <div class="promise-stamp">Kasam se</div>
            <h2 class="promise-headline">
                <em>No ads.</em> No data sold.
                <em>Ever.</em>
            </h2>
            <div class="promise-body">
                <p>
                    Pratyek is paid for by the families who use it. Not by advertisers, not by data brokers,
                    not by any third party. Your bills, your maid's salary, your children's vaccination dates,
                    the dates of your parents' anniversaries &mdash; none of that becomes anyone else's product.
                </p>
                <p>
                    We WhatsApp our own mothers on this product. <em>Trust is the whole game.</em>
                </p>
            </div>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Trust blocks
     ============================================================ --}}
<section class="section">
    <div class="wrap">

        <div class="trust-block" style="border-top: 0;">
            <div class="trust-block-head">
                <p class="trust-block-num">01 &middot; Refused</p>
                <h3 class="trust-block-name">What Pratyek <em>never</em> stores.</h3>
            </div>
            <div class="trust-block-body">
                <p>
                    Some data is too sensitive to live on a third-party server, however well encrypted.
                    Pratyek refuses these by design. If you forward a passport scan, Pratyek doesn't even
                    keep the image &mdash; it asks for the expiry date and points you to DigiLocker.
                </p>
                <ul class="never-list">
                    <li><x-icon name="lock" /> Aadhaar numbers, PAN images, passport scans</li>
                    <li><x-icon name="lock" /> Mediclaim card images, driving licence images</li>
                    <li><x-icon name="lock" /> Bank account numbers, credit card numbers, UPI PINs</li>
                    <li><x-icon name="lock" /> Anything in your existing personal WhatsApp groups</li>
                    <li><x-icon name="lock" /> Voice notes (deleted within 7 days, transcript only)</li>
                </ul>
            </div>
        </div>

        <div class="trust-block">
            <div class="trust-block-head">
                <p class="trust-block-num">02 &middot; DigiLocker by default</p>
                <h3 class="trust-block-name">Sensitive IDs belong in the government's vault.</h3>
            </div>
            <div class="trust-block-body">
                <p>
                    Every Indian adult is entitled to a free <strong>DigiLocker</strong> account &mdash;
                    a government-run vault that already holds your passport, driving licence, and vehicle RC.
                    When you forward a sensitive ID document, Pratyek refuses to store it and politely points
                    you to DigiLocker.
                </p>
                <p>
                    What we keep instead is the <em>expiry date</em>. Just enough to nudge you ten weeks
                    before your passport lapses or your DL renewal window opens. The image lives with the
                    government, where it always should.
                </p>
            </div>
        </div>

        <div class="trust-block">
            <div class="trust-block-head">
                <p class="trust-block-num">03 &middot; DPDP Act 2023</p>
                <h3 class="trust-block-name">India's Digital Personal Data Protection Act, in plain English.</h3>
            </div>
            <div class="trust-block-body">
                <p>
                    The DPDP Act, 2023 is the law that governs how your personal data is handled in India.
                    Pratyek is built around its principles &mdash; not retrofitted to comply.
                </p>
                <ul class="trust-list">
                    <li><strong>Affirmative consent.</strong> We don't enrol anyone by default. You add Pratyek to your contacts; that's the consent.</li>
                    <li><strong>Purpose limitation.</strong> What you forward is used to file what you forwarded &mdash; nothing else.</li>
                    <li><strong>Data minimisation.</strong> We extract metadata; we don't hoard the original.</li>
                    <li><strong>Exportable.</strong> Ask for everything we have on you, get it as JSON or CSV.</li>
                    <li><strong>Deletable within 30 days.</strong> Tell Pratyek "delete" in WhatsApp; everything's gone, by law and by design.</li>
                </ul>
                <p>
                    Read the full <a href="{{ route('legal.dpdp') }}">DPDP compliance page</a> for the
                    point-by-point breakdown.
                </p>
            </div>
        </div>

        <div class="trust-block">
            <div class="trust-block-head">
                <p class="trust-block-num">04 &middot; Where the data lives</p>
                <h3 class="trust-block-name">Servers in India. Backups in India. Both in Bangalore.</h3>
            </div>
            <div class="trust-block-body">
                <p>
                    Your household's memory lives on servers at <strong>DigitalOcean Bangalore (BLR1)</strong>.
                    Backups are also in India. We don't replicate data outside the country.
                </p>
                <p>
                    The only outbound connections are to Meta (to deliver WhatsApp messages back to you) and to
                    our LLM partners (to extract structured data from your forwards). Each connection sends only
                    the minimum information needed for that step &mdash; and only with a Data Processing Agreement
                    in place.
                </p>
            </div>
        </div>

        <div class="trust-block">
            <div class="trust-block-head">
                <p class="trust-block-num">05 &middot; The models we use</p>
                <h3 class="trust-block-name">Two LLMs, named openly. Neither trained on your data.</h3>
            </div>
            <div class="trust-block-body">
                <p>
                    <strong>Claude</strong> from Anthropic, for figuring out how a piece of forwarded data should be
                    structured. <strong>Gemma</strong> from Google, for the day-to-day filing work. Both are accessed
                    through OpenRouter under contracts that explicitly forbid training on our data.
                </p>
                <p>
                    We don't use the word "AI" anywhere on the product surface, because what Pratyek does is
                    concrete: it remembers, it files, it nudges. The models are infrastructure, not the product.
                </p>
            </div>
        </div>

        <div class="trust-block">
            <div class="trust-block-head">
                <p class="trust-block-num">06 &middot; Retention, in plain language</p>
                <h3 class="trust-block-name">How long things stay, and when they go.</h3>
            </div>
            <div class="trust-block-body">
                <ul class="trust-list">
                    <li><strong>Bills, warranties, structured records:</strong> kept as long as you keep the entity.</li>
                    <li><strong>Voice notes (audio):</strong> deleted after transcription, within 7 days at most.</li>
                    <li><strong>Raw forwarded media:</strong> deleted after extraction, within 30 days at most.</li>
                    <li><strong>Backups:</strong> rotated every 30 days; full deletion completes within 30 days of your request.</li>
                </ul>
                <p>
                    Tell Pratyek "delete everything" in WhatsApp and the household's data is wiped within 30 days.
                    No phone calls, no support tickets, no friction.
                </p>
            </div>
        </div>

        <div class="trust-block">
            <div class="trust-block-head">
                <p class="trust-block-num">07 &middot; Who's behind this</p>
                <h3 class="trust-block-name">Pratyek is a product of Relynext Solutions Private Limited.</h3>
            </div>
            <div class="trust-block-body">
                <p>
                    Relynext Solutions Private Limited is an Indian product company, registered in India.
                    Pratyek is its first and current product. We sign every contract &mdash; with WhatsApp,
                    with our LLM partners, with our hosting provider &mdash; under that name. There's no
                    holding-company shell game.
                </p>
                <p>
                    See the full legal entity block on the <a href="{{ route('about') }}">About page</a>.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     CTA
     ============================================================ --}}
<section class="cta-block">
    <div class="wrap">
        <h2>If this is the company you'd want handling your household's memory&hellip;</h2>
        <p>
            Pratyek is live. Send "Hi" on WhatsApp and start with the first thing your household needs remembered.
        </p>
        <div class="cta-block-actions">
            <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                <x-icon name="whatsapp" />
                Start on WhatsApp
            </a>
            <a href="{{ route('legal.privacy-policy') }}" class="btn-link">
                Read the full privacy policy
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
