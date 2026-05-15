<?php
/**
 * Template Name: Artist Sites
 *
 * @package IMMAN_Custom
 */

/**
 * Themes available to members. Colors mirror each theme's theme.json so the
 * preview tiles read as honest mini-mockups, not generic swatches.
 */
$imman_artist_themes = array(
    'amplify'   => array(
        'name'  => 'Amplify',
        'genre' => 'Rock / Punk',
        'desc'  => 'Loud typography, high contrast, max impact.',
        'bg'    => '#0d0d0d', 'surface' => '#161616', 'primary' => '#ff2d2d', 'text' => '#ffffff',
    ),
    'encore'    => array(
        'name'  => 'Encore',
        'genre' => 'Orchestra / Ensemble',
        'desc'  => 'Polished and editorial. Built around press kits and event calendars.',
        'bg'    => '#ffffff', 'surface' => '#f7f7f5', 'primary' => '#1a3a6b', 'text' => '#1a1a1a', 'accent' => '#c8973a',
    ),
    'folklore'  => array(
        'name'  => 'Folklore',
        'genre' => 'Folk / Singer-Songwriter',
        'desc'  => 'Warm parchment and chestnut. Storytelling layouts.',
        'bg'    => '#f5f0e8', 'surface' => '#ede6d6', 'primary' => '#7a4f2e', 'text' => '#2c2118', 'accent' => '#c4853a',
    ),
    'frequency' => array(
        'name'  => 'Frequency',
        'genre' => 'Pop / Indie-Pop',
        'desc'  => 'Crisp white space with bold electric blue and hot pink pops.',
        'bg'    => '#ffffff', 'surface' => '#f5f5f7', 'primary' => '#0055ff', 'text' => '#111111', 'accent' => '#ff3c78',
    ),
    'harmony'   => array(
        'name'  => 'Harmony',
        'genre' => 'Acoustic / Country',
        'desc'  => 'Earthy sienna and amber for storytelling-first layouts.',
        'bg'    => '#faf6f0', 'surface' => '#f4ede3', 'primary' => '#8b4513', 'text' => '#2c1f14', 'accent' => '#c17d3c',
    ),
    'neon'      => array(
        'name'  => 'Neon',
        'genre' => 'Electronic / DJ',
        'desc'  => 'Synthwave gradients on deep midnight. Futuristic typography.',
        'bg'    => '#06060f', 'surface' => '#0d0d1f', 'primary' => '#c800ff', 'text' => '#e8e8f8', 'accent' => '#00f0ff',
    ),
    'reverb'    => array(
        'name'  => 'Reverb',
        'genre' => 'Atmospheric / Dream Pop',
        'desc'  => 'Moody hero sections with soft purples and sky blues.',
        'bg'    => '#0a0a0f', 'surface' => '#12121a', 'primary' => '#c084fc', 'text' => '#f1f0f5', 'accent' => '#38bdf8',
    ),
    'setlist'   => array(
        'name'  => 'Setlist',
        'genre' => 'Jazz / Sophisticated',
        'desc'  => 'Editorial and understated with antique gold accents.',
        'bg'    => '#fafaf8', 'surface' => '#ffffff', 'primary' => '#1a1a1a', 'text' => '#1a1a1a', 'accent' => '#c8a96e',
    ),
    'static'    => array(
        'name'  => 'Static',
        'genre' => 'Indie / Garage',
        'desc'  => 'Lo-fi, monochromatic, DIY zine aesthetic.',
        'bg'    => '#f2f0eb', 'surface' => '#e8e5de', 'primary' => '#1a1a1a', 'text' => '#1a1a1a', 'accent' => '#e63329',
    ),
    'vault'     => array(
        'name'  => 'Vault',
        'genre' => 'Hip-Hop / R&B',
        'desc'  => 'Dark luxury with premium gold accents and editorial typography.',
        'bg'    => '#080808', 'surface' => '#111111', 'primary' => '#c9a84c', 'text' => '#e8e0d0', 'accent' => '#8a7340',
    ),
);

