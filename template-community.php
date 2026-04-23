<?php
/**
 * Template Name: Community Support
 */
get_header(); ?>

<main id="primary" class="site-main container">
    <header class="page-header">
        <h1 class="page-title">Community Support & Mutual Aid</h1>
        <p class="page-intro">We look out for each other. These programs are funded and maintained by the local music community to provide a safety net for those on the road and at home.</p>
    </header>

    <div class="program-row">
        <div class="program-header">
            <h2>The "Gig Supper" Program</h2>
            <span class="program-status">Active Program</span>
        </div>
        <div class="program-content">
            <p>We partner with local grocers and gardeners to provide meal kits and "brown bag" dinners for musicians on their way to or from a show. No one should have to play on an empty stomach.</p>
            <div class="program-grid">
                <div class="feature-content">
                    <h3>Get a Meal</h3>
                    <p>Stop by one of our designated pick-up locations before your next gig. All we need is a link to your event listing.</p>
                    <a href="#" class="btn btn-secondary">Find Pick-up Points</a>
                </div>
                <div class="feature-content">
                    <h3>Donate to the Fund</h3>
                    <p>Help us keep the pantry stocked. Every $10 provides three meals for a touring artist.</p>
                    <a href="#" class="btn btn-primary">Support Gig Supper</a>
                </div>
            </div>
        </div>
    </div>

    <div class="program-row">
        <div class="program-header">
            <h2>Emergency Van Fund</h2>
            <span class="program-status">Low Funds Warning</span>
        </div>
        <div class="program-content">
            <p>A community-funded pot specifically for roadside assistance, minor repairs, or last-minute transport when a rig fails. This fund is meant to bridge the gap and keep the tour moving.</p>
            <div class="program-grid">
                <div class="feature-content">
                    <h3>Request Assistance</h3>
                    <p>Stuck on I-65? We have a network of musician-friendly mechanics and a small fund for towing and minor repairs.</p>
                    <a href="<?php echo esc_url( home_url( '/emergency-van-fund' ) ); ?>" class="btn btn-primary">Get Help Now</a>
                </div>
                <div class="feature-content">
                    <h3>Contribute to the Pot</h3>
                    <p>All donations go directly to repair shops and towing services. No overhead, no administrative fees.</p>
                    <a href="#" class="btn btn-secondary">Donate to the Fund</a>
                </div>
            </div>
        </div>
    </div>

    <div class="program-row featured-event" style="border-left: 8px solid var(--color-amber);">
        <div class="program-header">
            <h2>Live Jams & Local Events</h2>
            <span class="program-status">Monthly Recurring</span>
        </div>
        <div class="program-content">
            <p>We're establishing a monthly (or bi-monthly) live jam session for local musicians to connect, practice, and perform in a low-pressure environment. We also maintain a list of local open mics and community resources.</p>
            <div class="program-grid">
                <div class="feature-content">
                    <h3>Get Involved</h3>
                    <p>Interested in joining the next jam or have a venue to suggest? We want to hear from you.</p>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>?subject=Jam%20Session%20Interest" class="btn btn-primary">Join the Session</a>
                </div>
                <div class="feature-content">
                    <h3>Local Open Mics</h3>
                    <p>From the Sound Garden (Wednesdays) to The Roots (Monthly Acoustic), we help musicians find their community.</p>
                    <p><strong>Recurring Listings:</strong></p>
                    <ul style="font-size: 0.9rem; color: var(--color-grey); list-style: none; margin-top: 10px;">
                        <li>• The Sound Garden (Wednesdays @ 7PM)</li>
                        <li>• The Roots Acoustic Night (1st Tuesdays)</li>
                        <li>• DIY Show Poster Workshop (Quarterly)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="program-row">
        <div class="program-header">
            <h2>"Coffee and Chords" Check-ins</h2>
            <span class="program-status">Every Other Tuesday</span>
        </div>
        <div class="program-content">
            <p>Informal meetups where we can talk about industry burnout, mental health, and the pressures of performance without the need to "be on." No instruments allowed, just conversation.</p>
            <a href="#" class="btn btn-secondary">See Next Meetup</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
