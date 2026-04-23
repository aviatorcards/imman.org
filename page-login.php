<?php
/**
 * Template Name: Auth Page (Login/Register)
 */
get_header(); ?>

<main id="primary" class="site-main container">
    <div class="auth-container">
        <header class="auth-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <p><?php
                if ( is_page( 'login' ) || is_page( 'login-2' ) ) {
                    echo 'Welcome back to the network.';
                } else {
                    echo 'Join the community-led musician network.';
                }
            ?></p>
        </header>

        <div class="auth-form-wrapper">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>

        <footer class="auth-footer">
            <?php if ( is_page( 'login' ) || is_page( 'login-2' ) ) : ?>
                <p>Don't have an account? <a href="<?php echo esc_url( home_url( '/register' ) ); ?>">Register here</a></p>
            <?php else : ?>
                <p>Already have an account? <a href="<?php echo esc_url( home_url( '/login' ) ); ?>">Login here</a></p>
            <?php endif; ?>
        </footer>
    </div>
</main>

<?php get_footer(); ?>