$request_status = isset( $_GET['site_request'] ) ? sanitize_key( $_GET['site_request'] ) : '';

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="artist-sites-wrapper">

            <div class="page-header">
                <span class="program-status">Member Service</span>
                <h1>Artist Sites</h1>
                <p class="page-intro">
                    A simple, powerful way for Indiana musicians and bands to plant a flag on the web — under the IMMAN umbrella, on infrastructure run by the community.
                </p>
            </div>

            <div class="feature-row">
                <div class="feature-content">
                    <h2>Your Own Subdirectory</h2>
                    <p>Get a professional URL like <code>imman.org/yourband</code>. No fighting for usernames, no patchwork of social profiles trying to act as your homepage. One stable address you actually own.</p>
                </div>
                <div class="as-mockup as-browser-mockup" aria-hidden="true">
                    <div class="as-browser-bar">
                        <div class="as-browser-dots">
                            <span></span><span></span><span></span>
                        </div>
                        <div class="as-browser-url">
                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.5 6V3.5a3 3 0 016 0V6" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><rect x="1" y="6" width="9" height="6.5" rx="1.2" stroke="currentColor" stroke-width="1.4"/></svg>
                            <span>imman.org/yourband</span>
                        </div>
                    </div>
                    <div class="as-browser-content">
                        <div class="as-mock-hero">
                            <div class="as-mock-eyebrow">Indianapolis · Folk</div>
                            <div class="as-mock-name">OAK &amp; ASHES</div>
                            <div class="as-mock-tagline">New record out now</div>
                        </div>
                        <div class="as-mock-tour">
                            <div class="as-mock-tour-label">Tour</div>
                            <ul>
                                <li><span>May 23</span><span>The Hi-Fi · Indy</span></li>
                                <li><span>Jun 04</span><span>The Bishop · Bloomington</span></li>
                                <li><span>Jun 11</span><span>Pieres · Fort Wayne</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-row">
                <div class="as-mockup as-picker-mockup" aria-hidden="true">
                    <div class="as-picker-card as-picker-card--back" style="--card-bg:#0a0a0f; --card-accent:#c084fc;">
                        <div class="as-picker-bar"></div>
                        <div class="as-picker-headline"></div>
                        <div class="as-picker-line"></div>
                        <div class="as-picker-line as-picker-line--short"></div>
                    </div>
                    <div class="as-picker-card as-picker-card--mid" style="--card-bg:#f5f0e8; --card-accent:#7a4f2e;">
                        <div class="as-picker-bar"></div>
                        <div class="as-picker-headline"></div>
                        <div class="as-picker-line"></div>
                        <div class="as-picker-line as-picker-line--short"></div>
                    </div>
                    <div class="as-picker-card as-picker-card--front" style="--card-bg:#ffffff; --card-accent:#0055ff;">
                        <div class="as-picker-bar"></div>
                        <div class="as-picker-headline"></div>
                        <div class="as-picker-line"></div>
                        <div class="as-picker-line as-picker-line--short"></div>
                        <div class="as-picker-cta">Use this theme</div>
                    </div>
                </div>
                <div class="feature-content">
                    <h2>Pick a Theme That Fits</h2>
                    <p>Ten prebuilt themes designed for working musicians — from gritty garage rock to dark synthwave to warm folk parchment. Or bring your own theme. You're not boxed in.</p>
                </div>
            </div>

            <section class="as-theme-gallery">
                <div class="as-section-head">
                    <h2>Browse the theme library</h2>
                    <p>Every theme supports the full WordPress block editor, so you can keep going long after launch.</p>
                </div>
                <div class="as-theme-grid">
                    <?php foreach ( $imman_artist_themes as $slug => $t ) :
                        $accent = isset( $t['accent'] ) ? $t['accent'] : $t['primary'];
                        $style  = sprintf(
                            '--t-bg:%s; --t-surface:%s; --t-primary:%s; --t-text:%s; --t-accent:%s;',
                            esc_attr( $t['bg'] ),
                            esc_attr( $t['surface'] ),
                            esc_attr( $t['primary'] ),
                            esc_attr( $t['text'] ),
                            esc_attr( $accent )
                        );
                    ?>
                        <article class="as-theme-card" style="<?php echo $style; ?>">
                            <div class="as-theme-preview">
                                <div class="as-theme-preview-bar">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class="as-theme-preview-body">
                                    <div class="as-theme-preview-eyebrow">Sample Artist</div>
                                    <div class="as-theme-preview-title"><?php echo esc_html( strtoupper( $t['name'] ) ); ?></div>
                                    <div class="as-theme-preview-line"></div>
                                    <div class="as-theme-preview-line as-theme-preview-line--short"></div>
                                    <div class="as-theme-preview-cta">Listen</div>
                                </div>
                            </div>
                            <div class="as-theme-meta">
                                <div class="as-theme-meta-top">
                                    <h3><?php echo esc_html( $t['name'] ); ?></h3>
                                    <span class="as-theme-tag"><?php echo esc_html( $t['genre'] ); ?></span>
                                </div>
                                <p><?php echo esc_html( $t['desc'] ); ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="as-how-it-works">
                <div class="as-section-head">
                    <h2>How it works</h2>
                    <p>The short version: become a member, request a site, get a login. Here's the full path:</p>
                </div>
                <ol class="as-steps">
                    <li>
                        <span class="as-step-num">1</span>
                        <div>
                            <h3>Become an IMMAN member</h3>
                            <p>Artist sites are a member benefit. A small recurring contribution covers your slice of hosting, backups, and the time it takes to keep the lights on for everyone else, too.</p>
                        </div>
                    </li>
                    <li>
                        <span class="as-step-num">2</span>
                        <div>
                            <h3>Pick your URL</h3>
                            <p>Submit the form below with the slug you want for <code>imman.org/yourband</code>, your project name, and which theme catches your eye. We'll check that the name isn't taken.</p>
                        </div>
                    </li>
                    <li>
                        <span class="as-step-num">3</span>
                        <div>
                            <h3><?php echo is_multisite() ? 'Your site is created instantly' : 'We create your site'; ?></h3>
                            <p><?php if ( is_multisite() ) : ?>The moment you submit, a fresh WordPress site is spun up at your URL with your theme already activated. You're redirected straight to the dashboard.<?php else : ?>An IMMAN admin creates your site on the network and emails you a login within a couple of days. (Self-serve provisioning kicks in once the network is configured.)<?php endif; ?></p>
                        </div>
                    </li>
                    <li>
                        <span class="as-step-num">4</span>
                        <div>
                            <h3>Build your site</h3>
                            <p>Log into your WordPress dashboard and start adding tour dates, tracks, photos, merch links — whatever you need. Switch themes any time.</p>
                        </div>
                    </li>
                </ol>
            </section>

            <section class="as-request-section" id="request">
                <div class="as-section-head">
                    <h2><?php echo is_multisite() ? 'Claim your site' : 'Request your site'; ?></h2>
                    <p><?php echo is_multisite()
                        ? 'Pick a URL and a theme. Your site goes live the moment you submit.'
                        : "Fill this out and we'll be in touch. Members only — sign in first if you haven't."; ?></p>
                </div>

                <?php if ( 'success' === $request_status ) : ?>
                    <div class="as-request-success">
                        <strong>Request received.</strong> We'll review your slug choice and reach out at the email on your account within a few days.
                    </div>
                <?php elseif ( 'error' === $request_status ) : ?>
                    <div class="as-request-error">
                        <strong>Something went wrong.</strong>
                        <?php $err = isset( $_GET['reason'] ) ? sanitize_text_field( wp_unslash( $_GET['reason'] ) ) : ''; ?>
                        <?php if ( $err ) : ?> <em><?php echo esc_html( $err ); ?>.</em><?php endif; ?>
                        Please double-check the form and try again, or <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact us</a> if it keeps failing.
                    </div>
                <?php elseif ( 'taken' === $request_status ) : ?>
                    <div class="as-request-error">
                        <strong>That URL is already in use.</strong> Try a different one — variations like adding your city or "music" often work.
                    </div>
                <?php elseif ( 'limit' === $request_status ) : ?>
                    <div class="as-request-error">
                        <strong>You already have an artist site.</strong> One per member, for now. <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Get in touch</a> if you need a second.
                    </div>
                <?php endif; ?>

                <?php if ( ! is_user_logged_in() ) : ?>
                    <div class="as-request-gated">
                        <p>You'll need an IMMAN account to request a site.</p>
                        <div class="as-request-gated-actions">
                            <a class="btn btn-primary" href="<?php echo esc_url( wp_login_url( get_permalink() . '#request' ) ); ?>">Sign in</a>
                            <a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/register' ) ); ?>">Create account</a>
                        </div>
                    </div>
                <?php else :
                    $current_user = wp_get_current_user();
                ?>
                    <form class="as-request-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
                        <input type="hidden" name="action" value="submit_artist_site_request">
                        <?php wp_nonce_field( 'imman_artist_site_request', 'artist_site_nonce' ); ?>

                        <div class="as-form-row">
                            <div class="as-form-field">
                                <label for="as-slug">Site URL <span class="as-required">*</span></label>
                                <div class="as-slug-wrap">
                                    <span class="as-slug-prefix">imman.org/</span>
                                    <input type="text" id="as-slug" name="slug" required pattern="[a-z0-9][a-z0-9-]{1,30}[a-z0-9]" maxlength="32" placeholder="yourband" autocomplete="off" spellcheck="false">
                                </div>
                                <small>Lowercase letters, numbers, and hyphens. 3–32 characters.</small>
                            </div>
                            <div class="as-form-field">
                                <label for="as-project-name">Project / Band Name <span class="as-required">*</span></label>
                                <input type="text" id="as-project-name" name="project_name" required maxlength="120" placeholder="Oak &amp; Ashes">
                            </div>
                        </div>

                        <div class="as-form-row">
                            <div class="as-form-field">
                                <label for="as-genre">Primary genre</label>
                                <input type="text" id="as-genre" name="genre" maxlength="80" placeholder="Folk, Punk, Hip-Hop…">
                            </div>
                            <div class="as-form-field">
                                <label for="as-theme">Theme preference</label>
                                <select id="as-theme" name="theme_preference">
                                    <option value="">— Not sure yet —</option>
                                    <?php foreach ( $imman_artist_themes as $slug => $t ) : ?>
                                        <option value="<?php echo esc_attr( $slug ); ?>"><?php echo esc_html( $t['name'] . ' (' . $t['genre'] . ')' ); ?></option>
                                    <?php endforeach; ?>
                                    <option value="byo">Bring my own theme</option>
                                </select>
                            </div>
                        </div>

                        <div class="as-form-field">
                            <label for="as-notes">Anything we should know?</label>
                            <textarea id="as-notes" name="notes" rows="4" maxlength="2000" placeholder="Existing site to migrate, custom domain plans, accessibility needs…"></textarea>
                        </div>

                        <div class="as-form-meta">
                            Submitting as <strong><?php echo esc_html( $current_user->display_name ); ?></strong> &lt;<?php echo esc_html( $current_user->user_email ); ?>&gt;
                        </div>

                        <button type="submit" class="btn btn-primary"><?php echo is_multisite() ? 'Create my site' : 'Submit request'; ?></button>
                    </form>
                <?php endif; ?>
            </section>

            <section class="as-docs">
                <div class="as-section-head">
                    <h2>Documentation &amp; FAQ</h2>
                </div>
                <details class="as-faq">
                    <summary>Who can get an artist site?</summary>
                    <p>Any IMMAN member in good standing — meaning you're an active subscriber. The site stays live as long as your membership is active. If you pause, your site is archived (not deleted) and you can resume any time.</p>
                </details>
                <details class="as-faq">
                    <summary>What's included?</summary>
                    <p>A WordPress site at <code>imman.org/yourband</code>, your choice of theme from the library above, daily backups, basic spam protection, and a login that's just yours. You can install plugins from a curated allowlist.</p>
                </details>
                <details class="as-faq">
                    <summary>Can I bring my own theme?</summary>
                    <p>Yes. Upload a standard WordPress theme through the dashboard. We'll do a quick safety review before activating it, then it's yours.</p>
                </details>
                <details class="as-faq">
                    <summary>Can I use a custom domain like <code>oakandashes.com</code>?</summary>
                    <p>Eventually — yes. For now we're starting with <code>imman.org/yourband</code> URLs so we can get the provisioning right. Custom domain mapping is on the roadmap.</p>
                </details>
                <details class="as-faq">
                    <summary>Who owns the content?</summary>
                    <p>You do. Full export is one click in the dashboard, and we'll help you migrate elsewhere if you ever leave. No lock-in.</p>
                </details>
                <details class="as-faq">
                    <summary>How do I get help?</summary>
                    <p>Use the <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact form</a> or post in the members' Slack. Everyone running an artist site is in the same channel — it's the fastest way to get an answer.</p>
                </details>
            </section>

        </div>
    </div>
