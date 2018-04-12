<?php
include_once("conexao.php");

if (isset($_POST['nome_contato_novo'])){
$id_usuario = $_POST['id_usuario'];
$nome_contato = $_POST['nome_contato_novo'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$endereco = $_POST['endereco1'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$result_dados_contato = "INSERT INTO usuario (nome, celular, email, endereco, numero, bairro, cidade, estado,id_contato)
    VALUES('$nome_contato', '$celular', '$email', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$id_usuario')";
$resultado_dados_contato= mysqli_query($conn, $result_dados_contato);
$conn->close();                   
    
echo '<div class="alert alert-success" role="alert">Contato alterado com sucesso</div>'   ;
header("Location: listar-usuario.php");  
}   
?>