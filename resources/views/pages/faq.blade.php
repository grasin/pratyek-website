<x-layouts.app
    title="FAQ — How Pratyek Works for Indian Families"
    description="What it is, where data lives, what languages it speaks, what it costs. The 25 questions every family asks before they invite Pratyek in."
    keywords="Pratyek FAQ, WhatsApp household concierge questions, Pratyek pricing, DPDP family service, Indian languages WhatsApp, Pratyek beta, Aadhaar PAN passport storage"
    og-image="/og/default.svg"
    page-type="WebPage"
    :breadcrumbs="[
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'FAQ',  'url' => '/faq'],
    ]"
>

<x-slot:structuredData>
<script type="application/ld+json">@verbatim
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://pratyek.com/faq#faqpage",
  "mainEntity": [
    {"@type":"Question","name":"Is Pratyek an app I have to install?","acceptedAnswer":{"@type":"Answer","text":"No. Pratyek lives at a WhatsApp number. You add it to your contacts and message it like any other contact. There is nothing to install. The dashboard at pratyek.com/memory is web-only."}},
    {"@type":"Question","name":"Can Pratyek join my existing family WhatsApp group?","acceptedAnswer":{"@type":"Answer","text":"No, and we wouldn't ask for that. You create a separate small chat with Pratyek and use it as your household's filing thread. Your existing family group stays untouched."}},
    {"@type":"Question","name":"What languages does Pratyek understand?","acceptedAnswer":{"@type":"Answer","text":"English, Hindi, Marathi, Tamil, Telugu, Kannada, Bengali, Gujarati, Punjabi, plus the Hinglish your family actually speaks. Voice notes can switch mid-sentence."}},
    {"@type":"Question","name":"Where is my data stored?","acceptedAnswer":{"@type":"Answer","text":"On servers in Bangalore, India (DigitalOcean BLR1). Backups also in India. No replication outside the country."}},
    {"@type":"Question","name":"Do you store my Aadhaar / PAN / passport?","acceptedAnswer":{"@type":"Answer","text":"No. Pratyek refuses to store these and points you to DigiLocker, the government's official document vault. We keep only expiry dates."}},
    {"@type":"Question","name":"What does Pratyek cost?","acceptedAnswer":{"@type":"Answer","text":"Free during private beta (Apr-Jun 2026). After beta, a single per-household monthly subscription with no advertising tier and no data-sale tier."}},
    {"@type":"Question","name":"Will Pratyek auto-pay my bills?","acceptedAnswer":{"@type":"Answer","text":"No. Pratyek never handles payment credentials and never auto-pays anything. Pratyek's job is to remember and nudge — paying stays with you, on the platform you trust."}},
    {"@type":"Question","name":"Are you DPDP-compliant?","acceptedAnswer":{"@type":"Answer","text":"Yes. India's Digital Personal Data Protection Act 2023 is the law we are built around — consent, purpose limitation, data minimisation, retention, user rights, grievance officer."}},
    {"@type":"Question","name":"Do you train AI models on my messages?","acceptedAnswer":{"@type":"Answer","text":"No. We use Claude (Anthropic) and Gemma (Google) via OpenRouter under contracts that explicitly forbid training on our data."}},
    {"@type":"Question","name":"Who builds Pratyek?","acceptedAnswer":{"@type":"Answer","text":"Relynext Solutions Private Limited, an Indian product company registered in Mumbai under the Companies Act 2013. Pratyek is its first product."}}
  ]
}
@endverbatim</script>
</x-slot:structuredData>


{{-- ============================================================
     Page intro
     ============================================================ --}}
<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">FAQ</p>
        <h1>The questions families ask before they <em>invite Pratyek in</em>.</h1>
        <p class="lede" style="margin-top: var(--space-5);">
            We update this page as we learn what's unclear. If your question isn't here, write to us at
            <a href="mailto:hello@pratyek.com" style="color: var(--ink); text-decoration: underline; text-underline-offset: 3px;">hello@pratyek.com</a>
            and we'll add it.
        </p>
    </div>
</section>

{{-- ============================================================
     FAQs
     ============================================================ --}}
