<?php
  include('testasessao.php');
?>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Agenda  de contatos">
  <meta name="author" content="Expedito Cordeiro">

  <title>Agenda</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="../principal.php">Agenda</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i title="Usuário" class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Configurações</a>
  
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sairmodal"><i class="fa fa-times"></i>  Sair</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-list-alt"></i>
          <span>Menus</span>
        </a>
      </li>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#sairmodal">
          <i class="fas fa-fw fa-times"></i>
          <span>Sair</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
      <?php
		  if(isset($_GET['mess'])=='ok'){
			 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>NOIX QUI TA</strong> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				  </div>';
      }
    
 
		?>		
        <!-- Central -->
        <div>
          <a style="float:left;" href="formbusca.php" class="btn btn-info"><i class="fa fa-angle-left"> </i>Volta</a>
   
        </div ><br>
          <h4>Cadastro de usuarios</h4>
            <form name="form1" method="POST" action="salvar.php" onsubmit="return validar()">
              <div class="form-group">
                <label>Nome</label>
                <input name="nome"  type="text" class="form-control"placeholder="Escreva um nome" required>
               </div> 
               <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" class="form-control"placeholder="Escreva um email" required>
               </div> 
               <div class="form-group">
                <label>Senha</label>
                <input name="senha" type="text" class="form-control"placeholder="Escreva uma senha" required>
               </div> 
               <div class="form-group">
                <Button name="button" type="submit" class="btn btn-success"  required> <i class="fa fa-save"></i> Salvar</button>
                <Button name="reset" type="reset" class="btn btn-danger"  required> <i class="fa fa-trash"></i> Limpar</button>
               </div> 

 
       <!-- DataTables Example -->
      
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Agenda 2019 - 2º Info</span>
          </div>
        </div>
      </footer>

    
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="sairmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agenda</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Deseja sair do sistema?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../sair.php">Confirmar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>
  <script>
    function validar(){
      if(confirm('deseja realmente salvar o registro?')){
        return true;
      }else{
        return false;
      }
    }
  </script>
</body>

</html>
