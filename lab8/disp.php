<?php
// СЕДЬМОЙ ПУНКТ -----------------------------------------------------
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

    protected function powerOperation($a, $b) {
        return pow($a, $b);
    }
}

class Dispatcher {
    private $calculator;

    public function __construct(Calc $calculator) {
        $this->calculator = $calculator;
    }

    public function display() {
        echo "<form method='post'>";
        echo "Число 1: <input type='text' name='num1'><br>";
        echo "Число 2: <input type='text' name='num2'><br>";
        echo "<select name='operation'>";
        echo "<option value='add'>Додавання</option>";
        echo "<option value='subtract'>Віднімання</option>";
        echo "<option value='multiply'>Множення</option>";
        echo "<option value='divide'>Ділення</option>";
        echo "<option value='modul'>Ділення за модулем</option>";
        echo "<option value='square'>Корінь квадратний</option>";
        echo "<option value='power'>Піднесення до степеня</option>";
        echo "</select><br>";
        echo "<input type='submit' value='Розрахувати'>";
        echo "</form>";
    }

    public function dispatch() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            if (!is_numeric($num1) || !is_numeric($num2)) {
                echo "Будь ласка, введіть числові значення.";
                return;
            }

            switch ($operation) {
                case 'add':
                    echo "Результат: " . $this->calculator->add($num1, $num2);
                    break;
                case 'subtract':
                    echo "Результат: " . $this->calculator->subtract($num1, $num2);
                    break;
                case 'multiply':
                    echo "Результат: " . $this->calculator->multiply($num1, $num2);
                    break;
                case 'divide':
                    echo "Результат: " . $this->calculator->divide($num1, $num2);
                    break;
                case 'modul':
                    echo "Результат: " . $this->calculator->modul($num1, $num2);
                    break;
                case 'square':
                    echo "Результат: " . $this->calculator->square($num1);
                    break;
                case 'power':
                    echo "Результат: " . $this->calculator->power($num1, $num2);
                    break;
                default:
                    echo "Невідома операція";
                    break;
            }
        }
    }
}


$calculator = new Calc();
$dispatcher = new Dispatcher($calculator);


$dispatcher->display();
$dispatcher->dispatch();
?>
