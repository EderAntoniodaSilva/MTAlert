<?php
					/*Apresenta a aba somente após inserir o endereço*/
					if($_SESSION['control_aba'] == 3){ ?>
						<div role="tabpanel" class='tab-pane active' id="sucesso">
							<div style="padding-top:20px;">
								<div class="alert alert-info" role="alert">Dados do usuário inserido com sucesso! Deseja inserir novo usuário? <a href="destroi_sessao.php">CLIQUE AQUI</a></div>
							</div>
						</div>
					<?php }
				?>