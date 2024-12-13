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
		  if(isset($_GET['mess'])){
			 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Login Realizado com Sucesso!</strong> Seja bem-vindo!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
          </div>';
        
      }
      if(isset($_GET['del'])){
        $eu=$_GET['del'];
        echo 'dsfsdfsdf'.$_GET['del'];

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Apagado com sucesso!!</strong> 
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
           </div>';
      } 
      if(isset($_GET['der'])){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>MATARAZZO!!</strong> 
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
           </div>';
      } 
		?>	
        <!-- Central -->
        <div>
                <a style="float:left;" href="../principal.php" class="btn btn-info"><i class="fa fa-angle-left"> </i>Volta</a>
                <a style="float:right;" href="formcad.php" class="btn btn-success"><i class="fa fa-plus"></i>Novo</a>
              </div><br>
              <h2>Busca de usuario</h2>
              <form name="form1"method="POST" action="formbusca.php">
                <div class="input-group text-left">
                  <input name="texto" type="text"class="form-control">
                  <!----><button class="btn btn-info" type="submit"> <i class="fa fa-search"></i></button>
                </div>         
       </div>
     
       <!-- DataTables Example -->
      <div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Opções</th>
                
                  </tr>
                </thead>
              
                <tbody>
                <?php
                      if(isset($_POST['texto'])) {
                        //Sai para pegar o Banco
                        include('../banco.php');
                          $texto = $_POST['texto'];
                          
                          $sql="select * from tbusu where nome like '%$texto%'";

                          $consulta = $conexao->query($sql);

                          if($consulta == true){
                            if($consulta -> num_rows > 0){
                               
                              
                               while($linha = $consulta->fetch_array(MYSQLI_ASSOC)){
                                 echo '<tr>
                                          <td>'.$linha['cod_usu'].'</td>
                                          <td>'.$linha['nome'].'</td>
                                          <td>'.$linha['email'].'</td> 
                                          <td>
                                            <a title="alterar"href="formcadalter.php?cod='.$linha['cod_usu'].'" class="btn btn-info"><i class="fa fa-edit"></i>
                                            <a title="delete" href="" class="btn btn-danger"><i class="fa fa-trash"></i>
                                          </td>
                                        </tr>';
                                } 
                            }

                          }
                      }else{
                        include('../banco.php');
                       
                        
                        $sql="select * from tbusu";

                        $consulta = $conexao->query($sql);

                        if($consulta == true){
                          if($consulta -> num_rows > 0){
                             
                            
                             while($linha = $consulta->fetch_array(MYSQLI_ASSOC)){
                               echo '<tr>
                                        <td>'.$linha['cod_usu'].'</td>
                                        <td>'.$linha['nome'].'</td>
                                        <td>'.$linha['email'].'</td> 
                                        <td>
                                          <a title="alterar"href="formcadalter.php?cod='.$linha['cod_usu'].'" class="btn btn-info"><i class="fa fa-edit"></i>
                                          <a title="delete" onclick="validardelete('.$linha['cod_usu'].')" class="btn btn-danger"><i class="fa fa-trash"></i>
                                        </td>
                                      </tr>';
                              } 
                          }

                        }

                      }
                  ?>
       
                
                </tbody>

              </table>
              </form>  
            </div>
          </div>


   
      </div>    
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
    function validardelete(cod){
      if(confirm('deseja realmente excluir o registro?')){
        location.href="delete.php?cod="+cod;
      }
    }
  </script>
</body>

</html>
