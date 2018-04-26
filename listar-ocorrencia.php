
<div class="container theme-showcase" >
    <?php
        session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        
    if(!empty($_SESSION['id_usuario'])){
        $id = $_SESSION['id_usuario'];
        $n = "N";
        $result_contatos = "SELECT * FROM HistoricoOcorrencia WHERE
                                            idContato = $id AND 
                                            visto = '$n' ";
        $resultado_contato = mysqli_query($conn, $result_contatos);
        
        while($linha_contato = mysqli_fetch_assoc($resultado_contato)){
            //coleta dados
            $idHt = $linha_contato['idHt'];
            $data = $linha_contato['data'];
            $hora = $linha_contato['hora'];
            $latitude = $linha_contato['latitude'];
            $longitude = $linha_contato['longitude'];
        
            echo"<div class='alert alert-danger alert-dismissible'>
                    <a href='proc-altera-ocorrencia.php? id= ".$idHt. "' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Perigo!</strong> Possivel Queda no dia: $data ; na hora: $hora 
                       ; Geolocalização em Latitude: $latitude  , Longitude $longitude 
                </div>";               
        }

    }else{
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Área restrita</div>';
        header("Location: login.php");	
    }

    ?> 
</div>
