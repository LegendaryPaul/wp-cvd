<?php

    /*
        Template Name: About
    */ 

?>
<?php get_header();?>

    <!-- about me -->
    <section class="about-me">
        <div class="container">
            <div class="about-me-wrapper">
                <div class="about-me-content">
                    <div class="about-me-title">
                        <p><?php echo get_field('banner_excerpt'); ?></p>
                        <h2><?php echo get_field('banner_title'); ?></h2>
                    </div>
                    <div class="about-me-text">
                        <p><?php echo get_field('banner_concept'); ?></p>
                    </div>
                    <div class="about-me-socials">
                    <?php echo get_field('banner_socials'); ?>
                    </div>
                </div>
                <?php
                    $img = get_field('banner_img');
                    if(!empty($img)):
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif;?>
            </div>
            <div class="arrow">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>
    </section>

    <!-- recent -->
    <section class="recent">
        <div class="container">
            <div class="recent-title">
                <h2>My Recent Projects</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="recent-wrapper">
                <?php if(have_rows('card_repeater')) : while(the_repeater_field('card_repeater')) :?>
                <div class="recent-card">
                    <?php
                        $img = get_sub_field('card_icon');
                        if(!empty($img)):
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>
                    <div class="recent-text">
                        <h4><?php echo get_sub_field('card_title'); ?></h4>
                        <p><?php echo get_sub_field('card_content'); ?></p>
                    </div>
                </div>
                <?php
                    endwhile;
                    else :
                        echo "There is no content!";
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>



    <!-- hm-contact -->
    <section class="hm-contact">
        <div class="container">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
                <?php 
                    endwhile;
                else:
                    echo "no post";
                endif;
                ?>
        </div>
    </section>
<?php get_footer(); ?>