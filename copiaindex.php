<?php
//header('Content-type: text/html; charset=iso-8859-1');
date_default_timezone_set('America/Belem');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="desenho logo favicon.ico">
  <title>PA7Web - Guarucoop</title>
  <meta name="description" content="Táxi Guarucoop - Rádio Táxi credenciada no Aeropoto Internacional de Guarulhos - SP / Brasil">
  <meta name="keywords" content="Rádio Táxi Azul e Branco - Guarucoop - GRU Airport - Táxi Aeroporto São Paulo">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="aquamarine.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<!--<script src="jquery/jquery.js"></script> -->
  <script>   
        
//    
       var myVar = setInterval(myTimer ,1000);
       function myTimer() {
            var h = new Date(), displayHora;
            var d= new Date(), DisplayData;
           if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
              displayHora = h.toLocaleTimeString('pt-BR');
           } else {
              displayHora = h.toLocaleTimeString('pt-BR', {timeZone: 'America/Belem'});
              displayData = d.toLocaleDateString('pt-BR');
           }
              //document.getElementById("demo").innerHTML = displayDate;
              $("#relogio").html("<h2 class='text-center text-primary' style='font-size:18px;font-weight: 600;font-family:arial;' >"+displayData+"<br>"+displayHora+"</h1>");              
       }
        function atualizartabela()
        {            
            // Fazendo requisição AJAX
            $.post("atualizartabela.php", function (tabela) {                  
                // Exibindo frase
                 $("#ultimasenha").html(tabela);
            });
        }
        // Definindo intervalo que a função será chamada
        setInterval("atualizartabela()", 5000);
        // Quando carregar a página
        $(function() {
            // Faz a primeira atualização
            atualizartabela();
        });       
        function senhapa7()
        {            
            // Fazendo requisição AJAX
            $.post("proc_senhapa7.php", function (painel) {                  
                // Exibindo frase
                 $("#senhapa7").html(painel);
            });
        }
        // Definindo intervalo que a função será chamada
        setInterval("senhapa7()", 10000);
        // Quando carregar a página
        $(function() {
            // Faz a primeira atualização
            senhapa7();
        });        
    </script> 
</head>
<body>
<?php 
              $arquivo = "pa7web.txt";
              $handle = fopen($arquivo, 'r+');
              $data=fread($handle, 512);
              $contador=$data+1;
              fseek($handle,0);
              fwrite($handle, $contador);
              fclose($handle);
              //print $contador . " Visitas neste Web Site - Obirgado pela sua visita.";
  ?>
<div class="container-fluid">



  <div class="row">  
    <div class="col-sm-12">          
      <div class="row">
          <div class="col-sm-11"><img class="d-block m-2" src="logoguarucoop.png" width="200" height="40" alt=""></div>
          <div class="col-sm-1 btn-white" id="relogio"></div>
      </div>
     
     
           
            <div class="row">
<!--PA7-->        <div class="col-sm-6"  style="border: solid;color: white"> 
                          <div class="row">
                              <div class="col-sm-12 bg-light p-1">
                                <h5 class="bg-primary text-white text-center btn-white m-1"><b>PA7Web - Senha OnLine</b></h5>
                              </div>
                              <div class="col-sm-12 bg-light p-1" id="senhapa7"></div>
                              <div class="col-sm-12 bg-light p-0" id="ultimasenha"></div>
                          </div>
                  </div>
              </div>          
      </div>
    </div>
    <div style="font-size: 10px;color: #dadada;" id="dumdiv"> </div>
    <div class="row">
        <div class="col-md-12">
           <h6 class="text-center"><?php print "(".$contador.") " ?>© Copyright 2020 [1]  - Rádio Táxi Azul e Branco</h6>
        </div>
    </div>
</body>
  </div> 


 <?php// include 'footer.php'; ?>

</html>
