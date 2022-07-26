<?php
    $user = "root";
    $pass = "";
    $db = "webapp";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];   
    }
    $db = new mysqli('localhost', $user, $pass, $db) or die('unable to connect');

?>