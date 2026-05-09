<x-layouts.app
    :title="$page['title']"
    :description="$page['description']"
    :og-image="$page['ogImage']"
    page-type="WebPage"
    :breadcrumbs="[
        ['name' => 'Home', 'url' => '/'],
        ['name' => $page['kicker'], 'url' => '/use-cases/' . $page['slug']],
    ]"
>

<section class="page-intro">
    <div class="wrap">
        <p class="hero-eyebrow">{{ $page['kicker'] }}</p>
        <h1>{{ $page['h1'] }}</h1>
        <p class="lede" style="margin-top: var(--space-5);">
            {{ $page['lede'] }}
        </p>
        <div class="hero-actions" style="margin-top: var(--space-6);">
            <a href="https://wa.me/919372023537?text=Hi" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                <x-icon name="whatsapp" />
                Start on WhatsApp
            </a>
            <a href="{{ route('features') }}" class="btn-link">
                See the Memory dashboard
                <x-icon name="arrow-right" />
            </a>
        </div>
    </div>
</section>

<hr class="hairline">

<section class="section">
    <div class="wrap">
        <div class="section-head">
            <p class="hero-eyebrow">{{ $page['introLabel'] }}</p>
            <h2>Send it like your family would say it.</h2>
            <p class="lede">
                Pratyek reads practical household messages and turns them into structured records for reminders,
                tasks, bills, assets, services, staff, and family management.
            </p>
        </div>
        <div class="feature-cards">
            @foreach ($page['examples'] as $example)
                <article class="feature-card">
                    <div class="feature-card-icon"><x-icon name="document" /></div>
                    <h3 class="feature-card-title">WhatsApp note</h3>
                    <p class="feature-card-desc">{{ $example }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<hr class="hairline">

<section class="section">
    <div class="wrap">
        @foreach ($page['sections'] as $index => $section)
            <article class="trust-block">
                <div class="trust-block-head">
                    <p class="trust-block-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</p>
                    <h2 class="trust-block-name">{{ $section['heading'] }}</h2>
                </div>
                <div class="trust-block-body">
                    <p>{{ $section['body'] }}</p>
                    <ul class="trust-list" role="list">
                        @foreach ($section['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </article>
        @endforeach
    </div>
</section>

<hr class="hairline">

<section class="faq-section">
    <div class="wrap-narrow">
        <div class="faq-group">
            <h2 class="faq-group-title">Questions people search before starting</h2>
            @foreach ($page['faqs'] as $faq)
                <article class="faq">
                    <button class="faq-q">
                        {{ $faq['q'] }}
                        <span class="faq-mark"><x-icon name="plus" /></span>
                    </button>
                    <div class="faq-a">
                        <div class="faq-a-inner">
                            <div class="faq-a-content">
                                <p>{{ $faq['a'] }}</p>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

@php
    $relatedUseCases = collect($useCases)
        ->except($page['slug'])
        ->take(4);
@endphp

<section class="section-tight">
    <div class="wrap">
        <div class="section-head">
            <p class="hero-eyebrow">Related household use cases</p>
            <h2>More ways Indian families use Pratyek.</h2>
        </div>
        <div class="feature-cards">
            @foreach ($relatedUseCases as $slug => $related)
                <article class="feature-card">
                    <div class="feature-card-icon"><x-icon name="search" /></div>
                    <h3 class="feature-card-title">{{ $related['kicker'] }}</h3>
                    <p class="feature-card-desc">{{ $related['description'] }}</p>
                    <a href="{{ route('use-case', $slug) }}" class="btn-link" style="margin-top: auto;">
                        Read more
                        <x-icon name="arrow-right" />
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-block">
    <div class="wrap">
        <h2>Start with the one thing your home needs to remember.</h2>
        <p>
            Send a WhatsApp message to Pratyek and let the Memory dashboard turn it into something your family can find,
            manage, and act on later.
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
