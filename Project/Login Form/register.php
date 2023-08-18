<?php
    include("database.php");

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if($password == $password2) {
        $sql = "INSERT INTO users (username , password) 
        VALUES ('{$username}','{$password}')";

        mysqli_query($conn , $sql); 
        
         header("Location: form.html");
    }
    else {
        header("Location: registerfail.html");    
    }
   
    mysqli_close($conn);
?>