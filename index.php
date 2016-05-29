<?php
    @$db = new mysqli('localhost', 'root', '','money');

    if(mysqli_connect_errno()){
        echo "Не удалось установить соединение";
        exit;
    }

    $result = $db->query("SELECT * FROM rates WHERE name ='usd'");
    $row = $result->fetch_assoc();

    $dol = $row['value'];

    if(isset($_POST['dollars']) || isset($_POST['evr'])) {
        $dollars = (float)$_POST['dollars'];

    }else {
        $dollars = 0;
    }



?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Калькулятор для подсчета денег</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form">
    <form action="" method="post">
        <input type="text" name="dollars"  value="<?php echo $dollars  ?>" placeholder="Пример 13.2"> $
        <input type="submit" value="="> <?php echo $dol * $dollars?> руб
    </form>
</div>

<a href="secret.php">Перейти на секретную страницу</a>


</body>
</html>

