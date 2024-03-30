<?php
$filename = "test.txt";
$file = fopen($filename, "r") or die("Неможливо відкрити файл");

$kTags = 0;


echo "<table border='1'>";
while (!feof($file)) {
    $line = fgets($file);
    if (!empty($line)) {
        $kTags++;
        $column = explode("\t", $line);
        if (count($column) == 2) {
           
            $tagName =  "&lt;". $column[0] . '>';
            echo "<tr><td>{$tagName}</td><td>{$column[1]}</td></tr>";
        }
        
    }
}
echo "</table>";

fclose($file);

echo "<p>Всього у файлі описано тегів: $kTags</p>";
?>
