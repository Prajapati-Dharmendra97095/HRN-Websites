<?php 
    $conn = require 'db.php';

    $name = $_POST['first_name'] . $_POST['last_name'] ;
    $email = $_POST['email'];
    $phoneno = $_POST['phoneNo'];
    $message = $_POST['message'];
    $query = "insert into formData ( name, phoneNo, email, message) values(?,?,?,?)";


    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $name ,$phoneno, $email, $message );

    if($stmt->execute())
    {
        header("Location: contact.php?status=success");
        exit();
    }
    else{
        header("Location: contact.php?status=false");
        exit();
    }

    $conn->close();
    $stmt->close();

?>