<?php get_header(); ?>

<main id="primary" class="site-main container">
    <article class="error-404 not-found">
        <header class="entry-header">
            <h1 class="entry-title">404</h1>
        </header>
        <div class="entry-content">
            <p>There's more than corn in Indiana - but there's nothing here.</p>
            <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Head back home</a></p>
        </div>
    </article>
</main>

<?php get_footer(); ?>
