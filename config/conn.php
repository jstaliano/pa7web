<?php

// Informações para conexão
$host = 'mysql.hostinger.com.br';
$usuario = 'u309778760_gcoop';
$senha = 'G.coop*2018';
$banco = 'u309778760_gcoop';
$dsn = "mysql:host=$host;port=3306;dbname=$banco;charset=utf8";

$mysqli=new mysqli($host,$usuario,$senha,$banco);

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


