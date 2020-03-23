<?php 
// Footer informações das colunas

function up_footer_customizer( $wp_customize ) {
 
    // Settings 
    // Logo About
    $wp_customize->add_setting( 'up_logo_footer', [ 'default' => "" ]);
    // Texto e Endereço About
    $wp_customize->add_setting( 'up_text_about_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text1_address_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text2_address_footer', [ 'default' => "" ]);
    // Telefone About
    $wp_customize->add_setting( 'up_text_phone_footer', [ 'default' => "" ]);
    // Email About
    $wp_customize->add_setting( 'up_text_email_footer', [ 'default' => "" ]);
    // Botão About
    $wp_customize->add_setting( 'up_btn_about_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_link_btn_about_footer', [ 'default' => "" ]);

    // Horario Funcionamento
    $wp_customize->add_setting( 'up_title_hours_company_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_days_company_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_hours_company_footer', [ 'default' => "" ]);

    // Feed News
    $wp_customize->add_setting( 'up_title_feed_footer', [ 'default' => "" ]);
    
    // Rede social Footer
    $wp_customize->add_setting( 'up_title_social_network', [ 'default' => "" ]);
    $wp_customize->add_setting('up_link_facebook_footer', ['default' => '']);
    $wp_customize->add_setting('up_link_twitter_footer', ['default' => '']);
    $wp_customize->add_setting('up_link_linkedin_footer', ['default' => '']);
    $wp_customize->add_setting('up_link_instagram_footer', ['default' => '']);

    // Copyright
    $wp_customize->add_setting( 'up_text_copyright', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_link_company_copyright', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_company_copyright', [ 'default' => "" ]);
    
    //Sections
    $wp_customize->add_section('up_footer_section', [
        'title' => 'Footer - Infos',
        'priority' => 2
    ]);

    //Controllers 
    // Logo About
    $wp_customize->add_control(
        new WP_Customize_Image_Control (
            $wp_customize,

            'up_logo_footer',
            [
                'label' => 'Logo About Footer',
                'section' => 'up_footer_section',
                'settings' => 'up_logo_footer',
            ]
        )
    );
    // Texto About
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text_about_footer',
            [
                'label' => 'Texto do About Footer',
                'section' => 'up_footer_section',
                'settings' => 'up_text_about_footer',
                'type' => 'textarea' ,
            ]
        )
    );
    // Endereço
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text1_address_footer',
            [
                'label' => 'Texto da Primeira Linha do Endereço',
                'section' => 'up_footer_section',
                'settings' => 'up_text1_address_footer',
                'type' => 'text' ,
            ]
        )
    );
    // Endereço
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text2_address_footer',
            [
                'label' => 'Texto da Segunda Linha do Endereço',
                'section' => 'up_footer_section',
                'settings' => 'up_text2_address_footer',
                'type' => 'text' ,
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_topics',
            [
                'label' => 'Titulo Coluna Tópicos',
                'section' => 'up_footer_section',
                'settings' => 'up_title_topics',
                'type' => 'text' ,
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text_phone_footer',
            [
                'label' => 'Texto/Numero do Telefone',
                'section' => 'up_footer_section',
                'settings' => 'up_text_phone_footer',
                'type' => 'text' ,
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text_email_footer',
            [
                'label' => 'Insira o Email',
                'section' => 'up_footer_section',
                'settings' => 'up_text_email_footer',
                'type' => 'text' ,
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_btn_about_footer',
            [
                'label' => 'Texto do Botão',
                'section' => 'up_footer_section',
                'settings' => 'up_btn_about_footer',
                'type' => 'text' ,
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_link_btn_about_footer',
            [
                'label' => 'Link do Botão',
                'section' => 'up_footer_section',
                'settings' => 'up_link_btn_about_footer',
                'type' => 'text' ,
            ]
        )
    );

// **********************

    // Copyright
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_text_copyright',
            [
                'label' => 'Texto Copyright',
                'section' => 'up_footer_section',
                'settings' => 'up_text_copyright',
                'type' => 'text' ,
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_company_copyright',
            [
                'label' => 'Nome Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_company_copyright',
                'type' => 'text' ,
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_link_company_copyright',
            [
                'label' => 'Link do Site da Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_link_company_copyright',
                'type' => 'text' ,
            ]
        )
    );

  // Horario Funcionamento
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_hours_company_footer',
            [
                'label' => 'Titulo da sessão de Horario de Funcionamento',
                'section' => 'up_footer_section',
                'settings' => 'up_title_hours_company_footer',
                'type' => 'text' ,
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_days_company_footer',
            [
                'label' => 'Dia de Funcionamento',
                'section' => 'up_footer_section',
                'settings' => 'up_days_company_footer',
                'type' => 'text' ,
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_hours_company_footer',
            [
                'label' => 'Horário de Funcionamento',
                'section' => 'up_footer_section',
                'settings' => 'up_hours_company_footer',
                'type' => 'text' ,
            ]
        )
    );

    // Titulo Feeds
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_feed_footer',
            [
                'label' => 'Titulo da Sessão Feeds',
                'section' => 'up_footer_section',
                'settings' => 'up_title_feed_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    // Rede Social Footer
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_social_network',
            [
                'label' => 'Titulo da Sessão Rede Social',
                'section' => 'up_footer_section',
                'settings' => 'up_title_social_network',
                'type' => 'text' ,
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_link_facebook_footer',
            [
                'label' => 'Link do Facebook',
                'section' => 'up_footer_section',
                'settings' => 'up_link_facebook_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_twitter_footerlink_',
            [
                'label' => 'Link do Twitter',
                'section' => 'up_footer_section',
                'settings' => 'up_link_twitter_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_link_linkedin_footer',
            [
                'label' => 'Link do Linkedin',
                'section' => 'up_footer_section',
                'settings' => 'up_link_linkedin_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_link_instagram_footer',
            [
                'label' => 'Link do Instagram',
                'section' => 'up_footer_section',
                'settings' => 'up_link_instagram_footer',
                'type' => 'text' ,
            ]
        )
    );
    

}