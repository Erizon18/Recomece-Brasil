<?php get_header();?>
<main>
    <div class="contato-banner">
        <div class="container">
            <div class="ct-ban">
                <h3>Não sabe como sair das dívidas?</h3>
                <h4>Entre em contato e encontre a solução dos seus problemas.</h4>
            </div>
        </div>
    </div>
    
    <div class="contato-img">
        <img src="<?php echo get_bloginfo('template_url') ?>/images/contato/banner1.svg" alt="quemsomosbanner"/>
    </div>
    <div class="container">
        <div class="reabilitacao-credito row">
            <span class="col-sm-12 col-xl-6">
                <div id="contato-info">
                    <h3><span class="contato-h3">Precisa recomeçar?</span></h3>
                    <p class="contato-p">
                        Complete o formulário ao lado para te ajudarmos a <span class="boldblue">RECOMEÇAR</span>, auxiliaremos você ou a 
                        sua empresa a ter a oportunidade de retornar ao circuito financeiro antes mesmo de quitar 
                        suas dívidas.
                    </p>
                    <div id="cont-valor">
                        <div class="atuacao">
                            <img src="<?php echo get_bloginfo('template_url') ?>/images/contato/pessoas.svg" alt="quemsomosbanner"/>
                            <h4>Atendemos pessoas físicas (CPF) e pessoas jurídicas (CNPJ).</h4>
                        </div>
                        <div class="atuacao">
                            <img src="<?php echo get_bloginfo('template_url') ?>/images/contato/polegar.svg" alt="quemsomosbanner"/>
                            <h4>100% legais.</h4>
                        </div>
                        <div class="atuacao">
                            <img src="<?php echo get_bloginfo('template_url') ?>/images/contato/consumidor.svg" alt="quemsomosbanner"/>
                            <h4>Em conformidade com o código de defesa do consumidor.</h4>
                        </div>
                    </div>
                </div>
            </span>
            <span class="col-sm-12 col-xl-6 image-container">
                <div class="contato-form">
                <?php echo do_shortcode( '[wpforms id="122"]' ); ?>
                </div>
            </span>
        </div>
    </div>
</main>
<?php get_footer();?>