
<?php
//inicia a sessão
session_start();
//incluir conexão do banco 
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//echo "$usuario - $senha";
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT * FROM usuario WHERE email='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);

		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			//Usar este para senha criptografada -> if(password_verify($senha, $row_usuario['senha'])){      	        
			if($senha == $row_usuario['senha']){
				$_SESSION['id_usuario'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: listar-usuario.php");//lista de contado do usuario
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: login.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: login.php");
}	