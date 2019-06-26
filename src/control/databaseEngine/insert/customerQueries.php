<?php

function createCustomer($name, $birth, $phone, $email, $addl1, $addl2, $stNum, $district, $city, $state, $zip, $CC)
{ 
    $path = $_SERVER['DOCUMENT_ROOT'];
    require($path .= "/control/databaseEngine/connectors/conn_mysql.php");   
 
    $q = "CALL customerRegister(
    '$name', '$birth', '$phone', '$email', '$addl1', '$addl2', $stNum, '$district', '$city', '$state', '$CC', $zip
    );";
    
    
    $link->query($q) or die("Query fail: " . $link->error);
    
}
?>