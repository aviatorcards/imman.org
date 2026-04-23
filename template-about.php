<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<main id="primary" class="site-main container">
    <section class="about-hero">
        <div class="container">
            <h1>By musicians,<br>For musicians.</h1>
            <p>IMMAN is a horizontal, direct-action project designed to build resilience and solidarity within the Indiana music community.</p>
        </div>
    </section>

    <div class="feature-row">
        <div class="feature-content">
            <h2>Horizontal Leadership</h2>
            <p>We have no traditional board of directors. Decisions are made by active, local musicians who understand the daily challenges of the industry.</p>
            <p>This structure ensures that our resources go directly to where they are needed most—not into bureaucratic overhead or grant-writing cycles.</p>
        </div>
        <div class="feature-image-placeholder">
            <span>[COMMUNITY_MEETING_IMG]</span>
        </div>
    </div>

    <div class="feature-row">
        <div class="feature-content">
            <h2>Direct Action</h2>
            <p>We prioritize immediate needs. If a van breaks down on tour, we help with roadside assistance. If a rig fails mid-show, we provide loaner gear.</p>
            <p>Mutual aid is not charity; it is a way to ensure our artistic culture survives the pressures of commercialization and isolation.</p>
        </div>
        <div class="feature-image-placeholder">
            <span>[GEAR_HOSPITAL_IMG]</span>
        </div>
    </div>

    <section class="values-section">
        <h2 style="text-align: center; margin-bottom: 40px;">Our Core Values</h2>
        <div class="values-grid">
            <div class="value-card">
                <h3>Skill Sharing</h3>
                <p>Every musician has "day job" skills—tech, mechanical, legal—that are valuable to others.</p>
            </div>
            <div class="value-card">
                <h3>Venue Accountability</h3>
                <p>We track and support venues that treat artists with respect and fairness.</p>
            </div>
            <div class="value-card">
                <h3>Mental Health</h3>
                <p>Informal check-ins and support networks to combat industry burnout.</p>
            </div>
        </div>
    </section>

    <div class="entry-content">
        <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
