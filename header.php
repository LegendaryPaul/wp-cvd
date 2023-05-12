<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./styles.css"> -->
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/9c749cac5e.js" crossorigin="anonymous"></script>
    <title>Creative Visual Design</title>
</head>
<body>
    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="branding">
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/home/Ellipse 1.png" alt="">
                    <h2>Creative <span>Visual</span> Design</h2>
                </div>
                <div class="header-nav">
                    <ul>
                        <?php wp_menu_li(); ?>
                    </ul>
                </div>
                <div class="toggle-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>