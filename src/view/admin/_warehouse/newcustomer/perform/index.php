<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require($path .= "/control/databaseEngine/insert/customerQueries.php");

createCustomer(
    $_POST['name'],
    $_POST['birth'],
    $_POST['phone'],
    $_POST['email'],
    $_POST['addl1'],
    $_POST['addl2'],
    $_POST['stNum'],
    $_POST['district'],
    $_POST['city'],
    $_POST['state'],
    $_POST['zip'],
    $_POST['CC']
);

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
                                    <span style="font-size: 23.4px; line-height: 23.4px;">registro de cliente</span>
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
                    <?php echo '
                        <p style="font-size: 20px" class="text-primary">'; echo "cliente cadastrado com sucesso";'</p>
                    '?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <a class="btn btn-lg btn-primary" href="./">voltar</a>
                    </div>
                </div>
            </div>
        </div>
    

</body></html>