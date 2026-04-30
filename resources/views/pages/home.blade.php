<x-layouts.app
    title="Pratyek — WhatsApp Concierge for Indian Households"
    description="WhatsApp-native household concierge for Indian families. Forward bills, send voice notes — Pratyek remembers. DPDP-compliant. By Relynext Solutions, Mumbai."
    keywords="WhatsApp household concierge India, Indian family bill reminder, household management WhatsApp, family concierge India, Pratyek, Relynext Solutions"
    og-image="/og/default.svg"
    page-type="WebPage"
>

<x-slot:structuredData>
{{-- WebSite + SearchAction (sitelinks searchbox eligibility) --}}
<script type="application/ld+json">@verbatim
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "@id": "https://pratyek.com/#website",
  "url": "https://pratyek.com",
  "name": "Pratyek",
  "alternateName": "प्रत्येक",
  "description": "WhatsApp-native household concierge for Indian families.",
  "inLanguage": "en-IN",
  "publisher": { "@id": "https://pratyek.com/#organization" },
  "potentialAction": [
    {
      "@type": "SearchAction",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "https://memory.pratyek.com?q={search_term_string}"
      },
      "query-input": "required name=search_term_string"
    }
  ]
}
@endverbatim</script>

{{-- SoftwareApplication describing the product itself --}}
<script type="application/ld+json">@verbatim
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "@id": "https://pratyek.com/#software",
  "name": "Pratyek",
  "applicationCategory": "LifestyleApplication",
  "applicationSubCategory": "Household management",
  "operatingSystem": "WhatsApp, Web",
  "url": "https://pratyek.com",
  "description": "Pratyek is a WhatsApp-native household concierge for Indian families. Forward bills, send voice notes, ask in any Indian language — Pratyek extracts, files, and remembers.",
  "inLanguage": ["en", "hi", "mr", "ta", "te", "kn", "bn", "gu", "pa"],
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "INR",
    "availability": "https://schema.org/InStock",
    "description": "Free to use; no advertising tier, no data-sale tier."
  },
  "publisher": { "@id": "https://pratyek.com/#organization" },
  "featureList": [
    "Bills & utilities tracking",
    "Renewals and expiry tracking",
    "Document expiry tracking via DigiLocker",
    "Vehicle records and PUC reminders",
    "Domestic staff attendance and salary",
    "Appliance warranties and service cycles",
    "Subscription and delivery management",
    "Family occasions and festival prep",
    "Health reminders and pet care",
    "Education fees and exam dates",
    "Finance EMIs SIPs tax deadlines",
    "Coordination — shared lists, todos, contacts"
  ]
}
@endverbatim</script>
</x-slot:structuredData>


{{-- ============================================================
     Hero
     ============================================================ --}}
<section class="hero">
    <div class="wrap">
        <p class="hero-eyebrow">A second mind for the household CFO</p>
        <h1>
            Your family's WhatsApp forgets everything.
            <em>We built something that remembers.</em>
        </h1>
        <p class="hero-sub">
            Forward a bill. Send a voice note about the maid's leave. Ask in Hinglish when the car insurance expires.
            Pratyek reads, sorts, and remembers — quietly, in the background, in the chat your family already lives in.
        </p>
        <div class="hero-actions">
            <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                <x-icon name="whatsapp" />
                Start on WhatsApp
            </a>
            <a href="{{ route('product') }}" class="btn-link">
                See how it works
                <x-icon name="arrow-right" />
            </a>
        </div>
        <p class="hero-fineprint">
            Live now &middot; <a href="https://wa.me/919372023537?text=Hi" style="color: var(--ink); text-decoration: underline; text-underline-offset: 3px;">+91 93720 23537</a> &middot; no app to install &middot; works inside WhatsApp
        </p>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Founder's story (the Why)
     ============================================================ --}}
