<?php
//نربط صفحة الكونيكشن
require "connection.php";

    //نكتب اس كيو ال كويري
    $sql = "TRUNCATE TABLE students";
    //ننفذ الاس كيو ال كيوري
    $results = mysqli_query($db, $sql) or die("bad query: $sql");
    //نرجع للصفحة الرئيسية
    header("Location: index.php");


?>