<x-layouts.app
    title="About — Pratyek is a product of Relynext Solutions Private Limited"
    description="The company behind Pratyek. Mission, team, registered address, CIN. Building a second mind for the Indian household CFO."
    og-image="/og/about.png"
>

{{-- ============================================================
     Page intro — leads with Relynext (Meta-critical)
     ============================================================ --}}
<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">About</p>
        <h1>Pratyek is a product of <em>Relynext Solutions Private Limited</em>.</h1>
        <p class="lede" style="margin-top: var(--space-5);">
            We're a small Indian product company. Pratyek is our first product &mdash; a WhatsApp-native
            household concierge for Indian families. Our mission is to give the Indian household CFO
            a second mind for the fifty things they're already keeping track of.
        </p>
    </div>
</section>

{{-- ============================================================
     Legal entity card — visible in first viewport on desktop
     ============================================================ --}}
<section class="section-tight">
    <div class="wrap">
        <div class="legal-entity">
            <p class="legal-entity-title">Legal entity</p>
            <h2 class="legal-entity-name">Relynext Solutions Private Limited</h2>
            <dl class="legal-entity-rows">
                <dt>Registered as</dt>
                <dd>Private Limited Company under the Companies Act, 2013</dd>

                <dt>Registered office</dt>
                <dd>[Registered address &mdash; Mumbai, Maharashtra, India]</dd>

                <dt>CIN</dt>
                <dd>[Corporate Identification Number]</dd>

                <dt>GST</dt>
                <dd>[GST registration number]</dd>

                <dt>Email</dt>
                <dd><a href="mailto:hello@pratyek.com">hello@pratyek.com</a></dd>

                <dt>Phone</dt>
                <dd>+91 [contact number]</dd>

                <dt>Grievance officer</dt>
                <dd>[Name &mdash; per DPDP Act, 2023]</dd>
            </dl>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     The company
     ============================================================ --}}
<section class="editorial">
    <div class="wrap-narrow">
        <p class="editorial-kicker">The company</p>
        <h2>Relynext Solutions, in one paragraph.</h2>
        <div class="editorial-body" style="margin-top: var(--space-6);">
            <p>
                Relynext Solutions Private Limited is an Indian product company headquartered in Mumbai.
                We build software for households &mdash; not for offices, not for enterprises, not for hyper-scale
                consumer growth charts. Pratyek is our first and current product. Every contract we sign &mdash;
                with WhatsApp Business, with our LLM partners, with our hosting providers, with our customers
                &mdash; is under the Relynext name. There is no holding-company shell, no flag of convenience.
                What you see on the box is what you get on the contract.
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
        <h2>Why this product exists.</h2>
        <div class="editorial-body" style="margin-top: var(--space-6);">
            <p>
                Every Indian household has a person &mdash; usually one, usually undervalued, usually a woman &mdash;
                who keeps mental track of fifty things at once. Bills due. Renewals coming. The maid's salary.
                The driver's leave. The next AC service. The expiry of the passport. The Diwali bonus envelope
                in the third drawer. The cousin's wedding next month and what we got the last cousin for theirs.
            </p>
            <p>
                It's labour. It's invisible. And it's the labour that holds Indian family life together.
            </p>
            <p>
                Pratyek is a <em>second mind</em> for that person. Patient, multilingual, written in the chat
                they already live in, sortable in a clean dashboard when they need to retrieve. We don't promise
                to replace anyone. We promise to lighten the cognitive load by half, and to do it without ever
                becoming the next thing the household has to manage.
            </p>
            <p>
                We're building this <em>family by family</em>, in private beta, by hand. We will say no to growth
                tactics that compromise the trust we're trying to earn. The product gets shipped when it deserves
                to be shipped &mdash; not on a quarterly cadence.
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
        <h2>Who's building this.</h2>
        <div class="about-team">
            <div class="about-person">
                <div class="about-person-photo">N</div>
                <div class="about-person-name">Nisarg</div>
                <p class="about-person-role">Founder</p>
                <p class="about-person-bio">
                    [Nisarg's bio &mdash; TODO. Background, what brought him to this problem, why
                    Indian households specifically. 2&ndash;3 sentences.]
                </p>
            </div>
            <div class="about-person">
                <div class="about-person-photo">+</div>
                <div class="about-person-name">Hiring</div>
                <p class="about-person-role">Engineer / designer</p>
                <p class="about-person-bio">
                    We're a small team and growing slowly. If you've built consumer products in India and
                    care about the quality bar described elsewhere on this site, write to us at
                    <a href="mailto:hello@pratyek.com" style="color: var(--ink); text-decoration: underline; text-underline-offset: 3px;">hello@pratyek.com</a>.
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
        <h2>The product is in private beta.</h2>
        <p>
            Curious whether your household is a fit? Apply below.
            We read every form ourselves and reply with a real answer.
        </p>
        <div class="cta-block-actions">
            <a href="https://tally.so/r/2ExJyD" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                Apply for private beta
                <x-icon name="arrow-right" />
            </a>
            <a href="{{ route('contact') }}" class="btn-link">
                Or just say hi
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
