<x-layouts.app
    title="Pratyek | India's Household Jugaad System"
    description="Chat with Pratyek on WhatsApp to turn bills, reminders, tasks, staff, services, assets, and family details into a Memory dashboard for every Indian home."
    og-image="/og/home.png"
    page-type="WebPage"
>

@php
    $heroFlow = [
        'surface' => 'Bills',
        'icon' => 'bill',
        'message' => 'Adani bill Rs 4,237 due 1 May. file kar do',
        'source' => 'WhatsApp message + PDF',
        'record' => 'Adani Electricity',
        'route' => 'memory.pratyek.com/bills',
        'status' => 'Due 1 May',
        'fields' => [
            ['Amount', '&#8377;4,237'],
            ['Consumer', '10212 21178'],
            ['Nudge', '28 Apr'],
        ],
    ];

    $flows = [
        [
            'surface' => 'Reminders',
            'icon' => 'clock',
            'message' => 'Remind me to renew car insurance next Monday at 9',
            'source' => 'Plain text',
            'record' => 'Car insurance renewal',
            'route' => 'memory.pratyek.com/reminders',
            'status' => 'Monday, 9:00 AM',
            'entities' => ['One-time nudges', 'Repeating rules', 'Done / snooze'],
            'fields' => [['Rule', 'One-time'], ['Owner', 'Household'], ['Action', 'Snooze / done']],
        ],
        [
            'surface' => 'Tasks',
            'icon' => 'check',
            'message' => 'Add milk, thyroid tablets, and school socks to shopping',
            'source' => 'WhatsApp list',
            'record' => 'Shopping list',
            'route' => 'memory.pratyek.com/tasks',
            'status' => '3 open items',
            'entities' => ['Todos', 'Shopping', 'Assignments'],
            'fields' => [['Milk', 'Pending'], ['Thyroid tablets', 'Pending'], ['School socks', 'Pending']],
        ],
        [
            'surface' => 'Bills',
            'icon' => 'bill',
            'message' => 'JioFiber Rs 1,499 paid today via UPI',
            'source' => 'Payment note',
            'record' => 'JioFiber',
            'route' => 'memory.pratyek.com/bills',
            'status' => 'Paid',
            'entities' => ['Utilities', 'School fees', 'Insurance', 'Property tax'],
            'fields' => [['Amount', '&#8377;1,499'], ['Period', 'May 2026'], ['Next due', '12 Jun']],
        ],
        [
            'surface' => 'Assets',
            'icon' => 'appliance',
            'message' => 'Bought LG washing machine Rs 32,000. 4 year warranty.',
            'source' => 'Receipt photo',
            'record' => 'LG washing machine',
            'route' => 'memory.pratyek.com/assets',
            'status' => 'Warranty saved',
            'entities' => ['Appliances', 'Vehicles', 'Property', 'Warranties'],
            'fields' => [['Price', '&#8377;32,000'], ['Warranty', '4 years'], ['Service', 'Annual']],
        ],
        [
            'surface' => 'Services',
            'icon' => 'subscription',
            'message' => 'Mahesh delivered 1.5L milk today. Rs 90.',
            'source' => 'Daily service log',
            'record' => 'Milk delivery',
            'route' => 'memory.pratyek.com/services',
            'status' => 'Today logged',
            'entities' => ['Milk', 'Newspaper', 'Ironing', 'Car wash'],
            'fields' => [['Quantity', '1.5L'], ['Rate', '&#8377;90'], ['Pattern', 'Daily']],
        ],
        [
            'surface' => 'Staff',
            'icon' => 'staff',
            'message' => 'Paid Kamala April salary 6000. She was off 2 days.',
            'source' => 'Voice or text',
            'record' => 'Kamala, maid',
            'route' => 'memory.pratyek.com/staff',
            'status' => 'Salary paid',
            'entities' => ['Maid', 'Cook', 'Driver', 'Nanny', 'Nurse'],
            'fields' => [['April salary', '&#8377;6,000'], ['Attendance', '28 / 30'], ['Bonus history', 'Saved']],
        ],
        [
            'surface' => 'Family',
            'icon' => 'heart',
            'message' => 'Aanya passport expires 12 Aug 2032. Keep in DigiLocker.',
            'source' => 'Document reference',
            'record' => 'Aanya / Passport',
            'route' => 'memory.pratyek.com/family',
            'status' => 'Expiry only',
            'entities' => ['Members', 'Documents', 'Occasions', 'Health'],
            'fields' => [['Expiry', '12 Aug 2032'], ['Storage', 'DigiLocker'], ['Image', 'Not stored']],
        ],
    ];
@endphp

{{-- ============================================================
     Hero
     ============================================================ --}}
