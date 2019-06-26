<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require($path .= "/control/databaseEngine/connectors/conn_mysql.php"); 

$login = $_POST['login'];
$senha = $_POST['senha'];

// session_start inicia a sessão
session_start();
if (!empty($_POST)){
    if (isset($_POST['login']) && isset($_POST['senha'])){
        $q = "SELECT * FROM deliverers 
        WHERE username = '$login' and passwd = '$senha'";

        $pre = $link->query($q)
        or die("Query fail: " . $link->error);

        $c = $pre->num_rows;
        $row = $pre->fetch_assoc();
        $pswd = $row["passwd"];
        

        
        // $user = $res->fetch_object();
        
        if ($c == 1){
            if ($senha == $pswd)
            {           
            $reg = $row["register"];
            $name = $row["name"];
            $uname = $row["username"];
            $role = $row["role"];
            
            $_SESSION['deliverId'] = $reg;
            $_SESSION['deliverName'] = $name;
            $_SESSION['deliverUserName'] = $uname;
            $_SESSION['deliverRole'] = $role;

            
            header('location: _deliverer/index.php');
                if ($role == 0){
                    $wid = $row["wid"];
                
                    $_SESSION['deliverRole'] = $role;
               
                    header('location: _deliverer/');
                
                }
            }
        }
        else {
            header('location: ./');
        }
            
    }
        exit(); 
}

?>