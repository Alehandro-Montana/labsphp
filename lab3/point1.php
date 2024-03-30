<?php

//ПЕРВАЯ ЧАСТЬ---------------------
echo "<h3>Первый пункт---------------------------</h3>";
$numbers = array(3, 5, 4, 12, 9);

foreach ($numbers as $number) {
    $square = $number * $number;
    echo "$number^2=$square <br> ";
}
//----------------------------------
//ВТОРАЯ ЧАСТЬ ---------------------
$countries = array(
    "Україна" => array("population" => 43000000, "capital" => "Київ"),
    "США" => array("population" => 331000000, "capital" => "Вашингтон"),
    "Китай" => array("population" => 1441000000, "capital" => "Пекін"),
    "Молдова" => array("population" => 2539000, "capital" => "Кишинів"),
    "Бразилія" => array("population" => 213000000, "capital" => "Бразиліа")
);

echo "<h3>Второй пункт--------------------------</h3>";
echo "<table border='1'>";
foreach ($countries as $country => $info) {
    echo "<tr><td>$country</td><td>" . $info['population'] . ', ' . $info['capital'] . "</td></tr>";
}
echo "</table><br>";


echo "<table border='1'>";
echo "<tr>";
foreach ($countries as $country => $info) {
    echo "<td>$country</td>";
}
echo "</tr><tr>";
foreach ($countries as $country => $info) {
    echo "<td>" . $info['population'] . ', ' . $info['capital'] . "</td>";
}
echo "</tr>";
echo "</table>";


//Четвертая часть--------------------------------
echo "<h3>Четвертый пункт------------------------</h3>";

$squares = [];
for ($i = 10; $i <= 20; $i++) {
    $squares[] = $i * $i;
}

$cubes = [];
for ($i = 1; $i <= 10; $i++) {
    $cubes[] = $i * $i * $i;
}

$combine = array_merge($squares, $cubes);

echo "Об'єднаний масив:<br>";
foreach ($combine as $index => $value) {
    echo "Елемент $index: $value<br>";
}
?>
