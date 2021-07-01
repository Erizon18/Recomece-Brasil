<?php 
    $posts = get_posts();
    $count = 1;
?>

<?php get_header();?>
<main class="container mt-5">
    <h2 id="blog-novidade" class="row border-bottom pb-4 mb-5">Novidades</h2>
    <?php foreach($posts as $post):?>
    <a href="<?php echo $post->guid;?>" class="ultima-noticia row mb-5">
        <img class="ultima-noticia-banner" 
                src="<?php echo get_bloginfo('template_url') ?>/images/servicos/Banner serviços.png" 
                alt="Imagem banner">
        <div class="banner-container col-8 p-3">
            <div class="banner">
                <h4>
                    <?php echo $post->post_title;?>
                </h4>
                <div class="informacoes-extras">
                    <img src="<?php echo get_bloginfo('template_url') ?>/images/relogio.svg" 
                            alt="relogio">
                    <p class="data"><?php echo date("d-m-Y", strtotime($post->post_date));?></p>
                    <p class="tempo-leitura">5 minutos de leitura</p>
                </div>
            </div>
        </div>
    </a>
    <?php
        break;
        endforeach;
    ?>
    <div class="blog-posts row mb-5">
        <h3 class="posts-title col-12 row border-bottom pb-4 mb-5">Blog</h3>
        <div class="filtros col-12 row justify-content-around align-items-center border-bottom pb-3">
            <span class="categorias col-8 flex-column g-3">
                <button class="px-3 py-2 me-3 mb-3">Geral</button>
                <button class="px-3 py-2 me-3 mb-3">Dicas</button>
                <button class="px-3 py-2 me-3 mb-3">Entrevistas</button>
                <button class="px-3 py-2 me-3 mb-3">RECOMECE na mídia</button>
            </span>
            <span id="busca" class="col-4 ps-3 border-start">
                <input type="text" 
                name="pesquisa" 
                id="pesquisa" 
                placeholder="Pesquisar conteúdo"
                class="p-2 border-bottom border-primary"/>
                <img src="<?php echo get_bloginfo('template_url')?>/images/blog/busca.png" alt="busca"/>
            </span>
        </div>
        <div class="posts col-12 row">
        <?php foreach($posts as $post):?>
            <a href="<?php echo $post->guid;?>" class="post col-4 px-3 mb-5">
                <img src="<?php echo get_bloginfo('template_url')?>/images/blog/post thumbnail.png" 
                        alt="thumbnail" class="post-thumbnail mb-5">
                <h4 class="post-title mb-4"><?php echo $post->post_title;?></h4>
                <p class="post-content"><?php echo $post->post_excerpt;?></p>
            </a>
            <?php endforeach;?>
        </div>
        <div class="carrossel-posts row justify-content-evenly">
            <button id="anterior" class="col-1">Anterior</button>
            <span class="carrossel-numeros col-4 row justify-content-center">
                <button class="posicao-carrossel col-2 m-2 p-2">1</button>
                <button class="posicao-carrossel col-2 m-2 p-2">2</button>
                <button class="posicao-carrossel col-2 m-2 p-2">3</button>
            </span>
            <button id="proximo" class="col-1">Próximo</button>
        </div>
    </div>
</main>
<?php get_footer();?>
