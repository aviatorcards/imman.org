(function() {
    const container = document.getElementById('masthead');
    const button = container.querySelector('.menu-toggle');
    const menu = container.querySelector('.main-navigation');

    let scrollTicking = false;
    function updateScrollState() {
        container.classList.toggle('is-scrolled', window.scrollY > 8);
        scrollTicking = false;
    }
    window.addEventListener('scroll', function() {
        if (!scrollTicking) {
            window.requestAnimationFrame(updateScrollState);
            scrollTicking = true;
        }
    }, { passive: true });
    updateScrollState();

    if (!button || !menu) {
        return;
    }

    button.addEventListener('click', function() {
        const expanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !expanded);
        container.classList.toggle('is-open');
        document.body.classList.toggle('menu-open');
    });

    // Close menu when clicking on a link
    const links = menu.getElementsByTagName('a');
    for (let link of links) {
        link.addEventListener('click', function() {
            button.setAttribute('aria-expanded', 'false');
            container.classList.remove('is-open');
            document.body.classList.remove('menu-open');
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInside = container.contains(event.target);
        if (!isClickInside && container.classList.contains('is-open')) {
            button.setAttribute('aria-expanded', 'false');
            container.classList.remove('is-open');
            document.body.classList.remove('menu-open');
        }
    });
})();