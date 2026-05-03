<x-layouts.app
    title="Privacy Policy — Pratyek"
    description="What we collect, what we don't, where we store it, how to delete it. Plain-language privacy policy, DPDP-compliant. Last updated 30 April 2026."
    keywords="privacy policy India, DPDP compliance, household data protection, Relynext Solutions privacy, Pratyek data retention, India data residency"
    og-image="/og/default.svg"
    page-type="WebPage"
    :breadcrumbs="[
        ['name' => 'Home',           'url' => '/'],
        ['name' => 'Legal',          'url' => '/legal/privacy-policy'],
        ['name' => 'Privacy Policy', 'url' => '/legal/privacy-policy'],
    ]"
>

<section class="legal-page">
    <div class="wrap-narrow">
        <p class="hero-eyebrow">Legal</p>
        <h1>Privacy Policy</h1>
        <p class="legal-page-meta">Last updated: 30 April 2026 &middot; Version 1.0</p>

        <div class="legal-content">

            <p>
                This Privacy Policy explains how <strong>Relynext Solutions</strong>
                ("Relynext", "we", "us"), the company that builds and operates the Pratyek service ("Pratyek",
                "the service"), collects, uses, stores, and protects your personal data. By using Pratyek you
                agree to this policy.
            </p>

            <h2>1. Who we are</h2>
            <p>
                Relynext Solutions is an Indian partnership firm registered in India.
                GST: 27AAZFR7341G1ZK. PAN: AAZFR7341G.
                We are the <em>data fiduciary</em> for the personal data Pratyek processes, in the sense
                of the Digital Personal Data Protection Act, 2023 ("DPDP Act").
            </p>
            <p>
                For any privacy-related question, write to <a href="mailto:hello@pratyek.com">hello@pratyek.com</a>.
                Our DPDP grievance officer is named on the <a href="{{ route('legal.dpdp') }}">DPDP page</a>.
            </p>

            <h2>2. What we collect</h2>
            <p>We collect only what we need to file what you ask us to file:</p>
            <ul>
                <li><strong>Messages you send us on WhatsApp</strong> &mdash; text, voice notes, photos, documents you forward into your Pratyek chat thread.</li>
                <li><strong>Derived metadata</strong> &mdash; the structured information we extract from those messages (e.g., bill amount, due date, account number).</li>
                <li><strong>Account information</strong> &mdash; the WhatsApp number you message us from, an email if you supply one, and a household name if you set one.</li>
                <li><strong>Web dashboard usage</strong> &mdash; basic logs (IP, browser, page visited) needed to operate the dashboard at memory.pratyek.com.</li>
                <li><strong>Cookies</strong> &mdash; essential authentication cookies on the dashboard, and a small set of analytics cookies (Plausible, which is cookieless; and Google Analytics 4 with IP anonymisation) on the marketing site to measure aggregate usage. No advertising or behavioural-targeting cookies, ever.</li>
            </ul>

            <h2>3. What we explicitly do not collect</h2>
            <p>
                Some categories of data are refused at the door, regardless of what you forward:
            </p>
            <ul>
                <li>Aadhaar numbers, PAN images, passport scans, mediclaim card images, driving licence images.</li>
                <li>Bank account numbers, credit card numbers, UPI PINs.</li>
                <li>Anything in your existing WhatsApp groups &mdash; we cannot read those, and we don't ask to.</li>
            </ul>
            <p>
                If you forward us one of the above, we will delete it on receipt and remind you to use
                <strong>DigiLocker</strong> for sensitive documents.
            </p>

            <h2>4. Why we use it</h2>
            <p>
                Strictly to provide the Pratyek service: to file what you forward, to remind you of upcoming
                renewals and bills, to answer your questions about your own household. We do not use your data
                for advertising, profiling for third parties, or model training.
            </p>

            <h2>5. Where it lives</h2>
            <p>
                On servers operated by DigitalOcean in their <strong>Bangalore (BLR1)</strong> region.
                Backups are also stored in India. We do not replicate personal data outside India.
            </p>

            <h2>6. Who else sees it</h2>
            <p>
                A small set of carefully-chosen processors, each under a Data Processing Agreement that
                forbids further use:
            </p>
            <ul>
                <li><strong>Meta Platforms</strong> &mdash; to deliver WhatsApp messages between you and Pratyek.</li>
                <li><strong>OpenRouter</strong> &mdash; routing layer for LLM access (Claude from Anthropic, Gemma from Google).</li>
                <li><strong>Sarvam</strong> &mdash; speech-to-text for voice notes in Indian languages.</li>
                <li><strong>DigitalOcean</strong> &mdash; hosting and backup, India region only.</li>
                <li><strong>Plausible Analytics</strong> &mdash; aggregate, cookieless website analytics (no personal identifiers).</li>
                <li><strong>Google Analytics 4</strong> &mdash; aggregate website analytics with IP anonymisation enabled. Helps us understand which pages and features are used; not used to identify you.</li>
            </ul>
            <p>
                None of these processors retain your data for their own purposes, train models on it, or sell
                it. We sell, share, or barter your data <em>to no one</em>.
            </p>

            <h2>7. How long we keep it</h2>
            <ul>
                <li><strong>Structured records</strong> (bills, warranties, salary entries): kept as long as the corresponding entity is active in your household.</li>
                <li><strong>Voice note audio</strong>: deleted within 7 days of transcription.</li>
                <li><strong>Forwarded media files</strong>: deleted within 30 days of extraction.</li>
                <li><strong>Server logs</strong>: rotated within 30 days.</li>
                <li><strong>Account-level deletion</strong>: completes within 30 days of your request, including backups.</li>
            </ul>

            <h2>8. Your rights under the DPDP Act</h2>
            <ul>
                <li><strong>Right to access</strong> &mdash; ask us what we hold on you; we'll send you everything as JSON or CSV.</li>
                <li><strong>Right to correction</strong> &mdash; tell Pratyek to correct an entry; we will.</li>
                <li><strong>Right to erasure</strong> &mdash; ask us to delete the household's data; we will, within 30 days.</li>
                <li><strong>Right to withdraw consent</strong> &mdash; stop using Pratyek and we will treat that as consent withdrawal; data is deleted within 30 days.</li>
                <li><strong>Right to grievance redressal</strong> &mdash; contact our grievance officer (named on the <a href="{{ route('legal.dpdp') }}">DPDP page</a>) and, if unsatisfied, the Data Protection Board of India.</li>
            </ul>

            <h2>9. Children</h2>
            <p>
                Pratyek is intended for use by adults who are responsible for a household. We do not knowingly
                collect personal data from anyone under 18. If a child's information is included in what an
                adult forwards (a school fee receipt, for example), we treat it with the same care as adult
                personal data and apply the same retention windows.
            </p>

            <h2>10. Changes to this policy</h2>
            <p>
                We may update this policy as the product evolves or the law changes. Material changes will be
                announced on Pratyek itself, in your WhatsApp chat, with a clear summary of what changed.
                The "Last updated" date at the top of this page tracks the most recent revision.
            </p>

            <h2>11. Contact</h2>
            <p>
                Email <a href="mailto:hello@pratyek.com">hello@pratyek.com</a>. For DPDP-related questions
                specifically, contact our grievance officer named on the <a href="{{ route('legal.dpdp') }}">DPDP page</a>.
                Postal address: Relynext Solutions, B, 34, SINDHU BUSINESS PARK, GHATKOPAR EAST, Mumbai Suburban, Maharashtra, 400077, India.
                GST: 27AAZFR7341G1ZK. PAN: AAZFR7341G.
            </p>

        </div>
    </div>
</section>

</x-layouts.app>
