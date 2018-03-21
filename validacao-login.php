<?php
//incluir conexão do banco  
//include_once("conexao.php");

$btn_login = filter_input(INPUT_POST,'btn_login' , FILTER_SANITIZE_STRING);
if($btn_login){
    echo("tentar logar");

}else{
    $_SESSION ['msg'] = "Pagina não encontrada";
    header ("Location: login.php");
}



?>
