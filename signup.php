<?php 
    require './connection.php';

    $sql = "INSERT INTO students (username, userpassword, email) VALUES('$name', '$password', '$email')";
    $results = mysqli_query($db, $sql) or die("bad query: $sql");

    header("Location: ./index.php")
    
?>