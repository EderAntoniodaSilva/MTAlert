
  <nav class="navbar navbar-default navbar-fixed-top nav-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">MTAlert</a>
        
      </div>
      <div id="navbar" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="nav-item active"><a href="index.php">Home</a></li>
        <!--  <li><a href="formulario.php">Cadastrar</a></li>    Retirado link de cadastro-->
          
          <?php
              session_start();
              if (isset($_SESSION['id_usuario'])) {
                echo '<li><a href="listar-usuario.php"> Listar Contato </a></li>';
                echo '<li><a href="#">Dados Cadastrais</a></li>';
                echo '<li class="nav-item active"><a class="nav-link" href="destroi_sessao.php">Sair <span class="sr-only">(current)</span></a></li>';              
              }else{
                echo '<li ><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>';
              }
          ?>
        </ul>
         
      </div><!--/.nav-collapse -->
    </div>
  </nav>
