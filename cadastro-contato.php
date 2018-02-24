<div role="tabpanel"  
					<?php if($_SESSION['control_aba'] == 1){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?>  id="dados_de_contato">
					<div style="padding-top:20px;">
					 <form class="form-horizontal"  action="" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nome_contato" class="form-control" id="nome_contato" placeholder="Nome de seu contato">
                                </div>
                            </div>

                            <div class="form-group">
								<label class="col-sm-2 control-label">Celular</label>
                                <div class="class col-sm-4">                                                
                                    <input type="text" class="form-control" id="celular" name="celular" placeholder="(**) ####-####">
                                </div>
								<label class="col-sm-1 control-label">E-MAIL</label>
                                <div class="class col-sm-5">                                                
                                    <input type="text" class="form-control" id="email" name="email"placeholder="e-mail">
                                </div>
                            </div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Endereço</label>
								<div class="class col-sm-5">
									<input type="text" class="form-control" id="endereco1" name="endereco1" placeholder="Endereço">
								</div>
								
								<label class="col-sm-1 control-label">Número</label>
								<div class="class col-sm-4">
									<input type="number" class="form-control" id="numero" name="numero" placeholder="Número">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Bairro</label>
								<div class="class col-sm-4">
									<input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
								</div>
								
								<label class="col-sm-1 control-label">Cidade</label>
								<div class="class col-sm-2">
									<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
								</div>

								<label class="col-sm-1 control-label"> Estado </label>
								<div class="class col-sm-2">
									<select name="estado" class="form-control">
											<option value="SP">São Paulo</option>
											<option value="...">Outro</option>
									</select>
								</div>
							</div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>