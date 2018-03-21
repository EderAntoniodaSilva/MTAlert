<?php include_once('cabecalho.php') ?>
<div class="container theme-showcase" >
    <h1> Lista dos contatos cadastrados </h1>

    <?php
    $result_contatos = "SELECT * FROM usuario";
    $resultado_contato = mysqli_query($conn, $result_contatos);
    while($linha_contato = mysqli_fetch_assoc($resultado_contato)){
        //coleta dados
        $id_usuario = $linha_contato['id'];
        $nome = $linha_contato['nome'];
 
        //mostrar na tela
        echo "ID: ".$id_usuario. "<br>";
        echo "Nome: ".$nome."<br>";
        echo"<a href = 'editar-contato.php?id=".$id_usuario ."'>Editar </a> <br> ";
        echo"<a href = 'edit-excluir-contato.php?id=".$id_usuario ."'>Apagar </a> <br> <hr>";
    }
    ?>
</div>



<?php include_once('rodape.php') ?>