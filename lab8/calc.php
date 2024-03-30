<?php
// Пятый и шестой пункт -------------------------------------------------------
class Calc {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b == 0) {
            return "Ділення на нуль неможливе";
        } else {
            return $this->divideOperation($a, $b);
        }
    }

    public function modul($a, $b) {
        if ($b == 0) {
            return "Ділення на нуль неможливе";
        } else {
            return $this->modulOperation($a, $b);
        }
    }

    public function square($a) {
        if ($a < 0) {
            return "Неможливо обчислити корінь від від'ємного числа";
        } else {
            return $this->squareOperation($a);
        }
    }

    public function power($a, $b) {
        return $this->powerOperation($a, $b);
    }

   
    private function divideOperation($a, $b) {
        return $a / $b;
    }

    
    private function modulOperation($a, $b) {
        return $a % $b;
    }

    
    private function squareOperation($a) {
        return sqrt($a);
    }

    
    private function powerOperation($a, $b) {
        return pow($a, $b);
    }
}


$Calc = new Calc();

echo "Додавання: " . $Calc->add(5, 3) . "<br>";
echo "Віднімання: " . $Calc->subtract(5, 3) . "<br>";
echo "Множення: " . $Calc->multiply(5, 3) . "<br>";
echo "Ділення: " . $Calc->divide(5, 3) . "<br>";
echo "Ділення за модулем: " . $Calc->modul(5, -3) . "<br>";
echo "Корінь квадратний: " . $Calc->square(16) . "<br>";
echo "Піднесення до степеня: " . $Calc->power(5, 3) . "<br>";
?>
