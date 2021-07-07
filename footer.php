<?php wp_footer();?>
<body>
    <footer>
        <div class="container">
            <div id="footer-top">
                <image class="logo" alt="logo" src="<?php echo get_bloginfo('template_url') ?>/images/footer/logoFooter.svg"/>
                <div id="footer-top-span">
                    <span> Como podemos te ajudar a recomeçar?</span>
                </div>
                <div id="footer-top-nav">
                    <div id="top-nav-links">
                        <ul>
                        <li><a href="<?php echo get_home_url()?>">Home</li></a></li>
                        <li><a href="<?php echo get_home_url() . "/quem-somos"?>">Quem somos</a></li>
                        <li><a href="<?php echo get_home_url() . "/servicos"?>">Serviços</a></li>
                        <li><a href="<?php echo get_home_url() . "/category/geral"?>">Blog</a></li>
                        <li><a href="<?php echo get_home_url() . "/fac"?>">FAC</a></li>
                        <li><a href="<?php echo get_home_url() . "/contato"?>">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="footer-middle">
                <div class="redes">
                    <div class="redes-img">
                        <image alt="localizacao" src="<?php echo get_bloginfo('template_url') ?>/images/footer/local.svg"/>
                    </div>
                    <div class="local-text">
                        <span>Rua Desembargador Leite Albuquerque - 635, Sala 601 - Aldeota, Fortaleza, CE.</span>
                    </div>
                </div>

                <div class="redes">
                    <div class="redes-img">
                        <image alt="telefone" src="<?php echo get_bloginfo('template_url') ?>/images/footer/tel.svg"/>
                    </div>
                    <div class="others-text">
                        <span>(85) 3021-0303</span>
                    </div>
                </div>

                <div class="redes">
                    <div class="redes-img">
                        <image alt="mail" src="<?php echo get_bloginfo('template_url') ?>/images/footer/mail.svg"/>
                    </div>
                    <div class="others-text">
                        <span>recomecebrasiladm@gmail.com</span>
                    </div>
                </div>

                <div class="redes">
                    <div class="redes-img">
                        <image alt="whatsapp" src="<?php echo get_bloginfo('template_url') ?>/images/footer/zap.svg"/>
                    </div>
                </div>

                <div class="redes">
                    <div class="redes-img">
                        <image alt="insta" src="<?php echo get_bloginfo('template_url') ?>/images/footer/insta.svg"/>
                    </div>
                </div>

                <div class="redes">
                    <div class="redes-img">
                        <image alt="face" src="<?php echo get_bloginfo('template_url') ?>/images/footer/face.svg"/>
                    </div>
                </div>

                <div class="redes">
                    <div class="redes-img">
                        <image alt="linkedin" src="<?php echo get_bloginfo('template_url') ?>/images/footer/linkedin.svg"/>
                    </div>
                </div>
                
            </div>
            <div id="footer-bottom">
                <p>2019 - 2021 RECOMECE BRASIL. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="<?php echo get_bloginfo('template_url') ?>/js/menu.js"></script>
</body>