<?php
require "conn_mysql.php";




function getCustomerData($codCli)
{
    global $link;
    $q = "select * from customer where idCustomer = 1";
    
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $idc = $row["idCustomer"];
    
    /*
    $row = $result->fetch_array(MYSQLI_ASSOC);
    printf("%s", $row["idCustomer"]);
    
    /*if(!$result = $link->query($q)){
    die('There was an error running the query [' . $link->error . ']');
    }
    s
    while($row = $result->fetch_assoc()){
    echo $row['name'] . '<br />';
    }*/
}

//$orgn = $link->query($sqlorgn);


mysqli_close($link);
?>

