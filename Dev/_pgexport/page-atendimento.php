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
        <section class="page-header-section set-bg" data-setbg="img/header-bg-2.jpg">
            <div class="container">
                <h1 class="header-title"><?php _e( 'Atendimento', 'site_consignus' ); ?><span>.</span></h1>
            </div>
        </section>
        <!-- Page header section end -->
        <!-- Page section start -->
        <section class="page-section pt100">
            <div class="content-block contact-3" style="padding-top: 60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?php _e( 'Fale com o nosso', 'site_consignus' ); ?> <br><span><?php _e( 'Atendimento', 'site_consignus' ); ?></span></h1>
                            <p><?php _e( 'Por este canal você consegue solicitar uma simulação para pessoa física de acordo com os produtos que a Consignus oferece. Se o atendimento for para pessoa jurídica, o departamento comercial da Consignus irá retornar visando apresentar as melhores opções de crédito, uma vez que o cliente pessoa jurídica da Consignus é atendido de forma individualizada, conforme suas necessidades e o que pretende realizar a médio e longo prazo.', 'site_consignus' ); ?></p>
                        </div>
                        <div class="col-md-12">
                            <div id="contact" class="form-container">
                                <fieldset>
                                    <div id="message"></div>
                                    <form method="post" action="<?php echo esc_url( get_template_directory_uri() ); ?>/js/contact-form-atendimento.php" name="contactform" id="contactform">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" value="" placeholder="Nome" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <input name="email" id="email" type="text" value="" placeholder="E-mail" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" id="phone" type="text" value="" placeholder="Contato" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" class="form-control" rows="3" placeholder="Mensagem" id="textArea"></textarea>
                                            <div class="editContent">
                                                <p class="small text-muted"><span class="guardsman"><?php _e( '* Todos os campos são necessários.', 'site_consignus' ); ?></span> <?php _e( 'Assim que recebermos sua mensagem, responderemos o mais breve possível.', 'site_consignus' ); ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary sb-dark site-btn" type="submit" id="cf-submit" name="submit">
                                                <?php _e( 'Enviar', 'site_consignus' ); ?>
                                            </button>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                            <!-- /.form-container -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
        </section>
        <!-- Page section end -->
        <!-- Footer section start -->
        <footer class="footer-section">
            <div class="footer-social">
                <div class="social-links">
                    <a href="http://www.instagram.com/consignus"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/Consignus-106390454477380"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <div class="container">
</div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="copyright">
                <br>
                <?php _e( 'Rua João Pessoa, 235,', 'site_consignus' ); ?>
                <?php _e( 'Sala 102, Cidade Alta, Natal/RN, CEP: 59025-500.', 'site_consignus' ); ?>
                <br> 
                <?php _e( '&copy;&nbsp; Consignus Crédito Consignado | Todos os direitos reservados', 'site_consignus' ); ?>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </footer>        

<?php get_footer(); ?>