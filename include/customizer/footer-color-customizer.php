<?php 
// Footer informações das colunas

function up_color_footer_customizer( $wp_customize ) {
 
    // Settings 
        // Background Principal
        $wp_customize->add_setting( 'up_cor_principal_footer', ['default' => "#001a20" ]);

        // Background About
        $wp_customize->add_setting( 'up_cor_principal_about_footer', ['default' => "#00232b" ]);
    
        // Coluna About
        $wp_customize->add_setting( 'up_cor_texto_about_footer', ['default' => "#6c757d" ]);
        $wp_customize->add_setting( 'up_cor_linha_about_footer', ['default' => "#6c757d" ]);

        $wp_customize->add_setting( 'up_cor_texto_telefone_about_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_icone_telefone_about_footer', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_texto_email_about_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_icon_email_about_footer', ['default' => "$cyan" ]);
        // Botão About
        $wp_customize->add_setting( 'up_cor_botao_about_footer', ['default' => "#e16297" ]);
        $wp_customize->add_setting( 'up_cor_texto_botao_about_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_icone_botao_about_footer', ['default' => "#FFF" ]);
            // Hover
        $wp_customize->add_setting( 'up_cor_hover_fundo_botao_about_footer', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_hover_texto_botao_about_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_botao_about_footer', ['default' => "#FFF" ]);
        // Coluna Menu
        $wp_customize->add_setting( 'up_cor_titulo_menu_footer', ['default' => "#FFF" ]);        
        $wp_customize->add_setting( 'up_cor_texto_menu_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_hover_texto_menu_footer', ['default' => "$cyan" ]);
        // Coluna Horario Funcionamento
        $wp_customize->add_setting( 'up_cor_titulo_hours_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_texto1_hours_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_texto2_hours_footer', ['default' => "#cacaca" ]);
        // Coluna Feed
        $wp_customize->add_setting( 'up_cor_titulo_feed_footer', ['default' => "#cacaca" ]);

        
        // Icones Rede Social
        $wp_customize->add_setting( 'up_cor_icone_twitter_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_borda_icone_twitter_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_hover_borda_twitter_footer', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_twitter_footer', ['default' => "$cyan" ]);

        $wp_customize->add_setting( 'up_cor_icone_face_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_borda_icone_face_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_face_footer', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_hover_borda_icone_face_footer', ['default' => "$cyan" ]);

        $wp_customize->add_setting( 'up_cor_icone_linkedin_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_borda_icone_linkedin_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_linkedin_footer', ['default' => "$cyan" ]);
        $wp_customize->add_setting( 'up_cor_hover_borda_icone_linkedin_footer', ['default' => "$cyan" ]);

        $wp_customize->add_setting( 'up_cor_icone_insta_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_borda_icone_insta_footer', ['default' => "#cacaca" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_insta_footer', ['default' => "$cyan" ]);        
        $wp_customize->add_setting( 'up_cor_hover_borda_icone_insta_footer', ['default' => "$cyan" ]);        

        $wp_customize->add_setting( 'up_cor_fundo_menu', ['default' => "#f7f9fa" ]);
        
        // Sessão Copyright
        $wp_customize->add_setting( 'up_cor_texto_copyright', ['default' => "#8a99c0" ]);
        $wp_customize->add_setting( 'up_cor_empresa_copyright', ['default' => "#f35c27" ]);
        $wp_customize->add_setting( 'up_cor_hover_empresa_copyright', ['default' => "#f35c27" ]);

    //Sections
    $wp_customize->add_section('up_color_footer_section', [
        'title' => 'Footer - Cores ',
        'priority' => 4
    ]);


    //Controllers 

     // Color Background
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_principal_footer',

            [
                'label' => 'Cor Background Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_principal_footer',
            ]
        )
    );

    //  Coluna Sobre Empresa
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_about_footer',

            [
                'label' => 'Cor texto sobre Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_about_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_about_footer',

            [
                'label' => 'Cor do Texto Sobre Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_texto_about_footer',
            ]
        )
    );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_linha_about_footer',
    
                [
                    'label' => 'Cor da Linha de Divisa do texto da Empresa',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_linha_about_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_texto_endereco_about_footer',
    
                [
                    'label' => 'Cor do Texto do Endereço',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_texto_endereco_about_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_texto_telefone_about_footer',
    
                [
                    'label' => 'Cor do Texto do Telefone',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_texto_telefone_about_footer',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icone_telefone_about_footer',
    
                [
                    'label' => 'Cor do Icone do Telefone',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icone_telefone_about_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_texto_email_about_footer',
    
                [
                    'label' => 'Cor do Texto do Email',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_texto_email_about_footer',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icon_email_about_footer',
    
                [
                    'label' => 'Cor do Icone do Email',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icon_email_about_footer',
                ]
            )
        );
        // Botão About
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_botao_about_footer',
    
                [
                    'label' => 'Cor do Fundo do Botão Sobre',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_botao_about_footer',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_texto_botao_about_footer',
    
                [
                    'label' => 'Cor do Texto do Botão Sobre',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_texto_botao_about_footer',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icone_botao_about_footer',
    
                [
                    'label' => 'Cor do Icone do Botão Sobre',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icone_botao_about_footer',
                ]
            )
        );
        // Botão Hover About
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_fundo_botao_about_footer',
    
                [
                    'label' => 'Cor do Hover do Fundo Botão Sobre',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_fundo_botao_about_footer',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_texto_botao_about_footer',
    
                [
                    'label' => 'Cor do Hover Texto do Botão Sobre',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_texto_botao_about_footer',
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icone_botao_about_footer',
    
                [
                    'label' => 'Cor do Hover Icone Botão Sobre',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_icone_botao_about_footer',
                ]
            )
        );


    // Titulo Menu
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_menu_footer',

            [
                'label' => 'Cor titulo da coluna Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_menu_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_menu_footer',

            [
                'label' => 'Cor Texto Item da Coluna Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_texto_menu_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_texto_menu_footer',

            [
                'label' => 'Cor Hover Texto Item da Coluna Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_texto_menu_footer',
            ]
        )
    );
    
    // Coluna Horario Funcionamento
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_hours_footer',

            [
                'label' => 'Cor Titulo Horario Funcionamento',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_hours_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto1_hours_footer',

            [
                'label' => 'Cor Texto Linha 1 Horario Funcionamento',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_texto1_hours_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto2_hours_footer',

            [
                'label' => 'Cor Texto Linha 2 Horario Funcionamento',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_texto2_hours_footer',
            ]
        )
    );
    // Coluna Feed
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_feed_footer',

            [
                'label' => 'Cor Titulo da Coluna Feed',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_feed_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_linha_feed_footer',

            [
                'label' => 'Cor linha do Titulo Feed',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_linha_feed_footer',
            ]
        )
    );

    // Coluna Rede Social
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_redesocial_footer',

            [
                'label' => 'Cor do Titulo Rede Social',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_redesocial_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_linha_redesocial_footer',

            [
                'label' => 'Cor linha do Titulo Rede Social',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_linha_redesocial_footer',
            ]
        )
    );
// Twitter
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_twitter_footer',
            [
                'label' => 'Cor do Icone Twitter',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_twitter_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_borda_icone_twitter_footer',

            [
                'label' => 'Cor da Borda Icone Twitter',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_borda_icone_twitter_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_borda_twitter_footer',

            [
                'label' => 'Cor Hover Borda Icone Twitter',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_borda_twitter_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_twitter_footer',

            [
                'label' => 'Cor do Hover Icone Twitter',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_twitter_footer',
            ]
        )
    );
// Facebook
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_face_footer',

            [
                'label' => 'Cor do Icone Facebook',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_face_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_borda_icone_face_footer',

            [
                'label' => 'Cor Borda do Icone Facebook',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_borda_icone_face_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_linkedin_footer',

            [
                'label' => 'Cor do Icone Facebook',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_linkedin_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_borda_face_footer',

            [
                'label' => 'Cor Hover Borda Icone Facebook',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_borda_face_footer',
            ]
        )
    );
// Linkedin
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_linkedin_footer',

            [
                'label' => 'Cor do Icone Linkedin',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_linkedin_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_borda_icone_linkedin_footer',

            [
                'label' => 'Cor do Icone Linkedin',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_borda_icone_linkedin_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_linkedin_footer',

            [
                'label' => 'Cor do Icone Linkedin',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_linkedin_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_borda_icone_linkedin_footer',

            [
                'label' => 'Cor do Hover Icon Linkedin',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_borda_icone_linkedin_footer',
            ]
        )
    );
// Instagram
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_insta_footer',

            [
                'label' => 'Cor do Icone Instagram',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_insta_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_borda_icone_insta_footer',

            [
                'label' => 'Cor do Icon Instagram',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_borda_icone_insta_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_insta_footer',

            [
                'label' => 'Cor do Icon Instagram',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_insta_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_borda_icone_insta_footer',

            [
                'label' => 'Cor do Hover Icon Instagram',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_borda_icone_insta_footer',
            ]
        )
    );

    // Sessão Copyright
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_copyright',

            [
                'label' => 'Cor Texto Copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_texto_copyright',
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_empresa_copyright',

            [
                'label' => 'Cor do Link Empresa copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_empresa_copyright',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_empresa_copyright',

            [
                'label' => 'Cor do hover do link Empresa copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_empresa_copyright',
            ]
        )
    );



}