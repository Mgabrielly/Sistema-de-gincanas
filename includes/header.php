<?php
    ob_start(); //inicia o cach para sessão
    session_start(); //inicia a sessão da página(login)
    if(!isset($_SESSION['loginUser']) && (!isset($_SESSION['senhaUser']))){
        header("Location: index.php?acao=negado");
        exit; //oculta todo código abaixo quando existe erro
    }
include_once('sair.php');
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistema de Gincana</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/datatables.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
    include_once('config/conexao.php');
    $userEmail=$_SESSION['loginUser'];
    $senhaUser=$_SESSION['senhaUser'];
    $select = "SELECT * FROM tb_admin where email=:emailUser and senha=:senhaUser";
    try{
            $resultado= $conect->prepare($select);
            $resultado->bindParam(':emailUser',$userEmail,PDO::PARAM_STR);
            $resultado->bindParam(':senhaUser',$senhaUser,PDO::PARAM_STR);
            $resultado->execute();
            $contar=$resultado->rowCount();
            if($contar>0){
                while($show=$resultado->FETCH(PDO::FETCH_OBJ)){
                    $id=$show->id;
                    $nome=$show->nome;
                    $email=$show->email;
                    $senha=$show->senha;
                   
                }
            }
            else{
               header("Location: ?sair");
            }
        }
        catch(PDOException $e){
            echo "<b>ERRO DE  LOGIN DO PDO = </b>".$e->getMessage();
        }
    ?>
    
	