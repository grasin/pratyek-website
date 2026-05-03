<x-layouts.app
    title="How Pratyek Works — WhatsApp Memory"
    description="How Pratyek, a product of Relynext Solutions, a partnership firm, works: capture in WhatsApp, retrieve at memory.pratyek.com. Bills, tasks, assets, services, staff, family records — all sorted, all searchable."
    keywords="how Pratyek works, Relynext Solutions, WhatsApp household management, Indian family memory app, voice note bill reminder, DigiLocker integration, household app two surfaces, capture bills WhatsApp, Indian language voice note bill, Hinglish productivity assistant, family CFO dashboard"
    og-image="/og/default.svg"
    page-type="WebPage"
    :breadcrumbs="[
        ['name' => 'Home',    'url' => '/'],
        ['name' => 'Product', 'url' => '/product'],
    ]"
>

<x-slot:structuredData>
<script type="application/ld+json">@verbatim
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "@id": "https://pratyek.com/#software",
  "name": "Pratyek",
  "applicationCategory": "LifestyleApplication",
  "applicationSubCategory": "Household management concierge",
  "operatingSystem": "WhatsApp, Web",
  "url": "https://pratyek.com",
  "description": "Two-surface household concierge: capture in WhatsApp (forward bills, voice notes, photos), retrieve at memory.pratyek.com (sortable, searchable, exportable).",
  "inLanguage": ["en", "hi", "mr", "ta", "te", "kn", "bn", "gu", "pa"],
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "INR",
    "availability": "https://schema.org/LimitedAvailability"
  },
  "publisher": { "@id": "https://pratyek.com/#organization" }
}
@endverbatim</script>
</x-slot:structuredData>


{{-- ============================================================
     Page intro
     ============================================================ --}}
<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">A Relynext Solutions product &middot; How it works</p>
        <h1>WhatsApp <em>writes.</em> The dashboard <em>reads.</em></h1>
        <p class="lede" style="margin-top: var(--space-5);">
            Pratyek &mdash; a product of <strong>Relynext Solutions</strong> &mdash; runs on two
            surfaces. The WhatsApp chat is where your family captures, effortlessly, in the language they already
            speak. The web dashboard at <strong>memory.pratyek.com</strong> is where you retrieve, sort, and export.
            One product, two doors.
        </p>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Two surfaces, expanded
     ============================================================ --}}
<section class="surfaces">
    <div class="surfaces-grid">
        <div class="surface">
            <p class="surface-label">Surface 1 &middot; WhatsApp</p>
            <h3 class="surface-name">Capture is free, friction-free, and lives where you already are.</h3>
            <p class="surface-caption">
                Your family doesn't learn a new app. They just forward, send, or speak &mdash; in any of nine Indian
                languages, including Hinglish. Pratyek extracts what's useful, files it under the right category,
                and confirms back in the same chat thread, in the same language.
            </p>
            <ul class="trust-list" style="margin-top: var(--space-4);">
                <li>Forward any document &mdash; PDF, photo, scan</li>
                <li>Send voice notes (any length, any language)</li>
                <li>Type Hinglish, English, Hindi, regional &mdash; Pratyek understands</li>
                <li>Ask questions about your own household, get the answer in chat</li>
            </ul>
        </div>

        <div class="bridge" aria-hidden="true">
            <span class="bridge-line"></span>
            <span class="bridge-label">feeds</span>
            <span class="bridge-line"></span>
        </div>

        <div class="surface">
            <p class="surface-label">Surface 2 &middot; memory.pratyek.com</p>
            <h3 class="surface-name">Retrieval is precise, sortable, and exportable on demand.</h3>
            <p class="surface-caption">
                Open the dashboard. Sidebar lists the same Memory surfaces the product uses every day:
                Reminders, Tasks, Bills, Assets, Services, Staff, and Family. Each tab is a real product
                surface, not a marketing screenshot. Filter by date, by family member, by status. Search
                across everything.
            </p>
            <ul class="trust-list" style="margin-top: var(--space-4);">
                <li>One log-in for the entire household</li>
                <li>Filter by category, family member, date, status</li>
                <li>Search across every entity, every receipt, every voice note line</li>
                <li>Export the whole archive as JSON or CSV at any time</li>
            </ul>
        </div>
    </div>
</section>

{{-- ============================================================
     Memory model — what we keep / never keep
     ============================================================ --}}
