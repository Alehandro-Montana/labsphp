
<?php

$rowColors = array("#b7ca24", "#40ca24", "#c0c0c0", "#24caa9", "#808080", "#ca2424", "#2469ca", "#ca24b4", "#ca243d", "#db8f14");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    echo "<h3>Таблиця множення для числа $number</h3>";
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        
        $colorIndex = $i % count($rowColors);
        $color = $rowColors[$colorIndex];
        echo "<tr style='background-color: $color;'>"
        echo "<td>$number * $i = </td>";
        echo "<td>$result</td>";
        echo "</tr>";
    }
    echo "</table>";
}


?>
