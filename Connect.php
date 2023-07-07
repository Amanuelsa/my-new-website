<?php
    $Id = $_POST['Id'];
    $FirstName = $_POST['FirstName'];
    $LastName= $_POST['LastName'];
    $Gender = $_POST['Gender'];
   
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $conn =new mysqli('localhost','root','','newdb');
    if($conn->connect_error){
        die('Connection Faield'.$conn->connection_error);

    }else{
        $stmt = $conn->prepare('insert into registration(Id,FirstName,LastName,Gender,Password,Email) 
        values(?, ?, ?, ?, ?, ?)');
    $stmt->bind_param("ssssss",$Id,$FirstName,$LastName,$Gender,$Password,$Email);
    }
    $stmt->execute();
    echo "registration Sucessful ..... ";
    $stmt->close();
    $conn->close();
?>