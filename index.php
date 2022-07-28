<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application</title>
    <link rel="stylesheet" href="bitnami.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap');

        td, td {
            font-size: 30px;
            padding: 10px;
        }
        .table-all, th, td{
            font-family: 'Roboto Mono', monospace;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
    <div>
        <button><a href="update.html">update</a></button>
        <button><a href="insert.html">insert</a></button>
        <button><a href="delete.html">delete</a></button>
        <button><a href="empty.php">empty</a></button>
        <table class=table-all>
                <tr>
                    <th>id</th>
                    <th>username</th>
                    <th>password<th>
                    <th>email<th>
                </tr>
                <br>
                <br>
                <br>
            </div>
<?php
    require './connection.php';

    $sql = "SELECT * FROM `students`";
    $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $newid = $row['id']; 
        $newname = $row['username'] ;
        $newpassword = $row['userpassword'] ;
        $newemail = $row['email'] ;
        echo "<tr>";
        echo "<td >$newid</td>";
        echo "<td>$newname</td>";
        echo "<td>$newpassword<td>" ;
        echo "<td>$newemail<td>" ;
        echo "</tr>";
    } 

?>
        </table>
    </div>
    
</body>
</html>

