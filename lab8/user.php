<?php
//echo "<h3>Третий и Четвертый пункт</h3>";
//Третий и Четвертый пункт --------------------------------------
class User {
    private $surname;
    private $name;
    private $age;
    private $email;

    public function __construct() {
        $this->surname = "";
        $this->name = "";
        $this->age = "";
        $this->email = "";
    }

    public function setUserData($surname, $name, $age, $email) {
        $this->surname = $surname;
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function displayUserInfo() {
        echo "<p><strong>Прізвище:</strong> {$this->surname}</p>";
        echo "<p><strong>Ім'я:</strong> {$this->name}</p>";
        echo "<p><strong>Вік:</strong> {$this->age}</p>";
        echo "<p><strong>Пошта:</strong> {$this->email}</p>";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];


    if (!empty($surname) && !empty($name) && !empty($age) && !empty($email)) {
        $user = new User();
        $user->setUserData($surname, $name, $age, $email);
        $user->displayUserInfo();
    } else {
        echo "<p style='color: red;'>Будь ласка, заповніть всі поля форми.</p>";
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Форма для введення даних користувача</title>
</head>
<body>
    <h2>Форма для введення даних користувача</h2>
    <form method="post" action="">
        <label for="surname">Прізвище:</label>
        <input type="text" id="surname" name="surname" required><br><br>
        <label for="name">Ім'я:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">Вік:</label>
        <input type="number" id="age" name="age" required><br><br>
        <label for="email">Пошта:</label>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Готово</button>
    </form>
</body>
</html>
