<?php 
    require './connection.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password']; 

        $sql = "UPDATE `students` SET `username` = '$name', `userpassword` = '$password', `email` = '$email' WHERE `id` = $id;";
        $results = mysqli_query($db, $sql) or die("bad query: $sql");
    }
    header("location: ./index.php");
?>
