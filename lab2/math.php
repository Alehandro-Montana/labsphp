<?php

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    
    if (ctype_digit($num1) && ctype_digit($num2)) {
       
        $sum = $num1 + $num2;
        $diff = $num1 - $num2;
        $mul = $num1 * $num2;
        $div = $num1 / $num2;
        $mod = $num1 % $num2;

       
        if ($num1 > $num2) {
            $bigger = $num1;
        } elseif ($num2 > $num1) {
            $bigger = $num2;
        } else {
            $bigger = 'Числа рівні';
        }

      
        echo "Результати простих арифм.операцій:<br>";
        echo "$num1 + $num2 = $sum<br>";
        echo "$num1 - $num2 = $diff<br>";
        echo "$num1 * $num2 = $mul<br>";
        echo "$num1 / $num2 = $div<br>";
        echo "$num1 % $num2 = $mod<br><br>";
        echo "Більше число: $bigger<br>";

        
        if ($num1 % 2 == 0) {
            echo "$num1 -  парне число.<br>";
        } else {
            echo "$num1 -  не парне число.<br>";
        }
        if ($num2 % 2 == 0) {
            echo "$num2 -  парне число.";
        } else {
            echo "$num2 -  не парне число.";
        }
    } else {
        echo "Будь ласка, введіть цілі числа.";
    }
}

?>
