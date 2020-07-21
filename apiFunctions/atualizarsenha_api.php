<?php
 
 date_default_timezone_set('America/Belem');
// Incluindo arquivo de conexão
require_once('config/conexao.php'); 
//$data_hoje = date('Y-m-d');

$conexao = conexao::getInstance();
   
 
 
    //if($action == 'GET_ALL'):        
        $db_data = array(); 
        
        $sql = "SELECT SenhaPa7 FROM tab_SenhaPa7 ORDER BY IdSenhaPa7 desc limit 1";        
        
        $stm = $conexao->prepare($sql); 
       

        $stm->execute(); 
        
        $clientes = $stm->fetchAll(PDO::FETCH_OBJ);         
       
        if(!empty($clientes)): 
            //array_push($db_data, '{');
            foreach($clientes as $c):                
                //$Senha = $c->SenhaPa7;
                //$Data = $c->DtReceb;
                //$minhadata = explode("-", $c->DtReceb);
                //$Data =  $minhadata[2].'-'.$minhadata[1].'-'.$minhadata[0];
                //$Hora = $c->HrReceb;
                //array_push($db_data, 'Idsenha:'.$Senha.',Data:'.$Data.',Hora:'.$Hora); 
              //str_pad($abreplantao1,3,'0',STR_PAD_LEFT)
              
              //$dados = str_pad($c->SenhaPa7,3,'0',STR_PAD_LEFT);
              array_push($db_data, $c); 
            endforeach;
            //array_push($db_data, '}');
            echo json_encode($db_data);
            //echo $Senha.'--'.$Data.'--'.$Hora.'<br>';
        else:        
            echo "Erro GetAll [PHP]";
        endif;
        
  
?>
