<?php
//incluir conexão teste 
include('conexao.php');
//include('../email/envia-email.php');
//Buscar dados o Banco
//vem do no sensor Lat. Long. Altura data hora "idVeiculo(serial)"
//tenho que fazer um select apartir do idVeiculo para pegar o idPessoa(usuario)
// tipo;marca;modelo;placa (tabela veiculo -> compor corpo da msg)
//Nome Usuario; celular Usuario;   Nome contato; email contato (tabela pessoa)
/*SELECT usuario.email as 'email' FROM usuario,veiculo
WHERE usuario.id_contato = veiculo.id_usuario AND
veiculo.n_serial = '123'   '$n_serial'
*/ 
   
//$result_Contato = "SELECT email FROM usuario WHERE id_contato = 9";//necessita ajustar sql para coleta
$result_Contato = "SELECT usuario.email as 'emailContato', usuario.nome as 'nomeContato' 
                    FROM usuario,veiculo
                    WHERE usuario.id_contato = veiculo.id_usuario 
                    AND   veiculo.n_serial = '$n_serial'";

$resultado_contato = mysqli_query($conn, $result_Contato);

$ArrayContato =  array();        
   while($dadosEnv = mysqli_fetch_assoc($resultado_contato)){
        array_push($ArrayContato, $dadosEnv["emailContato"], $dadosEnv["nomeContato"]);
       // array_push($ArrayContato, $nome["nomeContato"]);                 
   }/*
    foreach($ArrayContato as $nomeContato){
      echo $dadosEnv["emailContato"] ;  
      echo"$nomeContato ";  
    }*/
//Dado Usuario condutor 
$result_usuario = "SELECT nome, celular from usuario, veiculo
                   WHERE usuario.id = veiculo.id_usuario 
                   AND veiculo.n_serial = '$n_serial'" ;  
$resultado_usuario = mysqli_query($conn, $result_usuario);
$linha_usuario = mysqli_fetch_assoc($resultado_usuario);  
$nome = $linha_usuario['nome'];
$cel = $linha_usuario['celular'];
?>