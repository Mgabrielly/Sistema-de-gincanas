<?php
  ob_start(); //inicia o cach para sessão
  session_start(); //inicia a sessão da página(login)
if (isset($_SESSION['loginUser']) && (isset($_SESSION['senhaUser']) && (isset($_SESSION['status'])))) {   
  header("Location: home.php");
    exit; //oculta todo código abaixo quando existe erro
  }

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gincana JMF - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-color: #20c9a6;
  background-image: linear-gradient(180deg, #36b9cc 10%, #20c9a6 100%);
  background-size: cover;">

<!-- LOGIN -->
 <div class="container">
  <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5 table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <div class="card-body p-0" >
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block " style=" background-image:     url(img/logo.png);"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bem-vindos ao Sistema de Gincanas-JMF!</h1>
                  </div>
                      <div class="panel-body">
                          <form role="form" action="" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Login:</label>
                  <input type="email" class="form-control form-control-user" id="email" name="email"  aria-describedby="emailHelp" placeholder="Digite seu Email...">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="senha" name="senha" placeholder="Digíte sua senha...">
                </div>
                <input type="hidden" name="status" value="1" status=$acao == ?bemvindo>
                <button type="submit" class="btn btn-outline-info  btn-block" name="login">Acessar</button>
              </form>
              <?php
              include_once('config/conexao.php');
              if(isset($_GET['acao'])){
                if(!isset($_POST['login'])){
                  $acao= $_GET['acao'];
                  if($acao=='negado'){
                  echo'<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>Faça login com sua atual senha e email para acessar :(</strong></div>';
                  }elseif($acao=='sair') {
                    echo'<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>Volte sempre!!</strong> <br>Esperamos o seu login</div>';
                  }
                }
              }
                if(isset($_POST['login'])){
                  $login =filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
                  $senha =filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
                  
                  $select="SELECT * FROM tb_admin where email=:emailLogin and senha=:senhaLogin";

                  try{
                    $resultLogin = $conect->prepare($select);
                    $resultLogin ->bindParam(':emailLogin',$login,PDO::PARAM_STR);
                    $resultLogin ->bindParam(':senhaLogin',$senha,PDO::PARAM_STR);
                    $resultLogin ->execute();

                    $verificar=$resultLogin->rowCount();
                    if($verificar>0){
                      $login = $_POST['email'];
                      $senha = $_POST['senha'];
                      $status = $_POST['status'];

                      $_SESSION['loginUser']=$login;
                      $_SESSION['senhaUser']=$senha;
                      

                      echo'<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"></button>
                      <strong>Logado com sucesso</strong>
                      Redirecionando para o Sistema :)</div>';
                      header("Refresh: 3, home.php?acao=bemvindo");
                    }else{
                      echo'<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>Erro :(</strong></div>';
                    }
                  }
                  catch(PDOException $e){
                  echo "<b>ERRO DE  LOGIN DO PDO = </b>".$e->getMessage();
              }
                }
              ?>
                      </div>
                  </div>
      </div>
  </div>
  </div>
    </div>

      </div>

    </div>

  </div>
<!-- LOGIN -->

<!-- ARQUIVOS JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
  </script>
  <!-- https://datatables.net/ -->
  <!-- https://datatables.net/manual/installation -->
</body>
</html>