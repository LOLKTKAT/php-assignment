<?php
//نربط صفحة الكونيكشن
require './connection.php';

// نتاكد من ارسال الفورم
if (isset($_POST['submit'])) {
    // نجيب المتغيرات من الفورم
    $id = $_POST['id'];
    
    //نكتب اس كيو ال كويري
    $sql = "DELETE FROM `students` WHERE `students`.`id` = $id";
    //ننفذ الاس كيو ال كيوري
    $results = mysqli_query($db, $sql) or die("bad query: $sql");
    //نرجع للصفحة الرئيسية
    header("Location: index.php");
}


?>