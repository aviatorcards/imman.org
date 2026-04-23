<?php
/**
 * Template Name: Hosting & Practice Network
 */
get_header(); ?>

<main id="primary" class="site-main container">
    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-intro">
            <?php while ( have_posts() ) : the_post(); the_content(); endwhile; wp_reset_postdata(); ?>
        </div>
    </header>

    <div class="page-layout">
        <div class="content-area">
            <div class="stay-grid">
                <?php
                $args = array(
                    'post_type' => 'stay',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'
                );
                $stays = new WP_Query($args);
                if ($stays->have_posts()) :
                    while ($stays->have_posts()) : $stays->the_post(); 
                        $types = get_the_terms(get_the_ID(), 'space_type');
                        ?>
                        <div class="stay-card">
                            <h3><?php the_title(); ?></h3>
                            <div class="stay-meta">
                                <?php if ($types && !is_wp_error($types)) : ?>
                                    <?php foreach ($types as $type) : ?>
                                        <span class="stay-type-tag type-<?php echo esc_attr($type->slug); ?>"><?php echo esc_html($type->name); ?></span>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <span class="stay-type-tag">Network Member</span>
                                <?php endif; ?>
                            </div>
                            <div class="stay-content">
                                <?php the_content(); ?>
                            </div>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>?subject=Network Inquiry: <?php echo urlencode(get_the_title()); ?>&target=<?php echo urlencode(get_the_title()); ?>" class="btn btn-link">Contact Host &rarr;</a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>The network is currently growing. Check back soon or consider offering a space!</p>';
                endif;
                ?>
            </div>
        </div>

        <aside class="sidebar">
            <div class="sidebar-box">
                <h3>Join the Network</h3>
                <p>
                    From basement rehearsal spots to secure tour van parking or hosting a pop-up gig, our network connects artists with the infrastructure they need to thrive.
                </p>
                <ul class="sidebar-list">
                    <li>✓ Rehearsal & Practice Space</li>
                    <li>✓ Touring Artist Housing</li>
                    <li>✓ Event & Pop-up Hosting</li>
                    <li>✓ Secure Gear Storage</li>
                </ul>
                <div class="sidebar-quote">
                    "Finding a reliable place to practice or crash between shows is the backbone of our community."
                </div>
                <hr style="border: 0; border-top: 1px solid rgba(0,0,0,0.1); margin: 25px 0;">
                <a href="<?php echo esc_url(home_url('/list-your-space')); ?>" class="btn btn-primary" style="display: block; text-align: center; width: 100%;">Offer a Space</a>
            </div>
        </aside>
    </div>
</main>

<?php get_footer(); ?>
