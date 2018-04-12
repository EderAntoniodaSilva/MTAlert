


	<div class="alert alert-danger msg-password" role="alert">
  			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
  			<span class="sr-only">Error:</span>
           Senhas Diferentes
	</div>
			 <?php include_once('cadastro-nav.php') ?>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" 
					<?php if($_SESSION['control_aba'] == 0){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?> class="" id="dados_pessoais">
					<div style="padding-top:20px;">
						<form class="form-horizontal" action="" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" name='nome' class="form-control" id="nome" placeholder="Nome Completo" value="<?php if(isset($_SESSION['nome'])){ echo $_SESSION['nome']; }?>">
                                </div>
                            </div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Celular</label>
                                <div class="class col-sm-4">                                                
                                    <input type="text" class="form-control" id="celular_usuario" name="celular_usuario" placeholder="(**) ####-####">
                                </div>
								<label class="col-sm-1 control-label">E-MAIL</label>
                                <div class="class col-sm-5">                                                
                                    <input type="text" class="form-control" id="email_usuario" name="email_usuario"placeholder="e-mail">
                                </div>
                            </div>

							<div class="form-group mensagem-erro">
								<label class="col-sm-2 control-label">Senha</label>
								<div class="class col-sm-4">
									<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" autocomplete="off">
								</div>

								<label class="col-sm-2 control-label">Confimação de Senha</label>
								<div class="class col-sm-4">
									<input type="password" class="form-control" id="senha1" name="senha1" placeholder="Confirmação de Senha" autocomplete="off">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Endereço</label>
								<div class="class col-sm-5">
									<input type="text" class="form-control" id="endereco_usuario" name="endereco_usuario" placeholder="Endereço">
								</div>
								
								<label class="col-sm-1 control-label">Número</label>
								<div class="class col-sm-4">
									<input type="number" class="form-control" id="numero_usuario" name="numero_usuario" placeholder="Número">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Bairro</label>
								<div class="class col-sm-4">
									<input type="text" class="form-control" id="bairro_usuario" name="bairro_usuario" placeholder="Bairro">
								</div>
								
								<label class="col-sm-1 control-label">Cidade</label>
								<div class="class col-sm-2">
									<input type="text" class="form-control" id="cidade_usuario" name="cidade_usuario" placeholder="Cidade">
								</div>

								<label class="col-sm-1 control-label"> Estado </label>
								<div class="class col-sm-2">
									<select name="estado_usuario" class="form-control">
											<option value="SP">São Paulo</option>
											<option value="...">Outro</option>
									</select>
								</div>
							</div>

                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success btn-cadastrar-usuario">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>