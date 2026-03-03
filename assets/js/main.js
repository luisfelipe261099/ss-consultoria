/**
 * SS Consultoria Ambiental - Main Interactions
 */

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initScrollNavbar();
    initScrollReveal();
    initStatsCounter();
});

/**
 * Mobile Menu Toggle Logic
 */
function initMobileMenu() {
    const menuToggle = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
            document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu when a link is clicked
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                navLinks.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }
}

/**
 * Navbar background change on scroll
 */
function initScrollNavbar() {
    const nav = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.style.padding = '8px 40px';
            nav.style.background = 'rgba(255, 255, 255, 0.95)';
        } else {
            nav.style.padding = '15px 40px';
            nav.style.background = 'rgba(255, 255, 255, 0.85)';
        }
    });
}

/**
 * Scroll Reveal using Intersection Observer
 */
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal, section:not(.hero) > *');

    // Add reveal class if not present
    revealElements.forEach(el => {
        if (!el.classList.contains('reveal')) {
            el.classList.add('reveal');
        }
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); // Reveal only once
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => observer.observe(el));
}

/**
 * Animated Stats Counter
 */
function initStatsCounter() {
    const stats = document.querySelectorAll('.stat-item h3');

    if (stats.length === 0) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    stats.forEach(stat => observer.observe(stat));

    function animateCounter(el) {
        const text = el.innerText;
        const target = parseInt(text.replace(/\D/g, ''));
        const suffix = text.replace(/[0-9]/g, '');
        let count = 0;
        const duration = 2000; // 2 seconds
        const stepTime = Math.abs(Math.floor(duration / target));

        const timer = setInterval(() => {
            count += 1;
            el.innerText = suffix + count;
            if (count >= target) {
                el.innerText = suffix + target;
                clearInterval(timer);
            }
        }, stepTime);
    }
}
