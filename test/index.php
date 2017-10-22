<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>PhpStorm</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
    <style type="text/css">
    </style>
</head>
<body>
    <p>Написал</p>
    <p>Привет мир</p>
    <div>
        Какаято куча текста
    </div>
    <?php
    $x = -3;
    $x = $x < 0 ? -$x : $x;
    echo "$x<br>";
        echo 'Привет пхп'
    ?><br>
    <input id="val1" type="number"/><br><br>
    <input id="val2" type="number"/><br><br>
    <button>Посчитать</button><br>
    <p id="result">Тут будет ответ</p>
</body>
</html>