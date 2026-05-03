<x-layouts.app
    title="Features — Aligned With Memory Dashboard | Pratyek"
    description="Pratyek is organised around the same Memory dashboard surfaces the product uses: Reminders, Tasks, Bills, Assets, Services, Staff, and Family."
    keywords="Pratyek features, Memory dashboard, household management features India, bill tracking app India, staff salary tracker, appliance warranty tracker, Indian family WhatsApp concierge"
    og-image="/og/default.svg"
    page-type="WebPage"
    :breadcrumbs="[
        ['name' => 'Home',     'url' => '/'],
        ['name' => 'Features', 'url' => '/features'],
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
  "operatingSystem": "WhatsApp, Web",
  "url": "https://pratyek.com/features",
  "description": "Pratyek's public features mirror its Memory dashboard: Reminders, Tasks, Bills, Assets, Services, Staff, and Family.",
  "inLanguage": ["en", "hi", "mr", "ta", "te", "kn", "bn", "gu", "pa"],
  "featureList": [
    "Pratyek Reminders — Today, Calendar, Rules, done and snooze",
    "Pratyek Tasks — to-dos and shopping",
    "Pratyek Bills — bills and renewals",
    "Pratyek Assets — appliances, warranties, vehicles, property",
    "Pratyek Services — recurring deliveries and visits",
    "Pratyek Staff — monthly household help",
    "Pratyek Family — members, documents, contacts, occasions, health"
  ],
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "INR",
    "availability": "https://schema.org/InStock",
    "description": "Live on WhatsApp."
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
        <p class="hero-eyebrow">Features</p>
        <h1>Every feature maps to the <em>Memory dashboard.</em></h1>
        <p class="lede" style="margin-top: var(--space-5);">
            The feature list below is organised exactly like the product: seven Memory surfaces,
            each with its own dashboard page and WhatsApp
            examples. The old long taxonomy still lives inside these surfaces; it no longer appears as a separate,
            conflicting navigation model.
        </p>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Dashboard-aligned surfaces
     ============================================================ --}}
