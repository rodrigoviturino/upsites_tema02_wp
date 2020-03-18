<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row footer-wrapper">
            <div class="col-md-6">

                <div class="footer-wrapper-about">
                    <a href="#" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?> /public/images/withe_logo.png" alt="">
                    </a>
                    <p class="text">Dolor sitam consectetur adipisicing eiusmod tempor cididunt laboret mag magn aliquat enim sed minim veniam nostrud sed lorem ipsum dolor.</p>
                    <p class="adress">
                        206 South Marion Avenue, Sanford <br>
                        Florida 33020, USA
                    </p>
                    <ul class="footer-wrapper-contact">
                        <li>
                            <i class="fas fa-phone"></i>
                            Ligue Para (11) 1234-5678
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            contato@upsites.digital
                        </li>
                    </ul>
                    <a href="#" class="footer-wrapper-about-btn"><i class="fas fa-user-tie"></i> Solicitar Orçamento</a>
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
                        <h4 class="title">Opening Hours</h4>
                        <p class="text">Seg à Sex:</p>
                        <p class="text">08:00 às 18:00</p>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="footer-wrapper-feed">
                    <h4 class="title">Insta Feed</h4>
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
                    <h4 class="title">Insta Feed</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-copyright">
            <p>&copy; Copyright 2020 - Upsites. All rights reserved.</p>
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