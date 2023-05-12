<?php
    /*
        Template Name: Service
    */ 
?>

<?php get_header();?>
<!-- services -->
    <?php if(have_rows('services_page')) : while(the_repeater_field('services_page')) : ?>
    <section class="services-page">
        <div class="container">
            <div class="services-page-wrapper">
                <div class="services-page-content">
                    <h2><?php echo get_sub_field('serv_title'); ?></h2>
                    <p><?php echo get_sub_field('serv_content'); ?></p>
                    <div class="price">
                        <p>Price starts at</p>
                        <h4><?php echo get_sub_field('serv_price'); ?></h4>
                        <h5>Price may vary depending on the design development</h5>
                    </div>
                </div>
                <?php
                    $img = get_sub_field('serv_img');
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
    <?php
                    endwhile;
                    else :
                        echo "There is no content!";
                    endif;
                    wp_reset_postdata();
                ?>         
    <?php get_footer(); ?>