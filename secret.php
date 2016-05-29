<?php
    if($_GET['key'] != md5("uuu333")) {
        header('location: login.php');
        exit;
    }

    if(!empty($_POST)){
        @$db = new mysqli('localhost', 'root', '','money');

        if(mysqli_connect_errno()){
            echo "Не удалось установить соединение";
            exit;
        }

        $new_rate = (float)$_POST['rate'];
        $result = $db->query("UPDATE rates SET value='$new_rate' WHERE name='usd'");
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Секретная страница</title>
</head>
<body>

<p>изменить курс доллара</p>
<form action="" method="post">
    <input type="text" name="rate"><br>
    <input type="submit" value="SaVe">
</form>




</body>
</html>

