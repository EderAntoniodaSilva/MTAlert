<div class="container theme-showcase" >
<?php
session_start();
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
	
if(!empty($_SESSION['id_usuario'])){
    include_once('cabecalho.php');
	echo "<h1>Gerencia dos contatos de ".$_SESSION['nome']." <br></h1>";
    
    $result_contatos = "SELECT * FROM usuario WHERE id_contato = ".$_SESSION['id_usuario'];
    $resultado_contato = mysqli_query($conn, $result_contatos);
    while($linha_contato = mysqli_fetch_assoc($resultado_contato)){
        //coleta dados
        $id_usuario = $linha_contato['id'];
        $nome = $linha_contato['nome'];
        $celular = $linha_contato['celular'];
        $email = $linha_contato['email'];
       
 
        //mostrar na tela
        echo'<label class="col-sm-1 control-label">Nome</label>'.$nome."</br>";
        echo'</br><label class="col-sm-1 control-label">Celular</label>'.$celular."<br>";
        echo'</br><label class="col-sm-1 control-label">email</label>'.$email."<br>";

        //echo "ID: ".$id_usuario. "<br>";
        //echo "Nome: ".$nome."<br>";
        echo"<a href = 'editar-contato.php?id=".$id_usuario ."'>Editar </a> ";
        echo"<a href = 'proc-apagar-contato.php?id=".$id_usuario ."'>Apagar </a> <br> <hr>";
    }
    
}else{
	$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Área restrita</div>';
	header("Location: login.php");	
}
?>    
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <a href="novo-cadastro-contato.php" class="btn btn-success" role="button">Cadastrar Contato</a>
    </div>
</div>

<?php include_once('rodape.php') ?>