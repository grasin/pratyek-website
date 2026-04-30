/* ============================================================
   PRATYEK — app.js
   - Mobile menu (focus trap, Escape, body scroll lock)
   - FAQ accordion
   - IntersectionObserver reveal
   - Google Analytics 4 event layer (auto-detect + explicit data-track-*)
   ============================================================ */

/* ------------------------ GA4 helpers ----------------------- */
/**
 * Safe gtag wrapper. Never throws if GA hasn't loaded (ad blocker,
 * env var missing, network failure). Always non-fatal.
 */
function track(name, params) {
    try {
        if (typeof window.gtag === 'function') {
            window.gtag('event', name, Object.assign(
                { page_path: location.pathname, page_title: document.title },
                params || {}
            ));
        }
    } catch (e) { /* noop */ }
}

/**
 * Best-effort location label. Uses an explicit data-track-location
 * if provided, else walks up to find the closest section/element with
 * a hint, else falls back to 'unknown'.
 */
function trackLocation(el) {
    if (!el) return 'unknown';
    if (el.dataset && el.dataset.trackLocation) return el.dataset.trackLocation;
    const parent = el.closest('[data-track-location]');
    if (parent) return parent.dataset.trackLocation;
    if (el.closest('header')) return 'header';
    if (el.closest('footer')) return 'footer';
    if (el.closest('.mobile-menu')) return 'mobile_menu';
    if (el.closest('.entity-ribbon')) return 'entity_ribbon';
    if (el.closest('.live-cta-card')) return 'live_cta';
    if (el.closest('.cta-block')) return 'page_cta';
    if (el.closest('.hero')) return 'hero';
    if (el.closest('.faq-section, .faq-group')) return 'faq';
    if (el.closest('.contact-grid')) return 'contact';
    return 'body';
}

/* ------------------------ Mobile menu ----------------------- */
(function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuClose  = document.querySelector('.mobile-menu-close');
    const mobileMenu = document.querySelector('.mobile-menu');
    if (!menuToggle || !mobileMenu) return;

    const openMenu = () => {
        mobileMenu.classList.add('is-open');
        mobileMenu.setAttribute('aria-hidden', 'false');
        menuToggle.setAttribute('aria-expanded', 'true');
        menuClose && menuClose.focus();
        document.body.style.overflow = 'hidden';
        track('mobile_menu_open');
    };

    const closeMenu = () => {
        mobileMenu.classList.remove('is-open');
        mobileMenu.setAttribute('aria-hidden', 'true');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.focus();
        document.body.style.overflow = '';
        track('mobile_menu_close');
    };

    menuToggle.addEventListener('click', openMenu);
    menuClose && menuClose.addEventListener('click', closeMenu);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu.classList.contains('is-open')) closeMenu();
    });

    mobileMenu.addEventListener('keydown', (e) => {
        if (e.key !== 'Tab') return;
        const focusable = mobileMenu.querySelectorAll('a, button, [tabindex]:not([tabindex="-1"])');
        if (!focusable.length) return;
        const first = focusable[0];
        const last  = focusable[focusable.length - 1];
        if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
        else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    });
})();

/* ------------------------ FAQ accordion --------------------- */
(function () {
    const faqs = document.querySelectorAll('.faq');
    if (!faqs.length) return;

    faqs.forEach((faq) => {
        const btn = faq.querySelector('.faq-q');
        const ans = faq.querySelector('.faq-a');
        if (!btn || !ans) return;

        const id = btn.getAttribute('aria-controls') || ('faq-a-' + Math.random().toString(36).slice(2, 8));
        ans.id = id;
        btn.setAttribute('aria-controls', id);
        btn.setAttribute('aria-expanded', 'false');

        btn.addEventListener('click', () => {
            const isOpen = faq.classList.toggle('is-open');
            btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            if (isOpen) {
                const question = (btn.textContent || '').replace(/\s+/g, ' ').replace('+', '').trim().slice(0, 120);
                track('faq_open', { question });
            }
        });
    });
})();

/* ------------------------ Reveal animation ------------------- */
(function () {
    const els = document.querySelectorAll('.reveal');
    if (!els.length || !('IntersectionObserver' in window)) {
        els.forEach((el) => el.classList.add('is-visible'));
        return;
    }
    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                io.unobserve(entry.target);
            }
        });
    }, { rootMargin: '-40px 0px', threshold: 0.05 });
    els.forEach((el) => io.observe(el));
})();

/* ------------------------ Auto link tracking ---------------- */
/**
 * Single delegated click listener on the document. Inspects the
 * clicked link and fires the right GA event with rich parameters.
 *
 * Categories:
 *   wa.me           → whatsapp_click
 *   tel:            → phone_click
 *   mailto:         → email_click
 *   <img> inside QR → qr_click (also fires whatsapp_click)
 *   external http   → external_link_click
 *   internal http   → internal_link_click  (only for explicit CTAs)
 *
 * data-track-event="cta_click" on a link forces a cta_click event
 * with the link's text as cta_label.
 */
(function () {
    document.addEventListener('click', (e) => {
        const a = e.target.closest('a');
        if (!a || !a.href) return;
        const href = a.href;
        const location = trackLocation(a);
        const label = (a.textContent || '').replace(/\s+/g, ' ').trim().slice(0, 80);

        // Explicit override
        const explicit = a.dataset.trackEvent;
        if (explicit) {
            track(explicit, {
                location,
                cta_label: label,
                destination: href,
            });
        }

        // QR code wrapper
        if (a.closest('.live-cta-qr')) {
            track('qr_click', { location, destination: href });
        }

        // WhatsApp deep link
        if (/wa\.me|api\.whatsapp\.com/.test(href)) {
            track('whatsapp_click', {
                location,
                cta_label: label,
                destination: href,
            });
            return;
        }

        // Phone
        if (href.startsWith('tel:')) {
            track('phone_click', { location, destination: href });
            return;
        }

        // Email
        if (href.startsWith('mailto:')) {
            track('email_click', {
                location,
                destination: href,
                address: href.replace('mailto:', '').split('?')[0],
            });
            return;
        }

        // External link
        try {
            const url = new URL(href, location);
            const isExternal = url.origin !== window.location.origin && /^https?:/.test(url.protocol);
            if (isExternal) {
                track('external_link_click', {
                    location,
                    cta_label: label,
                    destination: href,
                    domain: url.hostname,
                });
            }
        } catch (_) { /* invalid URL — ignore */ }
    }, { capture: true, passive: true });
})();

/* ------------------------ Contact form submit -------------- */
(function () {
    const form = document.querySelector('form[action*="contact"]');
    if (!form) return;
    form.addEventListener('submit', () => {
        track('contact_form_submit', {
            location: 'contact_page',
            page_path: location.pathname,
        });
    });
})();

/* ------------------------ Scroll depth --------------------- */
(function () {
    if (!('requestAnimationFrame' in window)) return;
    const milestones = [25, 50, 75, 100];
    const hit = new Set();
    let queued = false;

    const measure = () => {
        queued = false;
        const doc = document.documentElement;
        const total = Math.max(doc.scrollHeight - window.innerHeight, 1);
        const pct = Math.round(((window.scrollY || doc.scrollTop) / total) * 100);
        milestones.forEach((m) => {
            if (pct >= m && !hit.has(m)) {
                hit.add(m);
                track('scroll_depth', { percent: m });
            }
        });
        if (hit.size === milestones.length) {
            window.removeEventListener('scroll', onScroll);
        }
    };

    const onScroll = () => {
        if (!queued) {
            queued = true;
            requestAnimationFrame(measure);
        }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
})();