<section class="editorial">
    <div class="wrap-narrow">
        <p class="editorial-kicker">Why Pratyek</p>
        <h2>One Diwali, my mother paid the maid's bonus twice.</h2>
        <div class="editorial-body" style="margin-top: var(--space-6);">
            <p class="dropcap">
                Not because she's careless &mdash; she's the most careful person I know. She'd handed over an envelope
                three weeks before Diwali, then again on the day itself, the way a hundred small things flow through
                an Indian household: half-remembered, half-noted, never written down. The maid said nothing. Why would she.
            </p>
            <p>
                Later that week I watched my mother scroll back through eight months of WhatsApp groups looking for the
                rent receipt I'd sent in March. She never found it. The chat had moved on &mdash; sweet messages,
                forwarded videos, a poll about the building's water tank, my cousin's engagement photos.
                The receipt was somewhere in there. It might as well have been in the Indian Ocean.
            </p>
            <p>
                What the household needs isn't another app. It needs <em>memory</em>. A quiet, patient,
                Indian-tongued memory that lives where the family already talks &mdash; on WhatsApp &mdash;
                and remembers what the chat itself forgets the moment the next message arrives.
            </p>
            <p>
                That's the only thing Pratyek does. It listens to the household's right hand.
                It writes everything down. And when you need it, it remembers.
            </p>
        </div>
        <p class="signoff">&mdash; a story from <strong>one of the makers</strong> &middot; Mumbai</p>
    </div>
</section>

{{-- ============================================================
     Two surfaces
     ============================================================ --}}
<section class="surfaces">
    <div class="wrap" style="margin-bottom: var(--space-7);">
        <p class="kicker kicker--red">The product, in one sentence</p>
        <h2 style="margin-top: var(--space-3); max-width: 22ch;">
            WhatsApp <em>writes.</em> The dashboard <em>reads.</em>
        </h2>
    </div>

    <div class="surfaces-grid">
        <div class="surface">
            <p class="surface-label">WhatsApp &mdash; capture</p>
            <h3 class="surface-name">The chat your family already uses.</h3>
            <p class="surface-caption">
                Forward a bill, send a voice note, drop a photo of the warranty card. Pratyek extracts, files,
                and confirms back &mdash; in the language you wrote in.
            </p>
        </div>

        <div class="bridge" aria-hidden="true">
            <span class="bridge-line"></span>
            <span class="bridge-label">feeds</span>
            <span class="bridge-line"></span>
        </div>

        <div class="surface">
            <p class="surface-label">memory.pratyek.com &mdash; retrieval</p>
            <h3 class="surface-name">Everything sorted, searchable, exportable.</h3>
            <p class="surface-caption">
                Bills, renewals, staff attendance, appliance warranties &mdash; all in one quiet dashboard.
                Sidebar to filter, search across everything, export anytime.
            </p>
        </div>
    </div>
</section>

{{-- ============================================================
     Scenes (4 selected)
     ============================================================ --}}
