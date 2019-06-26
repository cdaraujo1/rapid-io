<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/control/phpEngine/phpJson/getRequests.php";
include_once($path);


?>



<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>rastreio - rapid.io</title>
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header" contenteditable="false">
              <h1>rapid.io
                <font color="#777777">
                  <span style="font-size: 23.4px; line-height: 23.4px;">rastreio de pacotes</span>
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
            <form role="form">
            <?php
            //php code imbedded
            try {
            getPackByPackCode($_GET['packCode']);

            echo'
              <div class="form-group">
                <label class="control-label" for="pacote_pack">código do pacote</label>
                <input class="form-control input-lg" id="pacote" value="'; echo $_GET['packCode']; echo'" type="text" readonly>
              </div>
              <div class="form-group">
                <label class="control-label" for="cod_cli">id do cliente</label>
                <input class="form-control input-lg" id="codCli" value="'; echo $customerId; echo'" type="text" readonly>
              </div>
              <div class="form-group">
                <label class="control-label" for="cod_cli">data de postagem</label>
                <input class="form-control input-lg" id="postDate" value="'; echo $postDate; echo'" type="text" readonly>
              </div>
              <div class="form-group">
                <label class="control-label" for="cod_cli">última atualização</label>
                <input class="form-control input-lg" id="lastUpdate" value="'; echo $lastUpdate; echo'" type="text" readonly>
              </div>
              <div class="form-group">
                <label class="control-label" for="cod_cli">status</label>
                <input class="form-control input-lg" id="status" value="'; echo $statusId; echo'" type="text" readonly>
              </div>
              <div class="form-group">
                <label class="control-label" for="cod_cli">localização atual</label>
                <input class="form-control input-lg" id="postDate" value="'; echo $location; echo'" type="text" readonly>
              </div>
              <ol>
                <p>histórico de localização</p>
                <li>Armazém Bilac</li>
                <li>Armazém Caxias</li>
              </ol>
              ';
              //end echo
            } catch (\Exception $e) {
              echo'
              <div class="form-group">
              <span style="font-size: 23.4px; line-height: 23.4px;">Pacote não encontrado. Ele pode estar expirado ou o código foi digitado incorretamente.</span>
              </div>';
            };
              //end php
                ?>
              <a class="btn btn-lg btn-success">compartilhar</a>
              <a class="btn btn-info btn-lg" href="./">nova busca</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  

</body></html>