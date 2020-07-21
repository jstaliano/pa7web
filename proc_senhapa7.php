<?php
date_default_timezone_set('America/Belem');
require_once('config/conn.php');
$sql=$mysqli->prepare("SELECT IdFechamento, Plantao, Senha FROM fechaplantao order by IdFechamento DESC LIMIT 1");
$sql->execute();
$sql->bind_result($idsenha,$plantao,$senha);
$sql->fetch();
if ($plantao==1):
    $plantaoatual=2;
else:
    $plantaoatual=1;
endif;    
    $stmt = $pdo->prepare('SELECT IdSenhaPa7,SenhaPa7,DtReceb,HrReceb,serverstatus,DataHoraId,IdSenha FROM tab_SenhaPa7 WHERE Situacao=0 ORDER BY IdSenha DESC LIMIT 1');
    $stmt->execute();
    $strg = $stmt->fetchObject(); 
    if ($stmt->execute())
    {
    $strg = $stmt->fetchObject();     
    $minhadata=0;
    $minhadata = explode("-", $strg->DtReceb);
    $data_receb =$minhadata[2].'/'.$minhadata[1].'/'.$minhadata[0];
    $proxdata = $strg->DataHoraId++;

    $dia = substr($proxdata,6,2);
    $mes = substr($proxdata,4,2);
    $ano = substr($proxdata,0,4);
    $hora = substr($proxdata,8,11);
    $senha_atual = $strg->SenhaPa7;
    if ($senha_atual==0){
        $senha_atual = "C-3";
    }
    
    if ($strg->serverstatus == 1):
        $senha_atual = "Serviço em Manutenção";    
        echo " 
            <h4 class='bg-primary text-white text-center btn-white'><b>PA7Web - Senha do Plantão ".$plantaoatual." </b></h4>
            <p class='text-center text-secondary' style='font-size:120px;font-weight: 900;font-family:Verdana;'>".str_pad($senha_atual,3,"0",STR_PAD_LEFT)."</p><br>                        
            <p class='text-center text-dark' style='font-size:15px;font-weight:100;font-family:Roboto;'>Atualizado em:".$dia."/".$mes."/".$ano." às ".$hora."</p>         
        ";
    else:
        echo "          
        <h4 class='bg-primary text-white text-center btn-white'><b>PA7Web - Senha do Plantão ".$plantaoatual." </b></h4>
            <p class='text-center text-secondary' style='font-size:140px;font-weight: 900;font-family:Verdana;'>".str_pad($senha_atual,3,"0",STR_PAD_LEFT)."</p><br>                        
            <p class='text-center text-dark' style='font-size:15px;font-weight:100;font-family:Roboto;'>Atualizado em:".$dia."/".$mes."/".$ano." às ".$hora."</p>
        ";
    endif;
}
else
{
    echo 'Falha de Comunicação!';        
}
//str_pad($input, 10, "-=", STR_PAD_LEFT)