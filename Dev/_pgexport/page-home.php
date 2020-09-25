<?php get_header(); ?>

<!-- Page Preloder -->
<!-- Header section start -->         
<header class="header-area">
    <a href="index.html" class="logo-area"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt=""> </a>
    <div class="nav-switch">
        <i class="fa fa-bars"></i>
    </div>
    <div class="phone-number">
        <?php _e( '(84) 3190 0122', 'site_consignus' ); ?>
    </div>
    <nav class="nav-menu">
        <?php wp_nav_menu( array(
                'menu' => 'primary',
                'container' => ''
        ) ); ?>
    </nav>
</header>
<!-- Header section end -->         
<!-- Hero section start -->
<section class="hero-section">
    <!-- left social link ber -->
    <div class="left-bar">
        <div class="left-bar-content">
            <div class="social-links">
                <a href="#"></a>
                <a href="http://www.instagram.com/consignus"><i class="fa fa-instagram"></i></a>
                <a href="https://www.facebook.com/Consignus-106390454477380"><i class="fa fa-facebook"></i></a>
            </div>
        </div>
    </div>
    <!-- hero slider area -->
    <?php if ( is_active_sidebar( 'topo' ) ) : ?>
        <div class="hero-slider">
            <?php dynamic_sidebar( 'topo' ); ?>
        </div>
    <?php endif; ?>
</section>
<!-- Hero section end -->
<!-- Intro section start -->
<section class="intro-section pt100 pb50">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 intro-text mb-5 mb-lg-0">
                <h2 class="sp-title"><span style="color: #0092c5;" class="bg-primary text-white"><?php echo get_theme_mod( 'a_consignus_titulo', __( 'A Consignus', 'site_consignus' ) ); ?></span></h2>
                <p><?php echo get_theme_mod( 'a_consignus_texto', __( 'Uma nova forma e visão de atuar no ramo de empréstimo consignado, advinda de Advogados com expertise no direito bancário, somos referência no segmento de consignado em todo o estado, sendo já uma das mais importantes entre as empresas que fazem mediação entre as instituições financeiras e os clientes que buscam adquirir empréstimo consignado e/ou pessoal.', 'site_consignus' ) ); ?></p>
                <a href="<?php echo get_theme_mod( 'a_consignus_bnt_link', 'sobre.html' ); ?>" class="site-btn sb-dark"><?php echo get_theme_mod( 'a_consignus_bnt', __( 'Leia mais', 'site_consignus' ) ); ?></a>
            </div>
            <div class="col-lg-5 pt-4">
                <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'a_consignus_img', esc_url( get_template_directory_uri() . '/img/intro.png' ) ), 'large' ) ?>" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Intro section end -->
