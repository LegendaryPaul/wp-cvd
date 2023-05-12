<?php
/*
    Template Name: Update
*/ 

?>
<?php get_header(); ?>
<!-- updates -->
<section class="updates">
        <div class="container">
            <div class="updates-title">
                <h2>Latest Trends</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="updates-wrapper">
            <div class="updates-left">
                <?php
                        $args = array(
                            'post_type' => 'cvdPost',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'uncategorized'
                                ),
                            ),
                        );
                        $newQuery = new WP_Query($args);
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                    <div class="updates-left-item">
                        <?php echo get_the_post_thumbnail(); ?>
                        <?php echo get_field('trends_author'); ?>
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>">Read more...</a>
                    </div>
                    <?php
                    endwhile;
                    else :
                        echo "There is no content!";
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="updates-right">

                    <div class="updates-right-item">
                        <h4>Categories</h4>
                        <table>
                            <?php if(have_rows('categories_repeater')) : while(the_repeater_field('categories_repeater')) :?>
                            <tr>
                                <td><?php echo get_sub_field('category_title'); ?></td>
                                <td>(<?php echo get_sub_field('category_number'); ?>)</td>
                            </tr>
                            <?php
                                endwhile;
                                else :
                                    echo "There is no content!";
                                endif;
                                wp_reset_postdata();
                            ?>
                        </table>
                    </div>
                    <div class="updates-right-item">
                        <h4>Recent Post</h4>
                        <div class="updates-right-content">
                            <img src="./assets/updates/unsplash_Im7lZjxeLhg.png" alt="">
                            <div class="updates-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, tenetur?</p>
                                <h5>March 15, 2023</h5>
                            </div>
                        </div>
                        <div class="updates-right-content">
                            <img src="./assets/updates/unsplash_MxVkWPiJALs.png" alt="">
                            <div class="updates-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, tenetur?</p>
                                <h5>March 15, 2023</h5>
                            </div>
                        </div>
                        <div class="updates-right-content">
                            <img src="./assets/updates/unsplash_OqtafYT5kTw.png" alt="">
                            <div class="updates-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, tenetur?</p>
                                <h5>March 15, 2023</h5>
                            </div>
                        </div>
                    </div>
                    <div class="updates-right-item">
                        <h4>Tags</h4>

                        <div class="updates-a">
    <?php
    $tags = get_tags();
    if ( $tags ) :
        foreach ( $tags as $tag ) : ?>
            <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
        <?php endforeach; ?>
    <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- hm-contact -->
    <section class="hm-contact">
        <div class="container">
            <div class="hm-contact__wrapper">
                <h4>Feel free to talk to us about your project</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn btn__dark">contact us</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>