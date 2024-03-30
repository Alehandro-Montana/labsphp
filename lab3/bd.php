<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["surname"]) && isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["email"])) {
        
        $data = array(
            "Прізвище" => $_POST["surname"],
            "Ім`я" => $_POST["name"],
            "Вік" => $_POST["age"],
            "Email" => $_POST["email"]
        );

        
        echo "<h2>Дані з форми</h2>";
        echo "<table border='1'>";
        foreach ($data as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    } else {
        
        echo "<p style='color: red;'>Помилка! Всі поля форми повинні бути заповнені.</p>";
    }
}
?>