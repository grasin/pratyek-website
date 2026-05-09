<x-layouts.app
    title="Contact - Pratyek Household Management Support"
    description="WhatsApp +91 93720 23537 or email hello@pratyek.com for Pratyek, India's household management system for every Indian home."
    og-image="/og/contact.png"
    page-type="ContactPage"
    :breadcrumbs="[
        ['name' => 'Home',    'url' => '/'],
        ['name' => 'Contact', 'url' => '/contact'],
    ]"
>

{{-- ============================================================
     Page intro
     ============================================================ --}}
<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">Contact</p>
        <h1>Tell us anything.</h1>
        <p class="lede" style="margin-top: var(--space-5);">
            WhatsApp is the fastest. Email works too. We read everything - support, feedback, press,
            partnerships, and household management ideas from Indian families - and a real person replies, usually within a working day.
        </p>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     WhatsApp + QR (primary channel)
     ============================================================ --}}
<section class="section">
    <div class="wrap">
        <div class="live-cta-card">
            <div class="live-cta-stamp">Live</div>

            <div class="live-cta-grid">
                <div class="live-cta-text">
                    <p class="kicker kicker--red" style="margin-bottom: var(--space-3);">WhatsApp</p>
                    <h2 style="margin-bottom: var(--space-4);">
                        Send <em>"Hi"</em>. We'll take it from there.
                    </h2>
                    <p class="live-cta-number">
                        <a href="https://wa.me/919372023537?text=Hi">
                            <x-icon name="whatsapp" /> +91 93720 23537
                        </a>
                    </p>
                    <p class="live-cta-sub">
                        Add the number to your contacts, send a message, and Pratyek replies in your language.
                        Same number for support, feedback, onboarding, and the first home workflow you want organised.
                    </p>
                    <div class="live-cta-actions">
                        <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                            <x-icon name="whatsapp" />
                            Start on WhatsApp
                        </a>
                    </div>
                </div>

                <figure class="live-cta-qr">
                    <a href="https://wa.me/919372023537?text=Hi" target="_blank" rel="noopener noreferrer" aria-label="Open WhatsApp chat with Pratyek">
                        <img src="/qr/whatsapp.svg" alt="QR code - scan to open WhatsApp chat with Pratyek at +91 93720 23537" width="220" height="220">
                    </a>
                    <figcaption>Scan with your phone's camera.</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<hr class="hairline">

{{-- ============================================================
     Email + form (secondary channel)
     ============================================================ --}}
<section class="section">
    <div class="wrap">
        <div class="contact-grid">

            <aside class="contact-aside">
                <p class="kicker">Email</p>
                <p class="contact-email-large">
                    <a href="mailto:hello@pratyek.com">hello@pratyek.com</a>
                </p>
                <p class="live-cta-sub" style="max-width: 40ch;">
                    Same address for general questions, support, press, and partnerships. We triage on our end.
                </p>
            </aside>

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
                    <input type="text" id="name" name="name" class="form-input" required value="{{ old('name') }}">
                    @error('name')<p class="form-error">{{ $message }}</p>@enderror
                </div>

                <div class="form-row">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-input" required value="{{ old('email') }}">
                    @error('email')<p class="form-error">{{ $message }}</p>@enderror
                </div>

                <div class="form-row">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-textarea" required>{{ old('message') }}</textarea>
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

</x-layouts.app>

