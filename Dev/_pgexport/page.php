<?php get_header(); ?>

<header class="header-area">
    <a href="index.html" class="logo-area"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt=""> </a>
    <div class="nav-switch">
        <i class="fa fa-bars"></i>
    </div>
    <div class="phone-number">
        <?php _e( '(84) 3190 0122', 'site_consignus' ); ?>
    </div>
    <nav class="nav-menu">
        <ul>
            <li class="active">
                <a href="index.html"><?php _e( 'Home', 'site_consignus' ); ?></a>
            </li>
            <li>
                <a href="sobre.html"><?php _e( 'A CONSIGNuS', 'site_consignus' ); ?></a>
            </li>
            <li>
                <a href="solucoes-de-credito.html"><?php _e( 'Soluções em crédito', 'site_consignus' ); ?></a>
            </li>
            <li>
                <a href="atendimento.html"><?php _e( 'Atendimento', 'site_consignus' ); ?></a>
            </li>
            <li>
                <a href="ouvidoria.html"><?php _e( 'Ouvidoria', 'site_consignus' ); ?></a>
            </li>
            <li>
                <a href="live.html"><?php _e( 'Facebook Live', 'site_consignus' ); ?></a>
            </li>
        </ul>
    </nav>
</header>
<?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'large' ) : null; ?>
<section class="page-header-section set-bg" data-setbg="img/header-bg.jpg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/bg2.jpg');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
    <div class="container">
        <h2 class="header-title"><?php the_title(); ?></h2>
    </div>
</section>
<section class="intro-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 intro-text">
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-4">
                <img src="<?php echo PG_Image::getUrl( get_post_meta( get_the_ID(), 'imagem', true ), 'large' ) ?>" alt="">
            </div>
        </div>
    </div>
</section>
<footer class="footer-section">
    <div class="footer-social">
        <div class="social-links">
            <a href="http://www.instagram.com/consignus"><i class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/Consignus-106390454477380"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <br>
            <?php _e( 'Rua João Pessoa, 235,', 'site_consignus' ); ?>
            <?php _e( 'Sala 102, Cidade Alta, Natal/RN, CEP: 59025-500.', 'site_consignus' ); ?>
            <br> 
            <?php _e( '&copy;&nbsp; Consignus Crédito Consignado | Todos os direitos reservados', 'site_consignus' ); ?>
        </div>
    </div>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</footer>        

<?php get_footer(); ?>