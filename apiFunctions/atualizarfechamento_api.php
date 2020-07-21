<?php
 
 date_default_timezone_set('America/Belem');
// Incluindo arquivo de conexão
require_once('config/conexao.php'); 
//$data_hoje = date('Y-m-d');

$conexao = conexao::getInstance();
   
 
 
    //if($action == 'GET_ALL'):        
        $db_data = array(); 
	//INSERT INTO TabRerserva (Nome,Data,Hora,Endereco,Telefone,Destino,Email,DtInclusao,HrInclusao,Acessado) VALUES('$nome','$data','$hora','$local','$telefone','$email','$datahoje','$horahoje','$acesso')";
	

	$sql = "SELECT Email,Nome,Data,Hora,Endereco,Telefone,Destino, Acessado FROM TabRerserva where Data>=2020/01/01 order by Data DESC";
        $stm = $conexao->prepare($sql); 
        $stm->execute(); 
        $clientes = $stm->fetchAll(PDO::FETCH_OBJ);             	
	
        if(!empty($clientes)): 
            
            foreach($clientes as $c): 
              array_push($db_data, $c); 
            endforeach;
		//r_dump($db_data);
            echo json_encode($db_data);
        else:        
            echo "Erro GetAll [PHP]";
        endif;
        
  
?>
<?php
 