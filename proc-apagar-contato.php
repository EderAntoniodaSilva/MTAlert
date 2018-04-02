<?php
session_start();
include_once("conexao.php");

$id_apg = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);
echo "$id_apg";

if(!empty($id_apg)){
	$result_cont_apg = "DELETE FROM usuario WHERE id='$id_apg'";
	$resultado_cont_apg = mysqli_query($conn, $result_cont_apg);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: listar-usuario.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: listar-usuario.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: listar-usuario.php");
}


?>