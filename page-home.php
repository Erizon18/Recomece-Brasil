<?php get_header();?>
<main>
    <header class="header-main">
        <img src="<?php echo get_bloginfo('template_url') ?>/images/home/banner1.png" alt="Imagem banner">
        <div class="banner">
            <h3>Sejam bem vindos a RECOMECE BRASIL</h3>
            <h4>Como podemos te ajudar a recomeçar?</h4>
            <button>Conheça a RECOMECE BRASIL</button>
        </div>
    </header>
    <div class="carrossel-wraper">
        
        <div class="carrossel">
            <?php 

            $imagens = get_field('imagens');
            $links = get_field('links_do_carrossel');
            $counter = 0;
            
            for($i = 1 ; $i <= 10; $i++):
            if($imagens['imagem_'.$i] != "" && $links['link_'.$i] != ""):?>
                <a href="<?php echo $links['link_'.$i];?>">
                    <img class="carrossel-foto initial" src="<?php echo $imagens['imagem_'.$i]['url']?>" alt="Carrossel">
                </a>
            <?php $counter++;
            endif;
            endfor;?>

        
            <div class="carrossel-button-prev"></div>
            <div class="carrossel-button-next"></div>
            <div class="carrossel-pontos">
            <?php for($i = 0; $i < $counter; $i++):?>
                <div class="carrossel-ponto"></div>
            <?php endfor;?>
            </div>
        </div>
    </div>
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
        <img class="duvidas-imagem" src="<?php echo get_bloginfo('template_url') ?>/images/home/bg 1.png" alt="duvidas imagem"/>
        <h4>Ficou com alguma dúvida?</h4>
        <p>Saiba mais sobre os serviços prestados pela nossa empresa</p>
        <div class="button">
            <button>Veja as dúvidas frequentes</button>
        </div>
    </div>
</main>
<script src="<?php echo get_bloginfo('template_url') ?>/js/carrossel.js"></script>
<?php get_footer();