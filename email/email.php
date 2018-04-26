<?php
$assunto = "Possivel Queda Detectada !!!"; 
$msgConcatenada = 'Email gerado do seu Nó Sensor "MTAlert" '.'<br>';
/*$msgConcatenada .= '----------------------------------------------------------------------<br><br/>'; 
$msgConcatenada .= 'Foi detectado uma possível queda no MTAlert de '.$nome.'<br>'; 
$msgConcatenada .= 'Por Favor entre em contato com o '.$nome.'<br>'; 
$msgConcatenada .= 'Condutor do veiculo '.'<br';
$msgConcatenada .= 'Telefone de contato '.$cel.'<br>';
$msgConcatenada .= 'Muito Obrigado(a) !!!'.'<br>';
$msgConcatenada .= '------------------------------------------------------------------------<br><br>'; 
$msgConcatenada .= 'Email Automático, Por favor não Responder.'.'<br/>';

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
        
            //envia e mail personalizado para cada contato
            //Chama uma função externa
            $comando = "enviarEmail.sh " . "$email" . " " . "$assunto" . " " . "$msgConcatenada" ;
            $output = shell_exec($comando);
            echo "<pre>$output</pre>";            
        }
        
/*/
    //Chama uma função externa
    $comando = "./enviarEmail.sh " . "ederanton@gmail.com" . " " . "Olá!" . " " . "Corpo do E-mail" ;
    $output = shell_exec($comando);
    echo "<pre>$output</pre>";
    echo "aqui";

?>
