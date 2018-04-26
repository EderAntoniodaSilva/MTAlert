<?php
session_start();
include_once("db/conexao.php");

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
$id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);

$result_alt_ocorrencia = "UPDATE HistoricoOcorrencia SET visto = 'SIM' WHERE idHt= $id ";
$resultado_alt_ocorrencia = mysqli_query($conn,$result_alt_ocorrencia);
$conn->close(); 
header("Location: listar-usuario.php");

?>
