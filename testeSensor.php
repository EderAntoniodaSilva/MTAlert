<?php
include_once('db/conexao.php');
$enderecoIP = $_POST["enderecoIP"];
$latitude   = $_POST["latitude"];
$longitude  = $_POST["longitude"];
$altura     = $_POST["altura"];
$dataHoraEnvio   = $_POST["dataHoraEnvio"];


$result_ocorrencia = "INSERT INTO ocorrencia (enderecoIP, latitude, longitude, altura,dataHoraEnvio)
                                      VALUES('$enderecoIP', '$latitude', '$longitude', '$altura','$dataHoraEnvio')";
    $resultado_ocorrencia= mysqli_query($conn, $result_ocorrencia);
    //Efetua a gravação do NS no banco de dados
    if ($resultado_ocorrencia) {
            //Encerra a conexão com o banco de dados
            echo "Dados inseridos com sucesso!";
            // emailContato($idVeiculo);
            //enviaEmail($n_serial);
            
            }else {		
            echo "Houve um problema na inserção!";
    } 
?>