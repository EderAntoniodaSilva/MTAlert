<div role="tabpanel"  
					<?php if($_SESSION['control_aba'] == 2){ 
						echo "class='tab-pane active'"; 
						}else{ 
							echo "class='tab-pane'"; 
						} ?> id="messages">
					<div style="padding-top:20px;">
					 <form class="form-horizontal"  action="" method="POST">
                                              

                            <div class="form-group">
								<label class="col-sm-2 control-label">Serial</label>
                                <div class="class col-sm-4">                                                
                                    <input type="text" class="form-control" id="n_serial" name="n_serial" placeholder="Numero Serial">
                                </div>
								<label class="col-sm-1 control-label">Categoria</label>
                                <div class="class col-sm-5">                                                
                                    <input type="text" class="form-control" id="tipo" name="tipo"placeholder="tipo de veiculo">
                                </div>
                            </div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Marca</label>
								<div class="class col-sm-3">
									<input type="text" class="form-control" id="marca" name="marca" placeholder="Marca">
								</div>
								
								<label class="col-sm-1 control-label">Modelo</label>
								<div class="class col-sm-3">
									<input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
								</div>
                                <label class="col-sm-1  control-label">Placa</label>
								<div class="class col-sm-2">
									<input type="text" class="form-control" id="placa" name="placa" placeholder="Placa do veiculo">
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


                <?php include_once('mensagem-validacao.php') ?>