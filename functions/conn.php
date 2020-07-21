<?php

// InformaÃ§Ãµes para conexÃ£o LOCAL

$host = 'localhost';
$usuario = 'dbuser';
$senha = 'dbuser';
$banco = 'db_pa7'; 

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
    // Se ocorrer algum erro na conexÃ£o
    echo 'ERROR: ' . $e->getMessage();
    die($e->getMessage());
}
?>