<?php
function enviaEmail($n_serial){
	
	/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/
	include('../db/dados-para-envio-email.php');
	
	$nome = "teste nome Banco";
	
	$enviaFormularioParaNome = "$nome"; //'Nome do destinatário que receberá formulário';
	//$enviaFormularioParaEmail = "$emailArray"; //'email-do-destinatario@dominio';
	
 
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

	//echo"$enviaFormularioParaEmail";
	//$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));
	foreach($ArrayContato as $emailContato )
		{
		$mail->AddAddress($emailContato,utf8_decode($enviaFormularioParaNome));
		
		}
		
	if(!$mail->Send()){
		$mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);
		echo('Erro ao enviar formulário: '. print($mail->ErrorInfo));
	}else{
		$mensagemRetorno = 'Formulário enviado com sucesso!';
		echo('Formulário enviado com sucesso!');
	} 

}

//enviaEmail();

?>




















