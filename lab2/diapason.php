<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = $_POST["start"];
    $end = $_POST["end"];

    if ($start <= $end) {
        echo "<h3>Таблиця відношення числа 10 до всіх цілих чисел у вказаному діапазоні ($start до $end)</h3>";
        echo "<table>";
        for ($i = $start; $i <= $end; $i++) {
            // Перевірка ділення на  0
            if ($i == 0) {
                echo "<tr><td colspan='2'>Ділення на 0 неможливе</td></tr>";
                break;
            }
            $result = 10 / $i;
            echo "<tr><td>10 / $i = </td><td>$result</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Некоректний діапазон: Початок ($start) має бути меншим або рівним кінцю ($end).</p>";
    }
}
?>