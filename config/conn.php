<?php

// Informações para conexão
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'db_pa7';
$dsn = "mysql:host=$host;port=3306;dbname=$banco;charset=utf8";


	$mysqli=new mysqli($host,$usuario,$senha,$banco);
	$mysqli1=new mysqli($host,$usuario,$senha,$banco);
	$escolhe=new mysqli($host,$usuario,$senha,$banco);

	//$mysqli2=new mysqli($host,$usuario,$senha,$banco);


try
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    // Se ocorrer algum erro na conexão
    echo 'ERROR: ' . $e->getMessage();
    die($e->getMessage());
}
?>


