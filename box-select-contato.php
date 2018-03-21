
<div role="tabpanel"  
    <?php if($_SESSION['control_aba'] == 1){ 
        echo "class='tab-pane active'"; 
        }else{ 
            echo "class='tab-pane'"; 
        } ?>  id="dados_de_contato">
    <div style="padding-top:20px;">
    <form class="form-horizontal"  action="" method="POST">

        <div class="form-group">
            <label class="col-sm-3 control-label"> Contatos já existentes</label>
            <div class="col-sm-6">
                   
            <select name="id_contato" class="form-control">
                <?php
                //include_once ("conexao.php");

                $result_dados_dbcontatos = "SELECT * FROM usuario";
                    $resultado_dados_dbcontatos = mysqli_query($conn, $result_dados_dbcontatos);
                    //Percorre todos os resultados qua costa na consulta.
                    while($dbcontatos = mysqli_fetch_array ($resultado_dados_dbcontatos)){
                        $id_contato = $dbcontatos["id"];
                        $nome_contato = $dbcontatos["nome"];
                       
                        //popula o select para fixar valor usa-se selected após id_contato           
                        echo "<option value= '$id_contato'selected> $nome_contato</option>";
                    }
                    mysqli_close($conn);
                ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
            <div class="col-sm-offset-2 ">
                <button type="text" class="btn btn-success"> Cadastrar Novo Contato</button>
                <!-- fazer uma função se apertar botão novo
                 cadastro incluir tela de novo cadastro e sumir box select-->
            </div>
        </div>
    </form> 
    <a href = ""> Cadastrar Novo Contato </a>
    </div>
</div>