<section class="section">
    <div class="wrap">
        <div class="section-head">
            <p class="kicker">The memory model</p>
            <h2>Pratyek is opinionated about what it remembers.</h2>
            <p class="lede" style="margin-top: var(--space-3);">
                A second mind isn't a hoarder. We keep what helps the household run; we refuse what would put the
                household at risk. The line is bright, and we hold it.
            </p>
        </div>

        <div class="trust-block" style="border-top: 0;">
            <div class="trust-block-head">
                <p class="trust-block-num">01 &middot; Captured</p>
                <h3 class="trust-block-name">What Pratyek remembers, by category.</h3>
            </div>
            <div class="trust-block-body">
                <p>
                    Reminders (today, calendar, rules), tasks and shopping lists, bills and renewals,
                    assets (appliances, warranties, vehicles, property), recurring services (milk,
                    newspaper, ironing, therapist visits), staff attendance and salary, and family records
                    (members, document references, contacts, occasions, health).
                </p>
                <p>
                    Pratyek captures <strong>metadata</strong> &mdash; the structured facts the household needs to
                    act on. The original document is referenced, not hoarded; the audio is transcribed, not stored.
                </p>
            </div>
        </div>

        <div class="trust-block">
            <div class="trust-block-head">
                <p class="trust-block-num">02 &middot; Refused</p>
                <h3 class="trust-block-name">What it never stores, no matter who sends it.</h3>
            </div>
            <div class="trust-block-body">
                <p>
                    Some documents don't belong on a third-party server, no matter how good the encryption.
                    Pratyek refuses Aadhaar numbers, PAN card images, passport scans, mediclaim card images,
                    driving licence images. If you forward one, Pratyek replies with a polite redirect to
                    <strong>DigiLocker</strong>, the government's own vault, and asks you to share only the
                    expiry date.
                </p>
                <ul class="never-list">
                    <li><x-icon name="lock" /> Aadhaar number, PAN images, passport scans</li>
                    <li><x-icon name="lock" /> Mediclaim card images, driving licence images</li>
                    <li><x-icon name="lock" /> Bank account numbers, credit card numbers, UPI PINs</li>
                    <li><x-icon name="lock" /> Anything in your existing family WhatsApp groups</li>
                </ul>
            </div>
        </div>

        <div class="trust-block">
            <div class="trust-block-head">
                <p class="trust-block-num">03 &middot; The DigiLocker pattern</p>
                <h3 class="trust-block-name">Your IDs live in the government's vault. We hold the dates.</h3>
            </div>
            <div class="trust-block-body">
                <p>
                    Every Indian adult is entitled to a free <strong>DigiLocker</strong> account &mdash; a
                    government-run vault that already holds your passport, driving licence, vehicle RC, and more.
                    Pratyek doesn't try to replicate it. Instead, when you ask "when does my passport expire?",
                    Pratyek answers from the date it remembers, and points you to DigiLocker for the document
                    itself.
                </p>
                <p>
                    The result: nothing sensitive is ever in our database. The household still gets the
                    nudge ten weeks before the passport expires.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     8 scenes
     ============================================================ --}}
