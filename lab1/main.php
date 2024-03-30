<?php
/*
// код из примера в л/р создает HTML-таблицу, в которой каждая ячейка содержит номер строки и номер столбца,
// а также окрашена в красный или зеленый цвет в зависимости от суммы номеров строки и столбца.
$rows = 5; 
$columns = 3; 

echo '<html><body>'; 
echo '<table border="1">'; 

for ($i = 1; $i <= $rows; $i++) { 
    echo '<tr>'; 
    for ($j = 1; $j <= $columns; $j++) { 
        if (($i + $j) % 2 == 0) {
            $c = "green"; 
        } else {
            $c = "red"; 
        }
        echo '<td bgcolor="' . $c . '"><font color="yellow">' . $i . $j . '</font></td>'; 
    }
    echo '</tr>'; 
}

echo '</table>'; 
echo '</body></html>'; 

*/
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список скриптов</title>
</head>
<body>
    <h1>Список скриптов</h1>
    <ul>
        <li><a href="phpinfo.php">Информация о настройках PHP</a></li>
        <li><a href="author.php">Выполнение задания №1 и информация о разработчике </a></li>
        <li><a href="color_table.php">Таблица цветов HTML</a></li>
        <li><a href="multip_table.php">Таблица умножения</a></li>
    </ul>
</body>
</html>