</main>

<style>
/* ============================================================
   Artist Sites — page-specific styles
   Prefix: .as- (artist-sites) to avoid collisions.
   ============================================================ */

.artist-sites-wrapper { max-width: 1100px; margin: 0 auto; }

.artist-sites-wrapper code {
    background: var(--color-cream-dark);
    padding: 2px 6px;
    border-radius: 4px;
    color: var(--color-green);
    font-weight: 700;
    font-size: 0.95em;
}

/* ---------- Mockups (replace .feature-image-placeholder) ---------- */
.as-mockup {
    flex: 1;
    aspect-ratio: 16 / 11;
    border-radius: 10px;
    background: linear-gradient(140deg, var(--color-cream-dark) 0%, #fff 100%);
    box-shadow: var(--shadow);
    padding: 18px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
}

/* Browser mockup */
.as-browser-mockup {
    background: #fff;
    padding: 0;
    border: 1px solid rgba(0,0,0,0.08);
}
.as-browser-bar {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 12px 14px;
    background: var(--color-cream-dark);
    border-bottom: 1px solid rgba(0,0,0,0.06);
}
.as-browser-dots { display: flex; gap: 6px; }
.as-browser-dots span {
    width: 11px; height: 11px; border-radius: 50%;
    background: #d1d5db;
}
.as-browser-dots span:nth-child(1) { background: #ff5f56; }
.as-browser-dots span:nth-child(2) { background: #ffbd2e; }
.as-browser-dots span:nth-child(3) { background: #27c93f; }
.as-browser-url {
    flex: 1;
    background: #fff;
    border-radius: 6px;
    padding: 7px 12px;
    font-family: var(--font-body);
    font-size: 0.85rem;
    color: var(--color-grey);
    display: flex;
    align-items: center;
    gap: 8px;
    border: 1px solid rgba(0,0,0,0.05);
}
.as-browser-url svg { color: var(--color-green); flex-shrink: 0; }
.as-browser-url span { color: var(--color-black); font-weight: 500; }

.as-browser-content {
    flex: 1;
    padding: 28px 32px;
    background: linear-gradient(180deg, #fff 0%, var(--color-cream) 100%);
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.as-mock-hero { line-height: 1.2; }
.as-mock-eyebrow {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--color-grey);
    font-weight: 600;
    margin-bottom: 8px;
}
.as-mock-name {
    font-family: var(--font-heading);
    font-size: 2rem;
    font-weight: 900;
    color: var(--color-green);
    letter-spacing: -0.02em;
}
.as-mock-tagline {
    font-size: 0.85rem;
    color: var(--color-grey);
    margin-top: 4px;
}
.as-mock-tour {
    margin-top: auto;
    border-top: 1px solid rgba(0,0,0,0.08);
    padding-top: 14px;
}
.as-mock-tour-label {
    font-family: var(--font-heading);
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--color-amber);
    font-weight: 700;
    margin-bottom: 8px;
}
.as-mock-tour ul { list-style: none; padding: 0; margin: 0; }
.as-mock-tour li {
    display: flex;
    gap: 14px;
    font-size: 0.78rem;
    padding: 4px 0;
    color: var(--color-black);
    border-bottom: 1px dashed rgba(0,0,0,0.08);
}
.as-mock-tour li:last-child { border-bottom: 0; }
.as-mock-tour li span:first-child {
    font-weight: 700;
    color: var(--color-green);
    flex-shrink: 0;
    width: 50px;
}

/* Theme picker mockup */
.as-picker-mockup {
    align-items: center;
    justify-content: center;
    padding: 30px;
    background: linear-gradient(140deg, var(--color-cream-dark) 0%, #fff 100%);
}
.as-picker-card {
    position: absolute;
    width: 58%;
    aspect-ratio: 4 / 3;
    background: var(--card-bg);
    border-radius: 10px;
    padding: 14px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    display: flex;
    flex-direction: column;
    gap: 8px;
    border: 1px solid rgba(0,0,0,0.06);
    transition: transform 0.4s ease;
}
.as-picker-card--back  { transform: translate(-26%, -18%) rotate(-8deg); opacity: 0.85; }
.as-picker-card--mid   { transform: translate(0%, 4%) rotate(2deg); opacity: 0.95; }
.as-picker-card--front { transform: translate(22%, 14%) rotate(6deg); z-index: 2; }

.as-picker-bar {
    height: 8px; width: 60%;
    background: var(--card-accent);
    border-radius: 2px;
    opacity: 0.9;
}
.as-picker-headline {
    height: 14px; width: 80%;
    background: var(--card-accent);
    border-radius: 2px;
    opacity: 0.6;
}
.as-picker-line {
    height: 6px; width: 90%;
    background: currentColor;
    color: var(--card-accent);
    opacity: 0.25;
    border-radius: 2px;
}
.as-picker-line--short { width: 55%; }
.as-picker-cta {
    margin-top: auto;
    align-self: flex-start;
    background: var(--card-accent);
    color: #fff;
    font-family: var(--font-heading);
    font-weight: 700;
    font-size: 0.6rem;
    padding: 5px 10px;
    border-radius: 3px;
    letter-spacing: 0.05em;
    text-transform: uppercase;
}

/* ---------- Section heads ---------- */
.as-section-head {
    text-align: center;
    margin-bottom: 50px;
    max-width: 720px;
    margin-left: auto;
    margin-right: auto;
}
.as-section-head h2 { font-size: 2.4rem; margin-bottom: 12px; }
.as-section-head p { color: var(--color-grey); font-size: 1.1rem; }

/* ---------- Theme gallery ---------- */
.as-theme-gallery { margin: 120px 0; }
.as-theme-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
    gap: 26px;
}
.as-theme-card {
    background: #fff;
    border: 1px solid rgba(0,0,0,0.06);
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.as-theme-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 30px rgba(0,0,0,0.08);
}
.as-theme-preview {
    background: var(--t-bg);
    color: var(--t-text);
    padding: 0;
    aspect-ratio: 5 / 3;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    border-bottom: 1px solid rgba(0,0,0,0.06);
}
.as-theme-preview-bar {
    background: var(--t-surface);
    padding: 8px 12px;
    display: flex;
    gap: 5px;
    border-bottom: 1px solid rgba(255,255,255,0.04);
}
.as-theme-preview-bar span {
    width: 8px; height: 8px; border-radius: 50%;
    background: var(--t-text);
    opacity: 0.25;
}
.as-theme-preview-body {
    flex: 1;
    padding: 18px 20px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.as-theme-preview-eyebrow {
    font-size: 0.6rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--t-accent);
    font-weight: 700;
    opacity: 0.85;
}
.as-theme-preview-title {
    font-family: var(--font-heading);
    font-weight: 900;
    font-size: 1.4rem;
    color: var(--t-text);
    letter-spacing: -0.01em;
    line-height: 1;
}
.as-theme-preview-line {
    height: 5px;
    background: var(--t-text);
    opacity: 0.18;
    border-radius: 2px;
    width: 90%;
}
.as-theme-preview-line--short { width: 60%; }
.as-theme-preview-cta {
    margin-top: auto;
    align-self: flex-start;
    background: var(--t-primary);
    color: #fff;
    font-family: var(--font-heading);
    font-weight: 700;
    font-size: 0.65rem;
    padding: 6px 12px;
    border-radius: 3px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}
.as-theme-meta { padding: 22px 24px 26px; }
.as-theme-meta-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
    gap: 10px;
}
.as-theme-meta h3 { font-size: 1.25rem; margin: 0; }
.as-theme-tag {
    font-size: 0.65rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    background: var(--color-cream-dark);
    color: var(--color-green);
    padding: 4px 8px;
    border-radius: 50px;
    font-weight: 700;
    white-space: nowrap;
}
.as-theme-meta p {
    font-size: 0.9rem;
    color: var(--color-grey);
    line-height: 1.5;
    margin: 0;
}

/* ---------- How it works ---------- */
.as-how-it-works { margin: 120px 0; }
.as-steps {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}
.as-steps li {
    background: #fff;
    border: 1px solid rgba(0,0,0,0.05);
    border-left: 4px solid var(--color-amber);
    border-radius: 4px;
    padding: 32px 32px 32px 28px;
    display: flex;
    gap: 22px;
}
.as-step-num {
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    background: var(--color-green);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-heading);
    font-weight: 900;
    font-size: 1.2rem;
}
.as-steps h3 { font-size: 1.2rem; margin-bottom: 8px; }
.as-steps p { color: var(--color-grey); font-size: 0.95rem; line-height: 1.6; }

/* ---------- Request form ---------- */
.as-request-section {
    background: #fff;
    border-radius: 10px;
    padding: 60px;
    border: 1px solid rgba(0,0,0,0.05);
    margin: 120px 0;
}
.as-request-section .as-section-head { margin-bottom: 40px; }

.as-request-success,
.as-request-error {
    padding: 16px 20px;
    border-radius: 6px;
    margin-bottom: 30px;
    font-size: 0.95rem;
}
.as-request-success { background: #e8f5e9; color: #2e7d32; border-left: 4px solid #4caf50; }
.as-request-error   { background: #ffebee; color: #c62828; border-left: 4px solid #ef5350; }

.as-request-gated {
    text-align: center;
    padding: 40px 20px;
    background: var(--color-cream);
    border-radius: 6px;
}
.as-request-gated p { font-size: 1.1rem; margin-bottom: 24px; color: var(--color-grey); }
.as-request-gated-actions { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }

.as-request-form { display: flex; flex-direction: column; gap: 24px; }
.as-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
}
.as-form-field { display: flex; flex-direction: column; }
.as-form-field label {
    font-family: var(--font-heading);
    font-weight: 700;
    color: var(--color-black);
    margin-bottom: 8px;
    font-size: 0.9rem;
    letter-spacing: 0.02em;
}
.as-form-field small {
    margin-top: 6px;
    color: var(--color-grey);
    font-size: 0.8rem;
}
.as-required { color: #d32f2f; }

.as-form-field input,
.as-form-field select,
.as-form-field textarea {
    background-color: var(--color-cream-dark);
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 4px;
    padding: 12px 15px;
    font-family: var(--font-body);
    font-size: 1rem;
    color: var(--color-black);
    transition: all 0.2s ease;
    width: 100%;
}
.as-form-field input:focus,
.as-form-field select:focus,
.as-form-field textarea:focus {
    border-color: var(--color-green);
    background-color: #fff;
    outline: none;
    box-shadow: 0 0 0 4px rgba(42, 80, 200, 0.10);
}

.as-slug-wrap {
    display: flex;
    align-items: stretch;
    background: var(--color-cream-dark);
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 4px;
    overflow: hidden;
    transition: all 0.2s ease;
}
.as-slug-wrap:focus-within {
    border-color: var(--color-green);
    background: #fff;
    box-shadow: 0 0 0 4px rgba(42, 80, 200, 0.10);
}
.as-slug-wrap input {
    border: 0;
    border-radius: 0;
    background: transparent;
    box-shadow: none !important;
    flex: 1;
    min-width: 0;
}
.as-slug-wrap input:focus {
    background: transparent;
    box-shadow: none !important;
}
.as-slug-prefix {
    background: rgba(42, 80, 200, 0.08);
    color: var(--color-green);
    padding: 12px 15px;
    font-family: var(--font-body);
    font-weight: 700;
    font-size: 1rem;
    display: flex;
    align-items: center;
    border-right: 1px solid rgba(0,0,0,0.06);
}

.as-form-meta {
    font-size: 0.85rem;
    color: var(--color-grey);
    padding: 12px 16px;
    background: var(--color-cream);
    border-radius: 4px;
}

/* ---------- Documentation / FAQ ---------- */
.as-docs { margin: 120px 0 60px; max-width: 800px; margin-left: auto; margin-right: auto; }
.as-faq {
    background: #fff;
    border: 1px solid rgba(0,0,0,0.05);
    border-radius: 6px;
    padding: 0;
    margin-bottom: 12px;
    overflow: hidden;
}
.as-faq summary {
    padding: 20px 24px;
    cursor: pointer;
    font-family: var(--font-heading);
    font-weight: 700;
    font-size: 1.05rem;
    color: var(--color-black);
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background 0.2s ease;
}
.as-faq summary::-webkit-details-marker { display: none; }
.as-faq summary::after {
    content: "+";
    font-family: var(--font-heading);
    font-size: 1.5rem;
    font-weight: 400;
    color: var(--color-green);
    transition: transform 0.2s ease;
    line-height: 1;
}
.as-faq[open] summary::after { transform: rotate(45deg); }
.as-faq summary:hover { background: var(--color-cream); }
.as-faq p {
    padding: 0 24px 22px;
    color: var(--color-grey);
    line-height: 1.7;
    margin: 0;
}
.as-faq code {
    background: var(--color-cream-dark);
    padding: 1px 6px;
    border-radius: 3px;
    color: var(--color-green);
    font-weight: 600;
    font-size: 0.9em;
}

/* ---------- Responsive ---------- */
@media (max-width: 992px) {
    .as-steps { grid-template-columns: 1fr; }
    .as-request-section { padding: 40px 30px; }
}

@media (max-width: 768px) {
    .as-form-row { grid-template-columns: 1fr; }
    .as-mockup { aspect-ratio: 4 / 3; min-height: 0; }
    .as-section-head h2 { font-size: 1.9rem; }
    .as-theme-gallery,
    .as-how-it-works,
    .as-request-section,
    .as-docs { margin: 70px 0; }
    .as-request-section { padding: 30px 20px; }
    .as-steps li { padding: 24px 22px; }
}
</style>

<?php get_footer(); ?>
