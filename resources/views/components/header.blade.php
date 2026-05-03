@php
    $currentRoute = request()->route()?->getName();
    $navLinks = [
        ['route' => 'product',  'label' => 'Product'],
        ['route' => 'features', 'label' => 'Features'],
        ['route' => 'trust',    'label' => 'Trust'],
        ['route' => 'about',    'label' => 'About'],
        ['route' => 'faq',      'label' => 'FAQ'],
    ];
@endphp

<header class="site-header" role="banner">
    <div class="header-inner wrap-wide">
        <a href="{{ route('home') }}" class="wordmark" aria-label="Pratyek home">
            Pratyek<span class="wordmark-dot" aria-hidden="true">.</span>
        </a>

        <nav class="main-nav" aria-label="Main navigation">
            <ul role="list">
                @foreach ($navLinks as $link)
                    <li>
                        <a
                            href="{{ route($link['route']) }}"
                            class="{{ $currentRoute === $link['route'] ? 'nav-active' : '' }}"
                            @if ($currentRoute === $link['route']) aria-current="page" @endif
                        >{{ $link['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <a
            href="https://wa.me/919372023537?text=Hi"
            class="btn btn-primary"
            target="_blank"
            rel="noopener noreferrer"
            data-track-location="header"
        >
            <x-icon name="whatsapp" aria-hidden="true" />
            Start on WhatsApp
        </a>

        <button
            class="menu-toggle"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >
            <x-icon name="menu" aria-hidden="true" />
        </button>
    </div>

    <div id="mobile-menu" class="mobile-menu" aria-hidden="true" role="dialog" aria-label="Navigation menu">
        <div class="mobile-menu-inner">
            <div class="mobile-menu-top">
                <a href="{{ route('home') }}" class="wordmark" aria-label="Pratyek home">
                    Pratyek<span class="wordmark-dot" aria-hidden="true">.</span>
                </a>
                <button
                    class="mobile-menu-close"
                    aria-label="Close navigation menu"
                    type="button"
                >
                    <x-icon name="x" aria-hidden="true" />
                </button>
            </div>

            <nav aria-label="Mobile navigation">
                <ul role="list">
                    @foreach ($navLinks as $link)
                        <li>
                            <a
                                href="{{ route($link['route']) }}"
                                class="{{ $currentRoute === $link['route'] ? 'nav-active' : '' }}"
                                @if ($currentRoute === $link['route']) aria-current="page" @endif
                            >{{ $link['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="mobile-menu-foot">
                <a
                    href="https://wa.me/919372023537?text=Hi"
                    class="btn btn-primary"
                    target="_blank"
                    rel="noopener noreferrer"
                    data-track-location="mobile_menu"
                >
                    <x-icon name="whatsapp" aria-hidden="true" />
                    Start on WhatsApp
                </a>
                <p class="mobile-menu-phone">
                    or call <a href="https://wa.me/919372023537?text=Hi" data-track-location="mobile_menu">+91 93720 23537</a>
                </p>
            </div>
        </div>
    </div>
</header>
