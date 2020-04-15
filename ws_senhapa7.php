<?php
	date_default_timezone_set('America/Belem');
  	require_once('config/conn.php');
	//$painelsenha = (isset($_GET['senhapa'])) ? $_GET['senhapa'] : '';
	$painelsenha = $_GET['senhapa'];
	$mapasenha   = $_GET['fechamento'];
    $data=date('d/m/Y');
    $hora=date('H:i:s');
    //$painelsenha=200;
    	   if ($painelsenha>=1 && $painelsenha<=786){
	    	//$painelsenha='C-3';
		    	$valida=1;
		    } elseif ($painelsenha>=787){
		      	$valida=0;
		    } elseif ($painelsenha==0) {
		    	$valida=1;
		    }

		    $minhadata=0;
		    $minhadata = explode("/", $data);
		    $data_receb =$minhadata[2].'/'.$minhadata[1].'/'.$minhadata[0];


		//***************************************
		    if ($valida==1){
					if ($mapasenha==0){
							$stmt = $pdo->prepare('INSERT INTO tab_SenhaPa7 (SenhaPa7, DtReceb, HrReceb)
								 				   VALUES(:painelsenha, :dtreceb, :hrreceb)');
							$stmt->bindValue(':painelsenha', $painelsenha);
							$stmt->bindValue(':dtreceb', $data_receb);
							$stmt->bindValue(':hrreceb', $hora);
							$retorno = $stmt->execute();
					}
					elseif ($mapasenha<>0) {
							$stmt = $pdo->prepare('INSERT INTO tab_SenhaPa7 (SenhaPa7, DtReceb, HrReceb,FechaPlantao)
													 VALUES(:painelsenha, :dtreceb, :hrreceb, :mapasenha)');
							$stmt->bindValue(':painelsenha', $painelsenha);
							$stmt->bindValue(':dtreceb', $data_receb);
							$stmt->bindValue(':hrreceb', $hora);
							$stmt->bindValue(':mapasenha', $mapasenha);
							$retorno = $stmt->execute();
					}
			}elseif ($valida==0) {
				 return -1;
			}

				//return "Senha Inválida";





 ?>
