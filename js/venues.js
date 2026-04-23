(function() {
    console.log('IMMAN Venues script initializing...');

    function setupVenues() {
        const venueCards = document.querySelectorAll('.venue-card');
        console.log('Found ' + venueCards.length + ' venue cards.');

        venueCards.forEach(card => {
            // Remove any existing listeners just in case
            card.onclick = null;

            card.onclick = function(e) {
                // Ignore clicks on links or elements within links
                if (e.target.tagName === 'A' || e.target.closest('a')) {
                    return;
                }

                console.log('Venue card clicked:', this.querySelector('h3').innerText);
                
                const isCollapsed = this.classList.toggle('is-collapsed');
                const hint = this.querySelector('.venue-expand-hint');

                if (hint) {
                    hint.textContent = isCollapsed ? 'Click to view details' : 'Click to show less';
                }

                // If expanded, update parent grid to handle height change?
                // Most modern browsers will handle grid row growth automatically.

                if (isCollapsed) {
                    const rect = this.getBoundingClientRect();
                    if (rect.top < 0) {
                        this.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            };
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', setupVenues);
    } else {
        setupVenues();
    }
})();
