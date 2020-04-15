<?php
 date_default_timezone_set('America/Belem');
// Incluindo arquivo de conexão
require_once('config/conn.php');
$data_hoje = date('Y-m-d');

//$sql=$mysqli->prepare("select Senha, DtChamada,HrChamada,Atendimento from tab_gatendimento where (situacao<>'Espera' and DtChamada='$data_hoje') ORDER BY HrChamada desc limit 4");
$sql=$mysqli->prepare("select IdSenhaPa7,SenhaPa7,DtReceb,HrReceb from tab_SenhaPa7 ORDER BY IdSenhaPa7 desc, HrReceb desc limit 6");

$sql->execute();
$sql->bind_result($idsenha,$senha,$dtreceb,$hrreceb);
        echo '
            <h5 class="bg-warning text-white text-center btn-primary mt-1"><b>Últimas Senhas:</b></h5>
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th class="text-center text-white bg-dark" style="font-size: 10px">DATA/HORA</th>
                  <th class="text-center text-white bg-dark" style="font-size: 10px">SENHA</th>                  
                </tr>
              </thead>
              <tbody> ';
              while($sql->fetch()){
                echo '
                <tr>
                  <th class="text-center text-dark" style="font-size: 10px;font-weight: 500">'.date('d/m/Y', strtotime($dtreceb)).' - '.date('H:i:s',strtotime($hrreceb)).'</th>                  
                  <td class="text-center text-dark" style="font-size: 10px">'.$senha.'</td>
                </tr>'; }
                '               
              </tbody>
            </table>
        ';
  
?>
