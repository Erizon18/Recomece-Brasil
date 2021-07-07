<?php 
    $posts = get_posts();
?>

<?php get_header();?>
<main class="container mt-5">
    <h2 id="blog-novidade" class="row border-bottom pb-4 mb-5">Novidades</h2>
    <?php foreach($posts as $post):?>
    <a href="<?php echo $post->guid;?>" class="ultima-noticia row mb-5">
        <img class="ultima-noticia-banner <?php if(!has_post_thumbnail( $post->ID )){
                echo "no-thumbnail";
            }?>" 
                src="<?php if(has_post_thumbnail( $post->ID )){
                            echo get_the_post_thumbnail_url($post->ID);
                            }
                            else{
                                echo get_template_directory_uri()."/images/logo_white.svg";
                            }?>" alt="Noticia">
        <div class="banner-container col-12 col-xl-8 p-5">
            <div class="banner">
                <h4>
                    <?php echo $post->post_title;?>
                </h4>
                <div class="informacoes-extras">
                    <img src="<?php echo get_bloginfo('template_url') ?>/images/relogio.svg" 
                            alt="relogio">
                    <p class="data">
                        <?php setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                        date_default_timezone_set('America/Sao_Paulo');
                        echo strftime('%d de %B de %Y', strtotime($post->post_date));?>
                    </p>
                    <p class="tempo-leitura">
                    <?php $content = get_post_field( 'post_content', $post->ID );
                        $quantidade_palavras = str_word_count( strip_tags( $content ) );
                        $tempo_leitura = ceil($quantidade_palavras / 250);
                        if($tempo_leitura == 1){
                            echo $tempo_leitura." minuto de leitura";
                        }
                        else{
                            echo strval($tempo_leitura)." minutos de leitura";
                        }?>
                        </p>
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
        <div class="filtros col-12 row justify-content-around 
        align-items-center border-bottom pb-3">
            <span class="categorias col-xl-8 col-12 mb-3 mb-sm-0 flex-column">
                <a href="<?php echo get_home_url() . "/category/geral"?>" class="px-5 px-xl-3 py-2 me-3 mb-3">Geral</a>
                <a href="<?php echo get_home_url() . "/category/dicas"?>" class="px-5 px-xl-3 py-2 me-3 mb-3">Dicas</a>
                <a href="<?php echo get_home_url() . "/category/entrevistas"?>" class="px-5 px-xl-3 py-2 me-3 mb-3">Entrevistas</a>
                <a href="<?php echo get_home_url() . "/category/midia"?>" class="px-5 px-xl-3 py-2 me-3 mb-3">RECOMECE na mídia</a>
            </span>
            <span id="busca" class="col-xl-4 col-12 ps-xl-3">
                <form action="http://localhost/wp/category/geral/" method="GET" id="searchform">
                    <input type="text" 
                    name="s" 
                    id="s" 
                    placeholder="Pesquisar conteúdo"
                    class="p-2 border-bottom border-primary"/>
                </form>
                <img src="<?php echo get_bloginfo('template_url')?>/images/blog/busca.png" alt="busca"/>
            </span>
        </div>
        <div class="posts col-12 row">
        <?php $query = new WP_Query($wp_query->query_vars);?>
        <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
            <span class="px-xl-3 mb-xl-5 col-12 col-xl-4">
                <a href="<?php the_permalink();?>" class="post">
                    <img src="<?php if(has_post_thumbnail( $post->ID )){
                            echo get_the_post_thumbnail_url($post->ID);
                            }
                            else{
                                echo get_template_directory_uri()."/images/logoHeader.svg";
                            }?>" class="post-thumbnail mb-5">
                    <h4 class="post-title mb-4"><?php the_title();?></h4>
                    <p class="post-content"><?php the_excerpt();?></p>
                </a>
            </span>
        <?php endwhile; else:?>
            <h3>Postagem não encontrada</h3>
        <?php endif; wp_reset_postdata();?>
        </div>
        <div class="carrossel-posts text-center">
            <?php echo paginate_links(array(
                'prev_text'          => __( 'Anterior' ),
                'next_text'          => __( 'Próximo' ),
            ));?>
        </div>
    </div>
</main>
<?php get_footer();?>
