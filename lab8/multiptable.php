<?php
//Первая часть л/р-----------------------------------------
class MultipTable {
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function generateTable() {
        $table = "<h3>Таблиця множення для числа {$this->number}:</h3>";
        $table .= "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $this->number * $i;
            $table .= "<tr><td>{$this->number} * $i</td><td>=</td><td>$result</td></tr>";
        }
        $table .= "</table>";
        return $table;
    }
}


$table3 = new MultipTable(3);
$table5 = new MultipTable(5);
$table7 = new MultipTable(7);

echo $table3->generateTable();
echo $table5->generateTable();
echo $table7->generateTable();
// изменение числа и вывод таблицы
$table3->setNumber(4);
echo $table3->generateTable();
?>