<section class="section">
    <div class="wrap-wide">
        <div class="section-head">
            <p class="kicker">Four moments</p>
            <h2 style="max-width: 24ch;">What it looks like inside the chat.</h2>
            <p class="lede" style="margin-top: var(--space-3); max-width: 56ch;">
                Pratyek lives at <strong><a href="https://wa.me/919372023537?text=Hi" style="color: var(--ink); text-decoration: underline; text-decoration-color: var(--rule-strong); text-underline-offset: 4px;">+91 93720 23537</a></strong>. You message it like any other contact.
                Below: four real beats, four real days.
            </p>
        </div>

        <div class="scenes-grid">

            {{-- Scene 1 — Bill forwarded --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>Papa forwards the electricity bill.</strong> Pratyek extracts the amount, due date, and
                    consumer number, files it under <em>Bills</em>, and replies in eight seconds.
                </p>
                <div class="wa-frame" aria-label="WhatsApp chat: bill forwarded">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact">
                            <div class="wa-name">Pratyek</div>
                            <div class="wa-status">online</div>
                        </div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--out">
                            <div class="wa-msg-attachment">
                                <div class="wa-msg-attachment-icon"><x-icon name="document" /></div>
                                <div>
                                    <div class="wa-msg-attachment-name">Adani-Bill-Apr2026.pdf</div>
                                    <div class="wa-msg-attachment-meta">2 pages &middot; 184 KB</div>
                                </div>
                            </div>
                            <span style="font-size:13px;color:var(--ink-soft);">file kar do</span>
                            <span class="wa-msg-meta">10:42 AM <span class="wa-msg-ticks">
                                <svg viewBox="0 0 16 11" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 6l3 3L11 1M5 6l3 3 7-8"/></svg>
                            </span></span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <div class="wa-card">
                                <div class="wa-card-title">Adani Electricity &middot; April</div>
                                <div class="wa-card-row"><span>Consumer no.</span><strong>10212 21178</strong></div>
                                <div class="wa-card-row"><span>Amount</span><strong>&#8377;4,237</strong></div>
                                <div class="wa-card-row"><span>Due</span><strong>1 May 2026</strong></div>
                                <div class="wa-card-foot">Filed under Bills &middot; I'll nudge on 28 Apr</div>
                            </div>
                            <span style="font-size:13.5px;">Got it. Saved.</span>
                            <span class="wa-msg-meta">10:42 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Scene 2 — Hinglish voice note about staff --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>Mummy sends a Hinglish voice note about Kamala's salary.</strong> Pratyek transcribes,
                    logs the payment, updates the staff register, deletes the audio.
                </p>
                <div class="wa-frame" aria-label="WhatsApp chat: voice note about staff">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact">
                            <div class="wa-name">Pratyek</div>
                            <div class="wa-status">online</div>
                        </div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--out">
                            <div class="wa-voice">
                                <div class="wa-voice-play"><x-icon name="arrow-right" /></div>
                                <div class="wa-voice-wave">
                                    @for ($i = 0; $i < 28; $i++)
                                        <span style="height: {{ 4 + (($i * 7) % 14) }}px;"></span>
                                    @endfor
                                </div>
                                <span class="wa-voice-time">0:09</span>
                            </div>
                            <span class="wa-msg-meta">9:14 AM <span class="wa-msg-ticks">
                                <svg viewBox="0 0 16 11" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 6l3 3L11 1M5 6l3 3 7-8"/></svg>
                            </span></span>
                        </div>
                        <div class="wa-msg wa-msg--in" style="font-style: italic; color: var(--ink-mute);">
                            <span style="font-size:13px;">heard: &ldquo;Kamala ko April salary de diya, 6 hazaar.&rdquo;</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <div class="wa-card">
                                <div class="wa-card-title">Staff &middot; Kamala (maid)</div>
                                <div class="wa-card-row"><span>April salary</span><strong>&#8377;6,000 paid</strong></div>
                                <div class="wa-card-row"><span>Diwali bonus 2025</span><strong>&#8377;3,000 paid</strong></div>
                                <div class="wa-card-foot">Audio deleted &middot; only the line above is stored</div>
                            </div>
                            <span style="font-size:13.5px;">Logged.</span>
                            <span class="wa-msg-meta">9:14 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Scene 3 — Renewal nudge --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>Renewal pings, ahead of time.</strong> Three weeks before the policy lapses,
                    Pratyek nudges &mdash; in the chat, not in a notification you'll miss.
                </p>
                <div class="wa-frame" aria-label="WhatsApp chat: renewal nudge">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact">
                            <div class="wa-name">Pratyek</div>
                            <div class="wa-status">online</div>
                        </div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--in">
                            <div class="wa-card">
                                <div class="wa-card-title" style="color: var(--amber);">Renewing in 21 days</div>
                                <div class="wa-card-row"><span>Bajaj Allianz &middot; Honda City</span><strong></strong></div>
                                <div class="wa-card-row"><span>Policy ends</span><strong>20 May 2026</strong></div>
                                <div class="wa-card-row"><span>Last paid</span><strong>&#8377;14,860</strong></div>
                                <div class="wa-card-foot">Want me to remind you again next Monday?</div>
                            </div>
                            <span style="font-size:13.5px;">Heads up &mdash; car insurance up for renewal.</span>
                            <span class="wa-msg-meta">7:30 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--out">
                            <span style="font-size:13.5px;">haan monday morning bata dena</span>
                            <span class="wa-msg-meta">7:31 AM <span class="wa-msg-ticks">
                                <svg viewBox="0 0 16 11" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 6l3 3L11 1M5 6l3 3 7-8"/></svg>
                            </span></span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">Done. Pinging Monday at 9.</span>
                            <span class="wa-msg-meta">7:31 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Scene 4 — Hinglish question --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>Ask anything, in any language.</strong> Pratyek understands Hindi, English, Marathi, Tamil,
                    Telugu, Kannada, Bengali, Gujarati, Punjabi &mdash; and the Hinglish your family actually speaks.
                </p>
                <div class="wa-frame" aria-label="WhatsApp chat: Hinglish question">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact">
                            <div class="wa-name">Pratyek</div>
                            <div class="wa-status">online</div>
                        </div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--out">
                            <span style="font-size:13.5px;">Diwali pe Kamala ko bonus diya kya last year?</span>
                            <span class="wa-msg-meta">8:55 PM <span class="wa-msg-ticks">
                                <svg viewBox="0 0 16 11" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 6l3 3L11 1M5 6l3 3 7-8"/></svg>
                            </span></span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">
                                Haan, 2025 mein &#8377;3,000 diya tha &mdash; 30 Oct, Mummy ne envelope diya.
                                2024 mein bhi same amount. Is saal kab dena hai bata du?
                            </span>
                            <span class="wa-msg-meta">8:55 PM</span>
                        </div>
                        <div class="wa-msg wa-msg--out">
                            <span style="font-size:13.5px;">haan 15 Oct ko nudge kar dena</span>
                            <span class="wa-msg-meta">8:56 PM <span class="wa-msg-ticks">
                                <svg viewBox="0 0 16 11" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 6l3 3L11 1M5 6l3 3 7-8"/></svg>
                            </span></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div style="text-align: center; margin-top: var(--space-7);">
            <a href="{{ route('product') }}" class="btn-link">
                See all eight scenes &mdash; rent, attendance, passport, Sunday digest, more
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Memory dashboard preview
     ============================================================ --}}
