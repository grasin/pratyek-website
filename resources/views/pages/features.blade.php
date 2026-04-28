<x-layouts.app
    title="Features — Bills, Renewals, Staff &amp; 9 More | Pratyek"
    description="Bills, renewals, documents, vehicles, staff, appliances, subscriptions, occasions, health, education, finance, coordination — all in one second mind."
    keywords="household features, bill tracking India, warranty management India, family staff salary tracker, Indian renewal reminders, BBMP property tax tracker, Adani Tata Play bills, Bajaj Allianz renewal"
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
  "description": "Pratyek tracks twelve household categories for Indian families — every bill, every renewal, every staff record, every appliance warranty, every family occasion.",
  "inLanguage": ["en", "hi", "mr", "ta", "te", "kn", "bn", "gu", "pa"],
  "featureList": [
    "Bills & utilities — Adani, BSES, BESCOM, BEST, MSEDCL, TANGEDCO, KSEB, JioFiber, Tata Play",
    "Renewals & expiry — motor insurance, mediclaim, PUC, passport, driving licence, vehicle RC",
    "Documents & IDs — DigiLocker pointers, expiry-only storage, no images of Aadhaar PAN passport",
    "Vehicles — registration, insurance, PUC, FASTag, service cycle, fines and 15-year re-registration",
    "Domestic staff — maid, cook, driver, nanny, attendance, salary, leaves, festival bonuses",
    "Appliances & warranties — AC, washing machine, refrigerator, water purifier, geyser, microwave",
    "Subscriptions & deliveries — milk, newspaper, OTT (Netflix, Hotstar, Prime), DTH, cloud storage",
    "Family & occasions — birthdays, anniversaries, shraadh, Diwali Onam Eid Pongal Christmas prep",
    "Health — medication refills, periodic tests, elder care, children milestones, pet care",
    "Education — school fees, tuition, exam dates, transport fees, coaching IIT NEET prep",
    "Finance — EMIs, SIPs, advance tax, ITR, GST, credit card dues, BBMP BMC MCD property tax",
    "Coordination — shared shopping list, todos, family contacts, holiday list, meal planning"
  ],
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "INR",
    "availability": "https://schema.org/LimitedAvailability",
    "description": "Free to use; no advertising, no data sale."
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
        <h1>Everything an Indian household actually <em>tracks</em>.</h1>
        <p class="lede" style="margin-top: var(--space-5);">
            We started by writing down what one household needed to remember in a single year. We came up with
            <strong>twelve categories</strong>. Every category below is something a real Indian family deals with;
            we name brands and providers because vagueness is a tell.
        </p>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     12 categories
     ============================================================ --}}
