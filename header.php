<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <!-- ta emot funktion här -->
        <?php wp_head();?>

    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="header-container">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                    <a href="<?php echo home_url();?>"><h1 class="logo-txt"><?php bloginfo('name');?></h1> </a> 
                </div>
           
                <div class="navbar-toggle" id="js-navbar-toggle">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <div class="header-menu">
                        <nav class="header-nav">       
                        <?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?>
                        
                        </nav>
                </div>
            </div>
        </header>