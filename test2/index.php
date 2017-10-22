<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
    <fieldset>
        <legend>Выберите животных</legend>
        <label for="dog">
            <input type="checkbox" id="dog" name="animal[]" value="dog">
            dog
        </label>
        <label for="cat">
            <input type="checkbox" id="cat" name="animal[]" value="cat">
            cat
        </label>
        <label for="fox">
            <input type="checkbox" id="fox" name="animal[]" value="fox">
            fox
        </label>
        <label for="tiger">
            <input type="checkbox" id="tiger" name="animal[]" value="tiger">
            tiger
        </label>
    </fieldset>
    <input type="submit" value="Отправить">
</form>
<?php
$animal = isset($_GET['animal']) ? $_GET['animal']:'';
if (!empty($animal)){
    echo '<br><br>Выбраны: ';
    foreach ($animal as $a) {
        echo"<span style='color: green'>".htmlentities($a)." </span>";
    }
}
?>

</body>
</html>