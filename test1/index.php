<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <p>Имя:<input type="text" name="name"/></p>
    <p>Возрост:<input type="text" name="age"/></p>
    <p><input type="submit"></p>
</form>
Привет <?php echo htmlspecialchars($_GET["name"]);?>.
Вам <?php echo htmlspecialchars($_REQUEST["age"]);?>лет.
<?php
echo "{$_SERVER['QUERY_STRING']}";
?>

</body>
</html>