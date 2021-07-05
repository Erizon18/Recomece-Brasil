<?php get_header();?>
<header class="header-main">
        <img src="<?php echo get_bloginfo('template_url') ?>/images/home/banner1.png" 
        alt="Imagem banner">
        <div class="container">
            <div class="banner">
                <h3>Sejam bem vindos a RECOMECE BRASIL</h3>
                <h4>Como podemos te ajudar a recomeçar?</h4>
                <a class="baction" href="http://localhost/wp/quem-somos/">Conheça a RECOMECE BRASIL</a>
            </div>
        </div>
    </header>
<main class="container">
    <div class="carrossel-wraper row">
        <div class="carrossel col-xl-12">
            <?php 
            $imagens = get_field('imagens');
            $links = get_field('links_do_carrossel');
            $counter = 0;
            
            for($i = 1 ; $i <= 10; $i++):
            if($imagens['imagem_'.$i] != "" && $links['link_'.$i] != ""):?>
                <a href="<?php echo $links['link_'.$i];?>">
                    <img class="carrossel-foto initial" 
                    src="<?php echo $imagens['imagem_'.$i]['url']?>" 
                    alt="Carrossel">
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
    <div class="servicos row">
        <h3>Conheça nossos <span class="blue-text">serviços</span></h3>
        <div class="servicos-area col-xl-12 row justify-content-center">
            <div class="servico col-xl-5 mb-3 col-12 col-md-8">
                <image class="imagem-servico" 
                src="<?php echo get_bloginfo('template_url') ?>/images/servicos/blindagem.svg" 
                alt="Reabilitação de crédito"/>
                <h4>Reabilitação de crédito</h4>
                <p>
                    Nosso objetivo neste processo é 
                    restaurar sua dignidade de compra influenciando 
                    diretamente nos seus limites de crédito.
                </p>
            </div>
            <div class="servico col-xl-5 col-sm-12 col-md-8">
                <image class="imagem-servico" 
                src="<?php echo get_bloginfo('template_url') ?>
                /images/servicos/bacen.svg" 
                alt="banco-bacen"/>
                <h4>BACEN</h4>
                <p>
                    Atuamos ajuizando processo com o objetivo de excluir as 
                    informações públicas das dívidas vencidas e à vencer do 
                    cadastro do Banco Central, denominado Registrato.
                </p>
            </div>
        </div>
    </div>
    <div class="news row">
        <h3 class="mb-3">Ultimas <span class="blue-text">notícias</span></h3>
        <?php $posts = get_posts(array('numberposts' => 2));
        foreach($posts as $post):?>
            <div class="noticia-area col-xl-10 col-12">
                <a href="<?php echo $post->guid;?>">
                    <div class="noticia row">
                        <img class="news-photo col-xl-3" 
                        src="<?php if(has_post_thumbnail( $post->ID )){
                            echo get_the_post_thumbnail_url($post->ID);
                            }
                            else{
                                echo get_template_directory_uri()."/images/logoHeader.svg";
                            }?>" alt="Noticia thumbnail"/>
                        <div class="content col-xl-9 ps-5">
                            <h5 class="news-type"><?php if(count(get_the_category($post->ID)) > 1){
                                echo get_the_category($post->ID)[1]->name;
                            }
                            else{
                                echo get_the_category($post->ID)[0]->name;
                            }
                            ?></h5>
                            <h4><?php echo $post->post_title;?></h4>
                            <p>
                            <?php echo $post->post_excerpt;?>
                            </p>
                            <div class="date mb-3">
                                <img class="relogio-icon" 
                                alt="relogio" 
                                src="<?php echo get_bloginfo('template_url') ?>/images/relogio.png"/>
                                <p><?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                    date_default_timezone_set('America/Sao_Paulo');
                                    echo strftime('%d de %B de %Y', strtotime($post->post_date));?>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach;?>

        <h5>Veja nosso <a href="http://localhost/wp/category/geral/">blog</a></h5>
    </div> 
</main>
<div class="duvidas">
        <img class="duvidas-imagem" 
        src="<?php echo get_bloginfo('template_url') ?>/images/home/bg 1.png" 
        alt="duvidas imagem"/>
        <h4>Ficou com alguma dúvida?</h4>
        <p>Saiba mais sobre os serviços prestados pela nossa empresa</p>
        <div class="button">
            <a class="baction" href="http://localhost/wp/fac/">Veja as dúvidas frequentes</a>
        </div>
    </div>
<script src="<?php echo get_bloginfo('template_url') ?>/js/carrossel.js"></script>
<?php get_footer();