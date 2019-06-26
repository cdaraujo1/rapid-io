<?php 
$codCli = $_POST['codCli'];
$statusInit = $_POST['status_inicial'];
$warehouse = $_POST['armazem'];

$path = $_SERVER['DOCUMENT_ROOT'];
require($path .= "/control/phpEngine/idGenerator.php");

$packCode = $pcode;

?>

<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header" contenteditable="false">
              <h1>rapid.io
                <font color="#777777">
                  <span style="font-size: 23.4px; line-height: 23.4px;">registro de pacotes</span>
                </font>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p style="font-size: 20px" class="text-danger">confira todos os dados para que não hajam erros durante a logística do
              pacote</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form role="form" action="./check/done/index.php" method="post">
            <?php
            //php in
             echo '
              <div class="form-group">
                <label class="control-label" for="pacote_pack">código do pacote</label>
                <input class="form-control input-lg" name="pacoteCod" value="'; echo $packCode; echo'" type="text" readonly>
              </div>
              <div class="form-group">
                <label class="control-label" for="cod_cli">código do cliente</label>
                <input class="form-control input-lg" name="codCli" value="'; echo $codCli; echo'" type="text" required="" readonly>
              </div>
              <div class="form-group">
                <label class="control-label" for="stat_init">status inicial</label>
                <input class="form-control input-lg" name="status_inicial" value="'; echo $statusInit; echo'" type="text" required="" readonly>
              </div>
              <div class="form-group">
                <label class="control-label" for="pacote_pack">armazém</label>
                <input class="form-control input-lg" name="armazem" value="'; echo $warehouse; echo'" type="text" readonly>
              </div>
              '//end echo
              //end php
               ?>
              <button type="submit" class="btn btn-info btn-lg">publicar e enviar email ao cliente</button>
            </form>
            <a class="btn btn-lg btn-primary" href="./">voltar</a>
          </div>
        </div>
      </div>
    </div>
  

</body></html>