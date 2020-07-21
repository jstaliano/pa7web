<?php
 date_default_timezone_set('America/Belem');
// Incluindo arquivo de conexão
require_once('config/conn.php');
$data_hoje = date('Y-m-d');
$dia = '';
$mes = '';
$ano = '';
$hora ='';
//$sql=$mysqli->prepare("select Senha, DtChamada,HrChamada,Atendimento from tab_gatendimento where (situacao<>'Espera' and DtChamada='$data_hoje') ORDER BY HrChamada desc limit 4");
$sql=$mysqli->prepare("select IdSenhaPa7,SenhaPa7, DataHoraId,Situacao from tab_SenhaPa7 Where Situacao=0 AND IdSenha>0 ORDER BY IdSenha desc limit 10");

$sql->execute();
$sql->bind_result($idsenha,$senha,$dthrid,$sit);
        
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
                $dia = substr($dthrid,6,2);
                $mes = substr($dthrid,4,2);
                $ano = substr($dthrid,0,4);
                $hora = substr($dthrid,8,11);
                echo '
                <tr>
                  <th class="text-center text-dark" style="font-size: 10px;font-weight: 500">'.$dia.'/'.$mes.'/'.$ano.'  '.$hora.'</th>                  
                  <td class="text-center text-dark" style="font-size: 10px">'.$senha.'</td>
                </tr>'; }
                '               
              </tbody>
            </table>
        ';
  
?>
