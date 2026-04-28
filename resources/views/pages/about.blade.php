<x-layouts.app
    title="About — A second mind for the Indian household | Pratyek"
    description="Why Pratyek exists, what it's trying to be, and who it's for. Built by passionate engineers, designers, and visionaries who face the same daily problems."
    keywords="about Pratyek, household concierge mission, Indian product company, second mind for household, Mumbai product company"
    og-image="/og/default.svg"
    page-type="AboutPage"
    :breadcrumbs="[
        ['name' => 'Home',  'url' => '/'],
        ['name' => 'About', 'url' => '/about'],
    ]"
>

{{-- ============================================================
     Page intro
     ============================================================ --}}
<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">About</p>
        <h1>A second mind for the <em>Indian household.</em></h1>
        <p class="lede" style="margin-top: var(--space-5);">
            Pratyek is a household concierge that lives where Indian families already talk &mdash; on WhatsApp.
            It listens, it remembers, it nudges. That's the whole product. Below: why we built it, who it's for,
            and how we think about the responsibility of being inside your family's daily life.
        </p>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Mission
     ============================================================ --}}
<section class="editorial">
    <div class="wrap-narrow">
        <p class="editorial-kicker">Why this exists</p>
        <h2>Every Indian household runs on someone's invisible labour.</h2>
        <div class="editorial-body" style="margin-top: var(--space-6);">
            <p>
                Bills due. Renewals coming. The maid's salary. The driver's leave. The next AC service.
                The expiry of the passport. The Diwali bonus envelope in the third drawer. The cousin's
                wedding next month and what we got the last cousin for theirs.
            </p>
            <p>
                It's labour. It's invisible. And it's the labour that holds Indian family life together.
            </p>
            <p>
                Pratyek is a <em>second mind</em> for that work. Patient, multilingual, written in the chat
                they already live in, sortable in a clean dashboard when they need to retrieve. We don't
                promise to replace anyone. We promise to lighten the cognitive load by half &mdash; and to do
                it without ever becoming the next thing the household has to manage.
            </p>
            <p>
                We're building this <em>family by family</em>, by hand. We will say no to growth tactics that
                compromise the trust we're trying to earn. The product gets shipped when it deserves to be
                shipped, not on a quarterly cadence.
            </p>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Team — vague, by design
     ============================================================ --}}
<section class="editorial">
    <div class="wrap-narrow">
        <p class="editorial-kicker">Who's behind it</p>
        <h2>Built by people who face the same daily problems.</h2>
        <div class="editorial-body" style="margin-top: var(--space-6);">
            <p>
                Pratyek is the work of <em>passionate engineers, designers, and visionaries</em> who keep their
                own families' bills, renewals, and reminders. We chose this product because it scratches an itch
                we feel ourselves &mdash; the messy, generous, multilingual reality of running an Indian
                household.
            </p>
            <p>
                We work in small numbers and ship slowly. The names matter less than the standard: every line of
                copy, every chat scene, every default decision is examined by people who would notice if it
                weren't right.
            </p>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Slim legal / company line (Meta compliance)
     ============================================================ --}}
<section class="section-tight">
    <div class="wrap">
        <div class="legal-entity">
            <p class="legal-entity-title">The company</p>
            <h2 class="legal-entity-name">Pratyek is a product of Relynext Solutions.</h2>
            <dl class="legal-entity-rows">
                <dt>Based in</dt>
                <dd>Mumbai, India</dd>

                <dt>WhatsApp</dt>
                <dd><a href="https://wa.me/919372023537?text=Hi" target="_blank" rel="noopener noreferrer">+91 93720 23537</a></dd>

                <dt>Email</dt>
                <dd><a href="mailto:hello@pratyek.com">hello@pratyek.com</a></dd>
            </dl>
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
            Send <em>"Hi"</em> to <a href="https://wa.me/919372023537?text=Hi" style="color: var(--ink); text-decoration: underline; text-underline-offset: 3px;">+91 93720 23537</a> on WhatsApp.
            That's all there is to it.
        </p>
        <div class="cta-block-actions">
            <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                <x-icon name="whatsapp" />
                Start on WhatsApp
            </a>
            <a href="{{ route('contact') }}" class="btn-link">
                Or just say hi by email
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