<section class="dashboard-section">
    <div class="wrap-wide">
        <div class="section-head section-head--center">
            <p class="kicker">The other surface</p>
            <h2 style="max-width: 24ch;">Open <em>memory.pratyek.com</em>. Your household, sorted.</h2>
        </div>

        <div class="dash-frame" aria-label="Memory dashboard preview">
            <div class="dash-chrome">
                <div class="dash-chrome-dots"><span></span><span></span><span></span></div>
                <div class="dash-url"><strong>pratyek.com</strong>/memory/bills</div>
            </div>
            <div class="dash-grid">
                <aside class="dash-sidebar">
                    <div class="dash-sidebar-title">Memory</div>
                    <div class="dash-nav-item dash-nav-item--active">
                        <x-icon name="bill" /> Bills
                    </div>
                    <div class="dash-nav-item"><x-icon name="renewal" /> Renewals</div>
                    <div class="dash-nav-item"><x-icon name="document" /> Documents</div>
                    <div class="dash-nav-item"><x-icon name="vehicle" /> Vehicles</div>
                    <div class="dash-nav-item"><x-icon name="staff" /> Staff</div>
                    <div class="dash-nav-item"><x-icon name="appliance" /> Appliances</div>
                    <div class="dash-nav-item"><x-icon name="subscription" /> Subscriptions</div>
                    <div class="dash-nav-item"><x-icon name="occasion" /> Occasions</div>
                    <div class="dash-nav-item"><x-icon name="health" /> Health</div>
                    <div class="dash-nav-item"><x-icon name="finance" /> Finance</div>
                </aside>
                <div class="dash-main">
                    <div class="dash-main-head">
                        <h3 class="dash-h1">Bills</h3>
                        <div class="dash-tabs">
                            <span class="dash-tab dash-tab--active">All</span>
                            <span class="dash-tab">Due soon</span>
                            <span class="dash-tab">Paid</span>
                            <span class="dash-tab">Overdue</span>
                        </div>
                    </div>

                    <div class="dash-kpis">
                        <div class="dash-kpi">
                            <div class="dash-kpi-label">Due in 7 days</div>
                            <div class="dash-kpi-value">&#8377;12,840</div>
                            <div class="dash-kpi-meta dash-kpi-meta--amber">3 bills</div>
                        </div>
                        <div class="dash-kpi">
                            <div class="dash-kpi-label">Paid this month</div>
                            <div class="dash-kpi-value">&#8377;28,490</div>
                            <div class="dash-kpi-meta dash-kpi-meta--green">8 bills</div>
                        </div>
                        <div class="dash-kpi">
                            <div class="dash-kpi-label">Overdue</div>
                            <div class="dash-kpi-value">&#8377;0</div>
                            <div class="dash-kpi-meta">All clear</div>
                        </div>
                    </div>

                    <div class="dash-table">
                        <div class="dash-table-row dash-table-row--head">
                            <div>Provider</div>
                            <div>Account</div>
                            <div>Amount</div>
                            <div>Status</div>
                        </div>
                        <div class="dash-table-row">
                            <div><strong>Adani Electricity</strong><br><small style="color:var(--ink-mute);font-size:11.5px;">Apr 2026</small></div>
                            <div>10212 21178</div>
                            <div class="dash-table-amount">&#8377;4,237</div>
                            <div><span class="pill pill--due">due 1 May</span></div>
                        </div>
                        <div class="dash-table-row">
                            <div><strong>JioFiber</strong><br><small style="color:var(--ink-mute);font-size:11.5px;">Apr 2026</small></div>
                            <div>JFB &middot; 8830</div>
                            <div class="dash-table-amount">&#8377;1,499</div>
                            <div><span class="pill pill--paid">paid</span></div>
                        </div>
                        <div class="dash-table-row">
                            <div><strong>Tata Play</strong><br><small style="color:var(--ink-mute);font-size:11.5px;">Apr 2026</small></div>
                            <div>1037 4421</div>
                            <div class="dash-table-amount">&#8377;599</div>
                            <div><span class="pill pill--paid">paid</span></div>
                        </div>
                        <div class="dash-table-row">
                            <div><strong>BMC Property Tax</strong><br><small style="color:var(--ink-mute);font-size:11.5px;">FY 2025&ndash;26</small></div>
                            <div>K/W 2199</div>
                            <div class="dash-table-amount">&#8377;7,104</div>
                            <div><span class="pill pill--due">due 30 Apr</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     Promise (Kasam se)
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
                    Pratyek is paid for by the families who use it &mdash; not by advertisers, not by data brokers,
                    not by anyone hovering over your shoulder. We don't read your other WhatsApp groups.
                    We don't store Aadhaar, PAN, or passport scans. We don't train models on your messages.
                </p>
                <p>
                    Your data sits on servers in <strong>Bangalore, India</strong>, behind India's
                    <strong>DPDP Act</strong>. You can export everything, anytime. You can delete everything,
                    and within 30 days it's gone &mdash; by law and by design.
                </p>
                <p style="font-style: italic; color: var(--ink); margin-top: var(--space-5);">
                    We WhatsApp our own mothers on this product. Trust is the whole game.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     Three FAQs
     ============================================================ --}}
