<?php
//header('Content-type: text/html; charset=iso-8859-1');
date_default_timezone_set('America/Belem');
require_once('config/conn.php');
$sql = $mysqli->prepare("SELECT IdFechamento, Plantao, Senha FROM fechaplantao order by IdFechamento DESC LIMIT 1");
$sql->execute();
$sql->bind_result($idsenha, $plantao, $senha);
$sql->fetch();
if ($plantao == 1) :
    $plantaoatual = 2;
else :
    $plantaoatual = 1;
endif;
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="desenho logo favicon.ico">
    <title>PA7Web - Guarucoop</title>
    <meta name="description" content="Táxi Guarucoop - Rádio Táxi credenciada no Aeropoto Internacional de Guarulhos - SP / Brasil">
    <meta name="keywords" content="Rádio Táxi Azul e Branco - Guarucoop - GRU Airport - Táxi Aeroporto São Paulo">,
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="aquamarine.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        var myVar = setInterval(myTimer, 1000);

        function myTimer() {
            var h = new Date(),
                displayHora;
            var d = new Date(),
                DisplayData;
            if (navigator.userAgent.toLowerCase().indexOf('Firefox') > -1) {
                displayHora = h.toLocaleTimeString('pt-BR');
            } else {
                displayHora = h.toLocaleTimeString('pt-BR', {
                    timeZone: 'America/Belem'
                });
                displayData = d.toLocaleDateString('pt-BR');
            }
            $("#relogio").html("<h2 class='text-center text-primary' style='font-size:18px;font-weight: 600;font-family:arial;' >" + displayData + ' ' + displayHora + "</h1>");
            $("#relogiopa8").html("<h2 class='text-center text-primary' style='font-size:18px;font-weight: 600;font-family:arial;' >" + displayData + ' ' + displayHora + "</h1>");
        }

        function atualizartabela() {
            $.post("atualizartabela.php", function(tabela) {
                $("#ultimasenha").html(tabela);
            });
        }
        setInterval("atualizartabela()", 5000);
        $(function() {
            atualizartabela();
        });

        function atualizarpa8() {
            $.post("atualizarpa8.php", function(tabela) {
                $("#tabpa8").html(tabela);
            });
        }
        setInterval("atualizarpa8()", 5000);
        $(function() {
            atualizarpa8();
        });

        function atualizarfechamento() {
            $.post("atualizarfechamento.php", function(tabela) {
                $("#fechamento").html(tabela);
            });
        }
        setInterval("atualizarfechamento()", 1000);
        $(function() {
            atualizarfechamento();
        });

        function senhapa7() {
            $.post("proc_senhapa7.php", function(painel) {
                $("#senhapa7").html(painel);
            });
        }
        setInterval("senhapa7()", 10000);
        $(function() {
            senhapa7();
        });
    </script>
</head>

<body>
    <?php
    $arquivo = "pa7web.txt";
    $handle = fopen($arquivo, 'r+');
    $data = fread($handle, 512);
    $contador = $data + 1;
    fseek($handle, 0);
    fwrite($handle, $contador);
    fclose($handle);
    ?>
    <ul class="nav nav-pills nav-fill fixed-top">
        <li class="nav-item" style="background-color:cyan;">
            <a href="" class="nav-link text-dark" data-toggle="pill" data-target="#tabone" style="font-size:20px;">
                <b>Senha PA-7</b>
            </a>
        </li>
        <li class="nav-item" style="background-color:cyan;">
            <a href="" class="nav-link text-dark" data-toggle="pill" data-target="#tabtwo" style="font-size:20px;">
                <b>Fila do PA-8</b>
            </a>
        </li>
    </ul>
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center" style="padding-top:43px;">
                            <img class="m-1" src="logoguarucoop.png" width="185" height="37">
                        </div>
                    </div>
                    <div class="col-sm-12 btn-white" id="relogio"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12 bg-light p-0" style="background-color:#fcfcfc" id="senhapa7">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 bg-light p-1" id="fechamento">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 bg-light p-0" id="ultimasenha">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center" style="padding-top:43px;">
                            <img class="m-1" src="logoguarucoop.png" width="185" height="37" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 btn-white" id="relogiopa8"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12 bg-light p-0" id="tabpa8">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center" style='font-size:15px;font-weight:100;font-family:Roboto;'><?php print "(" . $contador . ") " ?>© Rádio Táxi Azul e Branco - 2020 [3.0]</p>
        </div>
    </div>
</body>

</html>