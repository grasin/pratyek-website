/* ============================================================
   PRATYEK — app.js
   Vanilla JS for: mobile menu, FAQ accordion, reveal animation,
   smooth scroll. Nothing else.
   ============================================================ */

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
    };

    const closeMenu = () => {
        mobileMenu.classList.remove('is-open');
        mobileMenu.setAttribute('aria-hidden', 'true');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.focus();
        document.body.style.overflow = '';
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
