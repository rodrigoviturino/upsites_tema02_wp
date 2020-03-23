<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="./theme.min.css">
    <link rel="stylesheet" href="./fonts/fonts.css"> -->
    <title>Theme 05</title>

    <?php wp_head(); ?>

</head>
<body>
    
<!-- Header -->
<header class="header">
    <section class="header__rowTop">
        <div class="container">

            <div class="header__rowTop__redeSocial">

                <!-- Rede Social -->
                <ul class="list list-unstyled">

                <?php if( get_theme_mod('up_text_phone') ) : ?>
                    <li>
                        <a href="#">
                            <i class="fas fa-phone"></i>
                            Ligue <span class="font-weight-bold"><?php echo get_theme_mod('up_text_phone'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if( get_theme_mod('up_link_email') && get_theme_mod('up_text_email') ) : ?>
                    <li>
                        <a href="mailto:<?php echo get_theme_mod('up_link_email'); ?>">
                            <i class="fas fa-envelope"></i>
                            <?php echo get_theme_mod('up_text_email'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if( get_theme_mod('up_text_address') && get_theme_mod('up_link_googlemaps_address') ) : ?>
                    <li>
                        <a href="<?php echo get_theme_mod('up_link_googlemaps_address'); ?>">
                            <i class="fas fa-map-marker"></i>
                            <?php echo get_theme_mod('up_text_address'); ?>
                        </a>
                    </li>
                <?php endif; ?>

                </ul>

                <!-- Button Quote -->
                <?php if(get_theme_mod('up_text_btn_sale') ) : ?>
                    <a href="#" class="btn-quote">
                        <i class="fas fa-user-tie"></i>
                        <?php echo get_theme_mod('up_text_btn_sale'); ?>
                    </a>
                <?php endif; ?>
            </div>
            
        </div>
    </section>

    <section class="header__rowBottom">
        <div class="container">
            <div class="header__rowBottom__wrapper">

                <nav class="navbar navbar-expand-lg navbar-light">
                
                    
        
                    <div class="collapse navbar-collapse order-3 order-lg-1" id="navbarSupportedContent">

                    <?php
                        if( has_nav_menu ('main-menu-left') || has_nav_menu('main-menu-right') ) {
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu-left',
                                'fallback_cb' => false,
                                'container_class' => null,
                                'container_id' => 'navbarResponsive',
                                'menu_class' => 'navbar-nav'
                            ));
                        }
                    ?>

                        <!-- <ul class="navbar-nav">
        
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
        
                        </ul> -->
                    </div>
        
                    <!-- <a class="btn-sale" href="#">GET COACHING</a>         -->
        
                    <!-- Logo -->
                    <button class="navbar-toggler order-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php 
                    $img_logo = get_template_directory_uri() . '/public/images/logo.png';
                        if(get_theme_mod('up_logo_header') ) : 
                    ?>
                        <a class="navbar-brand m-auto order-1 order-lg-2" href="<?php bloginfo(url);?> ">
                            <img src="<?php echo $img_logo ?> " class='img-fluid' alt="Logo Empresa" <?php echo get_theme_mod('up_logo_header'); ?>>
                        </a>
                    <?php endif; ?>


                    <div class="collapse navbar-collapse order-4 order-lg-3" id="navbarSupportedContent">
                        <ul class="navbar-nav">
        
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pages <span class="sr-only">(current)</span></a>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link" href="#">Shop</a>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
        
                            <li class="nav-link btn-search">
                                <i class="fas fa-search"></i>
                            </li>
        
                        </ul>
                    </div>

                    <!-- <ul class="group-icons d-flex m-0 list-unstyled align-items-center">

                        <li class="nav-item">
                            <a class="nav-link" href="#">Courses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="nav-link btn-search">
                            <i class="fas fa-search"></i>
                        </li>
        
                    </ul> -->
        
                </nav>

            </div>
            
        </div>
    </section>

</header>
<!-- end Header -->
