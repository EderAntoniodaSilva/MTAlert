<?php
	session_start();
	unset($_SESSION['ultimo_id_usuario']);
	unset($_SESSION['id']);
	unset($_SESSION['nome']);
	unset($_SESSION['email']);
	unset($_SESSION['msg']);
	unset($_SESSION['control_aba']);
	$_SESSION['msg'] = "Deslogado com sucesso";
	header("Location: cadastro-usuario.php");
	//header("Location: login.php");
?>




