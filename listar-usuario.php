<div class="container theme-showcase" >
<?php
session_start();
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
	
if(!empty($_SESSION['id'])){
    include_once('cabecalho.php');
	echo "<h1>Gerencia dos contatos de ".$_SESSION['nome']." <br></h1>";
    
    $result_contatos = "SELECT * FROM usuario WHERE id_contato = ".$_SESSION['id'];
    $resultado_contato = mysqli_query($conn, $result_contatos);
    while($linha_contato = mysqli_fetch_assoc($resultado_contato)){
        //coleta dados
        $id_usuario = $linha_contato['id'];
        $nome = $linha_contato['nome'];
 
        //mostrar na tela
        echo "ID: ".$id_usuario. "<br>";
        echo "Nome: ".$nome."<br>";
        echo"<a href = 'editar-contato.php?id=".$id_usuario ."'>Editar </a> <br> ";
        echo"<a href = 'proc-apagar-contato.php?id=".$id_usuario ."'>Apagar </a> <br> <hr>";
    }
    
}else{
	$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Área restrita</div>';
	header("Location: login.php");	
}
?>    
</div>
<a href="editar-contato.php" class="btn btn-info" role="button">Cadastrar Novo Contato</a>
<!-- continuar daqui cria botão para cadastar novo contato apartir do listar...

<?php include_once('rodape.php') ?>