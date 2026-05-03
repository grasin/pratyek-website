<x-layouts.app
    title="About — Relynext Solutions Private Limited | Pratyek"
    description="Pratyek is a product of Relynext Solutions Private Limited, an Indian product company building a WhatsApp-native household concierge."
    keywords="Relynext Solutions Private Limited, Pratyek legal entity, about Pratyek, household concierge mission, Indian product company, Mumbai product company"
    og-image="/og/default.svg"
    page-type="AboutPage"
    :breadcrumbs="[
        ['name' => 'Home',  'url' => '/'],
        ['name' => 'About', 'url' => '/about'],
    ]"
>

{{-- ============================================================
     Meta-facing company intro
     ============================================================ --}}
<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">Company</p>
        <h1>Pratyek is a product of <em>Relynext Solutions Private Limited.</em></h1>
        <p class="lede" style="margin-top: var(--space-5);">
            Relynext Solutions Private Limited is an Indian product company. Pratyek is its first product:
            a WhatsApp-native household concierge that helps Indian families remember bills, renewals,
            staff payments, appliance warranties, documents, contacts, and the everyday details that
            usually live in one person's head.
        </p>
    </div>
</section>

<section class="section-tight">
    <div class="wrap">
        <div class="legal-entity">
            <p class="legal-entity-title">Legal entity</p>
            <h2 class="legal-entity-name">Pratyek is a product of Relynext Solutions Private Limited.</h2>
            <dl class="legal-entity-rows">
                <dt>Legal name</dt>
                <dd>Relynext Solutions Private Limited</dd>

                <dt>Registered address</dt>
                <dd>[Registered address placeholder], Mumbai, Maharashtra, India</dd>

                <dt>CIN</dt>
                <dd>[CIN placeholder]</dd>

                <dt>GST</dt>
                <dd>[GST placeholder]</dd>

                <dt>Email</dt>
                <dd><a href="mailto:hello@pratyek.com">hello@pratyek.com</a></dd>

                <dt>Phone</dt>
                <dd><a href="https://wa.me/919372023537?text=Hi" target="_blank" rel="noopener noreferrer">+91 93720 23537</a></dd>
            </dl>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Company
     ============================================================ --}}
<section class="editorial">
    <div class="wrap-narrow">
        <p class="editorial-kicker">The company</p>
        <h2>An Indian product company, building one careful household product first.</h2>
        <div class="editorial-body" style="margin-top: var(--space-6);">
            <p>
                Relynext Solutions Private Limited builds software for Indian families and the real operating
                systems they already use: WhatsApp, shared calendars, forwarded PDFs, voice notes, and the
                memory of the person who quietly keeps track of everything.
            </p>
            <p>
                Pratyek is the company's first product. The ambition is simple: make the invisible work of
                running a household lighter, more searchable, and less fragile, without asking the family to
                install another app or learn another workflow.
            </p>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Team
     ============================================================ --}}
<section class="editorial">
    <div class="wrap-narrow">
        <p class="editorial-kicker">The team</p>
        <h2>Built by people close to the problem.</h2>
        <div class="editorial-body" style="margin-top: var(--space-6);">
            <p>
                <strong>Nisarg</strong> — [Nisarg's bio placeholder. Add the founder story, location, and the
                household memory problem that led to Pratyek.]
            </p>
            <p>
                <strong>Team</strong> — [Additional founder or team bio placeholder. Keep this human and concrete:
                what they build, why this product matters to them, and what standard they hold the product to.]
            </p>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Mission
     ============================================================ --}}
<section class="editorial">
    <div class="wrap-narrow">
        <p class="editorial-kicker">Mission</p>
        <h2>Every Indian household runs on someone's invisible labour.</h2>
        <div class="editorial-body" style="margin-top: var(--space-6);">
            <p>
                Bills due. Renewals coming. The maid's salary. The driver's leave. The next AC service.
                The expiry of the passport. The Diwali bonus envelope in the third drawer. The cousin's
                wedding next month and what we got the last cousin for theirs.
            </p>
            <p>
                Pratyek is a second mind for that work. Patient, multilingual, written in the chat the family
                already lives in, and sortable in a clean dashboard when the household needs to retrieve.
                We do not promise to replace anyone. We promise to lighten the cognitive load.
            </p>
            <p>
                We are building it family by family, in the language Indian households already speak, with
                the trust standards required for a product that sits this close to daily life.
            </p>
        </div>
    </div>
</section>

{{-- ============================================================
     CTA
     ============================================================ --}}
<section class="cta-block">
    <div class="wrap">
        <h2>Pratyek is live.</h2>
        <p>
            Send "Hi" on WhatsApp and start with the household detail you want Pratyek to remember.
        </p>
        <div class="cta-block-actions">
            <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                <x-icon name="whatsapp" />
                Start on WhatsApp
            </a>
            <a href="{{ route('contact') }}" class="btn-link">
                Contact the team
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
