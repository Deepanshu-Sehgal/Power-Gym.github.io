<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'powergym';

    $conn = mysqli_connect($servername,$username,$password,$database);
    $sql = "CREATE TABLE registeration(
        name varchar(50),
        age int(3),
        mail varchar(50),
        mobile varchar(10),
        tenure varchar(50)
    )";
    
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    mysqli_query($conn,$sql);
        

?>