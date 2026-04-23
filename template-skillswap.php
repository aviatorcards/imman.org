<?php
/**
 * Template Name: Skill Swap
 */
get_header(); ?>

<main id="primary" class="site-main container">
    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-intro">
            <?php while ( have_posts() ) : the_post(); the_content(); endwhile; wp_reset_postdata(); ?>
        </div>
    </header>

    <div class="skill-grid">
        <?php
        $args = array(
            'post_type' => 'skill',
            'posts_per_page' => -1,
            'post_status' => 'publish'
        );
        $skills = new WP_Query($args);
        if ($skills->have_posts()) :
            while ($skills->have_posts()) : $skills->the_post(); ?>
                <div class="skill-card">
                    <h3><?php the_title(); ?></h3>
                    <div class="skill-tags">
                        <span class="skill-tag">OFFERING</span>
                    </div>
                    <div class="skill-content">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>?subject=Skill Swap Proposal: <?php echo urlencode(get_the_title()); ?>&target=<?php echo urlencode(get_the_title()); ?>" class="btn btn-link">Propose a Trade &rarr;</a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No skill trades listed yet. What can you offer?</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
