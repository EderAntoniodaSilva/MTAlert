<div class="container theme-showcase" >
    <h1> Novo contato </h1>

	<?php
	session_start();
    include_once('cabecalho.php');
    
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    $id_usuario = $_SESSION['id_usuario'];
    ?>

	<form class="form-horizontal"  action="proc-novo-contato.php" method="POST">
		<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" name="nome_contato_novo" class="form-control" id="nome_contato_novo" placeholder="Nome de seu contato"
					value="<?php echo $linha_contato['nome']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Celular</label>
			<div class="class col-sm-4">                                                
				<input type="text" class="form-control" id="celular" name="celular" placeholder="(**) ####-####"
					value="<?php echo $linha_contato['celular']; ?>">
			</div>
			<label class="col-sm-1 control-label">E-MAIL</label>
			<div class="class col-sm-5">                                                
				<input type="text" class="form-control" id="email" name="email"placeholder="e-mail"
					value="<?php echo $linha_contato['email']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Endereço</label>
			<div class="class col-sm-5">
				<input type="text" class="form-control" id="endereco1" name="endereco1" placeholder="Endereço"
					value="<?php echo $linha_contato['endereco']; ?>">
			</div>
			
			<label class="col-sm-1 control-label">Número</label>
			<div class="class col-sm-4">
				<input type="number" class="form-control" id="numero" name="numero" placeholder="Número"
					value="<?php echo $linha_contato['numero']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Bairro</label>
			<div class="class col-sm-4">
				<input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro"
					value="<?php echo $linha_contato['bairro']; ?>">
			</div>
			
			<label class="col-sm-1 control-label">Cidade</label>
			<div class="class col-sm-2">
				<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade"
					value="<?php echo $linha_contato['cidade']; ?>">
			</div>

			<label class="col-sm-1 control-label"> Estado </label>
			<div class="class col-sm-2">
				<select name="estado" class="form-control"value="<?php echo $linha_contato['estado']; ?>">
						<option value="SP">São Paulo</option>
						<option value="...">Outro</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Enviar</button>
			</div>
		</div>
	</form>
	<?php include_once('rodape.php') ?>
</div>