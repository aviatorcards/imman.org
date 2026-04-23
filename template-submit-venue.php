<?php
/**
 * Template Name: Submit a Venue
 */
get_header(); ?>

<main id="primary" class="site-main container">
    <header class="page-header">
        <h1 class="page-title">Submit a Venue Report</h1>
        <p class="page-intro">
            Help your fellow musicians by sharing details about local venues. We're looking for honest info on pay, safety, and technical quality.
        </p>
    </header>

    <div class="page-layout">
        <div class="content-area">
            <?php if ( isset($_GET['submission']) && $_GET['submission'] == 'success' ) : ?>
                <div class="contact-success-msg" style="margin-bottom: 30px; background-color: #e8f5e9; color: #2e7d32; padding: 20px; border-left: 4px solid #4caf50; border-radius: 4px;">
                    <strong>Report Received!</strong> Thank you for contributing to the community database. We'll review and publish your report shortly.
                </div>
            <?php elseif ( isset($_GET['submission']) && $_GET['submission'] == 'error' ) : ?>
                <div class="contact-error-msg" style="margin-bottom: 30px; background-color: #ffebee; color: #c62828; padding: 20px; border-left: 4px solid #ef5350; border-radius: 4px;">
                    <strong>Error:</strong> We couldn't save your report. Please ensure all required fields are filled out.
                </div>
            <?php endif; ?>

            <div class="submission-form-container contact-card" style="background: #fff; padding: 40px; border: 1px solid rgba(0,0,0,0.05); border-radius: 8px;">
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="imman-custom-contact-form">
                    <input type="hidden" name="action" value="submit_venue_report">
                    <?php wp_nonce_field( 'submit_venue_nonce', 'venue_nonce' ); ?>

                    <div class="p-field">
                        <label for="venue_name">Venue Name <span class="required">*</span></label>
                        <input type="text" id="venue_name" name="venue_name" required placeholder="e.g. The Melody Inn">
                    </div>

                    <div class="p-field">
                        <label for="venue_location">Location / City <span class="required">*</span></label>
                        <input type="text" id="venue_location" name="venue_location" required placeholder="e.g. Indianapolis, IN">
                    </div>

                    <div class="p-field">
                        <label>Key Accountability Metrics <span class="required">*</span></label>
                        <div style="background: var(--color-cream-dark); padding: 20px; border-radius: 4px; display: grid; gap: 15px; margin-top: 10px;">
                            <label style="display: flex; align-items: center; gap: 10px; font-weight: normal;">
                                <input type="checkbox" name="metrics[]" value="fair-pay" style="width: auto;">
                                Fair & Transparent Pay (No "pay to play")
                            </label>
                            <label style="display: flex; align-items: center; gap: 10px; font-weight: normal;">
                                <input type="checkbox" name="metrics[]" value="safe-load" style="width: auto;">
                                Safe & Accessible Load-in/out
                            </label>
                            <label style="display: flex; align-items: center; gap: 10px; font-weight: normal;">
                                <input type="checkbox" name="metrics[]" value="pro-sound" style="width: auto;">
                                Professional Sound/Engineer provided
                            </label>
                            <label style="display: flex; align-items: center; gap: 10px; font-weight: normal;">
                                <input type="checkbox" name="metrics[]" value="hospitality" style="width: auto;">
                                Hospitality (Meals, water, or green room)
                            </label>
                        </div>
                    </div>

                    <div class="p-field">
                        <label for="venue_content">Your Experience & Advice <span class="required">*</span></label>
                        <p style="font-size: 0.85rem; color: var(--color-grey); margin-bottom: 10px;">What should other bands know? How do they handle booking? Is the staff friendly?</p>
                        <textarea id="venue_content" name="venue_content" rows="6" required placeholder="Share your experience..."></textarea>
                    </div>

                    <div class="form-row">
                        <div class="p-field">
                            <label for="submitter_name">Your Name/Band <span class="required">*</span></label>
                            <input type="text" id="submitter_name" name="submitter_name" required>
                        </div>
                        <div class="p-field">
                            <label for="submitter_email">Your Email <span class="required">*</span></label>
                            <input type="email" id="submitter_email" name="submitter_email" required>
                        </div>
                    </div>

                    <div style="margin-top: 30px;">
                        <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 1.1rem; padding: 15px;">Submit Venue Report</button>
                    </div>
                </form>
            </div>
        </div>

        <aside class="sidebar">
            <div class="sidebar-box">
                <h3>Why Report?</h3>
                <p>
                    By documenting our experiences, we hold venues accountable and ensure that Indiana remains a great place for live music.
                </p>
                <div class="sidebar-quote">
                    "Transparency helps new bands avoid bad deals and find the rooms that actually support artists."
                </div>
            </div>
        </aside>
    </div>
</main>

<?php get_footer(); ?>
