<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <header class="page-header">
            <h1 class="page-title">Get in Touch</h1>
            <p class="page-intro">Have a question about the network? Need help with a resource? Or just want to say hello? Drop us a line and one of our volunteers will get back to you.</p>
        </header>

        <div class="contact-emergency-notice">
            <div class="emergency-icon">🚨</div>
            <div class="emergency-text">
                <h3>Immediate Assistance Needed?</h3>
                <p>If you are experiencing a life-threatening emergency or mental health crisis, please contact emergency services immediately by <strong>dialing 911</strong> or the Suicide & Crisis Lifeline at <strong>988</strong>. This form is monitored by volunteers and is not for emergency response.</p>
            </div>
        </div>

        <div class="contact-layout">
            <div class="contact-info">
                <div class="contact-method">
                    <h3>Direct Support</h3>
                    <p>For immediate needs like the Emergency Van Fund or help with a show, please use the specific forms on those pages if possible.</p>
                </div>

                <div class="contact-method">
                    <h3>Email</h3>
                    <p><a href="mailto:hello@monotreme.org" class="contact-link">hello@monotreme.org</a></p>
                </div>

                <div class="contact-method">
                    <h3>Events & Jams</h3>
                    <p>Have information about a local open mic or want to host a monthly jam session? Use the form to submit your event details.</p>
                </div>

                <div class="contact-method">
                    <h3>Community Hub</h3>
                    <p>We're often found at local venues and community spaces across Indiana. Join the network to see our event calendar and meetup locations.</p>
                </div>

                <div class="sidebar-quote" style="margin-top: 40px;">
                    "We're stronger together. Don't hesitate to reach out if you're struggling or have a resource to share."
                </div>
            </div>

            <div class="contact-form-wrapper">
                <div class="contact-card">
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="imman-custom-contact-form">
                        <input type="hidden" name="action" value="submit_contact_form">
                        <?php wp_nonce_field( 'imman_contact_nonce', 'contact_nonce' ); ?>
                        
                        <div class="form-row">
                            <div class="p-field">
                                <label for="contact_name">Name <span class="required">*</span></label>
                                <input type="text" id="contact_name" name="contact_name" required placeholder="How should we address you?">
                            </div>
                            <div class="p-field">
                                <label for="contact_email">Email <span class="required">*</span></label>
                                <input type="email" id="contact_email" name="contact_email" required placeholder="Where can we reach you?">
                            </div>
                        </div>

                        <div class="p-field">
                            <label for="contact_subject">Subject</label>
                            <input type="text" id="contact_subject" name="contact_subject" placeholder="What is this regarding?" value="<?php echo isset($_GET['subject']) ? esc_attr($_GET['subject']) : ''; ?>">
                        </div>

                        <div class="p-field p-area">
                            <label for="contact_message">Message <span class="required">*</span></label>
                            <textarea id="contact_message" name="contact_message" rows="6" required placeholder="How can we help?"><?php 
                                if (isset($_GET['message'])) {
                                    echo esc_textarea($_GET['message']);
                                } elseif (isset($_GET['target'])) {
                                    echo "Hi IMMAN, I'm interested in learning more about: " . esc_textarea($_GET['target']) . ".";
                                }
                            ?></textarea>
                        </div>

                        <?php if ( isset( $_GET['contact'] ) && $_GET['contact'] == 'success' ) : ?>
                            <div class="contact-success-msg">
                                Thanks for reaching out! We've received your message and will get back to you shortly.
                            </div>
                        <?php endif; ?>
                        
                        <?php if ( isset( $_GET['contact'] ) && $_GET['contact'] == 'error' ) : ?>
                            <div class="contact-error-msg">
                                There was an issue sending your message. Please try again or email us directly.
                            </div>
                        <?php endif; ?>

                        <div class="p-button">
                            <button type="submit" class="um-button">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
