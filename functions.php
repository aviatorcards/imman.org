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

/* ============================================================
   Artist Sites — request, provisioning, admin tracking.
   Subdirectory multisite is the target. The form falls back to
   request-collection mode when multisite isn't enabled yet.
   See ARTIST_SITES_TODO.md for the conversion checklist.
   ============================================================ */

// CPT used as both a request log AND a record of provisioned sites.
function imman_register_site_request_cpt() {
    register_post_type( 'site_request', array(
        'labels'       => array(
            'name'          => 'Artist Sites',
            'singular_name' => 'Artist Site',
            'menu_name'     => 'Artist Sites',
        ),
        'public'          => false,
        'show_ui'         => true,
        'show_in_menu'    => true,
        'menu_icon'       => 'dashicons-microphone',
        'supports'        => array( 'title', 'editor', 'custom-fields' ),
        'capability_type' => 'post',
    ) );
}
add_action( 'init', 'imman_register_site_request_cpt' );

function imman_site_request_columns( $columns ) {
    $new = array();
    foreach ( $columns as $key => $label ) {
        $new[ $key ] = $label;
        if ( 'title' === $key ) {
            $new['site_url']   = 'URL';
            $new['theme_pref'] = 'Theme';
            $new['requester']  = 'Requester';
            $new['req_status'] = 'Status';
        }
    }
    return $new;
}
add_filter( 'manage_site_request_posts_columns', 'imman_site_request_columns' );

function imman_site_request_column_data( $column, $post_id ) {
    switch ( $column ) {
        case 'site_url':
            $slug = get_post_meta( $post_id, 'requested_slug', true );
            if ( ! $slug ) {
                echo '—';
                break;
            }
            $blog_id = (int) get_post_meta( $post_id, 'blog_id', true );
            $url     = home_url( '/' . $slug . '/' );
            if ( $blog_id ) {
                printf(
                    '<a href="%s" target="_blank" rel="noopener">imman.org/%s</a>',
                    esc_url( $url ),
                    esc_html( $slug )
                );
            } else {
                echo esc_html( 'imman.org/' . $slug );
            }
            break;
        case 'theme_pref':
            echo esc_html( get_post_meta( $post_id, 'theme_preference', true ) ?: '—' );
            break;
        case 'requester':
            $name  = get_post_meta( $post_id, 'requester_name', true );
            $email = get_post_meta( $post_id, 'requester_email', true );
            if ( $name || $email ) {
                echo esc_html( $name );
                if ( $email ) echo '<br><small>' . esc_html( $email ) . '</small>';
            } else {
                echo '—';
            }
            break;
        case 'req_status':
            echo esc_html( get_post_meta( $post_id, 'provision_status', true ) ?: 'pending review' );
            break;
    }
}
add_action( 'manage_site_request_posts_custom_column', 'imman_site_request_column_data', 10, 2 );

/**
 * Slugs that must never be claimable as an artist site path because they
 * collide with WordPress core, the main site's pages, or registered CPTs.
 * Kept centralized so the form handler and any future preflight checks agree.
 */
function imman_artist_reserved_slugs() {
    return array(
        // WP core / standard endpoints
        'wp-admin', 'wp-login', 'wp-content', 'wp-includes', 'wp-json',
        'wp-cron', 'wp-comments-post', 'xmlrpc', 'feed', 'comments',
        // Common URL primitives that conflict with rewrites
        'page', 'category', 'tag', 'author', 'attachment', 'search', 'sitemap',
        // Main site pages (template-*.php on imman-custom)
        'about', 'community', 'contact', 'gear', 'skill-swap', 'tour-in',
        'venues', 'submit-network', 'submit-venue', 'artist-sites', 'login',
        'register', 'account', 'profile', 'members', 'user',
        // CPT base slugs from this theme
        'venue', 'stay', 'skill', 'site_request',
        // Brand / role / generic names we want to keep
        'www', 'mail', 'admin', 'administrator', 'root', 'api', 'app',
        'cdn', 'dev', 'staging', 'test', 'shop', 'store', 'help', 'docs',
        'support', 'imman', 'network', 'sites', 'site',
    );
}

/**
 * Provision a brand-new subdirectory site for an artist.
 *
 * @param array $args { user_id, slug, title, theme }
 * @return int|WP_Error new blog ID on success
 */
