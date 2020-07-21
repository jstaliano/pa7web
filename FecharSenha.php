<?php 
  date_default_timezone_set('America/Sao_Paulo');
  //Buscar Último Plantão

  // inclui o arquivo de inicialização
  require 'init.php';
  $PDO = db_connect(); 
  $sql = "SELECT IdFechamento, Plantao, Senha FROM fechaplantao order by IdFechamento DESC LIMIT 1";
  $stmt = $PDO->prepare($sql);   
  $stmt->execute();
  $results= $stmt->fetchAll(PDO::FETCH_ASSOC);
  $result  = $results[0]; 
  if ($result['Plantao']==1):
    $fechaplantao=2;
  else:
    $fechaplantao=1;
  endif;

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rádio Táxi Azul e Branco</title>
    <meta name="description" content="Táxi Guarucoop - Rádio Táxi credenciada no Aeropoto Internacional de Guarulhos - SP / Brasil">
    <meta name="keywords" content="Rádio Táxi Azul e Branco - Guarucoop - GRU Airport"> 
    <title>Fecha Plantão Guarucoop</title>    
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    
</head>
<body>
    
    <div class="container-fluid">
          <img class="d-block" src="gcooppadrao.jpg" width="180" height="40"> 
    </div>
    <div class="container-fluid">
        <h2 class="bg-primary text text-center btn-primary"><?php echo '<b>Fechamento do Plantão: '.$fechaplantao.'</b>'; ?></h2>
        <hr width="100%" class="bg-warning" >
    </div>
    
  
	<div class='container'>
      <div class="col-md-12">
       <form class="needs-validation" action="action_fechamento.php" method="post"  novalidate>
        <div class="form-row">
          <div class="col-md-2 mb-3">
            <label for="validationCustom01">Prefixo do Fechamento</label>
            <input type="text" maxlength="3" class="form-control" name="prefixo" id="validationCustom01" placeholder="Primo do PA2" required autofocus>           
            <input type="hidden" class="form-control" name="plantao" id="validationCustom01" placeholder="Primo do PA2" required value="<?php echo $fechaplantao;?>">           
            <div class="invalid-feedback">
              Digite o Prefixo.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom02">Data</label>
            <input type="text" class="form-control" name="data" id="validationCustom02" value="<?php echo date('d/m/Y');?>" Disabled>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom02">Hora</label>
            <input type="text" class="form-control" name="hora" id="validationCustom02" value="<?php echo date('H:m:s');?>" disabled>
          </div>    
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationCustom03">Observações</label>            
            <textarea id="story" name="obs" rows="3" cols="33" Placeholder="Se Houver Deixe as Observações deste Fechamento"></textarea>            
          </div>                    
        </div>        
        <div class="form-row pb-3">
          <button class="btn btn-success" type="submit">Registrar</button>
        </div>
    </form>
    <script>
    // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName('needs-validation');
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
  </div>
</div>


    <?php include 'antfooter.php'; ?>
    
</body>
</html>