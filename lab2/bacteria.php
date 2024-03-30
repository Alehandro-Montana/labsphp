<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $initbacteria = $_POST["initbacteria"];
    $finalbact = $_POST["finalbact"];

    // Проверяем, что начальное число бактерий меньше конечного
    if ($initbacteria < $finalbact) {
        $hours = 0;
        $currentbact = $initbacteria;
        
        echo "<h3>Показники росту бактерій:</h3>";
        echo "<ul>";
        do {
            $hours++;
            $currentbact *= 2;
            echo "<li>$hours година (-ини) - кількість бактерій: $currentbact</li>";
        } while ($currentbact < $finalbact);
        echo "</ul>";
    } else {
        echo "<p>Помилка: Початкова кількість бактерій має бути менше за кінцеву.</p>";
    }
}
?>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeric = $_POST["numeric"];
        if ($numeric >= 2 && $numeric <= 9) {
            multiTable($numeric);
        } else {
            echo "<p style='color: red;'>Введене число повинно бути від 2 до 9.</p>";
        }
    }

    function multiTable($numeric) {
        echo "<h3>Таблиця множення для числа $numeric:</h3>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $numeric * $i;
            echo "<li>$numeric * $i = $result</li>";
        }
        echo "</ul>";
    }