function imman_provision_artist_site( $args ) {
    if ( ! is_multisite() ) {
        return new WP_Error( 'not_multisite', 'Multisite is not enabled on this install.' );
    }

    $user_id = (int) ( $args['user_id'] ?? 0 );
    $slug    = sanitize_title( $args['slug']  ?? '' );
    $title   = sanitize_text_field( $args['title'] ?? '' );
    $theme   = sanitize_key( $args['theme'] ?? '' );

    if ( ! $user_id || ! $slug || ! $title ) {
        return new WP_Error( 'missing_args', 'user_id, slug, and title are required.' );
    }

    $user = get_userdata( $user_id );
    if ( ! $user ) {
        return new WP_Error( 'no_user', 'User not found.' );
    }

    $domain = parse_url( network_site_url(), PHP_URL_HOST );
    $path   = '/' . $slug . '/';

    if ( domain_exists( $domain, $path ) ) {
        return new WP_Error( 'taken', 'A site already exists at that URL.' );
    }

    $blog_id = wpmu_create_blog( $domain, $path, $title, $user_id );
    if ( is_wp_error( $blog_id ) ) {
        return $blog_id;
    }

    // Activate the chosen theme on the new site, if it's a known one.
    if ( $theme && 'byo' !== $theme ) {
        $available = wp_get_themes();
        if ( isset( $available[ $theme ] ) ) {
            switch_to_blog( $blog_id );
            switch_theme( $theme );
            restore_current_blog();
        }
    }

    return $blog_id;
}

