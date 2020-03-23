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
        $wp_customize->add_setting( 'up_cor_icone_telefone_about_footer', ['default' => "#2fc0df" ]);
        $wp_customize->add_setting( 'up_cor_texto_email_about_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_icon_email_about_footer', ['default' => "#2fc0df" ]);
        // Botão About
        $wp_customize->add_setting( 'up_cor_botao_about_footer', ['default' => "#e16297" ]);
        $wp_customize->add_setting( 'up_cor_texto_botao_about_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_icone_botao_about_footer', ['default' => "#FFF" ]);
            // Hover
        $wp_customize->add_setting( 'up_cor_hover_fundo_botao_about_footer', ['default' => "#2fc0df" ]);
        $wp_customize->add_setting( 'up_cor_hover_texto_botao_about_footer', ['default' => "#FFF" ]);
        $wp_customize->add_setting( 'up_cor_hover_icone_botao_about_footer', ['default' => "#FFF" ]);

        // Icones Rede Social
        $wp_customize->add_setting( 'up_cor_icon_face_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_face_footer', ['default' => "#F35C27" ]);

        $wp_customize->add_setting( 'up_cor_icon_twitter_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_twitter_footer', ['default' => "#F35C27" ]);

        $wp_customize->add_setting( 'up_cor_icon_linkedin_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_linkedin_footer', ['default' => "#F35C27" ]);

        $wp_customize->add_setting( 'up_cor_icon_insta_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_insta_footer', ['default' => "#F35C27" ]);        

        // Coluna Menu
        $wp_customize->add_setting( 'up_cor_titulo_menu_footer', ['default' => "#FFF" ]);        
        $wp_customize->add_setting( 'up_cor_itens_menu_footer', ['default' => "#8A99C0" ]);
        $wp_customize->add_setting( 'up_cor_hover_itens_menu_footer', ['default' => "#F35C27" ]);
        $wp_customize->add_setting( 'up_cor_icone_hover_itens_menu_footer', ['default' => "#F35C27" ]);

        $wp_customize->add_setting( 'up_cor_fundo_menu', ['default' => "#f7f9fa" ]);
        
        // Sessão Copyright
        $wp_customize->add_setting( 'up_cor_fundo_copyright', ['default' => "#1e2227" ]);
        $wp_customize->add_setting( 'up_cor_link_copyright', ['default' => "#8a99c0" ]);
        $wp_customize->add_setting( 'up_cor_hover_link_copyright', ['default' => "#f35c27" ]);




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

       




        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icon_twitter_footer',
    
                [
                    'label' => 'Cor do Icon do Twitter',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icon_twitter_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icon_twitter_footer',
    
                [
                    'label' => 'Cor do Hover Icon do Twitter',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_icon_twitter_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icon_linkedin_footer',
    
                [
                    'label' => 'Cor do Icon do Linkedin',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icon_linkedin_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icon_linkedin_footer',
    
                [
                    'label' => 'Cor do Hover Icon do Linkedin',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_icon_linkedin_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_icon_insta_footer',
    
                [
                    'label' => 'Cor do Icon do Instagram',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_icon_insta_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control (
                $wp_customize,
                'up_cor_hover_icon_insta_footer',
    
                [
                    'label' => 'Cor do Hover Icon do Instagram',
                    'section' => 'up_color_footer_section',
                    'settings' => 'up_cor_hover_icon_insta_footer',
                ]
            )
        );


    // Titulo Menu
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_menu_footer',

            [
                'label' => 'Cor Titulo da coluna Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_menu_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_itens_menu_footer',

            [
                'label' => 'Cor dos Itens do Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_itens_menu_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_itens_menu_footer',

            [
                'label' => 'Cor Hover dos Itens do Menu',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_itens_menu_footer',
            ]
        )
    );


    // Cor Icone Telefone
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_telefone_footer',

            [
                'label' => 'Cor do icone do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_telefone_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_telefone_footer',

            [
                'label' => 'Cor da texto do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_telefone_footer',
            ]
        )
    );
    // Cor Icone Email
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_email_footer',

            [
                'label' => 'Cor do icone do email',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_email_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_email_footer',

            [
                'label' => 'Cor da texto do email',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_email_footer',
            ]
        )
    );
    // Cor Icone Local
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_local_footer',

            [
                'label' => 'Cor do icone do local',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_local_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_local_footer',

            [
                'label' => 'Cor da texto do local',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_local_footer',
            ]
        )
    );
    
    
    // Coluna Newsletter
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_title_newsletter_footer',

            [
                'label' => 'Cor do Titulo Newsletter',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_title_newsletter_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_button_newsletter_footer',

            [
                'label' => 'Cor do Botão',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_button_newsletter_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_button_newsletter_footer',

            [
                'label' => 'Cor do Hover do Botão',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_button_newsletter_footer',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_text_button_newsletter_footer',

            [
                'label' => 'Cor do Texto Hover do Botão',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_text_button_newsletter_footer',
            ]
        )
    );

    // Sessão Copyright
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_copyright',

            [
                'label' => 'Cor do fundo Copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_fundo_copyright',
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_copyright',

            [
                'label' => 'Cor dos links do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_copyright',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_link_copyright',

            [
                'label' => 'Cor do hover dos links do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_link_copyright',
            ]
        )
    );



}