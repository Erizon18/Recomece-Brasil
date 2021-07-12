<?php get_header();?>
<main>
<header class="header-main">
        <img src="<?php echo get_bloginfo('template_url') ?>/images/fac/fac.svg" alt="Imagem banner">
        <div class="container">
            <div class="banner">
                <h3>Tem alguma dúvida?</h3>
                <h4>Fique por dentro das questões envolvendo a nossa empresa e se mantenha atualizado no mercado.</h4>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div id="perguntasf">
            <div class="title">
                <h3><span class="bold-text">Dúvidas</span> <span class="blue-text">Frequentes</span></h3>
            </div>
            <div>
                <label for="perg">
                    <div class="pergunta">
                        <h4>> Eu consigo financiamento após limpar o meu nome?</h4>
                    </div>
                </label>
                <input type="checkbox" name="perguntafrequente" id="perg" value="perg">
                <div class="resposta">
                    <h5>Não ter apontamentos em seu CPF ou CNPJ é o principal fator
                        para aprovação, contudo cada instituição tem o seu critério de avaliação
                        para a concessão de crédito.
                    </h5>
                </div>
            </div>
            
            <div>
                <label for="perg2">
                    <div class="pergunta">
                        <h4>> A Recomece Brasil faz emprestimos?</h4>
                    </div>
                </label>
                <input type="checkbox" name="perguntafrequente" id="perg2" value="perg2">
                <div class="resposta">
                    <h5>Não fazemos empréstimos. Nossa atuação é direcionada a
                        reabilitação de crédito.
                    </h5>
                </div>
            </div>

            <div>
                <label for="perg3">
                    <div class="pergunta">
                        <h4>> A Recomece Brasil negocia ou paga minhas dividas?</h4>
                    </div>
                </label>
                <input type="checkbox" name="perguntafrequente" id="perg3" value="perg3">
                <div class="resposta">
                    <h5>Não negociamos ou pagamos suas dívidas. Nosso serviço
                        consiste em retirar os apontamentos com a finalidade de reabilitar o seu
                        crédito, te proporcionando folego para que você possa negociar depois
                        com mais tranquilidade.
                    </h5>
                </div>
            </div>

            <div>
                <label for="perg4">
                    <div class="pergunta">
                        <h4>> A Pontuação do Serasa Score também é restaurada?</h4>
                    </div>
                </label>
                <input type="checkbox" name="perguntafrequente" id="perg4" value="perg4">
                <div class="resposta">
                    <h5>Sim, o seu Score é uma pontuação referenciada pelo Serasa e, após o processo realizado pela 
                        RECOMECE BRASIL, o seu Score será restaurado.
                    </h5>
                </div>
            </div>

            <div>
                <label for="perg5">
                    <div class="pergunta">
                        <h4>> Todo e qualquer apontamento é retirado?</h4>
                    </div>
                </label>
                <input type="checkbox" name="perguntafrequente" id="perg5" value="perg5">
                <div class="resposta">
                    <h5>Sim, todo e qualquer tipo de apontamento, seja ele protesto,
                        ações judiciais, falência, concordata, dentre outros.
                    </h5>
                </div>
            </div>

            <div>
                <label for="perg6">
                    <div class="pergunta">
                        <h4>> A RECOMECE BRASIL ajuda a prevenir negativações?</h4>
                    </div>
                </label>
                <input type="checkbox" name="perguntafrequente" id="perg6" value="perg6">
                <div class="resposta">
                    <h5>Sim, a RECOMECE BRASIL te ajuda a prevenir que o seu
                        CPF ou CNPJ seja inscrito nos Órgãos de Proteção ao Crédito,
                        bloqueando futuras negativações pelo período de 12 (doze) meses.
                    </h5>
                </div>
            </div>

            <div>
                <label for="perg7">
                    <div class="pergunta">
                        <h4>> O processo RECOMECE BRASIL é legal?</h4>
                    </div>
                </label>
                <input type="checkbox" name="perguntafrequente" id="perg7" value="perg7">
                <div class="resposta">
                    <h5>Sim, os processos da RECOMECE BRASIL são 100% legais.
                        Assim como a nossa existência tem amparo legal pelo Código de Defesa
                        do Consumidor (Art. 82, IV).
                    </h5>
                </div>
            </div>

        </div>
    </div>
</main>
<?php get_footer();?>