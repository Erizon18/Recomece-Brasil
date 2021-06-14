<?php get_header();?>
<main>
        <header class="header-main">
            <div class="banner">
                <h3>Sejam bem vindos a RECOMECE BRASIL</h3>
                <h4>Como podemos te ajudar a recomeçar?</h4>
                <button>Conheça a RECOMECE BRASIL</button>
            </div>
        </header>
        <a>
            <div class="carrossel">
                <img src="<?php echo get_bloginfo('template_url') ?>/images/carrossel.jpg" alt="Carrossel">
                <h4>Blindagem de CPF</h4>
                <h5>Promoção em tempo limitada</h5>
            </div>
        </a>
        <div class="news">
            <h3>Ultimas <span class="blue-text">notícias</span></h3>
            <div class="noticia-area">
                <a href="">
                    <div class="noticia">
                        <img class="news-photo" src="<?php echo get_bloginfo('template_url') ?>/images/team meeting.jpg"/>
                        <div class="content">
                            <h5 class="news-type">Recomece na mídia</h5>
                            <h4>Como Recomeçar do zero</h4>
                            <p>
                                Hoje nos vamos falar como você pode RECOMEÇAR 
                                do zero e planejar seu futuro
                            </p>
                            <div class="date">
                                <img class="relogio-icon" alt="relogio" src="<?php echo get_bloginfo('template_url') ?>/images/relogio.png"/>
                                <p>05 de junho de 2021</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="noticia-area">
                <a href="">
                    <div class="noticia">
                        <image class="news-photo" src="<?php echo get_bloginfo('template_url') ?>/images/team meeting.jpg"/>
                        <div class="content">
                            <h5 class="news-type">Recomece na mídia</h5>
                            <h4>Como Recomeçar do zero</h4>
                            <p>
                                Hoje nos vamos falar como você pode RECOMEÇAR 
                                do zero e planejar seu futuro
                            </p>
                            <div class="date">
                                <image class="relogio-icon" alt="relogio" src="<?php echo get_bloginfo('template_url') ?>/images/relogio.png"/>
                                <p>05 de junho de 2021</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <h5>Veja nosso <a>blog</a></h5>
        </div>
        <div class="servicos">
            <h3>Conheça nossos <span class="blue-text">serviços</span></h3>
            <div class="servicos-area">
                <div class="servico">
                    <image class="imagem-servico" src="<?php echo get_bloginfo('template_url') ?>/images/vector.svg" alt="Reabilitação de crédito"/>
                    <h4>Reabilitação de crédito</h4>
                    <p>
                        Nosso objetivo neste processo é 
                        restaurar sua dignidade de compra influenciando 
                        diretamente nos seus limites de crédito.
                    </p>
                </div>
                <div class="servico">
                    <image class="imagem-servico" src="<?php echo get_bloginfo('template_url') ?>/images/vector.svg" alt="banco-bacen"/>
                    <h4>BACEN</h4>
                    <p>
                        Atuamos ajuizando processo com o objetivo de excluir as 
                        informações públicas das dívidas vencidas e à vencer do 
                        cadastro do Banco Central, denominado Registrato.
                    </p>
                </div>
            </div>
        </div>
        <div class="duvidas">
            <img class="duvidas-imagem" src="<?php echo get_bloginfo('template_url') ?>/images/trabalhando.jpg" alt="duvidas imagem"/>
            <h4>Ficou com alguma dúvida?</h4>
            <p>Saiba mais sobre os serviços prestados pela nossa empresa</p>
            <div class="button">
                <button>Veja as dúvidas frequentes</button>
            </div>
        </div>
    </main>
<?php get_footer();