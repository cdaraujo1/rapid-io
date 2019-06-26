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
            <form role="form" action="./search" method="get">
              <div class="form-group">
                <label class="control-label" for="pacote_pack">código do pacote</label>
                <input class="form-control input-lg" name="packCode" placeholder="ex. ABC123" type="text" required="" autocomplete="off" oninput="this.value = this.value.toUpperCase()">
              </div>
              <button type="submit" class="btn btn-info btn-lg">get it!</button>
            </form>
            <a class="btn btn-lg btn-primary" href="../">voltar</a>
          </div>
        </div>
      </div>
    </div>
  

</body></html>