<?php
	date_default_timezone_set('America/Belem');
  	require 'init.php';
  	$pdo = db_connect(); 
	//$painelsenha = (isset($_GET['senhapa'])) ? $_GET['senhapa'] : '';
	$prefixo    	 = (isset($_POST['prefixo'])) ? $_POST['prefixo'] : '';
	$plantao    	 = (isset($_POST['plantao'])) ? $_POST['plantao'] : '';
	$data 		   	 = (isset($_POST['data'])) ? $_POST['data'] : '';
	$hora	    	 = (isset($_POST['hora'])) ? $_POST['hora'] : '';
	$obs	    	 = (isset($_POST['obs'])) ? $_POST['obs'] : '';
	$data=date('d/m/Y');
    $hora=date('H:i:s');
	$minhadata=0;
	$minhadata = explode("/", $data);
	$data_receb =$minhadata[2].'/'.$minhadata[1].'/'.$minhadata[0];
	echo $prefixo.'-'.$data.'-'.$hora.'-'.$obs;

	$stmt = $pdo->prepare('INSERT INTO fechaplantao (Senha, Plantao,Data, Hora, obs)
		 				   VALUES(:senha, :plantao, :data, :hora, :obs)');
	$stmt->bindValue(':senha', $prefixo);
	$stmt->bindValue(':plantao', $plantao);
	$stmt->bindValue(':data', $data_receb);
	$stmt->bindValue(':hora', $hora);
	$stmt->bindValue(':obs', $obs);
	$retorno = $stmt->execute();
	echo "<div class='alert alert-success' role='alert'><h3>Fechamento Inserido com Sucesso, aguarde você está sendo redirecionado ... </h3> </div> ";
	echo "<meta http-equiv=refresh content='3;URL=index.php'>"; 	
 ?>
