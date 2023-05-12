<?php get_header(); ?>

<section class="ltrends">
    <div class="container">
        <div class="updates-title">
            <h2>Latest Trends</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <div class="ltrends__wrapper">
            <?php echo get_the_post_thumbnail(); ?>
            <div class="trends__content">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <?php echo get_field('trends_author'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>