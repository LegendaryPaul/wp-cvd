
<?php
    /*
        Template Name: Home
    */ 
?>

<?php get_header(); ?>
<!-- banner -->
<section class="banner">
        <div class="container">
            <div class="banner-wrapper">
                <div class="banner-text">
                    <h1><?php echo get_field('banner_title'); ?></h1>
                    <p><?php echo get_field('banner_concept'); ?></p>
                    <a href="#" class="btn btn__yellow">Explore more</a>
                </div>
                <?php
                    $img = get_field('banner_img');
                    if(!empty($img)):
                ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="services">
        <div class="container">
            <div class="services-wrapper">
                <?php if(have_rows('service_repeater')) : while(the_repeater_field('service_repeater')) :?>
                <div class="services-item">
                    <?php
                        $img = get_sub_field('service_icon');
                        if(!empty($img)):
                    ?>

                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
                    <?php endif;?>
                    <h3><?php echo get_sub_field('service_title'); ?></h3>
                    <p><?php echo get_sub_field('service_content'); ?></p>
                    <a href="#" class="btn btn__yellow">Get a Qoute</a>
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

    <!-- about -->
    <section class="hm-about">
        <div class="container">
            <div class="hm-about-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/home/unsplash_GIy2ly37Kw8.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/home/Ellipse 1.png" alt="" id="yellow">

                <div class="hm-about-text">
                    <h2>About Me</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia totam laborum nostrum, illo expedita necessitatibus nesciunt repellendus vel dolore itaque id. Necessitatibus pariatur error voluptatum, quibusdam fugit molestiae neque tenetur. Temporibus alias magni porro neque recusandae ab voluptatem exercitationem, itaque dolorum officia corrupti quo dolore repellendus quia. Incidunt, quia unde?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia totam laborum nostrum, illo expedita necessitatibus nesciunt repellendus vel dolore itaque id. Necessitatibus pariatur error voluptatum, quibusdam fugit molestiae neque tenetur. Temporibus alias magni porro neque recusandae ab voluptatem exercitationem, itaque dolorum officia corrupti quo dolore repellendus quia. Incidunt, quia unde?</p>
                </div>
            </div>
        </div>
    </section>

    <!-- latest trends -->
    <section class="trends">
        <div class="container">
            <div class="trends-title">
                <h2>Latest Trends</h2>
                <p>Latest Happening in virtual space</p>
            </div>
            <div class="trends-wrapper">
                <div class="trends-item">
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/home/unsplash_3MAmj1ZKSZA.png" alt="">
                    <div class="trends-text">
                        <h4>Designing for a cause</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum ipsam ratione cumque veritatis error atque inventore distinctio iste, itaque modi!</p>
                        <a href="#">Read more...</a>
                    </div>
                </div>
                <div class="trends-item">
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/home/unsplash_3Sf_G9m0gcQ.png" alt="">
                    <div class="trends-text">
                        <h4>Designing for a cause</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure voluptatibus ipsum, mollitia voluptates beatae sequi earum deleniti repellendus corporis facilis.</p>
                        <a href="#">Read more...</a>
                    </div>
                </div>
                <div class="trends-item">
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/home/unsplash_D5nh6mCW52c.png" alt="">
                    <div class="trends-text">
                        <h4>Designing for a cause</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum ipsam ratione cumque veritatis error atque inventore distinctio iste, itaque modi!</p>
                        <a href="#">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- hm-contact -->
    <section class="hm-contact">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>



<?php get_footer(); ?>