<section class="section">
    <div class="wrap-narrow">
        <div class="section-head">
            <p class="kicker">Quick answers</p>
            <h2>Three questions families ask first.</h2>
        </div>

        <div class="faq-section" style="padding-block: 0;">
            <div class="faq">
                <button class="faq-q">
                    Is Pratyek an app I have to install?
                    <span class="faq-mark"><x-icon name="plus" /></span>
                </button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>
                        No. Pratyek lives at a WhatsApp number. You add it to your contacts, message it like any
                        other contact, and forward bills or send voice notes to it. There's nothing to install,
                        nothing to learn. Anyone in the family who already uses WhatsApp can use Pratyek.
                    </p>
                    <p>
                        For retrieval and exports, there's a simple web dashboard at <strong>memory.pratyek.com</strong>
                        &mdash; one log-in for the whole household.
                    </p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">
                    Can Pratyek join my existing family WhatsApp group?
                    <span class="faq-mark"><x-icon name="plus" /></span>
                </button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>
                        Pratyek does not read existing WhatsApp groups. WhatsApp doesn't allow that, and we wouldn't
                        ask for it &mdash; group chats carry sensitive content that is none of our business.
                    </p>
                    <p>
                        Instead, you create a small one-on-one or two-on-one chat with Pratyek and use that as your
                        household's "filing thread". Anything you forward into that chat is what Pratyek sees.
                        Your family group stays untouched.
                    </p>
                </div></div></div>
            </div>

            <div class="faq">
                <button class="faq-q">
                    What languages does it understand?
                    <span class="faq-mark"><x-icon name="plus" /></span>
                </button>
                <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content">
                    <p>
                        English, Hindi, Marathi, Tamil, Telugu, Kannada, Bengali, Gujarati, and Punjabi &mdash;
                        plus the Hinglish your family actually speaks. Voice notes can switch mid-sentence.
                        Pratyek is built for multilingual Indian households, not for translating to English first.
                    </p>
                </div></div></div>
            </div>
        </div>

        <p style="text-align: center; margin-top: var(--space-7);">
            <a href="{{ route('faq') }}" class="btn-link">
                See the full FAQ &mdash; 25 more answers
                <x-icon name="arrow-right" />
            </a>
        </p>
    </div>
