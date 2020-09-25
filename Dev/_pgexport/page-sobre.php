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
<!-- Header section end -->         
<!-- Page header section start -->
<section class="page-header-section set-bg" data-setbg="img/header-bg.jpg">
    <div class="container">
        <h2 class="header-title"><?php _e( 'A Consignus', 'site_consignus' ); ?><span>.</span></h2>
    </div>
</section>
<!-- Page header section end -->
<!-- Intro section start -->
<section class="intro-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 intro-text">
                <h1><?php _e( 'A sua realização é o nosso', 'site_consignus' ); ?> <span><?php _e( 'Negócio', 'site_consignus' ); ?></span></h1>
                <div class="row">
                    <div class="col-md-6">
                        <p><?php _e( 'Uma nova forma e visão de atuar no ramo de empréstimo consignado, advinda de Advogados com expertise no direito bancário, somos referência no segmento de consignado em todo o estado, sendo já uma das mais importantes entre as empresas que fazem mediação entre as instituições financeiras e os clientes que buscam adquirir empréstimo consignado e/ou pessoal.', 'site_consignus' ); ?> </p>
                    </div>
                    <div class="col-md-6">
                        <p><?php _e( 'A Consignus tem como objtivo de propiciar aos seus clientes o acesso à aquela quantia emergencial que pode separar o sonho de uma grande realização pessoal, seja ela qual for. A sua realização é o nosso negócio! O brilho nos seus olhos é nossa meta.', 'site_consignus' ); ?> </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-4">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Intro section end -->
<!-- Testimonials section start -->
<!-- Testimonials section end -->
<!-- Team section start -->
<!-- Team section end -->
<!-- Footer section start -->
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