<section class="section">
    <div class="wrap-wide">
        <div class="section-head">
            <p class="kicker">Eight everyday beats</p>
            <h2 style="max-width: 28ch;">Real scenes from real households &mdash; what the chat looks like.</h2>
        </div>

        <div class="scenes-grid" data-nosnippet>

            {{-- 1. Bill --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>1 &middot; Papa forwards the electricity bill.</strong>
                    Pratyek extracts amount, due date, consumer number; files it under <em>Bills</em>; replies in eight seconds.
                </p>
                <div class="wa-frame">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact"><div class="wa-name">Pratyek</div><div class="wa-status">online</div></div>
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
                            <span style="font-size:13px;">file kar do</span>
                            <span class="wa-msg-meta">10:42 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <div class="wa-card">
                                <div class="wa-card-title">Adani Electricity &middot; April</div>
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

            {{-- 2. Voice note --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>2 &middot; Hinglish voice note about the maid's salary.</strong>
                    Pratyek transcribes, logs the payment, deletes the audio after 7 days.
                </p>
                <div class="wa-frame">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact"><div class="wa-name">Pratyek</div><div class="wa-status">online</div></div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--out">
                            <div class="wa-voice">
                                <div class="wa-voice-play"><x-icon name="arrow-right" /></div>
                                <div class="wa-voice-wave">
                                    @for ($i = 0; $i < 28; $i++)<span style="height: {{ 4 + (($i * 7) % 14) }}px;"></span>@endfor
                                </div>
                                <span class="wa-voice-time">0:09</span>
                            </div>
                            <span class="wa-msg-meta">9:14 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--in" style="font-style: italic; color: var(--ink-mute);">
                            <span style="font-size:13px;">heard: &ldquo;Kamala ko April salary de diya, 6 hazaar.&rdquo;</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">Logged under Staff &rsaquo; Kamala &rsaquo; April salary &mdash; &#8377;6,000.</span>
                            <span class="wa-msg-meta">9:14 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 3. Rent --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>3 &middot; The rent thread the family already had, but searchable.</strong>
                    UPI screenshot in, receipt found in two months by month name, no more scrolling.
                </p>
                <div class="wa-frame">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact"><div class="wa-name">Pratyek</div><div class="wa-status">online</div></div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--out">
                            <div class="wa-msg-attachment">
                                <div class="wa-msg-attachment-icon"><x-icon name="document" /></div>
                                <div>
                                    <div class="wa-msg-attachment-name">UPI receipt &middot; Apr rent</div>
                                    <div class="wa-msg-attachment-meta">screenshot.jpg</div>
                                </div>
                            </div>
                            <span style="font-size:13.5px;">april ka rent</span>
                            <span class="wa-msg-meta">3:18 PM</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <div class="wa-card">
                                <div class="wa-card-title">Rent &middot; April 2026</div>
                                <div class="wa-card-row"><span>Paid to</span><strong>Mehta landlord</strong></div>
                                <div class="wa-card-row"><span>Amount</span><strong>&#8377;42,000</strong></div>
                                <div class="wa-card-row"><span>Date</span><strong>3 Apr 2026</strong></div>
                                <div class="wa-card-foot">11 months on file &middot; ask "show me Jan rent" anytime</div>
                            </div>
                            <span class="wa-msg-meta">3:18 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 4. Attendance --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>4 &middot; Logging maid attendance, in three words.</strong>
                    "Maid leave Tuesday." Pratyek marks the day, asks if it's paid or unpaid.
                </p>
                <div class="wa-frame">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact"><div class="wa-name">Pratyek</div><div class="wa-status">online</div></div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--out">
                            <span style="font-size:13.5px;">kamala leave on tue</span>
                            <span class="wa-msg-meta">7:05 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">Marked Tue 28 Apr as leave for Kamala. Paid leave or unpaid?</span>
                            <span class="wa-msg-meta">7:05 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--out">
                            <span style="font-size:13.5px;">paid</span>
                            <span class="wa-msg-meta">7:05 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">Done. April: 22 days worked, 2 leave (paid), 1 leave (unpaid).</span>
                            <span class="wa-msg-meta">7:06 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 5. Renewal --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>5 &middot; Renewal pings 21 days before the policy lapses.</strong>
                    No notification, no email &mdash; in the chat where the family already lives.
                </p>
                <div class="wa-frame">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact"><div class="wa-name">Pratyek</div><div class="wa-status">online</div></div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--in">
                            <div class="wa-card">
                                <div class="wa-card-title" style="color: var(--amber);">Renewing in 21 days</div>
                                <div class="wa-card-row"><span>Bajaj Allianz &middot; Honda City</span><strong></strong></div>
                                <div class="wa-card-row"><span>Policy ends</span><strong>20 May 2026</strong></div>
                                <div class="wa-card-row"><span>Last paid</span><strong>&#8377;14,860</strong></div>
                            </div>
                            <span style="font-size:13.5px;">Heads up &mdash; car insurance up for renewal.</span>
                            <span class="wa-msg-meta">7:30 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--out">
                            <span style="font-size:13.5px;">monday morning bata dena</span>
                            <span class="wa-msg-meta">7:31 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">Done. Pinging Monday at 9.</span>
                            <span class="wa-msg-meta">7:31 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 6. Passport / DigiLocker redirect --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>6 &middot; Passport scan &mdash; politely redirected.</strong>
                    Pratyek refuses to store the image, asks for the expiry date, points to DigiLocker.
                </p>
                <div class="wa-frame">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact"><div class="wa-name">Pratyek</div><div class="wa-status">online</div></div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--out">
                            <div class="wa-msg-attachment">
                                <div class="wa-msg-attachment-icon"><x-icon name="document" /></div>
                                <div>
                                    <div class="wa-msg-attachment-name">passport-scan.jpg</div>
                                    <div class="wa-msg-attachment-meta">photo &middot; 2.1 MB</div>
                                </div>
                            </div>
                            <span class="wa-msg-meta">11:02 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">
                                I don't store passport scans &mdash; that belongs in <strong>DigiLocker</strong>,
                                the government's own vault. I've forgotten this image.
                            </span>
                            <span class="wa-msg-meta">11:02 AM</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">
                                Tell me just the <strong>expiry date</strong> and I'll nudge you 10 weeks before
                                renewal. The image stays with the government, not us.
                            </span>
                            <span class="wa-msg-meta">11:02 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 7. Sunday digest --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>7 &middot; Sunday morning, week ahead.</strong>
                    Five lines on what's coming, what's pending, what to do.
                </p>
                <div class="wa-frame">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact"><div class="wa-name">Pratyek</div><div class="wa-status">online</div></div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--in">
                            <div class="wa-card">
                                <div class="wa-card-title">Week of 28 April</div>
                                <div class="wa-card-row"><span>Adani electricity</span><strong>due Fri &middot; &#8377;4,237</strong></div>
                                <div class="wa-card-row"><span>BMC property tax</span><strong>due Wed &middot; &#8377;7,104</strong></div>
                                <div class="wa-card-row"><span>Kamala salary</span><strong>1 May &middot; &#8377;6,000</strong></div>
                                <div class="wa-card-row"><span>Anniversary</span><strong>Fri &middot; Mom &amp; Dad's 35th</strong></div>
                                <div class="wa-card-foot">Reply "skip week" anytime to silence Sundays.</div>
                            </div>
                            <span class="wa-msg-meta">Sun 8:00 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 8. Hinglish question --}}
            <div class="scene">
                <p class="scene-cap">
                    <strong>8 &middot; Ask anything, in any language.</strong>
                    Across all entities, all dates, all family members &mdash; one chat thread.
                </p>
                <div class="wa-frame">
                    <div class="wa-header">
                        <div class="wa-avatar">P</div>
                        <div class="wa-contact"><div class="wa-name">Pratyek</div><div class="wa-status">online</div></div>
                    </div>
                    <div class="wa-body">
                        <div class="wa-msg wa-msg--out">
                            <span style="font-size:13.5px;">Diwali pe Kamala ko bonus diya kya last year?</span>
                            <span class="wa-msg-meta">8:55 PM</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">
                                Haan, 2025 mein &#8377;3,000 &mdash; 30 Oct, Mummy ne envelope diya.
                                2024 mein bhi same amount. Is saal kab dena hai bata du?
                            </span>
                            <span class="wa-msg-meta">8:55 PM</span>
                        </div>
                        <div class="wa-msg wa-msg--out">
                            <span style="font-size:13.5px;">15 Oct ko nudge kar dena</span>
                            <span class="wa-msg-meta">8:56 PM</span>
                        </div>
                        <div class="wa-msg wa-msg--in">
                            <span style="font-size:13.5px;">Done.</span>
                            <span class="wa-msg-meta">8:56 PM</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     The dashboard, in full
     ============================================================ --}}
