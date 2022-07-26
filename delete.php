<?php

require './connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM `students` WHERE `students`.`id` = $id";
    $results = mysqli_query($db, $sql) or die("bad query: $sql");

    header("Location: index.php");
}


?>