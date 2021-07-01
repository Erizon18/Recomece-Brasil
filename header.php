<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomece Brasil</title>
    <?php wp_head();?>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet"/>
</head>
<body>
    <div class="nav-header">
        <header class="container">
            <image class="logo" alt="logo" src="<?php echo get_bloginfo('template_url') ?>/images/logoHeader.svg"/>
            <div class="nav-bar">
                <div class="links">
                    <ul>
                        <li><a href="http://localhost/wp/">Home</li></a></li>
                        <li><a href="http://localhost/wp/quem-somos/">Quem somos</a></li>
                        <li><a href="http://localhost/wp/servicos/">Serviços</a></li>
                        <li><a href="http://localhost/wp/blog/">Blog</a></li>
                        <li><a href="http://localhost/wp/fac/">FAC</a></li>
                        <li><a href="http://localhost/wp/contato/">Contato</a></li>
                    </ul>
                </div>
                <div class="fale-conosco">
                    <button class="header-button">Fale com nossos consultores</button>
                </div>
            </div>
        </header>
    </div>