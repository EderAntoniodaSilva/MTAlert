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
    include_once('listar-ocorrencia.php');
?>

<table class="table table-bordered">
    <tr>
        <th class = "text-center"> Nome</th>
        <th class = "text-center">Celular </th> 
        <th class = "text-center"> E-mail</th>
        <th class = "text-center col-md-1"> Ação</th>
    </tr>

<?php
    
    $result_contatos = "SELECT * FROM usuario WHERE id_contato = ".$_SESSION['id_usuario'];
    $resultado_contato = mysqli_query($conn, $result_contatos);

    while($linha_contato = mysqli_fetch_assoc($resultado_contato)){
        //coleta dados
        $id_usuario = $linha_contato['id'];
        $nome = $linha_contato['nome'];
        $celular = $linha_contato['celular'];
        $email = $linha_contato['email'];
       
        echo'<tr>';
        echo"<td> $nome  </td>";
        echo"<td> $celular </td>";
        echo"<td> $email </td>";

        echo"<td class = 'text-center'>
            <a href=' editar-contato.php? id=".$id_usuario."' ><span class='glyphicon glyphicon-pencil icon-custom' aria-hidden='true' value= '$id_usuario' name='id'></span></a>
            <a href=' proc-apagar-contato.php?id=".$id_usuario ." ' ><span class='glyphicon glyphicon-trash icon-custom' aria-hidden='true' value= '$id_usuario'></span></a>";
        echo'</tr>';                
    }
    echo'</table>';

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