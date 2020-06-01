<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gincana JMF - Perfil</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style=" background-color: #20c9a6;
  background-image: linear-gradient(180deg, #20c9a6 10%, #20c9a6 100%);
  background-size: cover;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Gincanas <sup>JMF</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Página Principal</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Cadastro</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="atividades.php"><i class="fas fa-gamepad"></i> Atividades</a>
            <a class="collapse-item" href="turmas.php"><i class="fas fa-users"></i>     Turmas</a>
          </div>
        </div>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="calendario.php">
         <i class="far fa-calendar"></i>
          <span>Calendário</span></a>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="galeria.html">
         <i class="far fa-images"></i>
          <span>Galeria</span></a>
      </li> -->
<li class="nav-item">
        <a class="nav-link" href="ranking.php">
         <i class="fas fa-flag-checkered"></i>
          <span>Ranking</span></a>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="lista de atividades.php">
        <i class="fas fa-gamepad"></i>
          <span>Lista de Atividades</span></a>
      </li>-->
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
           <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
                <!-- Counter - Alerts -->
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <!-- Nav Item - perfilTurma -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="perfilTurma.php" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               
                <!-- Counter - perfilTurma -->
              </a>
              <!-- Dropdown - perfilTurma -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown" >
                
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
           <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Grêmio Estudantil</span>
                <img class="img-profile rounded-circle" src="img/logo.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="perfil.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="col-lg-6">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Avatar:</label>
              <input type="file" name="avatar" class="form-control">
            </div>
            <div class="form-group">
              <label>Nome:</label>
              <input value="<?php echo $nome; ?>" type="text" name="nome" class="form-control">
            </div>
            <div class="form-group">
              <label>E-mail:</label>
              <input value="<?php echo $email; ?>" type="text" name="email"  class="form-control">
            </div>
            <div class="form-group">
              <label>Senha:</label>
              <input value="<?php echo base64_decode($senha); ?>" type="password" name="senha"  class="form-control">
            </div>
            
            <div class="form-group">
              <button type="submit" name="botao" class="btn btn-warning">Editar Perfil</button>
            </div>
          </form>
          <?php
          include_once('config/conexao.php');

          if(!isset($_GET['upperfil'])){
            header("Location: home.php");
            exit;
          }
          $id = $_GET['upperfil'];

          if (isset($_POST['botao'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = base64_encode($_POST['senha']);

            if(!empty($_FILES['avatar']['name'])){
              $formatosPermitidos = array("png","jpeg","jpg","gif");
              $extensao = pathinfo($_FILES['avatar']['name'],PATHINFO_EXTENSION);
              if(in_array($extensao, $formatosPermitidos)):
                $pasta = "img/";
                $temporario = $_FILES['avatar']['tmp_name'];
                $novoNome = uniqid().".{$extensao}";

                if (move_uploaded_file($temporario, $pasta.$novoNome)) {
                  //Upload da Imagem
                }else{
                  $mensagem = "Erro, não foi possivel fazer o upload do arquivo!";
                }
              else:
                echo  "Formato inválido";
              endif;
            }else{
              $novoNome = $avatar;
            }
            $update = "UPDATE tb_admin SET nome=:nome,email=:email,senha=:senha,foto_admin=:foto_admin WHERE id_admin=:id";

                  try{
                    $result = $conect->prepare($update);
                      $result->bindParam(':id',$id,PDO::PARAM_STR);
                      $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                      $result->bindParam(':email',$email,PDO::PARAM_STR);
                      $result->bindParam(':senha',$senha,PDO::PARAM_STR);
                      $result->bindParam(':foto_admin',$novoNome,PDO::PARAM_STR);
                      $result->execute();

                      $contar = $result->rowCount();
                      if($contar>0){
                        echo '<div class="alert alert-success" role="alert">
                    Dados atualizados com sucesso!
                  </div>';
                        header("Refresh: 4, home.php");
                      }else{
                        echo '<div class="alert alert-success" role="alert">
                    Dados não atualizados!
                  </div>';
                      }
                  }catch(PDOException $e){
                      echo "<b>ERRO DE PDO= </b>".$e->getMessage();
                  }

            
            //var_dump($_FILES);
          }
        ?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Gincanas-JMF 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.php">Sair</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
