<x-layouts.app
    title="About Pratyek - Built for Every Indian Home"
    description="Why Pratyek exists: India's household management system, built inside WhatsApp for every Indian family."
    og-image="/og/about.png"
    page-type="AboutPage"
    :breadcrumbs="[
        ['name' => 'Home',  'url' => '/'],
        ['name' => 'About', 'url' => '/about'],
    ]"
>

{{-- ============================================================
     Product intro
     ============================================================ --}}
<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">About</p>
        <h1>Every Indian home deserves a <em>household management system.</em></h1>
        <p class="lede" style="margin-top: var(--space-5);">
            Pratyek means every. It exists for every Indian family, and especially for the person who quietly keeps track of everything at home:
            bills, renewals, staff payments, appliance warranties, documents, contacts,
            medicine refills, school fees, and the hundred small details that usually live
            in one person's head.
        </p>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     What we build
     ============================================================ --}}
<section class="editorial">
    <div class="wrap-narrow">
        <p class="editorial-kicker">What we build</p>
        <h2>WhatsApp for capture. Memory dashboard as the household management system.</h2>
        <div class="editorial-body" style="margin-top: var(--space-6);">
            <p>
                Indian households already run on WhatsApp, forwarded PDFs, voice notes, shared calendars,
                and the memory of one careful person. Pratyek works with that reality instead of asking the
                family to move into another app.
            </p>
            <p>
                Send a bill, a voice note, a photo, or a question. Pratyek extracts the useful detail, files it
                into the right Memory dashboard surface, and keeps it searchable when the household needs it later.
                That is the practical meaning of a home management app for India: the family keeps using WhatsApp,
                while the dashboard quietly becomes the source of truth.
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
                <strong>Nisarg</strong> leads product and engineering for Pratyek from Mumbai, shaped by the same
                household productivity problem the product is built to solve: bills, renewals, staff payments,
                documents, and a hundred small responsibilities living in one person's head.
            </p>
            <p>
                The wider team is intentionally small for now, focused on reliability, privacy, and the craft
                of making WhatsApp feel like a useful family management system instead of another app to manage.
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
                Pratyek is being built to become India's most useful household management system for that work.
                Patient, multilingual, written in the chat the family already lives in, and sortable in a clean dashboard when the household needs to retrieve.
                We do not promise to replace anyone. We promise to lighten the cognitive load.
            </p>
            <p>
                We are building it family by family, for messy homes and super-organised homes alike, in the language Indian households already speak, with
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
            Send "Hi" on WhatsApp and start with the household detail you want Pratyek to organise.
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

