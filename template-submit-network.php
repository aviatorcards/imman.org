<?php
/**
 * Template Name: Submit to Network
 */
get_header(); ?>

<main id="primary" class="site-main container">
    <header class="page-header">
        <h1 class="page-title">List Your Space</h1>
        <p class="page-intro">
            Submit your space to the Hosting & Practice Network. All submissions are reviewed by our community moderators before being published.
        </p>
    </header>

    <div class="page-layout">
        <div class="content-area">
            <?php if ( isset($_GET['submission']) && $_GET['submission'] == 'success' ) : ?>
                <div class="contact-success-msg" style="margin-bottom: 30px; background-color: #e8f5e9; color: #2e7d32; padding: 20px; border-left: 4px solid #4caf50; border-radius: 4px;">
                    <strong>Thank you!</strong> Your submission has been received and is currently under review. We'll reach out if we have any questions.
                </div>
            <?php elseif ( isset($_GET['submission']) && $_GET['submission'] == 'error' ) : ?>
                <div class="contact-error-msg" style="margin-bottom: 30px; background-color: #ffebee; color: #c62828; padding: 20px; border-left: 4px solid #ef5350; border-radius: 4px;">
                    <strong>Error:</strong> Something went wrong with your submission. Please check all required fields and try again.
                </div>
            <?php endif; ?>

            <div class="submission-form-container contact-card" style="background: #fff; padding: 40px; border: 1px solid rgba(0,0,0,0.05); border-radius: 8px;">
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="imman-custom-contact-form">
                    <input type="hidden" name="action" value="submit_network_entry">
                    <?php wp_nonce_field( 'submit_network_nonce', 'network_nonce' ); ?>

                    <div class="p-field">
                        <label for="entry_title">Name of Space / Entry Title <span class="required">*</span></label>
                        <input type="text" id="entry_title" name="entry_title" required placeholder="e.g. The Sound Garage Rehearsal Space">
                    </div>

                    <div class="p-field">
                        <label>What type of space is this? (Select all that apply) <span class="required">*</span></label>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 10px; background: var(--color-cream-dark); padding: 20px; border-radius: 4px;">
                            <?php 
                            $terms = get_terms( array(
                                'taxonomy' => 'space_type',
                                'hide_empty' => false,
                            ) );
                            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
                                foreach ( $terms as $term ) : ?>
                                    <label style="display: flex; align-items: center; gap: 10px; font-weight: normal; cursor: pointer; margin-bottom: 0;">
                                        <input type="checkbox" name="space_types[]" value="<?php echo esc_attr($term->term_id); ?>" style="width: auto;">
                                        <?php echo esc_html($term->name); ?>
                                    </label>
                                <?php endforeach;
                            else : ?>
                                <p style="font-size: 0.8rem; color: var(--color-grey);">No space types defined yet. Please contact admin.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="p-field">
                        <label for="entry_content">Description & Details <span class="required">*</span></label>
                        <p style="font-size: 0.85rem; color: var(--color-grey); margin-bottom: 10px;">Include details about equipment, availability, house rules, and any costs (if any).</p>
                        <textarea id="entry_content" name="entry_content" rows="6" required placeholder="Tell us about the space..."></textarea>
                    </div>

                    <div class="form-row">
                        <div class="p-field">
                            <label for="submitter_name">Your Name <span class="required">*</span></label>
                            <input type="text" id="submitter_name" name="submitter_name" required>
                        </div>
                        <div class="p-field">
                            <label for="submitter_email">Your Email <span class="required">*</span></label>
                            <input type="email" id="submitter_email" name="submitter_email" required>
                        </div>
                    </div>

                    <div style="margin-top: 30px;">
                        <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 1.1rem; padding: 15px;">Submit for Review</button>
                    </div>
                </form>
            </div>
        </div>

        <aside class="sidebar">
            <div class="sidebar-box">
                <h3>Vetting Process</h3>
                <p>
                    Safety is our priority. After submission, a member of our horizontal leadership team will:
                </p>
                <ul class="sidebar-list">
                    <li>1. Verify your contact info</li>
                    <li>2. Discuss community safety standards</li>
                    <li>3. Publish the listing</li>
                </ul>
                <hr style="border: 0; border-top: 1px solid rgba(0,0,0,0.1); margin: 25px 0;">
                <p style="font-size: 0.8rem;">
                    Questions? <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact us</a>
                </p>
            </div>
        </aside>
    </div>
</main>

<?php get_footer(); ?>
