<?php
        //Atribuir os valores enviados pelo Nó Sensor nas variaveis local
        //Valores do GPS
        $enderecoIP = $_POST["enderecoIP"];
        $latitude   = $_POST["latitude"];
	$longitude  = $_POST["longitude"];
	$altura     = $_POST["altura"];
        $dataHoraEnvio   = $_POST["dataHoraEnvio"];
        $n_serial = $_POST["nSerial"];
        // = '123';

        //Pega horário e data atual
        $dataHoraRecepcao = date('Y-m-d H:i:s');
        //Flag Visto P/ verificação de msg de alerta
        $flagLer = "N";
       
        $idVeiculo = 9; //criar um sql para deixar este id dimanico     
 
//envio dos dados ao Banco
        include_once('../db/conexao.php');        
        //include_once('../db/dados-para-envio-email.php');
       // $idVeiculo = 'idVeiculo';
        echo"$idVeiculo";
        require('../email/envia-email.php');
        //function inserirDadosNoSensorDB(){                
               $result_ocorrencia = "INSERT INTO ocorrencia (enderecoIP, latitude, longitude, altura, dataHoraEnvio, idVeiculo, flagLer)
                                        VALUES('$enderecoIP', '$latitude', '$longitude', '$altura', '$dataHoraEnvio', '$idVeiculo', '$flagLer')";
                $resultado_ocorrencia= mysqli_query($conn, $result_ocorrencia);
                //fecha conexao
                //$conn->close();
                //Efetua a gravação do NS no banco de dados
                if ($resultado_ocorrencia) {
                        //Encerra a conexão com o banco de dados
                        echo "Dados inseridos com sucesso!";
                       
                        }else {		
                        echo "Houve um problema na inserção!";
                } 
        //1º ENVIAR ALERTA PARA O E-MAIL CADASTRADO! (ESTUDAR POSSIBILIDADE DE ENVIAR UM WHATSAPP)
        enviaEmail($n_serial);
        echo("Ver e-mail");
        //2º REGISTRAR NO BANCO DE DADOS QUE O ALERTA FOI ENVIADO COM SUCESSO (DATA E HORÁRIO)
	//}
       
?> 



