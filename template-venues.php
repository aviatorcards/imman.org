<?php
/**
 * Template Name: Venue Database
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
            <div class="venue-grid">
                <?php
                $args = array(
                    'post_type' => 'venue',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'
                );
                $venues = new WP_Query($args);
                if ($venues->have_posts()) :
                    while ($venues->have_posts()) : $venues->the_post(); 
                        $metrics = get_post_meta(get_the_ID(), 'venue_metrics', true);
                        if (empty($metrics)) $metrics = array();
                        ?>
                        <div class="venue-card is-collapsed">
                            <h3><?php the_title(); ?></h3>
                            <div class="venue-meta">
                                <?php if (in_array('fair-pay', $metrics)) echo '<span title="Fair Pay" style="color: #2e7d32;">💰</span>'; ?>
                                <?php if (in_array('safe-load', $metrics)) echo '<span title="Safe Load-in" style="color: #1565c0;">🚚</span>'; ?>
                                <?php if (in_array('pro-sound', $metrics)) echo '<span title="Pro Sound" style="color: #ef6c00;">🔊</span>'; ?>
                                Verified Community Entry
                            </div>
                            <div class="venue-content">
                                <?php the_content(); ?>
                                <div style="margin-top: 25px; padding-top: 20px; border-top: 1px dashed rgba(0,0,0,0.1);">
                                    <a href="<?php echo esc_url(home_url('/contact')); ?>?subject=Venue Inquiry: <?php echo urlencode(get_the_title()); ?>&target=<?php echo urlencode(get_the_title()); ?>" class="btn btn-secondary" style="font-size: 0.8rem; padding: 8px 16px;">Inquire about this Venue</a>
                                </div>
                            </div>
                            <div class="venue-expand-hint">Click to view details</div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No venues reported yet. Be the first!</p>';
                endif;
                ?>
            </div>
        </div>

        <aside class="sidebar">
            <div class="sidebar-box">
                <h3>Venue Accountability</h3>
                <p>
                    This database is maintained by the community. We track venues that are musician-friendly, safe, and fair.
                </p>
                <ul class="sidebar-list">
                    <li>💰 Fair pay transparency</li>
                    <li>🚚 Safe load-in/out</li>
                    <li>🔊 Sound engineer quality</li>
                    <li>🤝 Hospitality & Respect</li>
                </ul>
                <hr style="border: 0; border-top: 1px solid rgba(0,0,0,0.1); margin: 25px 0;">
                <a href="<?php echo esc_url(home_url('/submit-venue')); ?>" class="btn btn-primary" style="display: block; text-align: center; width: 100%;">Add a Venue Report</a>
            </div>
        </aside>
    </div>
</main>

<?php get_footer(); ?>
