
<?php
    $title = get_field('contact_title');
    $body = get_field('contact_body');
    $url = get_field('contact_url');
    
?>


    <section class="hm-contact">
        <div class="container">

            <div class="hm-contact__wrapper">
                <h4><?php echo $title; ?></h4>
                <p><?php echo $body; ?></p>
                <a href="<?php echo $url; ?>" class="btn btn__dark">contact us</a>
            </div>
        </div>
    </section>