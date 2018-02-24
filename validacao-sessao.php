<?php
				if($_SERVER['REQUEST_METHOD']=='POST'){
					$request = md5(implode($_POST));
					if(isset($_SESSION['ultima_request']) && $_SESSION['ultima_request'] == $request){?>
						<div class="alert alert-danger" role="alert">Usuário já inserido!</div>
					<?php }elseif(!isset($_SESSION['ultimo_id_usuario'])){	
                        $_SESSION['ultima_request'] = $request;
                        
                        $nome = $_POST['nome'];
                        $celular = $_POST['celular_usuario'];
                        $email = $_POST['email_usuario'];
                        $senha = $_POST['senha'];
                        $senha1 = $_POST['senha1'];
                        $endereco = $_POST['endereco_usuario'];
                        $numero = $_POST['numero_usuario'];
                        $bairro = $_POST['bairro_usuario'];
                        $cidade = $_POST['cidade_usuario'];
                        $estado = $_POST['estado_usuario'];
        
                        //seleciona a sessão
						$_SESSION['nome'] = $nome;
												
						$result_dados_pessoais = "INSERT INTO usuario (nome, celular, email, senha, endereco, numero, bairro, cidade, estado)
                            VALUES('$nome', '$celular', '$email', '$senha', '$endereco', '$numero', '$bairro', '$cidade', '$estado')";
						$resultado_dados_pessoais= mysqli_query($conn, $result_dados_pessoais);
						//ID do usuario inserido
                        $ultimo_id_usuario = mysqli_insert_id($conn);
                        echo(" este é o ultimo usuario- $ultimo_id_usuario");
						$_SESSION['ultimo_id_usuario'] = $ultimo_id_usuario; ?>							
						<div class="alert alert-success" role="alert">Usuário inserido com sucesso</div>
						<?php $_SESSION['control_aba'] = 1;
					}
					if(isset($_POST['nome_contato'])){
						$id_usuario = $_SESSION['ultimo_id_usuario'];
                        $nome_contato = $_POST['nome_contato'];
                        $celular = $_POST['celular'];
                        $email = $_POST['email'];
                        $senha1 = $_POST['senha1'];
                        $endereco = $_POST['endereco'];
                        $numero = $_POST['numero'];
                        $bairro = $_POST['bairro'];
                        $cidade = $_POST['cidade'];
                        $estado = $_POST['estado'];

                        $result_dados_contato = "INSERT INTO contato (nome, celular, email, endereco, numero, bairro, cidade, estado,id_usuario)
                            VALUES('$nome', '$celular', '$email', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$id_usuario')";
						$resultado_dados_contato= mysqli_query($conn, $result_dados_contato);?>
				
							
						<div class="alert alert-success" role="alert">Dados de contato inserido com sucesso</div>
						<?php $_SESSION['control_aba'] = 2;
					}
					if(isset($_POST['n_serial'])){
						$id_usuario = $_SESSION['ultimo_id_usuario'];
						$n_serial = $_POST['n_serial'];
                        $tipo = $_POST['tipo'];
                        $marca = $_POST['marca'];
                        $modelo = $_POST['modelo'];
                        $placa = $_POST['placa'];
                        
						$result_veiculo = "INSERT INTO veiculo (n_serial, tipo, marca, modelo, placa, id_usuario ) 
                            VALUES ('$n_serial', '$tipo', '$marca', '$modelo', '$placa','$id_usuario')";
						$resultado_veiculo = mysqli_query($conn, $result_veiculo);?>							
						<div class="alert alert-success" role="alert">Veiculo inserido com sucesso</div>
						<?php $_SESSION['control_aba'] = 3;
					}
				}
			?>
			<div>