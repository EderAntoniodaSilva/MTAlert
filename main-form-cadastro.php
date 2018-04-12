<?php include_once('cabecalho.php') ?>

    <div class="container theme-showcase" role="main">
        <div class="page-header">
            <h1>Cadastrar Usuário</h1>
        </div>
        <!-- Botão para teste de sessão		
            <div class="row espaco">
                <div class="pull-right">
                    <a href="destroi_sessao.php"><button type='button' class='btn btn-sm btn-success'>Novo Usuário</button></a>
                </div>
            </div>
        -->

            <?php include_once('validacao-sessao.php')?>
            <?php include_once('cadastro-usuario.php')?>
            <?php include_once('cadastro-contato.php')?>				
            <?php include_once('cadastro-veiculo.php')?>
            <?php include_once('mensagem-validacao.php')?>
            </div>
        </div>
    </div>
		
<?php include_once('rodape.php') ?>