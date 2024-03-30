<?php

echo '
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаба1 PHP</title>
</head>
<body align="center">';
echo '<table border="1" width="300px" height="300px">';
for ($i = 0; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 10; $j++) {
        $color = sprintf("#%02x%02x%02x", mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));  
        echo '<td style="background-color:' . $color . ';"></td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '</body>
</html>';
?>
