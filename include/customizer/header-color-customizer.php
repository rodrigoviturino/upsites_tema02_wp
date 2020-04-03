<?php 
// Footer informações das colunas

function up_color_header_customizer( $wp_customize ) {
 
    // Settings 
        // Row Top
        //Background Topo
        $wp_customize->add_setting( 'up_cor_fundo_rowTop_header', ['default' => "#f2f7fb" ]);

        $wp_customize->add_setting( 'up_cor_icone_telefone_header', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_texto_telefone_header', ['default' => "#495057" ]);
        $wp_customize->add_setting( 'up_cor_icone_email_header', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_texto_email_header', ['default' => "#495057" ]);
        $wp_customize->add_setting( 'up_cor_icone_local_header', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_texto_local_header', ['default' => "#495057" ]);
        // Botão Header
        $wp_customize->add_setting( 'up_cor_btn_atendimento_header', ['default' => "#e16297" ]);
        $wp_customize->add_setting( 'up_cor_texto_btn_atendimento_header', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_icon_btn_atendimento_header', ['default' => "#FFF" ]);
        
        // Row Menu
        $wp_customize->add_setting( 'up_cor_fundo_rowMenu_header', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_texto_item_menu_header', ['default' => "#1e2228" ]);
        $wp_customize->add_setting( 'up_cor_hover_texto_item_menu_header', ['default' => "$cyan" ]);




    //Sections
    $wp_customize->add_section('up_color_header_section', [
        'title' => 'Header - Cores ',
        'priority' => 2
    ]);


    //Controllers 
        // Row Top
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_rowTop_header',

            [
                'label' => 'Cor do fundo Topo',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_fundo_rowTop_header',
            ]
        )
    );
    // Cor Icone Telefone
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_telefone_header',

            [
                'label' => 'Cor do icone do telefone',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_telefone_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_telefone_header',

            [
                'label' => 'Cor da texto do telefone',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_telefone_header',
            ]
        )
    );
    // Cor Icone Email
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_email_header',

            [
                'label' => 'Cor do icone do email',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_email_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_email_header',

            [
                'label' => 'Cor da texto do email',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_email_header',
            ]
        )
    );
    // Cor Icone Local
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_local_header',

            [
                'label' => 'Cor do icone do local',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icone_local_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_local_header',

            [
                'label' => 'Cor da texto do local',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_local_header',
            ]
        )
    );
    // Botão Topo
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_btn_atendimento_header',

            [
                'label' => 'Cor do Botão Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_btn_atendimento_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_btn_atendimento_header',

            [
                'label' => 'Cor do Texto Botão Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_btn_atendimento_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_btn_atendimento_header',

            [
                'label' => 'Cor do Icone Botão Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_icon_btn_atendimento_header',
            ]
        )
    );

    // Row Menu
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_rowMenu_header',

            [
                'label' => 'Cor de Fundo Menu Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_fundo_rowMenu_header',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_item_menu_header',

            [
                'label' => 'Cor do Texto Menu Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_texto_item_menu_header',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_texto_item_menu_header',

            [
                'label' => 'Cor do Hover Texto Menu Header',
                'section' => 'up_color_header_section',
                'settings' => 'up_cor_hover_texto_item_menu_header',
            ]
        )
    );
   

}