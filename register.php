<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $age = $_POST['age'];

        $mobile = $_POST['mob'];
        $mail = $_POST['mail'];
    $tenure = $_POST['tenure'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "powergym";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO registeration (name,age, mail, tenure, mobile) VALUES ('$name','$age','$mail','$mobile','$tenure')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>