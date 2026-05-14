<?php get_header(); ?>

<div class="dev-banner" style="background: var(--color-amber); color: #fff; text-align: center; padding: 10px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; position: relative; z-index: 101;">
    Development Build — Version 0.8.4 Alpha — Site Under Construction
</div>

<main id="primary" class="site-main">
    <section class="hero">
        <div class="container">
            <h1>Music is Community.<br>Community is Survival.</h1>
            <p>IMMAN is a horizontal, direct-action mental health and resource network for Indiana musicians. We look out for each other so we can keep the music playing.</p>
            <div class="hero-btns">
                <a href="<?php echo esc_url( home_url( '/register' ) ); ?>" class="btn btn-primary">Join the Network</a>
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </section>

    <section class="pillars">
        <div class="container">
            <div class="pillar-grid">
                <div class="pillar-card">
                    <h3>Gear Share</h3>
                    <p>From loaner amps to emergency van repairs, we pool our resources to ensure a broken jack or a flat tire doesn't stop the show.</p>
                    <a href="<?php echo esc_url( home_url( '/gear' ) ); ?>" class="btn-link">Browse Gear &rarr;</a>
                </div>
                <div class="pillar-card">
                    <h3>Community & Events</h3>
                    <p>From "Gig Suppers" and emergency funds to monthly live jams and open mics. We build the physical and social infrastructure musicians need to survive.</p>
                    <a href="<?php echo esc_url( home_url( '/community' ) ); ?>" class="btn-link">Get Involved &rarr;</a>
                </div>
                <div class="pillar-card">
                    <h3>Skill Swap</h3>
                    <p>Every musician has a "day job." We trade non-musical talents—fixing laptops, cars, or legal docs—to keep our community strong.</p>
                    <a href="<?php echo esc_url( home_url( '/skills' ) ); ?>" class="btn-link">View Ledger &rarr;</a>
                </div>
                <div class="pillar-card">
                    <span class="program-status" style="margin-bottom: 10px; display: inline-block;">Coming Soon</span>
                    <h3>Artist Sites</h3>
                    <p>Building professional corners of the web for Indiana artists. Get your own subdomain and a musician-focused site on the IMMAN network.</p>
                    <a href="<?php echo esc_url( home_url( '/artist-sites' ) ); ?>" class="btn-link">Learn More &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-inner">
                <h2>Ready to build something together?</h2>
                <p>Joining the network is free and always will be. We're currently in active development, onboarding our first 100 members.</p>
                <div class="cta-btn-wrapper">
                    <a href="<?php echo esc_url( home_url( '/register' ) ); ?>" class="btn">Create an Account</a>
                </div>
                <div class="cta-circle"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
