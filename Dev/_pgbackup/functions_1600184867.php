<?php
if ( ! function_exists( 'site_consignus_setup' ) ) :

function site_consignus_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'site_consignus', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'site_consignus' ),
        'social'  => __( 'Social Links Menu', 'site_consignus' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // site_consignus_setup

add_action( 'after_setup_theme', 'site_consignus_setup' );


if ( ! function_exists( 'site_consignus_init' ) ) :

function site_consignus_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('produtos', array(
        'labels' => 
            array(
                'name' => __( 'Produtos', 'site_consignus' ),
                'singular_name' => __( 'Produto', 'site_consignus' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'show_in_rest' => true,
        'show_in_menu' => true
    ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // site_consignus_setup

add_action( 'init', 'site_consignus_init' );


if ( ! function_exists( 'site_consignus_custom_image_sizes_names' ) ) :

function site_consignus_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'site_consignus_custom_image_sizes_names' );
endif;// site_consignus_custom_image_sizes_names



if ( ! function_exists( 'site_consignus_widgets_init' ) ) :

function site_consignus_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'site_consignus_widgets_init' );
endif;// site_consignus_widgets_init



if ( ! function_exists( 'site_consignus_customize_register' ) ) :

function site_consignus_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'topo', array(
        'title' => __( 'Topo', 'site_consignus' )
    ));

    $wp_customize->add_section( 'a_consignus', array(
        'title' => __( 'A Consignus', 'site_consignus' )
    ));

    $wp_customize->add_section( 'produtos', array(
        'title' => __( 'Produtos', 'site_consignus' )
    ));

    $wp_customize->add_section( 'solucoes_em_credito', array(
        'title' => __( 'Soluções em Crédito', 'site_consignus' )
    ));

    $wp_customize->add_section( 'blog', array(
        'title' => __( 'Blog', 'site_consignus' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'topo_imagem01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'topo_imagem01', array(
        'label' => __( 'Imagem 01', 'site_consignus' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'topo'
    ) ) );

    $wp_customize->add_setting( 'topo_texto', array(
        'type' => 'theme_mod',
        'default' => 'Realize seu<br>sonho <span class="txt-rotate" data-period="1000" data-rotate=\'[ "da casa própria.", "de comprar um carro.", "de fazer uma viagem.", "de estudar" ]\'></span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'topo_texto', array(
        'label' => __( 'Texto', 'site_consignus' ),
        'type' => 'textarea',
        'section' => 'topo'
    ));

    $wp_customize->add_setting( 'a_consignus_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'A Consignus', 'site_consignus' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'a_consignus_titulo', array(
        'label' => __( 'A Consignus', 'site_consignus' ),
        'type' => 'text',
        'section' => 'a_consignus'
    ));

    $wp_customize->add_setting( 'a_consignus_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Uma nova forma e visão de atuar no ramo de empréstimo consignado, advinda de Advogados com expertise no direito bancário, somos referência no segmento de consignado em todo o estado, sendo já uma das mais importantes entre as empresas que fazem mediação entre as instituições financeiras e os clientes que buscam adquirir empréstimo consignado e/ou pessoal.', 'site_consignus' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'a_consignus_texto', array(
        'label' => __( 'Texto', 'site_consignus' ),
        'type' => 'textarea',
        'section' => 'a_consignus'
    ));

    $wp_customize->add_setting( 'a_consignus_bnt', array(
        'type' => 'theme_mod',
        'default' => __( 'Leia mais', 'site_consignus' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'a_consignus_bnt', array(
        'label' => __( 'Botão', 'site_consignus' ),
        'type' => 'text',
        'section' => 'a_consignus'
    ));

    $wp_customize->add_setting( 'a_consignus_bnt_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'a_consignus_bnt_link', array(
        'label' => __( 'Link do Botão', 'site_consignus' ),
        'type' => 'url',
        'section' => 'a_consignus'
    ));

    $wp_customize->add_setting( 'a_consignus_img', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'a_consignus_img', array(
        'label' => __( 'Imagem', 'site_consignus' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'a_consignus'
    ) ) );

    $wp_customize->add_setting( 'produtos_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Produtos', 'site_consignus' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'produtos_titulo', array(
        'label' => __( 'Título', 'site_consignus' ),
        'type' => 'text',
        'section' => 'produtos'
    ));

    $wp_customize->add_setting( 'solucoes_em_credito_img', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'solucoes_em_credito_img', array(
        'label' => __( 'Imagem', 'site_consignus' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'solucoes_em_credito'
    ) ) );

    $wp_customize->add_setting( 'solucoes_em_credito_titulo', array(
        'type' => 'theme_mod',
        'default' => 'Soluções em <br> <span class="bg-primary">Crédito</span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'solucoes_em_credito_titulo', array(
        'label' => __( 'Titulo', 'site_consignus' ),
        'type' => 'text',
        'section' => 'solucoes_em_credito'
    ));

    $wp_customize->add_setting( 'solucoes_em_credito_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Os sonhos e a tranquilidade em ter os assuntos financeiros encaminhados de forma segura e prática, não possuem preço e sim, valor! Atuar como facilitador para estas realizações faz com que não realizemos apenas negócios, construímos relações, fazemos amigos.Na construção dos sonhos de nossos clientes atendemos a pessoas físicas e jurídicas.', 'site_consignus' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'solucoes_em_credito_texto', array(
        'label' => __( 'Texto', 'site_consignus' ),
        'type' => 'textarea',
        'section' => 'solucoes_em_credito'
    ));

    $wp_customize->add_setting( 'sonho_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'A Consignus', 'site_consignus' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sonho_titulo', array(
        'label' => __( 'Realizamos seu sonho', 'site_consignus' ),
        'type' => 'text',
        'section' => 'sonho'
    ));

    $wp_customize->add_setting( 'sonho_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Uma nova forma e visão de atuar no ramo de empréstimo consignado, advinda de Advogados com expertise no direito bancário, somos referência no segmento de consignado em todo o estado, sendo já uma das mais importantes entre as empresas que fazem mediação entre as instituições financeiras e os clientes que buscam adquirir empréstimo consignado e/ou pessoal.', 'site_consignus' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sonho_texto', array(
        'label' => __( 'Texto', 'site_consignus' ),
        'type' => 'textarea',
        'section' => 'sonho'
    ));

    $wp_customize->add_setting( 'sonho_bnt', array(
        'type' => 'theme_mod',
        'default' => __( 'Leia mais', 'site_consignus' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sonho_bnt', array(
        'label' => __( 'Botão', 'site_consignus' ),
        'type' => 'text',
        'section' => 'sonho'
    ));

    $wp_customize->add_setting( 'sonho_bnt_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sonho_bnt_link', array(
        'label' => __( 'Link do Botão', 'site_consignus' ),
        'type' => 'url',
        'section' => 'sonho'
    ));

    $wp_customize->add_setting( 'blog_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Nosso Blog', 'site_consignus' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blog_titulo', array(
        'label' => __( 'Título', 'site_consignus' ),
        'type' => 'text',
        'section' => 'blog'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'site_consignus_customize_register' );
endif;// site_consignus_customize_register


if ( ! function_exists( 'site_consignus_enqueue_scripts' ) ) :
    function site_consignus_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'site_consignus-popper' );
    wp_enqueue_script( 'site_consignus-popper', get_template_directory_uri() . '/assets/js/popper.js', false, null, true);

    wp_deregister_script( 'site_consignus-bootstrap' );
    wp_enqueue_script( 'site_consignus-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_register_script( 'inline-script-1', '', [], '', true );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'document.write(new Date().getFullYear());');

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'site_consignus-bootstrap' );
    wp_enqueue_style( 'site_consignus-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'site_consignus-style' );
    wp_enqueue_style( 'site_consignus-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    wp_deregister_style( 'site_consignus-fontawesome' );
    wp_enqueue_style( 'site_consignus-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'site_consignus-style-1' );
    wp_enqueue_style( 'site_consignus-style-1', 'https://fonts.googleapis.com/css?family=Raleway:200,100,400', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'site_consignus_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>