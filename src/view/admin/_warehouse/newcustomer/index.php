<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="./style.css" rel="stylesheet" type="text/css">
    <title>novo cliente - rapid.io</title>
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header" contenteditable="false">
              <h1>rapid.io
                <font color="#777777">
                  <span style="font-size: 23.4px; line-height: 23.4px;">registro de clientes</span>
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
            <form role="form" action="perform" method="post">
              <div class="form-group">
                <label class="control-label" for="pacote_pack">código do cliente</label>
                <input class="form-control input-lg" id="pacote" placeholder="será gerado automaticamente" type="text" disabled="disabled">
              </div>
              <div class="form-group">
                <label class="control-label" for="nome_cli">nome completo</label>
                <input class="form-control input-lg" name="name" type="text" autocomplete="off" required placeholder="ex. João da Silva" >
              </div>
              <div class="form-group">
                <label class="control-label" for="nasc_cli">data de nascimento</label>
                <input class="form-control input-lg" name="birth" type="date" required="" autocomplete="off">
              </div>
              <div class="form-group">
                <label class="control-label" for="telefone">telefone</label>
                <input class="form-control input-lg" name="phone" type="tel" autocomplete="off" required placeholder="DDD + número">
              </div>
              <div class="form-group">
                <label class="control-label" for="email">email</label>
                <input class="form-control input-lg" name="email" type="email" autocomplete="off" required placeholder="joao@dasilva.com">
              </div>
              <div class="form-group">
                <label class="control-label" for="l1">endereço linha 1</label>
                <input class="form-control input-lg" name="addl1" type="text" autocomplete="off" required placeholder="Av. Rio Branco">
              </div>
              <div class="form-group">
                <label class="control-label" for="l2">endereço linha 2</label>
                <input class="form-control input-lg" name="addl2" type="text" autocomplete="off" required placeholder="complemento (Lote, Quadra, Fundos, etc)">
              </div>
              <div class="form-group">
                <label class="control-label" for="num">numero</label>
                <input class="form-control input-lg" name="stNum" type="number" autocomplete="off" required placeholder="10">
              </div>
              <div class="form-group">
                <label class="control-label" for="bairro">bairro ou municipio</label>
                <input class="form-control input-lg" name="district" type="text" autocomplete="off" required placeholder="Cidade do Rio">
              </div>
              <div class="form-group">
                <label class="control-label" for="bairro">cidade</label>
                <input class="form-control input-lg" name="city" type="text" autocomplete="off" required placeholder="Rio de Janeiro">
              </div>
              <div class="form-group">
                <label class="control-label" for="estado">estado</label>
                <input class="form-control input-lg" name="state" type="text" autocomplete="off" required placeholder="Rio de Janeiro">
              </div>
              <div class="form-group">
                <label class="control-label" for="cep">cep</label>
                <input class="form-control input-lg" name="zip" type="number" autocomplete="off" required placeholder="apenas números: 25035005">
              </div>
              <div class="form-group">
                <label class="control-label" for="pais">país</label>
                <input class="form-control input-lg" name="CC" type="text" autocomplete="off" value="BR" required placeholder="Av. Rio Branco" readonly>
              </div>
              <button type="submit" class="btn btn-info btn-lg">cadastrar novo cliente</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  

</body></html>