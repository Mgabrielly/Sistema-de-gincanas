<?php
include_once('config/conexao.php');
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$delete = "DELETE FROM atividade WHERE id=:id";
	try{
		$result = $conect->prepare($delete);
		$result->bindParam(':id',$id,PDO::PARAM_INT);
		$result->execute();
		$contar=$result->rowCount();
		if ($contar>0) {
			//header função de redirecionamento
			header("Location: ../gincana-jmf/atividades.php");
		} else {
			header("Location: ../gincana-jmf/atividades.php");
		}
		
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
}