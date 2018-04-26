<?php
//incluir conexão
include_once('../db/conexao.php');
//Buscar dados o Banco
$result_usuario = "SELECT nome, email FROM usuario ";
$resultado_usuario = mysqli_query($conn, $result_usuario);
        
        while($linha_contato = mysqli_fetch_assoc($resultado_usuario)){
            //coleta dados
           // $id = $linha_contato['id'];
            $nome = $linha_contato['nome'];
            //$cel = $linha_contato['celular'];
            $email = $linha_contato['email'];
            //$end = $linha_contato['enndereco'];

            
        }
        echo"$nome";
            echo"$email";
/*

    //Chama uma função externa
    $comando = "enviarEmail.sh " . "rodolfo_foliveira@hotmail.com,ederanton@gmail.com" . " " . "Olá!" . " " . "Corpo do E-mail" ;
    $output = shell_exec($comando);
    echo "<pre>$output</pre>";
*/

?>
