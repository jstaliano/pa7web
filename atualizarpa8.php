<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://guarucoop.com/sisgescoop/api/listapa8?usuario=julios&password=514138&type=json");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$res=json_decode($result, true);
$tam_res =  count($res);
echo '
<h4 class="bg-secondary text-white text-center btn-primary mt-1" style="font-size:35px;"><b>Fila do PA-8</b></h4>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th class="text-center text-white bg-dark" style="font-size: 15px">Posição</th>
      <th class="text-center text-white bg-dark" style="font-size: 15px">Prefixo</th>
      <th class="text-center text-white bg-dark" style="font-size: 15px">Data/Hora</th>                  
    </tr>
  </thead>
  <tbody> ';
  for ($i = 0; $i <= $tam_res-1; $i++) {    
    $tamdthr = strlen($res[$i]['dthr']);
    $restdata = substr($res[$i]['dthr'], 0, -9);
    $resthora = substr($res[$i]['dthr'],8);
    $novadata = [];
    $novadata[2] = substr($restdata,0,-4);
    $novadata[1] = substr($restdata,4,-2);
    $novadata[0] = substr($restdata,6);
    echo '
    <tr>
      <td class="text-center text-dark" style="font-size: 17px;font-weight: 400;background-color:#c0c0c0">'.STR_PAD($res[$i]['posicao'],2,0,STR_PAD_LEFT).'°</td>                  
      <td class="text-center text-dark" style="font-size: 19px;font-weight: 800">'.$res[$i]['prefixo'].'</td>                  
      <td class="text-center text-dark" style="font-size: 15px;font-weight: 900">'.$novadata[0].'/'.$novadata[1].'/'.$novadata[2].' - '.$resthora.'</td>      
    </tr>'; 
  }
  echo '</tbody>
</table>
';