<section class="section">
    <div class="wrap">

        {{-- Group 1: Product --}}
        <div class="faq-group">
            <h2 class="faq-group-title">About the product</h2>

            <div class="faq">
                <button class="faq-q">Is Pratyek an app I have to install? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>No. Pratyek lives at a WhatsApp number. You add it to your contacts and message it like any other contact &mdash; forward bills, send voice notes, ask questions. There's nothing to install, nothing to learn. For retrieval and exports, there's a simple web dashboard at <strong>pratyek.com/memory</strong>, with one log-in for the whole household.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Can Pratyek join my existing family WhatsApp group? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>No, and we wouldn't ask for that even if WhatsApp allowed it. Group chats carry sensitive content that's none of our business. Instead, you create a small one-on-one or two-on-one chat with Pratyek and use that as your household's "filing thread". Anything you forward into that chat is what Pratyek sees. Your family group stays untouched.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">What languages does it understand? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>English, Hindi, Marathi, Tamil, Telugu, Kannada, Bengali, Gujarati, and Punjabi &mdash; plus the Hinglish your family actually speaks. Voice notes can switch mid-sentence; Pratyek handles that. We don't translate to English first; we read in the language you wrote in.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Does it work outside India? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>The product is built around Indian households &mdash; the bill formats, the festival calendar, the staff conventions, the DPDP-compliant data residency. NRI households with active financial obligations in India are welcome and supported. For households with no India footprint at all, we're not the right fit yet.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">What does it cost? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p><strong>Free during private beta</strong> (Apr&ndash;Jun 2026). After beta, Pratyek will be a paid subscription &mdash; pricing is being finalised, but it'll be a single per-household monthly fee, not per-user, not metered, no advertising tier. We'll publish the price in advance and grandfather beta households for the first year.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Will Pratyek auto-pay my bills? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>No. Pratyek <strong>never</strong> handles payment credentials and never auto-pays anything &mdash; this is a deliberate, permanent choice. Pratyek's job is to <em>remember</em> and <em>nudge</em>. The act of paying stays with you, on the platform you trust (UPI, net banking, etc.). Auto-pay is a class of bug we refuse to ship.</p>
                </div></div></div>
            </div>

        </div>

        {{-- Group 2: Data --}}
        <div class="faq-group">
            <h2 class="faq-group-title">About the data</h2>

            <div class="faq">
                <button class="faq-q">Where is my data stored? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>On servers in <strong>Bangalore, India</strong> &mdash; specifically, DigitalOcean's BLR1 region. Backups are also in India. We don't replicate your data outside the country.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Do you store my Aadhaar / PAN / passport? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p><strong>No.</strong> If you forward one of those, Pratyek refuses to store it and points you to <strong>DigiLocker</strong>, the government's official document vault. We keep only the expiry date, so we can nudge you before it lapses. The image stays with the government, not us.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">What happens to a voice note after I send it? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>The voice note is transcribed (in the language it's in, including Hinglish), and the structured information is filed. The audio file itself is deleted within 7 days at most. The transcript is kept only as long as it's useful &mdash; the line "Kamala ko 6 hazaar diya" lives with the salary record, not as a free-floating piece of audio.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Can I export everything? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Yes. From <strong>pratyek.com/memory</strong>, there's an Export button that gives you the entire household's data as JSON or CSV. No fees, no quotas, no waiting period. Your data is your data.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Can I delete everything? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Yes. Either via the dashboard or by sending Pratyek the message "delete everything" in WhatsApp. Within 30 days, your household's data is wiped from production servers and backups &mdash; required by the DPDP Act, and confirmed by an automated email when complete.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Do you sell data to advertisers or anyone else? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p><strong>No. Kasam se.</strong> Pratyek is paid for by the families who use it. Not by advertisers, not by data brokers, not by any third party. We don't share, sell, or barter your data. The only outbound connections we make are to Meta (to deliver WhatsApp messages back to you) and to our LLM partners (to extract structured data from your forwards), each under a Data Processing Agreement that forbids further use.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Are you DPDP-compliant? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Yes. India's Digital Personal Data Protection Act, 2023 is the law we're built around &mdash; consent, purpose limitation, data minimisation, retention windows, user rights, grievance officer. The full breakdown is on the <a href="{{ route('legal.dpdp') }}">DPDP compliance page</a>.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Do you train AI models on my messages? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>No. We use Claude (from Anthropic) and Gemma (from Google) via OpenRouter to extract structured data &mdash; both are accessed under contracts that explicitly forbid training on our data. We don't have our own models, and we don't sell access to your messages for anyone else's training either.</p>
                </div></div></div>
            </div>

        </div>

        {{-- Group 3: Family use --}}
        <div class="faq-group">
            <h2 class="faq-group-title">About using it as a family</h2>

            <div class="faq">
                <button class="faq-q">Who in my family needs to use it? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>One person is enough &mdash; the household CFO, in our shorthand. They forward what comes in and Pratyek does the rest. If two or three family members forward into the same chat, that's even better &mdash; Pratyek can attribute messages to whoever sent them ("Papa forwarded this", "Mummy paid this").</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Does every family member need to install something? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>No. Anyone with WhatsApp on their phone &mdash; which, in India, is everyone &mdash; can message Pratyek. There is nothing to install on top of WhatsApp.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">What if my parents only speak Hindi / Tamil / Bengali? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Excellent. Pratyek is at its best in Indian languages. They can send voice notes in their mother tongue and receive replies in the same language. We don't expect anyone to write in English.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Can my maid or driver use it? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>If you'd like them to. Pratyek can be configured so the maid sends a message marking herself present each morning, or so the driver sends "left" / "back" timestamps. Most households log staff activity themselves &mdash; both patterns work. The household decides.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">My family already has a chaotic group chat. Will Pratyek read it? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>No &mdash; and we couldn't even if we wanted to. WhatsApp doesn't allow third-party services to read existing groups. You create a separate, small chat with Pratyek and use that as the filing thread. The chaotic group stays as chaotic as it ever was.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Can I set different permissions for different family members? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Yes &mdash; from the dashboard. By default everyone in the household sees everything, but you can scope permissions (e.g., children see only their own school records, the maid sees only her attendance entries). This becomes meaningful at scale; in the beta, most households leave it on default.</p>
                </div></div></div>
            </div>

        </div>

        {{-- Group 4: Company --}}
        <div class="faq-group">
            <h2 class="faq-group-title">About the company</h2>

            <div class="faq">
                <button class="faq-q">Who builds Pratyek? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p><strong>Relynext Solutions Private Limited</strong>, an Indian product company registered in Mumbai. Pratyek is its first product. Every contract &mdash; with WhatsApp, with our LLM partners, with our hosting provider &mdash; is signed under that name. See the <a href="{{ route('about') }}">About page</a> for the full legal entity block.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Are you funded? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Bootstrapped by the founders to date. We may take patient capital later if it lets us serve more families without compromising the product &mdash; but we will never take funding that requires us to advertise, sell data, or grow at a pace that breaks the trust relationship with households.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Who do I contact if something goes wrong? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Email <a href="mailto:hello@pratyek.com">hello@pratyek.com</a>. A real person reads it &mdash; same email for support, billing, press, partnerships. For DPDP-related grievances specifically, the grievance officer's contact is on the <a href="{{ route('legal.dpdp') }}">DPDP page</a>.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">How do I report a bug or request a feature? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Just tell Pratyek in WhatsApp &mdash; "bug:" or "request:" prefix is enough. Inside the dashboard, the <strong>My Requests</strong> section lists every request you've made, with status. We aim to reply with a status &mdash; "in progress", "shipped", "won't build" with reason &mdash; within seven days.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Are you hiring? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Slowly. If you've built consumer products in India and care about the quality bar described elsewhere on this site, write to <a href="mailto:hello@pratyek.com">hello@pratyek.com</a> with what you've built and why this problem speaks to you.</p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">Why "Pratyek"? <span class="faq-mark"><x-icon name="plus" /></span></button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>Pratyek (<span class="devanagari">प्रत्येक</span>) is the Sanskrit and Hindi word for "every", "each one". It's the right word for what the product does &mdash; it cares about every bill, every salary, every renewal, every birthday &mdash; and for who it serves: every household, one at a time, on its own terms.</p>
                </div></div></div>
            </div>

        </div>

    </div>
</section>

{{-- ============================================================
     CTA
     ============================================================ --}}
<section class="cta-block">
    <div class="wrap">
        <h2>Still curious?</h2>
        <p>
            Apply for the private beta below, or write to <a href="mailto:hello@pratyek.com" style="color: var(--ink); text-decoration: underline; text-underline-offset: 3px;">hello@pratyek.com</a>.
            We answer every email.
        </p>
        <div class="cta-block-actions">
            <a href="https://tally.so/r/2ExJyD" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                Apply for private beta
                <x-icon name="arrow-right" />
            </a>
            <a href="{{ route('contact') }}" class="btn-link">
                Contact us
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
