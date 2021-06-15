<?php if (have_posts())  :while (have_posts()) : the_post();?>
    <?php the_content();?>
<?php endwhile; else:?>
    <h2>Nada entrontrado</h2>
    <p>Erro 404 - Página nao encontrada</p>
<?php endif; ?>