<?php get_header();?>

<?php if (have_posts())  :while (have_posts()) : the_post();?>
    <div class="container">
        <?php the_title();?>
        <?php the_content();?>
        <?php the_weekday();?>
        <?php the_time();?>
        <?php the_author();?>
        <?php the_meta();?><br>
        <?php next_post_link('%link', '%title'); ?>
        <?php previous_post_link('%link', '%title'); ?>
    </div>
<?php endwhile; else:?>
    <h2>Nada entrontrado</h2>
    <p>Erro 404 - Página nao encontrada</p>
<?php endif; ?>

<?php get_footer();?>
