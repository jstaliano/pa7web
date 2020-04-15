<?php

// Incluindo arquivo de conexão
require_once('config/conn.php');

    
    $stmt = $pdo->prepare('SELECT IdSenhaPa7,SenhaPa7,DtReceb,HrReceb FROM tab_SenhaPa7 ORDER BY IdSenhaPa7 DESC LIMIT 1');
    $stmt->execute();
    $strg = $stmt->fetchObject(); 
    


if ($stmt->execute())
{

    $strg = $stmt->fetchObject();     
    $minhadata=0;
    $minhadata = explode("-", $strg->DtReceb);
    $data_receb =$minhadata[2].'/'.$minhadata[1].'/'.$minhadata[0];

    $senha_atual = $strg->SenhaPa7;
    if ($senha_atual==0){
        $senha_atual = "C-3";
    }

    //if (!empty($strg->SenhaPa7))
    //{
    //echo "<h4 class ='text-center text-secondary' style='font-size:80px;font-weight: 700;font-family:helvetica;'>".$strg->SenhaPa7."</h4><br>";
    //echo "<spam class='text-center text-dark' style='font-size:12px;font-weight: 100;font-family:Roboto;'>Atualizado em: ".$data_receb." às: ".$strg->HrReceb."</spam>";
         echo " 
        <div class='row'>
            <div class='col-sm-12'>                 
                <h4 class ='text-center text-secondary' style='font-size:75px;font-weight: 900;font-family:Verdana;'>".$senha_atual."</h4><br>
            </div>
        </div>                   
        <div class='row'>
            <div class='col-sm-12'>
                <h6 class='text-center text-dark' style='font-size:15px;font-weight:100;font-family:Roboto;'>Atualizado em:".$data_receb." às:".$strg->HrReceb."</h6>
            </div>
        </div>";

/////////////////////////
    //        echo '<spam style="font-size:500px;font-weight: 900;font-family:arial">'.$strg->SenhaPa7.'</spam><br><h4 class="p-0 m-0 text-center text-dark" style="font-size:60px;font-weight:200;font-family:helvetica;">'.$strg->Atendimento.' </h4>';
    }
    else
    {
        echo 'Falha de Comunicação!';
        //echo '<h4 class="text-center text-secondary" style="font-size:40px;font-weight: 700;font-family:helvetica;"> Aguarde...';
    }
//} 
?>

