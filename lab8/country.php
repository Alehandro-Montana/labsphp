<?php
// Вторая часть------------------------------------------------------
class Country {
    private $name;
    private $capital;
    private $population;

    public function __construct($name, $capital, $population) {
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
    }

    public function getName() {
        return $this->name;
    }

    public function getCapital() {
        return $this->capital;
    }

    public function getPopulation() {
        return $this->population;
    }

    public function displayInfo() {
        $info = "<tr><td>Назва країни:</td><td>{$this->name}</td></tr>";
        $info .= "<tr><td>Столиця:</td><td>{$this->capital}</td></tr>";
        $info .= "<tr><td>Кількість населення у столиці:</td><td>{$this->population}</td></tr>";
        return $info;
    }
}


$countries = array(
    new Country("Україна", "Київ", 2800000),
    new Country("Чехія", "Прага", 1309000),
    new Country("Німеччина", "Берлін", 3769000),
    new Country("Франція", "Париж", 2200000)
);


echo "<table border='1'>";
foreach ($countries as $country) {
    echo $country->displayInfo();
}
echo "</table>";
?>
