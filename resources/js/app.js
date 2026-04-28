// Mobile menu toggle
const menuToggle = document.querySelector('.menu-toggle');
const menuClose  = document.querySelector('.mobile-menu-close');
const mobileMenu = document.querySelector('.mobile-menu');

function openMenu() {
    mobileMenu.classList.add('is-open');
    mobileMenu.setAttribute('aria-hidden', 'false');
    menuToggle.setAttribute('aria-expanded', 'true');
    menuClose.focus();
    document.body.style.overflow = 'hidden';
}

function closeMenu() {
    mobileMenu.classList.remove('is-open');
    mobileMenu.setAttribute('aria-hidden', 'true');
    menuToggle.setAttribute('aria-expanded', 'false');
    menuToggle.focus();
    document.body.style.overflow = '';
}

if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', openMenu);
    menuClose.addEventListener('click', closeMenu);

    // Close on Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu.classList.contains('is-open')) {
            closeMenu();
        }
    });

    // Focus trap within mobile menu
    mobileMenu.addEventListener('keydown', (e) => {
        if (e.key !== 'Tab') return;
        const focusable = mobileMenu.querySelectorAll('a, button, [tabindex]:not([tabindex="-1"])');
        const first = focusable[0];
        const last  = focusable[focusable.length - 1];
        if (e.shiftKey && document.activeElement === first) {
            e.preventDefault();
            last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
            e.preventDefault();
            first.focus();
        }
    });
}

// FAQ accordion — wired up in Phase 4 when FAQ page is built
