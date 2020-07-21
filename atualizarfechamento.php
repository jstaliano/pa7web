<?php
 date_default_timezone_set('America/Belem');
// Incluindo arquivo de conexão
require_once('config/conn.php');

$sql=$mysqli->prepare("SELECT IdFechamento, Plantao, Senha,Data FROM fechaplantao where Plantao=1 order by IdFechamento DESC LIMIT 1");
$sql->execute();
$sql->bind_result($idsenha1,$plantao1,$senha1,$data1);
$sql->fetch();
$abreplantao1=$senha1;
$datap1 = $data1;
$mysqli->close();


$Mysql=$mysqli1->prepare("SELECT IdFechamento, Plantao, Senha,Data FROM fechaplantao where Plantao=2 order by IdFechamento DESC LIMIT 1");
$Mysql->execute();
$Mysql->bind_result($idsenha2,$plantao2,$senha2,$data2);
$Mysql->fetch();
$abreplantao2=$senha2;
$datap2 = $data2;
$mysqli1->close();

$arbitro=$escolhe->prepare("SELECT IdFechamento, Plantao FROM fechaplantao order by IdFechamento DESC LIMIT 1");
$arbitro->execute();
$arbitro->bind_result($idsenha,$plantao);
$arbitro->fetch();
$plantaofechado=$plantao;
$escolhe->close();

if ($plantaofechado == 1):
  $plantaoatual=2; //plantão que está trabalhando
else:
  $plantaoatual=1; //plantão que está trabalhando
endif;





$diahoje= date('d/m/Y', strtotime('+1 days'));

//$mes= date("m",$diahoje);
//$ano = date("Y",$diahoje);
//$data = date("d",$diahoje);
//.'/'.$mes;



if ($plantaoatual == 1): // mensagem para o plantão 1
        echo '            
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                <th style="background-color:lightblue"> <p class="text-dark text-center" style="font-size:18px;font-weigth:900;padding-bottom:0px;"><b>Plantão 1</b></p><p class="text-center" style="color:orangered;padding-top:0px;">Trabalhando Hoje!</p></th>
                <th style="background-color:lightblue"> <p class="text-dark text-center" style="font-size:18px;font-weigth:900;padding-bottom:0px;"><b>Plantão 2</b></p><p class="text-center" style="color:orangered;padding-top:0px;">'.$diahoje.' às 04:00h</p></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="text-center text-danger" style="font-size: 30px;font-weight: 900">'.str_pad($abreplantao1,3,'0',STR_PAD_LEFT).'</th>
                  <th class="text-center text-danger" style="font-size: 30px;font-weight: 900">'.str_pad($abreplantao2,3,'0',STR_PAD_LEFT).'</th>
                </tr>
              </tbody>
            </table>
        ';
else:
  echo '            
            <table class="table table-striped table-bordered">
              <thead>
                <tr>                
                <th style="background-color:lightblue"> <p class="text-dark text-center" style="font-size:18px;font-weigth:900;"><b>Plantão 1</b></p><p class="text-center" style="color:orangered;padding-top:0px;">'.$diahoje.' às 04:00h</p></th>
                <th style="background-color:lightblue"> <p class="text-dark text-center" style="font-size:18px;font-weigth:900;"><b>Plantão 2</b></p><p class="text-center" style="color:orangered;font-weight:800;padding-top:0px;">Trabalhando Hoje!</p></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="text-center text-danger" style="font-size: 30px;font-weight: 900">'.str_pad($abreplantao1,3,'0',STR_PAD_LEFT).'</th>
                  <th class="text-center text-danger" style="font-size: 30px;font-weight: 900">'.str_pad($abreplantao2,3,'0',STR_PAD_LEFT).'</th>
                </tr>
              </tbody>
            </table>
        ';
endif;
?>
