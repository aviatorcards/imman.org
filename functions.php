<?php
if ( ! function_exists( 'imman_setup' ) ) :
    function imman_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'imman-custom' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'imman_setup' );

// Custom Post Types
function imman_register_cpts() {
    register_post_type( 'venue', array(
        'labels' => array( 'name' => 'Venues', 'singular_name' => 'Venue' ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-location',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'show_in_rest' => true,
    ) );

    register_post_type( 'gear', array(
        'labels' => array( 'name' => 'Gear Share', 'singular_name' => 'Gear Item' ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'show_in_rest' => true,
    ) );

    register_post_type( 'stay', array(
        'labels' => array( 'name' => 'Hosting & Practice Network', 'singular_name' => 'Network Entry' ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => array( 'title', 'editor', 'custom-fields' ),
        'show_in_rest' => true,
        'taxonomies'  => array( 'space_type' ),
    ) );

    register_post_type( 'skill', array(
        'labels' => array( 'name' => 'Skill Swap', 'singular_name' => 'Skill Trade' ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array( 'title', 'editor', 'custom-fields' ),
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'imman_register_cpts' );

function imman_register_taxonomies() {
    register_taxonomy( 'space_type', 'stay', array(
        'labels' => array(
            'name' => 'Space Types',
            'singular_name' => 'Space Type',
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'public' => true,
    ) );
}
add_action( 'init', 'imman_register_taxonomies' );

function imman_scripts() {
    wp_enqueue_style( 'imman-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@700;800;900&display=swap', array(), null );
    wp_enqueue_style( 'imman-style', get_stylesheet_uri(), array('imman-fonts'), time() );
    wp_enqueue_script( 'imman-mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array(), time(), true );
    wp_enqueue_script( 'imman-venues', get_template_directory_uri() . '/js/venues.js', array(), time(), true );

    // Force UM form visibility with inline style to bypass aggressive Cloudflare/browser caching
    $custom_css = "
        .um { opacity: 1 !important; }
        .um .um-field-area input, 
        .um .um-field-area textarea {
            background-color: var(--color-cream-dark) !important;
            border: 1px solid rgba(0,0,0,0.1) !important;
            border-radius: 4px !important;
            padding: 12px 15px !important;
            font-size: 1rem !important;
            font-family: var(--font-body) !important;
            color: var(--color-black) !important;
            min-height: 50px !important;
            height: auto !important;
        }

        .imman-custom-contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .imman-custom-contact-form .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .imman-custom-contact-form .p-field {
            display: flex;
            flex-direction: column;
        }

        .imman-custom-contact-form label {
            font-family: var(--font-heading);
            font-weight: 700;
            color: var(--color-black);
            margin-bottom: 8px;
            font-size: 0.9rem;
            letter-spacing: 0.02em;
        }

        .imman-custom-contact-form .required {
            color: #d32f2f;
        }

        .imman-custom-contact-form input,
        .imman-custom-contact-form textarea {
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

        .imman-custom-contact-form input:focus,
        .imman-custom-contact-form textarea:focus {
            border-color: var(--color-green);
            background-color: #fff;
            outline: none;
            box-shadow: 0 0 0 4px rgba(42, 80, 200, 0.10);
        }

        .imman-custom-contact-form .contact-success-msg {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 15px;
            border-left: 4px solid #4caf50;
            border-radius: 4px;
            font-weight: 600;
        }

        .imman-custom-contact-form .contact-error-msg {
            background-color: #ffebee;
            color: #c62828;
            padding: 15px;
            border-left: 4px solid #ef5350;
            border-radius: 4px;
            font-weight: 600;
        }

        .contact-emergency-notice {
            background-color: #fff4e5;
            border: 2px solid #ffa726;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .emergency-icon {
            font-size: 2rem;
            color: #f57c00;
        }

        .emergency-text h3 {
            color: #e65100;
            margin: 0 0 5px 0;
            font-size: 1.1rem;
            font-family: var(--font-heading);
        }

        .emergency-text p {
            margin: 0;
            color: #5d4037;
            font-size: 0.95rem;
            line-height: 1.4;
        }

        @media (max-width: 768px) {
            .imman-custom-contact-form .form-row {
                grid-template-columns: 1fr;
            }
        }
    ";
    wp_add_inline_style( 'imman-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'imman_scripts' );

// Process Custom Contact Form
function imman_handle_contact_form() {
    if ( ! isset( $_POST['contact_nonce'] ) || ! wp_verify_nonce( $_POST['contact_nonce'], 'imman_contact_nonce' ) ) {
        wp_die( 'Security check failed.' );
    }

    $name    = sanitize_text_field( $_POST['contact_name'] );
    $email   = sanitize_email( $_POST['contact_email'] );
    $subject = sanitize_text_field( $_POST['contact_subject'] );
    $message = sanitize_textarea_field( $_POST['contact_message'] );

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_redirect( add_query_arg( 'contact', 'error', wp_get_referer() ) );
        exit;
    }

    $to      = get_option( 'admin_email' ); // Fallback to site admin if needed, or 'hello@imman.fddl.dev'
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email
    );
    
    $email_subject = 'New Contact via Website: ' . ( $subject ? $subject : 'General Inquiry' );
    
    $email_body = "<h3>New message from the IMMAN website</h3>";
    $email_body .= "<p><strong>Name:</strong> {$name}</p>";
    $email_body .= "<p><strong>Email:</strong> {$email}</p>";
    $email_body .= "<p><strong>Subject:</strong> {$subject}</p>";
    $email_body .= "<br/><p><strong>Message:</strong></p>";
    $email_body .= "<p>" . nl2br( $message ) . "</p>";

    $sent = wp_mail( $to, $email_subject, $email_body, $headers );

    if ( $sent ) {
        wp_redirect( add_query_arg( 'contact', 'success', wp_get_referer() ) );
    } else {
        wp_redirect( add_query_arg( 'contact', 'error', wp_get_referer() ) );
    }
    exit;
}
add_action( 'admin_post_submit_contact_form', 'imman_handle_contact_form' );
add_action( 'admin_post_nopriv_submit_contact_form', 'imman_handle_contact_form' );

// Process Hosting & Practice Network Submission
function imman_handle_network_submission() {
    if ( ! isset( $_POST['network_nonce'] ) || ! wp_verify_nonce( $_POST['network_nonce'], 'submit_network_nonce' ) ) {
        wp_die( 'Security check failed.' );
    }

    $title   = sanitize_text_field( $_POST['entry_title'] );
    $content = sanitize_textarea_field( $_POST['entry_content'] );
    $name    = sanitize_text_field( $_POST['submitter_name'] );
    $email   = sanitize_email( $_POST['submitter_email'] );
    $types   = isset($_POST['space_types']) ? $_POST['space_types'] : array();

    if ( empty( $title ) || empty( $content ) || empty( $name ) || empty( $email ) ) {
        wp_redirect( add_query_arg( 'submission', 'error', wp_get_referer() ) );
        exit;
    }

    // Append submitter info to content for admin review
    $full_content = "<strong>Submitter:</strong> {$name} ({$email})\n\n" . $content;

    $new_post = array(
        'post_title'    => $title,
        'post_content'  => $full_content,
        'post_status'   => 'pending',
        'post_type'     => 'stay',
    );

    $post_id = wp_insert_post( $new_post );

    if ( $post_id && ! is_wp_error( $post_id ) ) {
        // Handle Taxonomies
        if ( ! empty( $types ) ) {
            $types = array_map( 'intval', $types );
            wp_set_object_terms( $post_id, $types, 'space_type' );
        }

        // Notify Admin
        $to      = get_option( 'admin_email' );
        $subject = 'New Submission: Hosting & Practice Network';
        $body    = "A new entry has been submitted for review.\n\nTitle: {$title}\nSubmitter: {$name}\n\nReview here: " . admin_url("post.php?post={$post_id}&action=edit");
        wp_mail( $to, $subject, $body );

        wp_redirect( add_query_arg( 'submission', 'success', home_url('/list-your-space') ) ); // Adjust URL if needed
    } else {
        wp_redirect( add_query_arg( 'submission', 'error', wp_get_referer() ) );
    }
    exit;
}
add_action( 'admin_post_submit_network_entry', 'imman_handle_network_submission' );
add_action( 'admin_post_nopriv_submit_network_entry', 'imman_handle_network_submission' );

// Process Venue Accountability Report
function imman_handle_venue_submission() {
    if ( ! isset( $_POST['venue_nonce'] ) || ! wp_verify_nonce( $_POST['venue_nonce'], 'submit_venue_nonce' ) ) {
        wp_die( 'Security check failed.' );
    }

    $title    = sanitize_text_field( $_POST['venue_name'] );
    $location = sanitize_text_field( $_POST['venue_location'] );
    $content  = sanitize_textarea_field( $_POST['venue_content'] );
    $name     = sanitize_text_field( $_POST['submitter_name'] );
    $email    = sanitize_email( $_POST['submitter_email'] );
    $metrics  = isset($_POST['metrics']) ? $_POST['metrics'] : array();

    if ( empty( $title ) || empty( $content ) || empty( $name ) || empty( $email ) ) {
        wp_redirect( add_query_arg( 'submission', 'error', wp_get_referer() ) );
        exit;
    }

    $full_content = "<strong>Location:</strong> {$location}\n";
    $full_content .= "<strong>Reported by:</strong> {$name} ({$email})\n\n";
    $full_content .= $content;

    $new_post = array(
        'post_title'    => $title,
        'post_content'  => $full_content,
        'post_status'   => 'pending',
        'post_type'     => 'venue',
    );

    $post_id = wp_insert_post( $new_post );

    if ( $post_id && ! is_wp_error( $post_id ) ) {
        // Save metrics as meta for filtering later
        if ( ! empty( $metrics ) ) {
            update_post_meta( $post_id, 'venue_metrics', $metrics );
        }
        update_post_meta( $post_id, 'venue_location', $location );

        wp_redirect( add_query_arg( 'submission', 'success', home_url('/submit-venue') ) );
    } else {
        wp_redirect( add_query_arg( 'submission', 'error', wp_get_referer() ) );
    }
    exit;
}
add_action( 'admin_post_submit_venue_report', 'imman_handle_venue_submission' );
add_action( 'admin_post_nopriv_submit_venue_report', 'imman_handle_venue_submission' );

// Filter to rename navigation menu items programmatically for clarity
function imman_rename_menu_items( $items ) {
    $replacements = array(
        'TOUR-IN'   => 'Safe Spaces',
        'GEAR'      => 'Gear Share',
        'SKILLS'    => 'Skill Swap',
        'COMMUNITY' => 'Community'
    );

    foreach ( $items as $item ) {
        $upper_title = strtoupper( $item->title );
        if ( isset( $replacements[ $upper_title ] ) ) {
            $item->title = $replacements[ $upper_title ];
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'imman_rename_menu_items' );
