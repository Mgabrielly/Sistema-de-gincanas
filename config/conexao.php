<?php
//conexão com o banco de dados
	try{
	
	DEFINE('HOST','localhost');
    DEFINE('DB','tb_admin');
    DEFINE('USER','root');
    DEFINE('PASS','');

    //Variavel de conexão com db
    $conect = new PDO('mysql:host='.HOST.
    ';dbname='.DB,USER,PASS);
    $conect -> setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
    //exibe erros de PDO na tela
    echo "<b>ERRO DE PDO = </b>".$e->getMessage();
}
?>