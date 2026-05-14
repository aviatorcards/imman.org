<?php
/**
 * Template Name: Coming Soon (Artist Sites)
 * 
 * @package IMMAN_Custom
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="coming-soon-wrapper">
            <div class="page-header">
                <span class="program-status">In Development</span>
                <h1>IMMAN Artist Sites</h1>
                <p class="page-intro">
                    We're building a simple, powerful way for Indiana musicians and bands to create their own corner of the web—directly under the IMMAN umbrella.
                </p>
            </div>

            <div class="feature-row">
                <div class="feature-content">
                    <h2>Your Own Subdomain</h2>
                    <p>Get a professional URL like <code>yourband.imman.org</code>. No more fighting for usernames or dealing with cluttered social media profiles as your primary home.</p>
                </div>
                <div class="feature-image-placeholder">
                    yourband.imman.org
                </div>
            </div>

            <div class="feature-row">
                <div class="feature-image-placeholder">
                    Powered by WordPress
                </div>
                <div class="feature-content">
                    <h2>Simple & Customizable</h2>
                    <p>Built on the same platform as this network. You'll have access to curated themes designed specifically for musicians, making it easy to share your music, shows, and gear.</p>
                </div>
            </div>

            <div class="cta-section">
                <div class="cta-inner">
                    <div class="cta-circle"></div>
                    <h2>Coming Soon</h2>
                    <p>We're currently fine-tuning the infrastructure to ensure every artist gets a fast, secure, and beautiful site. Join the IMMAN community today to be the first to know when we launch.</p>
                    <div class="cta-btn-wrapper">
                        <a href="<?php echo esc_url( home_url( '/register' ) ); ?>" class="btn">Join the Network</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .coming-soon-wrapper {
        max-width: 1000px;
        margin: 0 auto;
    }

    code {
        background: var(--color-cream-dark);
        padding: 2px 6px;
        border-radius: 4px;
        color: var(--color-green);
        font-weight: 700;
    }

    .feature-image-placeholder {
        font-size: 1.2rem;
        letter-spacing: 0.05em;
        text-transform: lowercase;
    }

    @media (max-width: 768px) {
        .feature-image-placeholder {
            min-height: 200px;
        }
    }
</style>

<?php get_footer(); ?>
