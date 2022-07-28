<?php 
    //نربط صفحة الكونيكشن
    require './connection.php';
    
    // نتاكد من ارسال الفورم
    if (isset($_POST['submit'])) {
        // نجيب المتغيرات من الفورم
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        //نكتب اس كيو ال كويري
        $sql = "UPDATE `students` SET `username` = '$name', `userpassword` = '$password', `email` = '$email' WHERE `id` = $id;";
        //ننفذ الاس كيو ال كيوري
        $results = mysqli_query($db, $sql) or die("bad query: $sql");

    }
    //نرجع للصفحة الرئيسية
    header("location: ./index.php");
?>
