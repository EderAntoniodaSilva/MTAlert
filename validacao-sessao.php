<?php
				if($_SERVER['REQUEST_METHOD']=='POST'){
					$request = md5(implode($_POST));
					if(isset($_SESSION['ultima_request']) && $_SESSION['ultima_request'] == $request){?>
						<div class="alert alert-danger" role="alert">Usuário já inserido!</div>
					<?php }elseif(!isset($_SESSION['id_usuario'])){	
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
                        $id_usuario = mysqli_insert_id($conn);
                        $conn->close();
                        //teste para ver o ultimo ID   echo(" este é o ultimo usuario- $ultimo_id_usuario"); 
						$_SESSION['id_usuario'] = $id_usuario; ?>							
						<div class="alert alert-success" role="alert">Usuário inserido com sucesso</div>
						<?php $_SESSION['control_aba'] = 1;
                    }
                    
					if(isset($_POST['nome_contato'])){
						$id_usuario = $_SESSION['id_usuario'];
                        $nome_contato = $_POST['nome_contato'];
                        $celular = $_POST['celular'];
                        $email = $_POST['email'];
                        $senha1 = $_POST['senha1'];
                        $endereco = $_POST['endereco1'];
                        $numero = $_POST['numero'];
                        $bairro = $_POST['bairro'];
                        $cidade = $_POST['cidade'];
                        $estado = $_POST['estado'];

                        $result_dados_contato = "INSERT INTO usuario (nome, celular, email, endereco, numero, bairro, cidade, estado,id_contato)
                            VALUES('$nome_contato', '$celular', '$email', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$id_usuario')";
                        $resultado_dados_contato= mysqli_query($conn, $result_dados_contato);
                        $conn->close();?>                    
							
						<div class="alert alert-success" role="alert">Dados de contato inserido com sucesso</div>
						<?php $_SESSION['control_aba'] = 2;
                    }
                    // Fazer validador de sessão similar ao de cima que pegue o id do box selec e insere no id-contato
                    if(isset($_POST['id_contato'])){
						$id_usuario = $_SESSION['id_usuario'];
                        $id_contato = $_POST['id_contato'];                    
                        
                        $result_dados_contato = "UPDATE usuario SET id_contato = '$id_contato' WHERE id = $id_usuario";
                        $resultado_dados_contato= mysqli_query($conn, $result_dados_contato);
                        $conn->close();?>                        
							
						<div class="alert alert-success" role="alert">Dados de contato inserido com sucesso</div>
						<?php $_SESSION['control_aba'] = 2;
                    }

                    //fimmmmmmmmmmmmmmmmm
                    
					if(isset($_POST['n_serial'])){
						$id_usuario = $_SESSION['id_usuario'];
						$n_serial = $_POST['n_serial'];
                        $tipo = $_POST['tipo'];
                        $marca = $_POST['marca'];
                        $modelo = $_POST['modelo'];
                        $placa = $_POST['placa'];
                        
						$result_veiculo = "INSERT INTO veiculo (n_serial, tipo, marca, modelo, placa, id_usuario ) 
                            VALUES ('$n_serial', '$tipo', '$marca', '$modelo', '$placa','$id_usuario')";
                        $resultado_veiculo = mysqli_query($conn, $result_veiculo);
                        $conn->close();?>							
						<div class="alert alert-success" role="alert">Veiculo inserido com sucesso</div>
						<?php $_SESSION['control_aba'] = 3;
                    }               
				}
			?>
		<div>
        
