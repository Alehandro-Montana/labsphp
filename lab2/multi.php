<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["numeric"]; 
        if ($number >= 2 && $number <= 9) {
            echo "<h3>Таблиця множення для числа $number:</h3>";
            multiplicationTable($number);
        } else {
            echo "<p style='color: red;'>Введене число повинно бути від 2 до 9.</p>";
        }
    }

    function multiplicationTable($number) {
        
        echo "<table style='border-collapse: collapse; margin: 10px; border: 1px solid #000;'>"; 
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<tr>";
            echo "<td>$number * $i = $result</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "<div style='display: flex; flex-wrap: wrap; justify-content: space-around;'>";
    echo "<h3> від 2 до 9</h3><br>";
    for ($j = 2; $j <= 9; $j++) {
        multiplicationTable($j);
    }
    echo "</div>"; 
