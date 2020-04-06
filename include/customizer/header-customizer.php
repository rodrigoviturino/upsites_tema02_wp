<?php 
// Rede Social do Header

function up_header_customizer( $wp_customize ) {

    // Settings
        // Row Top Header
    $wp_customize->add_setting('up_text_phone', ['default' => '']);
    $wp_customize->add_setting('up_text_email', ['default' => '']);
    $wp_customize->add_setting('up_link_email', ['default' => '']);
    $wp_customize->add_setting('up_link_googlemaps_address', ['default' => '']);
    $wp_customize->add_setting('up_text_address', ['default' => '']);
    $wp_customize->add_setting('up_text_btn_sale', ['default' => '']);
    $wp_customize->add_setting('up_link_btn_sale', ['default' => '']);
    
        // Row Center Header
    $wp_customize->add_setting('up_logo_header', ['default' => '']);

    // Sections
    $wp_customize->add_section('up_header_section', [
        'title' => 'Header - Infos',
        'priority' => '1'
    ]);


    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_text_phone',
                [
                    'label'=>'Texto do Telefone',
                    'section' => 'up_header_section',
                    'settings' => 'up_text_phone',
                    'type' => 'text'
                ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            
            'up_text_email',
            [
                'label'=>'Texto do Email',
                'section' => 'up_header_section',
                'settings' => 'up_text_email',
                'type' => 'text'
                ]
                )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_link_email',
                [
                    'label'=>'Confirme Novamente o Email',
                    'section' => 'up_header_section',
                    'settings' => 'up_link_email',
                    'type' => 'text'
                ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_link_googlemaps_address',
                [
                    'label'=>'Link de endereço do Google Maps',
                    'section' => 'up_header_section',
                    'settings' => 'up_link_googlemaps_address',
                    'type' => 'text'
                ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_text_address',
                [
                    'label'=>'Texto do Endereço',
                    'section' => 'up_header_section',
                    'settings' => 'up_text_address',
                    'type' => 'text'
                ]
        )
    );
    // Botão Atendimento Header Topo
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_link_btn_sale',
                [
                    'label'=>'Link do Botão Atendimento',
                    'section' => 'up_header_section',
                    'settings' => 'up_link_btn_sale',
                    'type' => 'text'
                ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_text_btn_sale',
                [
                    'label'=>'Texto do Botão',
                    'section' => 'up_header_section',
                    'settings' => 'up_text_btn_sale',
                    'type' => 'text'
                ]
        )
    );
 

    // Logo 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,

            'up_desc_logo_header',
                [
                    'label'=>'Descrição imagem Logo do Header',
                    'section' => 'up_header_section',
                    'settings' => 'up_desc_logo_header'
                ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,

            'up_logo_header',
                [
                    'label'=>'Logo do Header',
                    'section' => 'up_header_section',
                    'settings' => 'up_logo_header'
                ]
        )
    );


}