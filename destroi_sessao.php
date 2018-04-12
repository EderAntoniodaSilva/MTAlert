<?php
	session_start();
	unset($_SESSION['id_usuario']);
	//unset($_SESSION['id']);
	unset($_SESSION['nome']);
	unset($_SESSION['email']);
	unset($_SESSION['msg']);
	unset($_SESSION['control_aba']);
	//$_SESSION['msg'] = "Deslogado com sucesso";
	header("Location: index.php");
	//header("Location: login.php");
?>




