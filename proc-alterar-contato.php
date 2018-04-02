<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);


if (isset($_POST['nome_contato_editar'])){
    $id_alt = $_POST['id_alt'];
    $nome_contato = $_POST['nome_contato_editar'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha1 = $_POST['senha1'];
    $endereco = $_POST['endereco1'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    
    $result_edit_contato = "UPDATE usuario SET nome='$nome_contato', celular='$celular',
        email='$email', endereco='$endereco', numero='$numero', cidade='$cidade',estado='$estado' WHERE id=$id_alt ";
    $resultado_edit_contato = mysqli_query($conn,$result_edit_contato);
    $conn->close(); 
    echo '<div class="alert alert-success" role="alert">Contato alterado com sucesso</div>'   ;
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
