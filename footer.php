<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row footer-wrapper">
            <div class="col-md-6">

                <div class="footer-wrapper-about">
                    <?php 
                        $img_logo = get_template_directory_uri() . '/public/images/withe_logo.png';
                        if(get_theme_mod('up_logo_footer') ) : 
                    ?>
                        <a href="<?php bloginfo(url); ?>" class="logo">
                            <img class="img-responsive" src="<?php echo $img_logo = get_theme_mod('up_logo_footer'); ?> " alt="<?php echo get_theme_mod('up_desc_logo_footer') ?>">
                        </a>
                    <?php endif; ?>

                    <?php if(get_theme_mod('up_text_about_footer') ) : ?>
                        <p class="text"><?php echo get_theme_mod('up_text_about_footer'); ?></p>
                    <?php endif; ?>

                    <?php if(get_theme_mod('up_text1_address_footer') && get_theme_mod('up_text2_address_footer') ) : ?>
                        <p class="address">
                            <!-- 206 South Marion Avenue, Sanford  -->
                            <?php echo get_theme_mod('up_text1_address_footer'); ?> <br>
                            <?php echo get_theme_mod('up_text2_address_footer'); ?>
                            <!-- Florida 33020, USA -->
                        </p>
                    <?php endif; ?>

                    <ul class="footer-wrapper-contact">
                        <?php if(get_theme_mod('up_text_phone_footer') ) : ?>
                            <li>
                                <i class="fas fa-phone"></i>
                                <?php echo get_theme_mod('up_text_phone_footer'); ?>
                            </li>
                        <?php endif; ?>

                        <?php if(get_theme_mod('up_text_email_footer') ) : ?>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <?php echo get_theme_mod('up_text_email_footer'); ?>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <?php if(get_theme_mod('up_link_btn_about_footer') && get_theme_mod('up_btn_about_footer') ) : ?>
                        <a href="<?php echo get_theme_mod('up_link_btn_about_footer'); ?>" class="footer-wrapper-about-btn"><i class="fas fa-user-tie"></i><?php echo get_theme_mod('up_btn_about_footer'); ?></a>
                    <?php endif; ?>
                </div>

            </div>

            <div class="col-md-3 col-lg-2 offset-lg-1">
                <div class="footer-wrapper-menu">

                    <div class="block-menu">
                        <h4 class="title">Medical Center</h4>
                        <?php 
                            if( has_nav_menu('footer-menu') ) {
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-menu',
                                    'fallback_cb' => false,
                                    'container_class' => null,
                                    'container_id' => 'navbarResponsive',
                                    'menu_class' => 'navbar-nav'
                                ));
                            }
                        ?>
                        
                    </div>

                    <div class="block-hours">
                        <?php if(get_theme_mod('up_title_hours_company_footer') && get_theme_mod('up_days_company_footer') && get_theme_mod('up_hours_company_footer') ) : ?>
                            <h4 class="title"><?php echo get_theme_mod('up_title_hours_company_footer'); ?></h4>
                            <p class="text"><?php echo get_theme_mod('up_days_company_footer'); ?></p>
                            <p class="text"><?php echo get_theme_mod('up_hours_company_footer') ?></p>
                        <?php endif; ?>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-wrapper-feed">
                    <h4 class="title"><?php echo get_theme_mod('up_title_feed_footer') ?></h4>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?> '/public/images/img-feed.png' " alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?> '/public/images/img-feed.png' " alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?> '/public/images/img-feed.png' " alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?> '/public/images/img-feed.png' " alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?> '/public/images/img-feed.png' " alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?> '/public/images/img-feed.png' " alt="">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-wrapper-redesocial">
                    <h4 class="title"><?php echo get_theme_mod('up_title_social_network') ?></h4>
                    <ul>
                        <?php if (get_theme_mod('up_link_twitter_footer') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_link_twitter_footer') ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_theme_mod('up_link_facebook_footer') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_link_facebook_footer') ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_theme_mod('up_link_instagram_footer') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_link_instagram_footer') ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_theme_mod('up_link_linkedin_footer') ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod('up_link_linkedin_footer') ?>">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-copyright">
            <?php if(get_theme_mod('up_text_copyright') && get_theme_mod('up_company_copyright') && get_theme_mod('up_link_company_copyright') ) :?>
                <p>&copy; <?php echo get_theme_mod('up_text_copyright'); ?> 2020 - <a href="<?php echo get_theme_mod('up_link_company_copyright'); ?>"><?php echo get_theme_mod('up_company_copyright'); ?> </a> </p>
            <?php endif; ?>
        </div>
    </div>

</footer>
<!-- end Footer -->



<!-- Scripts -->
<script src=" <?php echo get_template_directory_uri() ?>'/node_modules/bootstrap/dist/js/bootstrap.min.js' "></script>
<!-- end Scripts -->
<script>
let menu = document.querySelector('.header');
let headerClassList = menu.classList

window.addEventListener('scroll', () => {
    if (window.scrollY >= 100) {
        if(!headerClassList.contains('scrollHide')) {
            headerClassList.add('scrollHide')
        }
    } else {
        headerClassList.remove('scrollHide');
    }
});

</script>

<?php wp_footer(); ?>
</body>
</html>