<section class="section">
    <div class="wrap">

        {{-- 01 Bills --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="bill" /></div>
                <p class="cat-num">Category 01</p>
                <h2 class="cat-name">Bills &amp; utilities</h2>
                <p class="cat-intro">
                    The monthly drumbeat. Pratyek extracts amount, due date, account number from any forwarded bill,
                    and nudges before the late fee.
                </p>
            </div>
            <ul class="cat-list">
                <li>Electricity <small>Adani, BSES, BESCOM, BEST, MSEDCL, TANGEDCO, KSEB, TSSPDCL</small></li>
                <li>Piped gas <small>Mahanagar, IGL, Adani Gas, GGL</small></li>
                <li>Broadband <small>JioFiber, ACT, Airtel Xstream, Hathway, BSNL</small></li>
                <li>Mobile <small>Jio, Airtel, Vi &mdash; postpaid &amp; prepaid</small></li>
                <li>Water <small>BWSSB, MJP, JJB, KMC and most municipal boards</small></li>
                <li>LPG cylinder <small>Indane, HP Gas, Bharat Gas</small></li>
                <li>DTH <small>Tata Play, Airtel Digital TV, d2h, Dish TV</small></li>
                <li>Society maintenance <small>any RWA invoice format</small></li>
            </ul>
        </article>

        {{-- 02 Renewals --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="renewal" /></div>
                <p class="cat-num">Category 02</p>
                <h2 class="cat-name">Renewals &amp; expiry tracking</h2>
                <p class="cat-intro">
                    The expensive things to forget. Pratyek nudges weeks ahead &mdash; never the morning of.
                </p>
            </div>
            <ul class="cat-list">
                <li>Motor insurance <small>Bajaj Allianz, ICICI Lombard, Acko, HDFC Ergo</small></li>
                <li>Health insurance / mediclaim <small>HDFC Ergo, Star Health, Niva Bupa, ManipalCigna</small></li>
                <li>Vehicle PUC <small>3-month, 6-month, 1-year cycles</small></li>
                <li>Driving licence renewal</li>
                <li>Vehicle registration <small>15-year re-registration window</small></li>
                <li>Passport renewal <small>10-week, 4-week, 1-week nudges</small></li>
                <li>Life insurance premiums</li>
                <li>Home insurance</li>
                <li>Professional licences <small>CA, advocate, doctor &mdash; on request</small></li>
            </ul>
        </article>

        {{-- 03 Documents --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="document" /></div>
                <p class="cat-num">Category 03</p>
                <h2 class="cat-name">Documents &amp; IDs</h2>
                <p class="cat-intro">
                    Pratyek <strong>refuses</strong> to store IDs. Instead it remembers expiry dates and points
                    you to <strong>DigiLocker</strong>, the government's own vault.
                </p>
            </div>
            <ul class="cat-list">
                <li>Passport <small>expiry only &mdash; image stays in DigiLocker</small></li>
                <li>Aadhaar <small>existence noted &mdash; never the number</small></li>
                <li>PAN <small>existence noted &mdash; never the image</small></li>
                <li>Driving licence <small>expiry only</small></li>
                <li>Vehicle RC <small>via DigiLocker</small></li>
                <li>Mediclaim card <small>policy number stored, image refused</small></li>
                <li>Professional certifications <small>expiry tracking only</small></li>
                <li>Birth certificates <small>existence + DigiLocker pointer</small></li>
            </ul>
        </article>

        {{-- 04 Vehicles --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="vehicle" /></div>
                <p class="cat-num">Category 04</p>
                <h2 class="cat-name">Vehicles</h2>
                <p class="cat-intro">
                    One car, two wheelers, the family scooter. Pratyek tracks them all, separately, for years.
                </p>
            </div>
            <ul class="cat-list">
                <li>Identity <small>registration, model, year of purchase</small></li>
                <li>Insurance <small>provider, policy number, end date</small></li>
                <li>PUC <small>last test, next due</small></li>
                <li>FASTag balance <small>read from monthly statement</small></li>
                <li>Service cycle <small>kms or months, whichever first</small></li>
                <li>Fines &amp; challans <small>read-only reminder, never auto-pay</small></li>
                <li>15-year re-registration <small>nudge starts at year 14</small></li>
                <li>Multi-vehicle households <small>each vehicle tracked separately</small></li>
            </ul>
        </article>

        {{-- 05 Staff --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="staff" /></div>
                <p class="cat-num">Category 05</p>
                <h2 class="cat-name">Domestic staff</h2>
                <p class="cat-intro">
                    The most casually managed labour in the household. Pratyek brings dignity to the records,
                    in the language the conversation already happens in.
                </p>
            </div>
            <ul class="cat-list">
                <li>Maid, cook, driver, nanny, gardener, part-time help</li>
                <li>Attendance <small>logged casually by voice or text</small></li>
                <li>Monthly salary <small>paid / partial / due</small></li>
                <li>Leaves <small>paid, unpaid, casual</small></li>
                <li>Festival bonuses <small>Diwali, Eid, Onam, Bihu &mdash; with history</small></li>
                <li>ID reference <small>via DigiLocker, never our database</small></li>
                <li>Salary revisions <small>year-over-year</small></li>
                <li>Multiple households <small>same maid across two flats? handled</small></li>
            </ul>
        </article>

        {{-- 06 Appliances --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="appliance" /></div>
                <p class="cat-num">Category 06</p>
                <h2 class="cat-name">Appliances &amp; warranties</h2>
                <p class="cat-intro">
                    The receipts that vanish. Pratyek remembers what you bought, when, where from, and when
                    the next service is due.
                </p>
            </div>
            <ul class="cat-list">
                <li>Air conditioners <small>brand, model, AMC end date</small></li>
                <li>Washing machines</li>
                <li>Refrigerators</li>
                <li>Water purifiers <small>filter change cycle</small></li>
                <li>Geysers</li>
                <li>Microwaves &amp; ovens</li>
                <li>Televisions</li>
                <li>RO filters <small>quarterly nudge</small></li>
                <li>Inverters &amp; UPS <small>battery replacement window</small></li>
            </ul>
        </article>

        {{-- 07 Subscriptions --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="subscription" /></div>
                <p class="cat-num">Category 07</p>
                <h2 class="cat-name">Subscriptions &amp; deliveries</h2>
                <p class="cat-intro">
                    Pause and resume on command &mdash; "pause milk 10&ndash;17 May" handled in the chat.
                </p>
            </div>
            <ul class="cat-list">
                <li>Daily milk <small>doodhwala, Country Delight</small></li>
                <li>Newspaper <small>Times, HT, Mint, regional</small></li>
                <li>Water cans</li>
                <li>Tiffin / dabba services</li>
                <li>OTT <small>Netflix, Hotstar, Prime, Sony LIV</small></li>
                <li>Music <small>Spotify, Apple Music, JioSaavn</small></li>
                <li>DTH bundles <small>Tata Play, Airtel Digital TV</small></li>
                <li>Cloud storage <small>iCloud, Google One, Dropbox</small></li>
            </ul>
        </article>

        {{-- 08 Occasions --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="occasion" /></div>
                <p class="cat-num">Category 08</p>
                <h2 class="cat-name">Family &amp; occasions</h2>
                <p class="cat-intro">
                    The dates that are too important to live in your head alone. Pratyek runs the calendar
                    of belonging.
                </p>
            </div>
            <ul class="cat-list">
                <li>Birthdays</li>
                <li>Anniversaries</li>
                <li>Death anniversaries / shraadh <small>Hindu calendar supported</small></li>
                <li>Festival prep <small>Diwali, Onam, Eid, Pongal, Christmas</small></li>
                <li>Festival runways <small>N-week reminders for cleaning, sweets, gifts</small></li>
                <li>Gift history <small>per person, year-on-year</small></li>
                <li>Religious vrats / fasts <small>on request</small></li>
                <li>School holidays &amp; events</li>
            </ul>
        </article>

        {{-- 09 Health --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="health" /></div>
                <p class="cat-num">Category 09</p>
                <h2 class="cat-name">Health</h2>
                <p class="cat-intro">
                    The slow-burning reminders &mdash; medication refills, periodic tests, elder care.
                    Quiet, not alarmist.
                </p>
            </div>
            <ul class="cat-list">
                <li>Medication refills <small>BP, diabetes, thyroid</small></li>
                <li>Periodic tests <small>lipid profile, HbA1c, vitamin D</small></li>
                <li>Doctor appointments <small>follow-ups</small></li>
                <li>Elder care reminders <small>weekly check-in nudges</small></li>
                <li>Children's milestones <small>height, weight, vaccinations</small></li>
                <li>Pet care <small>vaccinations, deworming, vet visits, grooming</small></li>
                <li>Specialist visits <small>annual / bi-annual</small></li>
            </ul>
        </article>

        {{-- 10 Education --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="education" /></div>
                <p class="cat-num">Category 10</p>
                <h2 class="cat-name">Education</h2>
                <p class="cat-intro">
                    School fees come in waves. Pratyek tracks the deadlines, the term plans, the supplies.
                </p>
            </div>
            <ul class="cat-list">
                <li>School fees <small>term-wise</small></li>
                <li>Tuition fees</li>
                <li>Exam dates <small>boards, semester, internal</small></li>
                <li>School transport fees</li>
                <li>Coaching class fees <small>IIT, NEET, CA prep</small></li>
                <li>Uniform / clothing sizing <small>quarterly for under-10s</small></li>
                <li>Stationery cycles</li>
                <li>Fee payment receipts <small>filed by year</small></li>
            </ul>
        </article>

        {{-- 11 Finance --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="finance" /></div>
                <p class="cat-num">Category 11</p>
                <h2 class="cat-name">Finance</h2>
                <p class="cat-intro">
                    Pratyek <strong>never</strong> touches payment credentials and never auto-pays anything.
                    It only remembers and nudges.
                </p>
            </div>
            <ul class="cat-list">
                <li>EMIs <small>home, car, personal &mdash; due dates only</small></li>
                <li>SIPs <small>monthly mutual fund commitments</small></li>
                <li>Tax deadlines <small>advance tax, ITR, GST</small></li>
                <li>Credit card due dates <small>across multiple cards</small></li>
                <li>PPF / NPS / Sukanya Samriddhi <small>annual contribution windows</small></li>
                <li>Property tax <small>BBMP, BMC, MCD, GHMC, KMC &mdash; city-aware</small></li>
                <li>Locker rent <small>annual</small></li>
                <li>Investment statements <small>filed for retrieval</small></li>
            </ul>
        </article>

        {{-- 12 Coordination --}}
        <article class="cat">
            <div class="cat-head">
                <div class="cat-icon"><x-icon name="coordination" /></div>
                <p class="cat-num">Category 12</p>
                <h2 class="cat-name">Coordination</h2>
                <p class="cat-intro">
                    The shared layer of family life. Lists, todos, contacts, holidays &mdash; one canonical version,
                    not five WhatsApp threads.
                </p>
            </div>
            <ul class="cat-list">
                <li>Shared shopping list</li>
                <li>Todos with assignment <small>"Mummy, Papa, me, Nanu"</small></li>
                <li>Family contacts <small>doctor, plumber, school, pharmacy</small></li>
                <li>Shared calendar</li>
                <li>Household announcements</li>
                <li>Holiday list <small>office + school + public &mdash; merged per family</small></li>
                <li>Meal planning <span class="coming-soon">Coming soon</span></li>
                <li>Maid / cook coordination across families <span class="coming-soon">Coming soon</span></li>
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
        <h2>Pratyek is patient. We'd rather get this right than ship fast.</h2>
        <p>
            Pratyek is live on WhatsApp. If your household has more to track than this list, send <em>"Hi"</em> to <a href="https://wa.me/919372023537?text=Hi" style="color: var(--ink); text-decoration: underline; text-underline-offset: 3px;">+91 93720 23537</a>.
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