</section>

{{-- ============================================================
     Closing CTA
     ============================================================ --}}
<section class="live-cta">
    <div class="wrap">
        <div class="live-cta-card">
            <div class="live-cta-stamp">Live</div>

            <div class="live-cta-grid">
                <div class="live-cta-text">
                    <p class="kicker kicker--red" style="margin-bottom: var(--space-3);">Pratyek is live</p>
                    <h2 style="margin-bottom: var(--space-4);">
                        Add the number. Send <em>"Hi"</em>. You're in.
                    </h2>
                    <p class="live-cta-number">
                        <a href="https://wa.me/919372023537?text=Hi">
                            <x-icon name="whatsapp" /> +91 93720 23537
                        </a>
                    </p>
                    <p class="live-cta-sub">
                        No app to install. No form to fill. No beta waitlist.
                        Just the WhatsApp number your household will message
                        for everything from now on.
                    </p>
                    <div class="live-cta-actions">
                        <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                            <x-icon name="whatsapp" />
                            Start on WhatsApp
                        </a>
                        <a href="{{ route('trust') }}" class="btn-link">
                            Read our trust commitments
                            <x-icon name="arrow-right" />
                        </a>
                    </div>
                </div>

                <figure class="live-cta-qr">
                    <a href="https://wa.me/919372023537?text=Hi" target="_blank" rel="noopener noreferrer" aria-label="Open WhatsApp chat with Pratyek">
                        <img src="/qr/whatsapp.svg" alt="QR code &mdash; scan to open WhatsApp chat with Pratyek at +91 93720 23537" width="220" height="220">
                    </a>
                    <figcaption>Or scan with your phone's camera.</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

</x-layouts.app>
