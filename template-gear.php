<?php
/**
 * Template Name: Gear Share
 */
get_header(); ?>

<main id="primary" class="site-main container">
    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-intro">
            <?php while ( have_posts() ) : the_post(); the_content(); endwhile; wp_reset_postdata(); ?>
        </div>
    </header>

    <div class="gear-grid">
        <?php
        $args = array(
            'post_type' => 'gear',
            'posts_per_page' => -1,
            'post_status' => 'publish'
        );
        $gear = new WP_Query($args);
        if ($gear->have_posts()) :
            while ($gear->have_posts()) : $gear->the_post(); ?>
                <div class="gear-card">
                    <h3><?php the_title(); ?></h3>
                    <div class="gear-status">Available for Request</div>
                    <div class="gear-content">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>?subject=Gear Request: <?php echo urlencode(get_the_title()); ?>&target=<?php echo urlencode(get_the_title()); ?>" class="btn btn-link">Request Item &rarr;</a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>The library is currently empty. Check back soon!</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
