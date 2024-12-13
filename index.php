<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema de Agenda de Contatos">
  <meta name="author" content="Expedito Cordeiro">

  <title>Agenda</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"> <img src="logo.png"><br><i class="fa fa-lock"></i> <b>Acesso</b></div>
      <div class="card-body">
	    
        <form name="form1" id="form1" method="POST" action="login.php">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="email" name="email" class="form-control" required="required" autofocus="autofocus">
              <label>Endereço de e-mail</label>
            </div>		
          </div>	  
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="senha" name="senha" class="form-control" required="required">
              <label for="inputPassword">Senha</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Lembrar senha
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Entrar <i class="fa fa-check"></i></button>
        </form>
		<?php
		  if(isset($_GET['mess'])){
			if($_GET['mess'] == 'erro'){
			  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 <strong>Atenção!</strong> Erro de login!
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					 </button>
				    </div>';
					//melhor aluno=expedito
					//pior aluno
					//melhor  prof=spe
			}
			if($_GET['mess'] == 'session'){
			  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					 <strong>Atenção!</strong> Usuário sem sessão!
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					 </button>
				    </div>';
			}
			if($_GET['mess'] == 'logout'){
			  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					 <strong>Atenção!</strong> Logout realizado com sucesso!
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					 </button>
				    </div>';
			}
		  }
		?>
                        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
