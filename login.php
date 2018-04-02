<?php session_start();
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
?>
<!-- incluindo base comum de html  -->
<?php include_once "cabecalho.php"; ?>

<body>
    <!-- incluindo menu padrão -->
    <?php include('menu-nav-principal.php'); ?>

	<div class="container-fluid">
        <div class="row ">
            <div class="panel-heading ">
                <div class="panel-title text-center">
                    <h1 class="title">MTAlert Login</h1>
                    <hr />
                </div>
	        </div> 
			<div class="main-login main-center">
				<form class="form-horizontal" method="POST" action="validacao-login.php" >
					
                    <div class="form-group">
						<label for="email" class="cols-sm-2 control-label">e-mail</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"id="sizing-addon1">@</span>
								<input type="text" class="form-control" name="usuario"   placeholder="Enter com seu e-mail"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="senha" class="cols-sm-2 control-label">Senha</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"id="sizing-addon1">***</i></span>
								<input type="password" class="form-control" name="senha" id="senha"  placeholder="Enter com sua senha"/>
							</div>
						</div>
					</div>


					<div class="form-group ">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="btnLogin" value="Acessar">Entrar</button>
					</div>
					<div class="login-register">
				           <a href="cadastro-usuario.php">Cadastrar - se</a>
				    </div>
                </form>
			</div>
		</div>
	</div>
	<!-- incluindo Roda pé -->
	<?php require_once "rodape.php"; ?>

