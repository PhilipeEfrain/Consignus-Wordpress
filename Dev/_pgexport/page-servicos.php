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
        <h1 class="header-title"><?php _e( 'Soluções', 'site_consignus' ); ?> <br><?php _e( 'em Crédito', 'site_consignus' ); ?><span>.</span></h1>
    </div>
</section>
<!-- Page header section end -->
<!-- Intro section start -->
<section class="intro-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="service-slider">
                    <div class="ss-single">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service/1.jpg" alt="">
                    </div>
                    <div class="ss-single">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service/2.jpg" alt="">
                    </div>
                    <div class="ss-single">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/service/3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 service-text">
                <h1><?php _e( 'Não realizemos apenas negócios, construímos', 'site_consignus' ); ?> <span><?php _e( 'relações', 'site_consignus' ); ?></span></h1>
                <p><?php _e( 'Para as pessoas físicas, cita-se como exemplo aposentados e pensionistas do INSS, servidores públicos e militares, em caso de empréstimo, as parcelas são descontadas em folha de pagamento através consignado em folha, desta forma não precisa de avalista e nem consulta ao SPC e Serasa.', 'site_consignus' ); ?><br> <?php _e( 'Este tipo de linha de crédito pode ser parcelado em até 84 meses de acordo com as regras estabelecidas por cada de cada convênio.', 'site_consignus' ); ?><?php _e( 'Se você pessoa física está interessado, ligue pra gente e confira as condições específicas para contratar seu crédito ou SOLICITE UMA SIMULAÇÃO que ligamos para você.', 'site_consignus' ); ?><br><?php _e( 'As pessoas jurídicas podem solicitar um atendimento personalizado, basta clicar na aba atendimento e nós entraremos em contato com sua empresa.', 'site_consignus' ); ?> <br><?php _e( 'Nas gestões públicas sejam municipais ou estaduais, podemos realizar convênios e assumir o pagamento da folha dos servidores, além de abrir linhas de crédito a estes.', 'site_consignus' ); ?> </p>
            </div>
        </div>
    </div>
</section>
<!-- Intro section end -->
<!-- Service box section start -->
<!-- Service box section end -->
<!-- Service section start -->
<section class="service-section spad">
    <div class="container">
        <div class="section-title">
            <h1><?php _e( 'Produtos', 'site_consignus' ); ?></h1>
        </div>
        <div class="justify-content-center row">
            <div class="col-lg-4 col-md-6">
                <div class="service-box">
                    <div class="sb-icon">
                        <div class="sb-img-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon/dark/1.png" alt="">
                        </div>
                    </div>
                    <h3><?php _e( 'Crédito Consignado', 'site_consignus' ); ?></h3>
                    <p><?php _e( 'É um empréstimo com pagamento garantido, cujas parcelas são deduzidas diretamente na folha de pagamento do servidor público ou aposentado e por isso tem taxas de juros reduzidas e diferenciadas do mercado.', 'site_consignus' ); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box">
                    <div class="sb-icon">
                        <div class="sb-img-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon/dark/2.png" alt="">
                        </div>
                    </div>
                    <h3><?php _e( 'Crédito Salário', 'site_consignus' ); ?></h3>
                    <p><?php _e( 'Trata-se de uma linha de empréstimo pessoal exclusiva para os funcionários de cargos públicos ou empresas que processam a folha de pagamento pelo Banco do Brasil.', 'site_consignus' ); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box">
                    <div class="sb-icon">
                        <div class="sb-img-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon/dark/3.png" alt="">
                        </div>
                    </div>
                    <h3><?php _e( 'Crédito Benefício', 'site_consignus' ); ?></h3>
                    <p><?php _e( 'É um tipo de crédito pessoal disponibilizado para os aposentados/pensionistas do INSS que recebem seus benefícios através do Banco do Brasil. A linha de crédito pode ser liberada em até 72 meses, com a primeira parcela para até 60 dias.', 'site_consignus' ); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box">
                    <div class="sb-icon">
                        <div class="sb-img-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon/dark/4.png" alt="">
                        </div>
                    </div>
                    <h3><?php _e( 'Portabilidade de Dívidas', 'site_consignus' ); ?></h3>
                    <p><?php _e( 'A Portabilidade das dívidas é uma alternativa a quem já possui um empréstimo consignado em um banco ou financeira que está ativa no mercado, e que não está satisfeito com a instituição financeira, ou ainda, conseguiu uma taxa de juros melhor com outro banco.', 'site_consignus' ); ?> <?php _e( 'Depois da portabilidade efetuada, o cliente pode refinanciar as operações, tem a possibilidade de alongar o prazo, reduzir a parcela ou ainda receber um valor de devolução para resolver outras situações. É a oportunidade para aquele cliente que não está satisfeito com o banco de sua operações e que tem a opção de escolher um outro que melhor atenda às suas expectativas.', 'site_consignus' ); ?> </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box">
                    <div class="sb-icon">
                        <div class="sb-img-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon/dark/5.png" alt="">
                        </div>
                    </div>
                    <h3><?php _e( 'Refinanciamento de Dívidas', 'site_consignus' ); ?></h3>
                    <p><?php _e( 'O refinanciamento é mais um dos produtos oferecidos pela Consignus em parceria com os bancos. É uma possibilidade de resolver seus problemas sem precisar se desfazer de um bem, o que é muito penoso, e ainda conseguir taxas de juros mais vantajosas do que outros tipo de crédito.', 'site_consignus' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service section end -->
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