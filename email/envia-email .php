<?php
	//teste 1

	//incluir conexão
include_once('../db/conexao.php');
//Buscar dados o Banco
$result_usuario = "SELECT *FROM usuario WHERE id_contato = 9";
$resultado_usuario = mysqli_query($conn, $result_usuario);
        
        while($linha_contato = mysqli_fetch_assoc($resultado_usuario)){
            //coleta dados
           // $id = $linha_contato['id'];
            $nome = $linha_contato['nome'];
            $cel = $linha_contato['celular'];
            $email = $linha_contato['email'];
			//$end = $linha_contato['enndereco'];
			echo"$nome";
			echo"$email";
 
	/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/
 
	$enviaFormularioParaNome = "$nome"; //'Nome do destinatário que receberá formulário';
	$enviaFormularioParaEmail = "$email"; //'email-do-destinatario@dominio';
 
	$caixaPostalServidorNome = 'mtalertsalva@gmail.com'; //'WebSite | Formulário';
	$caixaPostalServidorEmail = 'mtalertsalva@gmail.com'; //'usuario@seu-dominio';
	$caixaPostalServidorSenha = 'MTAlert2018'; //'senha';
 
	/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/ 
 
 
	/* abaixo as veriaveis principais, que devem conter em seu formulario*/
 
	$mensagemConcatenada = 'Email gerado do seu MTAlert '.'<br>'; 
	$mensagemConcatenada .= '----------------------------------------------------------------------<br><br/>'; 
	$mensagemConcatenada .= 'Foi detectado uma possível queda '.'<br>'; 
	$mensagemConcatenada .= 'Favor entrar em contato com o '.$nome.'<br>'; 
	$mensagemConcatenada .= 'Pelo Telefone de contato '.$cel.'<br>';
	$mensagemConcatenada .= 'Muito Obrigado(a) !!!'.'<br>';
	$mensagemConcatenada .= '------------------------------------------------------------------------<br><br>'; 
	$mensagemConcatenada .= 'Email Automático, Por favor não Responder.'.'<br/>';
	 
	/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/ 
 
	require_once('../PHPMailer-master/PHPMailerAutoload.php');

	$mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->SMTPAuth  = true;
	$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
	$mail->Charset   = 'utf8_decode()';
	$mail->Host  = 'smtp.'.substr(strstr($caixaPostalServidorEmail, '@'), 1);
	$mail->Port  = '587';
	$mail->Username  = $caixaPostalServidorEmail;
	$mail->Password  = $caixaPostalServidorSenha;
	$mail->From  = $caixaPostalServidorEmail;
	$mail->FromName  = utf8_decode($caixaPostalServidorNome);
	$mail->IsHTML(true);
	$mail->Subject  = utf8_decode("Possível Queda");
	$mail->Body  = utf8_decode($mensagemConcatenada);


	$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));
		
	if(!$mail->Send()){
		$mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);
	}else{
		$mensagemRetorno = 'Formulário enviado com sucesso!';
	} 
} //adicionado esta chave
?>