<!-- Service section start -->
<section class="service-section spad">
    <div class="container">
        <div class="section-title">
            <h2 class="bg-primary text-white"><?php echo get_theme_mod( 'produtos_titulo', __( 'Produtos', 'site_consignus' ) ); ?></h2>
        </div>
        <div class="justify-content-center row">
            <?php
                $produtos_query_args = array(
                    'post_type' => 'produtos',
                    'nopaging' => true,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $produtos_query = new WP_Query( $produtos_query_args ); ?>
            <?php if ( $produtos_query->have_posts() ) : ?>
                <?php while ( $produtos_query->have_posts() ) : $produtos_query->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div style="justify-content: center;" <?php post_class( 'col-lg-4 col-md-6' ); ?> id="post-<?php the_ID(); ?>">
                        <div class="service-box">
                            <div style="margin-bottom: 20px; text-align: center;">
                                <?php echo PG_Image::getPostImage( null, 'large', null, 'both', null ) ?>
                            </div>
                            <h3 style="text-align: center;"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'site_consignus' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Service section end -->
<!-- CTA section start -->
<section class="cta-section pt100 pb50">
    <div class="cta-image-box" style="background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'solucoes_em_credito_img' ), 'large' ).')' ?>;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
                <h1 class="text-white"><?php echo get_theme_mod( 'solucoes_em_credito_titulo', 'Soluções em <br> <span class="bg-primary">Crédito</span>' ); ?></h1>
                <p><?php echo get_theme_mod( 'solucoes_em_credito_texto', __( 'Os sonhos e a tranquilidade em ter os assuntos financeiros encaminhados de forma segura e prática, não possuem preço e sim, valor! Atuar como facilitador para estas realizações faz com que não realizemos apenas negócios, construímos relações, fazemos amigos.Na construção dos sonhos de nossos clientes atendemos a pessoas físicas e jurídicas.', 'site_consignus' ) ); ?></p>
                <?php _e( 'Atuar como facilitador para estas realizações faz com que não realizemos apenas negócios, construímos relações, fazemos amigos.', 'site_consignus' ); ?>
                <?php _e( 'Na construção dos sonhos de nossos clientes atendemos a pessoas físicas e jurídicas.', 'site_consignus' ); ?>
                <?php _e( 'Para as pessoas físicas, cita-se como exemplo aposentados e pensionistas do INSS, servidores públicos e militares, em caso de empréstimo, as parcelas são descontadas em folha de pagamento através consignado em folha, desta forma não precisa de avalista e nem consulta ao SPC e Serasa.', 'site_consignus' ); ?>
            </div>
        </div>
    </div>
</section>
<!-- CTA section end -->
<!-- Milestones section Start -->
<!-- Milestones section end -->
<!-- Projects section start -->
<section class="intro-section pt100 pb50">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 intro-text mb-5 mb-lg-0">
                <h2 class="sp-title"><span style="color: #0092c5;" class="bg-primary text-white"><?php echo get_theme_mod( 'sonho_titulo', __( 'A Consignus', 'site_consignus' ) ); ?></span></h2>
                <p><?php echo get_theme_mod( 'sonho_texto', __( 'Uma nova forma e visão de atuar no ramo de empréstimo consignado, advinda de Advogados com expertise no direito bancário, somos referência no segmento de consignado em todo o estado, sendo já uma das mais importantes entre as empresas que fazem mediação entre as instituições financeiras e os clientes que buscam adquirir empréstimo consignado e/ou pessoal.', 'site_consignus' ) ); ?></p>
                <a href="<?php echo get_theme_mod( 'sonho_bnt_link', 'sobre.html' ); ?>" class="site-btn sb-dark"><?php echo get_theme_mod( 'sonho_bnt', __( 'Leia mais', 'site_consignus' ) ); ?></a>
            </div>
            <div class="col-lg-5 pt-4">
                <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'a_consignus_img', esc_url( get_template_directory_uri() . '/img/Untitled-1.jpg' ) ), 'large' ) ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section class="spad">
    <div class="container">
        <div class="section-title">
            <h2 class="bg-primary text-white"><?php echo get_theme_mod( 'blog_titulo', __( 'Nosso Blog', 'site_consignus' ) ); ?></h2>
        </div>
        <div class="row">
            <?php
                $post_query_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $post_query = new WP_Query( $post_query_args ); ?>
            <?php if ( $post_query->have_posts() ) : ?>
                <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div <?php post_class( 'col-xl-4 mb-3' ); ?> id="post-<?php the_ID(); ?>">
                        <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'large' ) : null; ?>
                        <div class="pg-empty-placeholder" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/cta-img.jpg'); padding-top: 100px; padding-bottom: 100px; background-repeat: no-repeat; background-size: cover; background-position: center center;<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text text-justify"><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="site-btn sb-dark"><?php _e( 'Leia mais', 'site_consignus' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'site_consignus' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Projects section end -->
<!-- Clients section start -->
<!-- Clients section end -->
<!-- Footer section start -->
<footer class="footer-section">
    <div class="footer-social">
        <div class="social-links">
            <a href="#"></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"></a>
        </div>
    </div>
    <div class="copyright">
        <br>
        <?php _e( 'Rua João Pessoa, 235,', 'site_consignus' ); ?>
        <?php _e( 'Sala 102, Cidade Alta, Natal/RN, CEP: 59025-500.', 'site_consignus' ); ?>
        <br> 
        <?php _e( '&copy;&nbsp; Consignus Crédito Consignado | Todos os direitos reservados', 'site_consignus' ); ?>
    </div>
</footer>        

<?php get_footer(); ?>