<?php 

    $user = "root";
    $password = "";
    $host = "localhost";
    $database = "hrn_tech";

    $conn = new mySqli($host, $user, $password, $database);

    if($conn->connect_error)
    {
        die("connection Failed ". $conn->connect_error );
    }
    else{
        echo("connect successfully");
    }

    return ($conn);

?>