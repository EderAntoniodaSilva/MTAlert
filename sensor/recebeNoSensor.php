<?php
        //Pega horário e data atual
        $dataHoraRecepcao = date('Y-m-d H:i:s');
        //Flag Visto P/ verificação de msg de alerta
        $flagLer = "N";
        $n_serial = '123';

        //Atribuir os valores enviados pelo Nó Sensor nas variaveis local
        //Valores do GPS
        
        $latitude   = $_POST["latitude"];
	$longitude  = $_POST["longitude"];
	$altura     = $_POST["altitudeGPS"];
        $dataHoraEnvio   = $_POST["dataHoraEnvio"];
        $idVeiculo = 9;
        //$idVeiculo = $_POST["idVeiculo"];
	//Situação de queda
	//$flagQueda  = $_POST["flagQueda"];
	//Endereço IP do Sensor
	$enderecoIP = $_POST["enderecoIP"];
	//ID do Condutor
        //$idCondutor = $_POST["idCondutor"];

        echo($enderecoIP);
        echo($latitude);
        echo($longitude);
        echo($altura);
        echo($dataHoraEnvio);
        echo("teste");
        console.log($enderecoIP);
        console.log($latitude);
        
        include_once('../db/conexao.php');
        
        //include_once('../db/dados-para-envio-email.php');
        require('../email/envia-email.php');
        //function inserirDadosNoSensorDB(){                
                $result_ocorrencia = "INSERT INTO ocorrencia (dataHoraRecepcao, latitude, longitude, altura, dataHoraEnvio, idVeiculo, flagLer)
                                        VALUES('$dataHoraRecepcao', '$latitude', '$longitude', '$altura', '$dataHoraEnvio', '$idVeiculo', '$flagLer')";
                $resultado_ocorrencia= mysqli_query($conn, $result_ocorrencia);
                //fecha conexao
                //$conn->close();
                //Efetua a gravação do NS no banco de dados
                if ($resultado_ocorrencia) {
                        //Encerra a conexão com o banco de dados
                        echo "Dados inseridos com sucesso!";
                       // emailContato($idVeiculo);
                        enviaEmail($n_serial);
                        
                        }else {		
                        echo "Houve um problema na inserção!";
                }
        //}

        
	//Verifica se houve queda
	//if ($flagLer == "N") {
        
        //1º ENVIAR ALERTA PARA O E-MAIL CADASTRADO! (ESTUDAR POSSIBILIDADE DE ENVIAR UM WHATSAPP)
        //enviaEmail();
        echo("Ver e-mail");
        //2º REGISTRAR NO BANCO DE DADOS QUE O ALERTA FOI ENVIADO COM SUCESSO (DATA E HORÁRIO)
	//}
       
?> 



