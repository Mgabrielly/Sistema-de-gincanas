  <?php
  include_once('includes/header.php');
  if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == 'bemvindo') {
    //INCLUDE DA PAGINA PRINCIPAL
    include_once('principal.php');
    }elseif ($acao == 'update') {//Edição incompleta
    //INCLUDE DA PAGINA DE EDIÇÃO
    include_once('editarativ.php');
    }elseif ($acao == 'perfil') {//Edição incompleta
    //INCLUDE DA PAGINA DE EDIÇÃO
    include_once('perfil.php');
    }
  }else{
    include_once('principal.php');
  }