// Process the artist site request form on template-artist-sites.php
function imman_handle_artist_site_request() {
    if ( ! isset( $_POST['artist_site_nonce'] ) || ! wp_verify_nonce( $_POST['artist_site_nonce'], 'imman_artist_site_request' ) ) {
        wp_die( 'Security check failed.' );
    }

    $referer = wp_get_referer() ?: home_url( '/artist-sites' );

    if ( ! is_user_logged_in() ) {
        wp_safe_redirect( add_query_arg( 'site_request', 'error', $referer ) );
        exit;
    }

    $user         = wp_get_current_user();
    $slug         = strtolower( sanitize_text_field( wp_unslash( $_POST['slug'] ?? '' ) ) );
    $project_name = sanitize_text_field( wp_unslash( $_POST['project_name'] ?? '' ) );
    $genre        = sanitize_text_field( wp_unslash( $_POST['genre'] ?? '' ) );
    $theme        = sanitize_key( $_POST['theme_preference'] ?? '' );
    $notes        = sanitize_textarea_field( wp_unslash( $_POST['notes'] ?? '' ) );

    $fail = function( $code, $reason = '' ) use ( $referer ) {
        $args = array( 'site_request' => $code );
        if ( $reason ) $args['reason'] = rawurlencode( $reason );
        wp_safe_redirect( add_query_arg( $args, $referer ) . '#request' );
        exit;
    };

    // Slug shape: 3–32 chars, lowercase alphanum + hyphen, no leading/trailing hyphen.
    $slug_valid = (bool) preg_match( '/^[a-z0-9][a-z0-9-]{1,30}[a-z0-9]$/', $slug );
    if ( empty( $slug ) || empty( $project_name ) || ! $slug_valid ) {
        $fail( 'error', 'Check the URL slug and project name' );
    }

    if ( in_array( $slug, imman_artist_reserved_slugs(), true ) ) {
        $fail( 'taken' );
    }

    // Reject if the slug collides with a published page on the main site.
    $page = get_page_by_path( $slug );
    if ( $page ) {
        $fail( 'taken' );
    }

    // One artist site per user, for now. Stored on user_meta after provisioning.
    $existing_blog = (int) get_user_meta( $user->ID, 'imman_artist_blog_id', true );
    if ( $existing_blog ) {
        $fail( 'limit' );
    }

    // Reject duplicate slug on already-tracked requests/sites.
    $existing = get_posts( array(
        'post_type'      => 'site_request',
        'post_status'    => array( 'publish', 'pending', 'draft', 'private' ),
        'meta_key'       => 'requested_slug',
        'meta_value'     => $slug,
        'posts_per_page' => 1,
        'fields'         => 'ids',
    ) );
    if ( ! empty( $existing ) ) {
        $fail( 'taken' );
    }

    // Always log the request as a CPT post — gives us audit history regardless of mode.
    $post_id = wp_insert_post( array(
        'post_title'   => sprintf( '%s (imman.org/%s)', $project_name, $slug ),
        'post_content' => $notes,
        'post_status'  => is_multisite() ? 'publish' : 'pending',
        'post_type'    => 'site_request',
        'post_author'  => $user->ID,
    ), true );

    if ( ! $post_id || is_wp_error( $post_id ) ) {
        $fail( 'error', 'Could not record the request' );
    }

    update_post_meta( $post_id, 'requested_slug',    $slug );
    update_post_meta( $post_id, 'project_name',      $project_name );
    update_post_meta( $post_id, 'genre',             $genre );
    update_post_meta( $post_id, 'theme_preference',  $theme );
    update_post_meta( $post_id, 'requester_name',    $user->display_name );
    update_post_meta( $post_id, 'requester_email',   $user->user_email );
    update_post_meta( $post_id, 'requester_user_id', $user->ID );

    // Multisite mode: provision immediately and send the user to their dashboard.
    if ( is_multisite() ) {
        $blog_id = imman_provision_artist_site( array(
            'user_id' => $user->ID,
            'slug'    => $slug,
            'title'   => $project_name,
            'theme'   => $theme,
        ) );

        if ( is_wp_error( $blog_id ) ) {
            update_post_meta( $post_id, 'provision_status', 'failed: ' . $blog_id->get_error_message() );
            $fail( 'error', $blog_id->get_error_message() );
        }

        update_post_meta( $post_id, 'blog_id',          (int) $blog_id );
        update_post_meta( $post_id, 'provision_status', 'provisioned' );
        update_user_meta( $user->ID, 'imman_artist_blog_id', (int) $blog_id );

        // Notify admin (for awareness, not action).
        wp_mail(
            get_option( 'admin_email' ),
            'Artist site provisioned: imman.org/' . $slug,
            "{$user->display_name} <{$user->user_email}> created imman.org/{$slug} ({$project_name}).\nTheme: {$theme}\nAdmin: " . get_admin_url( $blog_id )
        );

        wp_safe_redirect( get_admin_url( $blog_id ) );
        exit;
    }

    // Fallback (single-site mode): treat as a request, notify admin, return success.
    update_post_meta( $post_id, 'provision_status', 'pending review' );
    wp_mail(
        get_option( 'admin_email' ),
        'New Artist Site Request: imman.org/' . $slug,
        "A new artist site request was submitted.\n\n"
        . "URL:       imman.org/{$slug}\n"
        . "Project:   {$project_name}\n"
        . "Genre:     {$genre}\n"
        . "Theme:     {$theme}\n"
        . "Requester: {$user->display_name} <{$user->user_email}>\n\n"
        . ( $notes ? "Notes:\n{$notes}\n\n" : '' )
        . 'Review here: ' . admin_url( "post.php?post={$post_id}&action=edit" )
    );

    wp_safe_redirect( add_query_arg( 'site_request', 'success', $referer ) . '#request' );
    exit;
}
add_action( 'admin_post_submit_artist_site_request', 'imman_handle_artist_site_request' );

// Persistent admin nag until multisite is configured. The form works in
// fallback mode without it, but auto-provisioning needs the network.
function imman_artist_sites_admin_notice() {
    if ( ! current_user_can( 'manage_options' ) ) return;
    if ( is_multisite() ) return;

    $screen = get_current_screen();
    $relevant = $screen && in_array( $screen->id, array( 'dashboard', 'edit-site_request' ), true );
    if ( ! $relevant ) return;

    echo '<div class="notice notice-warning"><p>';
    echo '<strong>Artist Sites:</strong> Multisite is not enabled, so the request form is in <em>manual review</em> mode. ';
    echo 'Enable WordPress multisite (subdirectory) to turn on instant self-serve provisioning. ';
    echo 'Steps are in <code>ARTIST_SITES_TODO.md</code> at the project root.';
    echo '</p></div>';
}
add_action( 'admin_notices', 'imman_artist_sites_admin_notice' );

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
