<?php get_header(); ?>

<main id="primary" class="site-main container">
    <div class="post-list">
        <?php if ( have_posts() ) : ?>
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header class="page-header">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item' ); ?>>
                    <header class="entry-header">
                        <?php if ( is_singular() ) : ?>
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <?php else : ?>
                            <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                        <?php endif; ?>

                        <div class="post-meta">
                            <span class="posted-on"><?php echo get_the_date(); ?></span>
                        </div>
                    </header>

                    <div class="entry-content">
                        <?php
                        if ( is_singular() ) {
                            the_content();
                        } else {
                            the_excerpt();
                            echo '<a href="' . esc_url( get_permalink() ) . '" class="read-more">Keep Reading &rarr;</a>';
                        }
                        ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title">Nothing Found</h1>
                </header>
                <div class="page-content">
                    <p>It seems we can't find what you're looking for. Maybe try a search?</p>
                    <?php get_search_form(); ?>
                </div>
            </section>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