<section class="dashboard-section">
    <div class="wrap-wide">
        <div class="section-head section-head--center">
            <p class="kicker">The dashboard</p>
            <h2 style="max-width: 26ch;">Same household. Different surface.</h2>
            <p class="lede" style="margin-top: var(--space-3); max-width: 56ch;">
                Every household has its own private dashboard. Sidebar lists every category. Tabs filter status.
                Tables show the actual receipts. Search is across every entity Pratyek has ever filed for you.
            </p>
        </div>

        <div class="dash-frame" data-nosnippet>
            <div class="dash-chrome">
                <div class="dash-chrome-dots"><span></span><span></span><span></span></div>
                <div class="dash-url"><strong>memory.pratyek.com</strong>/bills</div>
            </div>
            <div class="dash-grid">
                <aside class="dash-sidebar">
                    <div class="dash-sidebar-title">Memory</div>
                    <div class="dash-nav-item"><x-icon name="clock" /> Reminders</div>
                    <div class="dash-nav-item"><x-icon name="check" /> Tasks</div>
                    <div class="dash-nav-item dash-nav-item--active"><x-icon name="bill" /> Bills</div>
                    <div class="dash-nav-item"><x-icon name="appliance" /> Assets</div>
                    <div class="dash-nav-item"><x-icon name="subscription" /> Services</div>
                    <div class="dash-nav-item"><x-icon name="staff" /> Staff</div>
                    <div class="dash-nav-item"><x-icon name="heart" /> Family</div>
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
                            <div>Provider</div><div>Account</div><div>Amount</div><div>Status</div>
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
                        <div class="dash-table-row">
                            <div><strong>Mahanagar Gas</strong><br><small style="color:var(--ink-mute);font-size:11.5px;">Apr 2026</small></div>
                            <div>MGL &middot; 4499</div>
                            <div class="dash-table-amount">&#8377;1,104</div>
                            <div><span class="pill pill--due">due 5 May</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p style="text-align: center; margin-top: var(--space-6); font-family: 'Inter', sans-serif; font-size: 13.5px; color: var(--ink-mute);">
            Every household sees their own dashboard. The chrome is a real product, not a marketing screenshot.
        </p>
    </div>
</section>

{{-- ============================================================
     CTA
     ============================================================ --}}
<section class="cta-block">
    <div class="wrap">
        <h2>Ready to invite Pratyek into your household?</h2>
        <p>
            Send "Hi" on WhatsApp and start with the first thing your household needs Pratyek to remember.
        </p>
        <div class="cta-block-actions">
            <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                <x-icon name="whatsapp" />
                Start on WhatsApp
            </a>
            <a href="{{ route('features') }}" class="btn-link">
                See every category Pratyek tracks
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

</x-layouts.app>