<section class="hero hero-product">
    <div class="wrap-wide">
        <div class="hero-product-grid">
            <div class="hero-product-copy">
                <p class="hero-eyebrow">Live on WhatsApp</p>
                <h1>
                    India's household jugaad system.
                    <em>Built inside WhatsApp.</em>
                </h1>
                <h2 class="hero-second-heading">
                    Just chat with Pratyek on WhatsApp. It turns ghar ka chaos into a proper, sophisticated Memory dashboard.
                    Promise, this actually works.
                </h2>
                <p class="hero-sub">
                    A message goes into WhatsApp. The Memory dashboard turns it into bills, tasks, reminders, assets, staff, family, and services.
                    Pratyek means every. Built for every Indian home, from messy to super-organised.
                </p>
                <div class="hero-actions">
                    <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer" data-track-location="hero_home">
                        <x-icon name="whatsapp" />
                        Start on WhatsApp
                    </a>
                    <a href="#memory-flows" class="btn-link" data-track-event="cta_click" data-track-location="hero_home">
                        See examples
                        <x-icon name="arrow-right" />
                    </a>
                </div>
                <p class="hero-fineprint">
                    Live now &middot; <a href="https://wa.me/919372023537?text=Hi" style="color: var(--ink); text-decoration: underline; text-underline-offset: 3px;">+91 93720 23537</a> &middot; no app to install
                </p>
            </div>

            <div class="flow-demo flow-demo--hero" aria-label="WhatsApp message transformed into a Memory dashboard record" data-nosnippet>
                <div class="flow-phone">
                    <div class="flow-phone-top">
                        <span class="flow-avatar">P</span>
                        <span>Pratyek</span>
                    </div>
                    <div class="flow-bubble">
                        <span class="flow-bubble-label">{{ $heroFlow['source'] }}</span>
                        {{ $heroFlow['message'] }}
                    </div>
                </div>

                <div class="flow-arrow" aria-hidden="true">
                    <x-icon name="arrow-right" />
                    <span>extracts</span>
                </div>

                <div class="flow-record">
                    <div class="flow-record-top">
                        <span class="flow-record-icon"><x-icon :name="$heroFlow['icon']" /></span>
                        <div>
                            <span>{{ $heroFlow['route'] }}</span>
                            <strong>{{ $heroFlow['record'] }}</strong>
                        </div>
                    </div>
                    <dl>
                        @foreach ($heroFlow['fields'] as $field)
                            <div>
                                <dt>{{ $field[0] }}</dt>
                                <dd>{!! $field[1] !!}</dd>
                            </div>
                        @endforeach
                    </dl>
                    <div class="flow-record-foot">
                        <span>{{ $heroFlow['surface'] }}</span>
                        <strong>{{ $heroFlow['status'] }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Process
     ============================================================ --}}
<section class="section-tight">
    <div class="wrap-wide">
        <div class="process-strip" aria-label="How Pratyek works">
            <article class="process-step">
                <span class="process-num">01</span>
                <h2>Message Pratyek.</h2>
                <p>Forward a PDF, send a voice note, type in Hinglish, or drop a receipt photo.</p>
            </article>
            <article class="process-step">
                <span class="process-num">02</span>
                <h2>It extracts fields.</h2>
                <p>Amount, due date, owner, provider, warranty, attendance, expiry, status.</p>
            </article>
            <article class="process-step">
                <span class="process-num">03</span>
                <h2>Your home gets organised.</h2>
                <p>Every record lands in the right dashboard surface, searchable, exportable, and ready for the family.</p>
            </article>
        </div>
    </div>
</section>

{{-- ============================================================
     Memory flows
     ============================================================ --}}
<section class="section" id="memory-flows">
    <div class="wrap-wide">
        <div class="section-head section-head--center">
            <p class="kicker">Major categories</p>
            <h2 style="max-width: 24ch;">One pattern, every Indian household surface.</h2>
            <p class="lede" style="margin-top: var(--space-3); max-width: 62ch; margin-inline: auto;">
                The live Memory dashboard is the family dashboard behind Pratyek: Reminders, Tasks, Bills, Assets, Services, Staff, and Family.
            </p>
        </div>

        <div class="flow-grid" data-nosnippet>
            @foreach ($flows as $flow)
                <article class="flow-card">
                    <div class="flow-card-head">
                        <span class="flow-card-icon"><x-icon :name="$flow['icon']" /></span>
                        <div>
                            <p>{{ $flow['route'] }}</p>
                            <h3>{{ $flow['surface'] }}</h3>
                        </div>
                    </div>

                    <div class="flow-mini" aria-label="{{ $flow['surface'] }} WhatsApp to dashboard example">
                        <div class="flow-phone">
                            <div class="flow-phone-top">
                                <span class="flow-avatar">P</span>
                                <span>{{ $flow['source'] }}</span>
                            </div>
                            <div class="flow-bubble">{{ $flow['message'] }}</div>
                        </div>

                        <div class="flow-mini-arrow" aria-hidden="true">
                            <x-icon name="arrow-right" />
                        </div>

                        <div class="flow-record">
                            <div class="flow-record-top">
                                <span class="flow-record-icon"><x-icon :name="$flow['icon']" /></span>
                                <div>
                                    <span>{{ $flow['surface'] }}</span>
                                    <strong>{{ $flow['record'] }}</strong>
                                </div>
                            </div>
                            <dl>
                                @foreach ($flow['fields'] as $field)
                                    <div>
                                        <dt>{{ $field[0] }}</dt>
                                        <dd>{!! $field[1] !!}</dd>
                                    </div>
                                @endforeach
                            </dl>
                            <div class="flow-record-foot">
                                <span>Dashboard</span>
                                <strong>{{ $flow['status'] }}</strong>
                            </div>
                        </div>
                    </div>

                    <ul class="flow-entities" aria-label="{{ $flow['surface'] }} entities">
                        @foreach ($flow['entities'] as $entity)
                            <li>{{ $entity }}</li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>

        <div class="flow-cta">
            <a href="{{ route('product') }}" class="btn-link">
                See the full Memory dashboard model
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Search use cases
     ============================================================ --}}
