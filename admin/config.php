<?php
 $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ecommerce";  

$db = new mysqli ($server, $username, $password, $database);

if (!empty($db-> connect_error)){
    echo "connection failed" . $db-> connect_error;
}

?>