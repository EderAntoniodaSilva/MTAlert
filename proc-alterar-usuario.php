<?php
session_start();
include_once("db/conexao.php");
$id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);


if (isset($_POST['nome_contato_editar'])){
    $id_alt = $_POST['id_alt'];
    $nome_usuario = $_POST['nome_contato_editar'];
    $celular = $_POST['celular_usuario'];
    $email = $_POST['email_usuario'];
    //$senha1 = $_POST['senha1'];
    $endereco = $_POST['endereco_usuario'];
    $numero = $_POST['numero_usuario'];
    $bairro = $_POST['bairro_usuario'];
    $cidade = $_POST['cidade_usuario'];
    $estado = $_POST['estado_usuario'];
    
    $result_edit_contato = "UPDATE usuario SET nome='$nome_usuario', celular='$celular',
        email='$email', endereco='$endereco', numero='$numero', cidade='$cidade',estado='$estado' WHERE id=$id_alt ";
    $resultado_edit_contato = mysqli_query($conn,$result_edit_contato);
    $conn->close(); 
    $_SESSION['nome'] = $nome_usuario;
    $_SESSION['msg'] = '</br><div class="alert alert-success" role="alert">Contato alterado com sucesso</div>'   ;
    header("Location: listar-usuario.php");
}
if(mysqli_affectd_rows($conn)){
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert"> Usuário apagado com sucesso</div>';
    header("Location: listar-usuario.php");
}else{

    $_SESSION['msg'] = "<p style='color:red;'> ERRO não foi apagado com sucesso</p>";
    header("Location: listar-usuario.php");
}

?>