<section class="section">
    <div class="wrap">

        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="clock" /></div>
                <p class="cat-num">Memory surface 01</p>
                <h2 class="cat-name">Pratyek Reminders</h2>
                <p class="cat-intro">
                    Everything due across the household, collected into one place: today, calendar, rules, done,
                    snooze. This is where dates become action.
                </p>
            </div>
            <ul class="cat-list">
                <li>Today view <small>overdue, due today, tomorrow, this week</small></li>
                <li>Calendar view <small>for bills, todos, occasions, staff, services</small></li>
                <li>Reminder rules <small>repeat cycles, lead time, quiet reminders</small></li>
                <li>Done and snooze flows <small>reply "done", "snooze 1d", "snooze 1w"</small></li>
                <li>iCal feed <small>household reminders in Google or Apple Calendar</small></li>
                <li>Morning digest <small>what matters today, in one WhatsApp summary</small></li>
            </ul>
        </article>

        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="check" /></div>
                <p class="cat-num">Memory surface 02</p>
                <h2 class="cat-name">Pratyek Tasks</h2>
                <p class="cat-intro">
                    To-dos and shopping lists that begin in WhatsApp and stay visible on the dashboard.
                    Nothing elaborate; just the shared household work that needs remembering.
                </p>
            </div>
            <ul class="cat-list">
                <li>To-dos with assignment <small>"Mummy", "Papa", "me", "Nanu"</small></li>
                <li>Shopping list <small>shared staples, medicines, festival prep</small></li>
                <li>Task reminders <small>call electrician tomorrow at 4pm</small></li>
                <li>Household announcements <small>one canonical note, not five chat threads</small></li>
                <li>Holiday list planning <small>office + school + public holidays</small></li>
                <li>Meal planning <span class="coming-soon">Coming soon</span></li>
            </ul>
        </article>

        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="bill" /></div>
                <p class="cat-num">Memory surface 03</p>
                <h2 class="cat-name">Pratyek Bills</h2>
                <p class="cat-intro">
                    Bills and renewals live together because the household experiences them the same way:
                    something is due, and forgetting is expensive.
                </p>
            </div>
            <ul class="cat-list">
                <li>Electricity <small>Adani, BSES, BESCOM, BEST, MSEDCL, TANGEDCO, KSEB</small></li>
                <li>Water, piped gas, LPG <small>municipal boards, Mahanagar Gas, Indane, HP, Bharat Gas</small></li>
                <li>Broadband, mobile, DTH <small>JioFiber, Airtel Xstream, ACT, Tata Play</small></li>
                <li>Rent and society maintenance <small>monthly reminders, payment logs</small></li>
                <li>School and tuition fees <small>term-wise, transport, coaching classes</small></li>
                <li>Insurance renewals <small>motor, health, life, home, mediclaim</small></li>
                <li>Vehicle PUC and registration <small>15-year re-registration windows</small></li>
                <li>Finance dates <small>EMIs, credit cards, advance tax, ITR, PPF, NPS, Sukanya Samriddhi</small></li>
                <li>Property tax <small>BMC, BBMP, MCD, GHMC, city-aware reminders</small></li>
                <li>No auto-pay <small>Pratyek never touches payment credentials</small></li>
            </ul>
        </article>

        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="appliance" /></div>
                <p class="cat-num">Memory surface 04</p>
                <h2 class="cat-name">Pratyek Assets</h2>
                <p class="cat-intro">
                    Things the household owns: appliances, warranties, vehicles, property. Pratyek remembers
                    what was bought, when, where from, and what comes due next.
                </p>
            </div>
            <ul class="cat-list">
                <li>Appliances <small>AC, washing machine, refrigerator, geyser, microwave, TV, RO, inverter</small></li>
                <li>Warranties <small>purchase date, warranty end, serial or model, service partner</small></li>
                <li>Service cycles <small>RO filter, AC service, inverter battery, annual maintenance</small></li>
                <li>Vehicles <small>registration, model, fuel, insurance, PUC, service cycle</small></li>
                <li>FASTag and challans <small>read-only reminders, never payment handling</small></li>
                <li>Property <small>address, city, ownership, deed or khata reference</small></li>
                <li>Receipts and proofs <small>metadata first; raw media deleted after extraction</small></li>
            </ul>
        </article>

        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="subscription" /></div>
                <p class="cat-num">Memory surface 05</p>
                <h2 class="cat-name">Pratyek Services</h2>
                <p class="cat-intro">
                    Recurring deliveries and visits: milk, newspaper, ironing, water cans, therapist, car washer,
                    tutor. Services are tracked by the rhythm of visits, not by monthly salary.
                </p>
            </div>
            <ul class="cat-list">
                <li>Daily milk <small>doodhwala, Country Delight, quantity and rate</small></li>
                <li>Newspaper and water cans</li>
                <li>Ironing and laundry <small>clothes count, collections, delivery gaps</small></li>
                <li>Per-visit professionals <small>therapist, masseur, physio, tutor, tailor</small></li>
                <li>Car washer and recurring electrician <small>visit logs and missed days</small></li>
                <li>Pause and resume <small>"pause milk 10-17 May"</small></li>
                <li>Per-service attendance <small>opened from the service row, not a separate aggregate page</small></li>
            </ul>
        </article>

        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="staff" /></div>
                <p class="cat-num">Memory surface 06</p>
                <h2 class="cat-name">Pratyek Staff</h2>
                <p class="cat-intro">
                    Monthly household help: the people who make the home work. Pratyek keeps salary, attendance,
                    leave, bonus, and role records without turning the relationship into HR software.
                </p>
            </div>
            <ul class="cat-list">
                <li>Maid, cook, driver, nanny, nurse, gardener, guard</li>
                <li>Attendance <small>voice or text: "Mala came", "Mala did not come"</small></li>
                <li>Monthly salary <small>paid, partial, due, revisions over time</small></li>
                <li>Leaves <small>paid, unpaid, casual</small></li>
                <li>Festival bonuses <small>Diwali, Eid, Onam, Bihu, with history</small></li>
                <li>ID reference <small>DigiLocker pointer only; no ID image in our database</small></li>
                <li>Per-staff attendance page <small>opened from each staff row</small></li>
            </ul>
        </article>

        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="heart" /></div>
                <p class="cat-num">Memory surface 07</p>
                <h2 class="cat-name">Pratyek Family</h2>
                <p class="cat-intro">
                    People, documents, contacts, occasions, and health sit together because they belong to family
                    members, not to abstract categories.
                </p>
            </div>
            <ul class="cat-list">
                <li>Members <small>partner, elder, child, other household roles</small></li>
                <li>Documents <small>Aadhaar, PAN, passport, driving licence as references only</small></li>
                <li>DigiLocker-first storage <small>expiry and last four digits where useful, never ID images</small></li>
                <li>Contacts <small>doctor, plumber, school, pharmacy, society office</small></li>
                <li>Occasions per member <small>birthdays, anniversaries, shraadh, gift history</small></li>
                <li>Health per member <small>medicine refills, tests, elder care, vaccinations, pet care</small></li>
                <li>Education details <small>school fees live in Bills; milestones and contacts live here</small></li>
            </ul>
        </article>

    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Request more
     ============================================================ --}}
<section class="section-tight">
    <div class="wrap-narrow" style="text-align: center;">
        <h3 style="margin-bottom: var(--space-3);">Don't see what you'd track?</h3>
        <p class="lede" style="max-width: 56ch; margin-inline: auto;">
            Tell us. We capture every request and reply with a status.
            See the <strong>My Requests</strong> dashboard inside the product.
        </p>
        <a href="{{ route('contact') }}" class="btn-link" style="margin-top: var(--space-5); display: inline-flex;">
            Send a feature request
            <x-icon name="arrow-right" />
        </a>
    </div>
</section>

{{-- ============================================================
     CTA
     ============================================================ --}}
<section class="cta-block">
    <div class="wrap">
        <h2>Pratyek is live on WhatsApp.</h2>
        <p>
            The public feature list now matches the Memory dashboard that households actually see.
            Start with any bill, staff note, service visit, or reminder.
        </p>
        <div class="cta-block-actions">
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
</section>

</x-layouts.app>
