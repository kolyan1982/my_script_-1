<?php
if (!empty($_POST)) {
    header('location: secret.php?key=' . md5($_POST['login']));
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
</head>
<body>

<form action="" method="post">
    <label>Логин:</label><br>
    <input type="text" name="login"><br>
    <input type="submit" value="Войти">
</form>
</body>
</html>

