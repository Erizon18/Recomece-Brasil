<?php get_header();?>

<?php if (have_posts())  :while (have_posts()) : the_post();?>
    <div class="container mt-5 mb-5">
        <div id="post-date-author">
            <?php the_time( 'd \d\e F \d\e Y' ); ?>
            <span>por</span>
            <?php the_author();?>
        </div>
        <div id="post-title">
            <?php the_title('<h3>', '</h3>' );?>
        </div>

        <div class="post-content">
            <?php the_content();?>
        </div>

        <div class="post-buttons row">
            <button class="post-link col-md-2"><?php previous_post_link( '%link', '<- %title (Anterior) ',true); ?></button>
            <button class="post-link col-md-2"></p><?php next_post_link('%link', '(Próximo) %title ->',true); ?></button>
        </div>
    
        <div class="post-comment">
        <p>Esse post, atulamente, <?php comments_number( 'não tem respostas', 'tem uma resposta', 'tem % respostas' ); ?>.</p>
            <?php comment_form();?>
        </div>
    </div>
<?php endwhile; else:?>
    <h2>Nada entrontrado</h2>
    <p>Erro 404 - Página nao encontrada</p>
<?php endif; ?>

<?php get_footer();?>
