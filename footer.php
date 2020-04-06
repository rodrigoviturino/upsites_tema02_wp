<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row footer-wrapper">
            <div class="col-md-6">

                <div class="footer-wrapper-about">
                    <?php 
                        $img_logo = get_theme_mod('up_logo_footer') ;
                            if(get_theme_mod('up_logo_footer') ) : 
                    ?>
                        <a class="logo" href="<?php bloginfo('url');?> ">
                            <img src="<?= $img_logo ?> " class='img-fluid' alt="<?php echo get_theme_mod('up_desc_logo_footer'); ?> ">
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
                                    'menu_class' => 'navbar-nav menu'
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
                <!-- Feed - Verificar como vai ser esse bloco -->
                    <!-- <div class="footer-wrapper-feed">
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
                    </div> -->
                <!-- end Feed -->

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
                                    <i class="fab fa-facebook-f"></i>
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


<script>
let menu = document.querySelector('.header__rowBottom');
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

<style type="text/css">

 /* Row Top */
    .header__rowTop {
        background-color: <?php echo get_theme_mod('up_cor_fundo_rowTop_header'); ?>;
    }

    .header__rowTop__redeSocial .list li a i{
        color: <?php echo get_theme_mod('up_cor_icone_telefone_header'); ?>;
    }
    .header__rowTop__redeSocial .list li a{
        color: <?php echo get_theme_mod('up_cor_texto_telefone_header'); ?>;
    }

    .header__rowTop__redeSocial .list li a i{
        color: <?php echo get_theme_mod('up_cor_icone_email_header'); ?>;
    }
    .header__rowTop__redeSocial .list li a{
        color: <?php echo get_theme_mod('up_cor_texto_email_header'); ?>;
    }

    .header__rowTop__redeSocial .list li a i{
        color: <?php echo get_theme_mod('up_cor_icone_local_header'); ?>;
    }
    .header__rowTop__redeSocial .list li a{
        color: <?php echo get_theme_mod('up_cor_texto_local_header'); ?>;
    }

    .header__rowTop .btn-quote {
        background-color: <?php echo get_theme_mod('up_cor_btn_atendimento_header'); ?>;
        color: <?php echo get_theme_mod('up_cor_texto_btn_atendimento_header'); ?>;
    }
    .header__rowTop .btn-quote i {
        color: <?php echo get_theme_mod('up_cor_icon_btn_atendimento_header'); ?>;
    }
    /* Row Menu */
    .header__rowBottom {
        background-color: <?php echo get_theme_mod('up_cor_fundo_rowMenu_header'); ?>;
    }
    .header__rowBottom__wrapper .navbar #navbarSupportedContent .navbar-nav li a {
        color: <?php echo get_theme_mod('up_cor_texto_item_menu_header'); ?>;
    }
    .header__rowBottom__wrapper .navbar #navbarSupportedContent .navbar-nav li a:hover {
        color: <?php echo get_theme_mod('up_cor_hover_texto_item_menu_header'); ?>;
    }
    .header__rowBottom__wrapper .navbar .btn-search i {
        color: <?php echo get_theme_mod('up_cor_icon_search_header'); ?>;
    }
    .header__rowBottom__wrapper .navbar .btn-search i:hover {
        color: <?php echo get_theme_mod('up_cor_hover_icon_search_header'); ?>;
    }
    
    /* Footer */
    .footer {
        color: <?php echo get_theme_mod('up_cor_principal_footer'); ?>;
    }
    /* About */
    .footer-wrapper-about {
        color: <?php echo get_theme_mod('up_cor_principal_about_footer'); ?>;
    }
    .footer-wrapper-about .text {
        color: <?php echo get_theme_mod('up_cor_texto_about_footer'); ?>;
    }
    .footer-wrapper-about .text::after {
        background-color: <?php echo get_theme_mod('up_cor_linha_about_footer'); ?>;
    }

    .footer-wrapper-about .address {
        color: <?php echo get_theme_mod('up_cor_texto_endereco_about_footer'); ?>;
    }
    /* Telefone */
    .footer-wrapper-contact li {
        color: <?php echo get_theme_mod('up_cor_texto_telefone_about_footer'); ?>;
    }
    .footer-wrapper-contact li i {
        color: <?php echo get_theme_mod('up_cor_icone_telefone_about_footer'); ?>;
    }
    /* Email */
    .footer-wrapper-contact li {
        color: <?php echo get_theme_mod('up_cor_texto_email_about_footer'); ?>;
    }
    .footer-wrapper-contact li i {
        color: <?php echo get_theme_mod('up_cor_icon_email_about_footer'); ?>;
    }
    /* Botão About */
    .footer-wrapper-about-btn{
        background-color: <?php echo get_theme_mod('up_cor_botao_about_footer'); ?>;
        color: <?php echo get_theme_mod('up_cor_texto_botao_about_footer'); ?>;
    }
    .footer-wrapper-about-btn i{
        color: <?php echo get_theme_mod('up_cor_icone_botao_about_footer'); ?>;
        transition: all 0.7s;
    }
    /** Botão Hover */
    .footer-wrapper-about-btn:hover {
        background-color: <?php echo get_theme_mod('up_cor_hover_fundo_botao_about_footer'); ?>;
        color: <?php echo get_theme_mod('up_cor_hover_texto_botao_about_footer'); ?>;
    }

    .footer-wrapper-about-btn:hover i {
        transition: all 0.7s;
        color: <?php echo get_theme_mod('up_cor_hover_icone_botao_about_footer'); ?>;
    }
    
    /** Menu Footer */
    .footer-wrapper-menu .block-menu .title {
        color: <?php echo get_theme_mod('up_cor_titulo_menu_footer'); ?>;
    }
    .footer-wrapper-menu .block-menu .menu li a {
        transition: all 0.7s;
        color: <?php echo get_theme_mod('up_cor_texto_menu_footer'); ?>;
    }
    .footer-wrapper-menu .block-menu .menu li a:hover {
        transition: all 0.7s;
        color: <?php echo get_theme_mod('up_cor_hover_texto_menu_footer'); ?>;
    }
    .footer-wrapper-menu .block-hours .title {
        color: <?php echo get_theme_mod('up_cor_titulo_hours_footer'); ?>;
    }
    .footer-wrapper-menu .block-hours .text {
        color: <?php echo get_theme_mod('up_cor_texto1_hours_footer'); ?>;
    }
    .footer-wrapper-menu .block-hours .text {
        color: <?php echo get_theme_mod('up_cor_texto2_hours_footer'); ?>;
    }
    .footer-wrapper-feed .title {
        color: <?php echo get_theme_mod('up_cor_titulo_feed_footer'); ?>;
    }
    .footer-wrapper-redesocial .title {
        color: <?php echo get_theme_mod('up_cor_titulo_redesocial_footer'); ?>;
    }
    .footer-wrapper-redesocial .title {
        color: <?php echo get_theme_mod('up_cor_linha_redesocial_footer'); ?>;
    }
    /** Icone Twitter */
    .footer-wrapper-redesocial ul li a i.fa-twitter{
        color: <?php echo get_theme_mod('up_cor_icone_twitter_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li:first-child a {
        border-color: <?php echo get_theme_mod('up_cor_borda_icone_twitter_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li:first-child a:hover{
        border-color: <?php echo get_theme_mod('up_cor_hover_borda_twitter_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li:first-child a:hover i {
        color: <?php echo get_theme_mod('up_cor_hover_icone_twitter_footer'); ?>;
    }
    /** Icone Facebook */
    .footer-wrapper-redesocial ul li a i.fa-facebook-f{
        color: <?php echo get_theme_mod('up_cor_icone_face_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li:first-child a {
        border-color: <?php echo get_theme_mod('up_cor_borda_icone_face_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li:first-child a:hover{
        border-color: <?php echo get_theme_mod('up_cor_hover_borda_face_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li a:hover i {
        color: <?php echo get_theme_mod('up_cor_hover_icone_face_footer'); ?>;
    }
    /** Icone Instagram */
    .footer-wrapper-redesocial ul li a i.fa-instagram{
        color: <?php echo get_theme_mod('up_cor_icone_insta_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li:first-child a {
        border-color: <?php echo get_theme_mod('up_cor_borda_icone_insta_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li:first-child a:hover{
        border-color: <?php echo get_theme_mod('up_cor_hover_borda_insta_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li a:hover i {
        color: <?php echo get_theme_mod('up_cor_hover_icone_insta_footer'); ?>;
    }
    /** Icone Linkedin */
    .footer-wrapper-redesocial ul li a i.fa-linkedin{
        color: <?php echo get_theme_mod('up_cor_icone_linkedin_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li:first-child a {
        border-color: <?php echo get_theme_mod('up_cor_borda_icone_linkedin_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li:first-child a:hover{
        border-color: <?php echo get_theme_mod('up_cor_hover_borda_linkedin_footer'); ?>;
    }
    .footer-wrapper-redesocial ul li a:hover i {
        color: <?php echo get_theme_mod('up_cor_hover_icone_linkedin_footer'); ?>;
    }
    /* Copyright */
    .footer-copyright p {
        color: <?php echo get_theme_mod('up_cor_texto_copyright'); ?>;
    }
    .footer-copyright p a {
        color: <?php echo get_theme_mod('up_cor_empresa_copyright'); ?>;
    }
    .footer-copyright p a:hover {
        color: <?php echo get_theme_mod('up_cor_hover_empresa_copyright'); ?>;
    }

</style>

</body>
</html>