<section class="section-tight">
    <div class="wrap">
        <div class="section-head">
            <p class="kicker">Popular household use cases</p>
            <h2>Start where your family feels the most friction.</h2>
            <p class="lede">
                Pratyek works as a bill reminder app, warranty tracker, maid salary tracker, family organizer,
                and WhatsApp household assistant for Indian homes.
            </p>
        </div>
        <div class="feature-cards">
            <article class="feature-card">
                <div class="feature-card-icon"><x-icon name="bill" /></div>
                <h3 class="feature-card-title">Bill reminders</h3>
                <p class="feature-card-desc">Track electricity, broadband, school fees, rent, insurance, and tax due dates from WhatsApp.</p>
                <a href="{{ route('use-case', 'bill-reminder-app-india') }}" class="btn-link" style="margin-top: auto;">Read more <x-icon name="arrow-right" /></a>
            </article>
            <article class="feature-card">
                <div class="feature-card-icon"><x-icon name="appliance" /></div>
                <h3 class="feature-card-title">Warranty tracker</h3>
                <p class="feature-card-desc">File appliance bills, AMC dates, vehicle renewals, and service contacts in the Memory dashboard.</p>
                <a href="{{ route('use-case', 'warranty-tracker-india') }}" class="btn-link" style="margin-top: auto;">Read more <x-icon name="arrow-right" /></a>
            </article>
            <article class="feature-card">
                <div class="feature-card-icon"><x-icon name="staff" /></div>
                <h3 class="feature-card-title">Maid salary tracker</h3>
                <p class="feature-card-desc">Track staff attendance, leaves, salary, advances, and bonuses without opening a spreadsheet.</p>
                <a href="{{ route('use-case', 'maid-salary-tracker') }}" class="btn-link" style="margin-top: auto;">Read more <x-icon name="arrow-right" /></a>
            </article>
        </div>
    </div>
</section>

<hr class="hairline">
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
                    Pratyek is paid for by the families who use it - not by advertisers, not by data brokers,
                    not by anyone hovering over your shoulder. We don't read your other WhatsApp groups.
                    We don't store Aadhaar, PAN, or passport scans. We don't train models on your messages.
                </p>
                <p>
                    Your data sits on servers in <strong>Bangalore, India</strong>, behind India's
                    <strong>DPDP Act</strong>. You can export everything, anytime. You can delete everything,
                    and within 30 days it's gone - by law and by design.
                </p>
                <p style="font-style: italic; color: var(--ink); margin-top: var(--space-5);">
                    We share this with our own mothers because trust is the whole game.
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
                        No. Pratyek is a household management system that lives at a WhatsApp number. You add it to your contacts, message it like any
                        other contact, and forward bills or send voice notes to it. There's nothing to install,
                        nothing to learn. Anyone in the family who already uses WhatsApp can use Pratyek.
                    </p>
                    <p>
                        For retrieval and exports, there's a simple web dashboard at <strong>memory.pratyek.com</strong>
                        - one log-in for the whole household.
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
                        ask for it - group chats carry sensitive content that is none of our business.
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
                        English, Hindi, Marathi, Tamil, Telugu, Kannada, Bengali, Gujarati, and Punjabi -
                        plus the Hinglish your family actually speaks. Voice notes can switch mid-sentence.
                        Pratyek is built for multilingual Indian households, not for translating to English first.
                    </p>
                </div></div></div>
            </div>
        </div>

        <p style="text-align: center; margin-top: var(--space-7);">
            <a href="{{ route('faq') }}" class="btn-link">
                See the full FAQ
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
                        No app to install. No form to fill. No waitlist.
                        Just the WhatsApp number your Indian household will message
                        for everything the home needs to remember.
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
                        <img src="/qr/whatsapp.svg" alt="QR code - scan to open WhatsApp chat with Pratyek at +91 93720 23537" width="220" height="220">
                    </a>
                    <figcaption>Or scan with your phone's camera.</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

</x-layouts.app>


