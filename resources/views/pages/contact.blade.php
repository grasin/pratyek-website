<x-layouts.app
    title="Contact Pratyek and Relynext Solutions"
    description="Email us. We read everything. Press, partnerships, support, feedback — hello@pratyek.com. Registered office: Mumbai, India."
    og-image="/og/contact.png"
>

{{-- ============================================================
     Page intro
     ============================================================ --}}
<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">Contact</p>
        <h1>Tell us anything.</h1>
        <p class="lede" style="margin-top: var(--space-5);">
            Email is the fastest. We read everything. A real person replies, usually within a working day.
            Press, partnerships, support, feedback &mdash; all at the same address.
        </p>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Two columns: aside + form
     ============================================================ --}}
<section class="section">
    <div class="wrap">
        <div class="contact-grid">

            {{-- Aside --}}
            <aside class="contact-aside">
                <p class="kicker">Email</p>
                <p class="contact-email-large">
                    <a href="mailto:hello@pratyek.com">hello@pratyek.com</a>
                </p>

                <div class="contact-channels">
                    <p class="contact-channel">
                        <strong>General &amp; support</strong>
                        <a href="mailto:hello@pratyek.com" style="color: var(--ink); text-decoration: underline; text-underline-offset: 3px;">hello@pratyek.com</a>
                    </p>
                    <p class="contact-channel">
                        <strong>Press &amp; partnerships</strong>
                        <a href="mailto:hello@pratyek.com" style="color: var(--ink); text-decoration: underline; text-underline-offset: 3px;">hello@pratyek.com</a>
                        <span style="color: var(--ink-mute); font-size: 12.5px;">&mdash; same address; we triage</span>
                    </p>
                    <p class="contact-channel">
                        <strong>DPDP grievance officer</strong>
                        [Name &mdash; placeholder]
                        <span style="color: var(--ink-mute); font-size: 12.5px;">&mdash; per Digital Personal Data Protection Act, 2023</span>
                    </p>
                </div>

                <div style="margin-top: var(--space-7);">
                    <p class="kicker" style="margin-bottom: var(--space-3);">Office</p>
                    <p style="font-family: 'Fraunces', Georgia, serif; font-size: 17px; color: var(--ink); line-height: 1.5;">
                        Relynext Solutions Private Limited<br>
                        <span style="color: var(--ink-soft);">[Registered address &mdash; Mumbai, Maharashtra, India]</span>
                    </p>
                </div>
            </aside>

            {{-- Form --}}
            <form class="form" action="{{ route('contact.store') }}" method="POST" novalidate>
                @csrf

                <p class="kicker">Or write to us here</p>

                @if (session('success'))
                    <div class="form-success" role="status">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="form-row">
                    <label for="name">Your name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-input"
                        required
                        value="{{ old('name') }}"
                    >
                    @error('name')<p class="form-error">{{ $message }}</p>@enderror
                </div>

                <div class="form-row">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-input"
                        required
                        value="{{ old('email') }}"
                    >
                    @error('email')<p class="form-error">{{ $message }}</p>@enderror
                </div>

                <div class="form-row">
                    <label for="message">Message</label>
                    <textarea
                        id="message"
                        name="message"
                        class="form-textarea"
                        required
                    >{{ old('message') }}</textarea>
                    @error('message')<p class="form-error">{{ $message }}</p>@enderror
                </div>

                <button type="submit" class="btn btn-primary form-submit">
                    Send
                    <x-icon name="arrow-right" />
                </button>

                <p style="font-family: 'Inter', sans-serif; font-size: 12.5px; color: var(--ink-mute); margin-top: var(--space-2);">
                    By sending, you agree to our <a href="{{ route('legal.privacy-policy') }}" style="color: var(--ink-mute); text-decoration: underline; text-underline-offset: 2px;">privacy policy</a>.
                </p>
            </form>

        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Legal entity card
     ============================================================ --}}
<section class="section-tight">
    <div class="wrap">
        <p class="kicker" style="margin-bottom: var(--space-4);">The company</p>
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
            </dl>
        </div>
    </div>
</section>

</x-layouts.app>
