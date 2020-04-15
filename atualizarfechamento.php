<?php
 date_default_timezone_set('America/Belem');
// Incluindo arquivo de conexão
require_once('config/conn.php');
$data_hoje = date('Y-m-d');

$sql=$mysqli->prepare("select IdSenhaPa7,SenhaPa7,DtReceb,HrReceb,FechaPlantao from tab_SenhaPa7 where FechaPlantao<>'NULL' ORDER BY DtReceb DESC, HrReceb DESC limit 1");

$sql->execute();
$sql->bind_result($idsenha,$senha,$dtreceb,$hrreceb,$abreplantao);
$sql->fetch();


/*-if ($abreplantao==786){
  $abreplantao = 394;
}elseif ($abreplantao==393){
  $abreplantao=001;
}else{
  $abreplantao=$abreplantao+1;
}*/
$abreplantao=616;

        echo '
            <h5 class="bg-info text-dark text-center btn-primary mt-1"><b>Início Próximo Plantão:</b></h5>
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="text-center text-danger" style="font-size: 25px;font-weight: 900">'.str_pad($abreplantao,3,'0',STR_PAD_LEFT).'</th>
                </tr>
              </thead>
            </table>
        ';

?>
