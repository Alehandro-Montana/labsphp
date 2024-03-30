<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $mode = $_POST["mode"];

    // Режим "Вхід"
    if ($mode == "login") {
        $filename = "./users/" . $login . ".txt"; // Путь к файлу для данного пользователя

        if (file_exists($filename)) {
            $savedPassword = file_get_contents($filename); // Получаем пароль из файла

            if ($password == $savedPassword) {
                echo "Доброго дня, $login!";
            } else {
                echo "Пароль не правильний";
            }
        } else {
            echo "Такий користувач не зареєстрований!";
        }
    }

    // Режим "Реєстрація"
    elseif ($mode == "register") {
        $filename = "./users/" . $login . ".txt"; // Путь к файлу для данного пользователя

        if (!file_exists($filename)) {
            file_put_contents($filename, $password); // Создаем файл и записываем пароль
            echo "Користувача зареєстровано!";
        } else {
            echo "<p >Логін зайнятий. Будь ласка, оберіть інший.</p>";
        }
    }
}
?>

<h2>Вхід або реєстрація</h2>
<form method="post" action="">
    <label for="login">Логін:</label>
    <input type="text" id="login" name="login" required><br>

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="radio" id="loginMode" name="mode" value="login" required>
    <label for="loginMode">Вхід</label>

    <input type="radio" id="registerMode" name="mode" value="register" required>
    <label for="registerMode">Реєстрація</label><br>

    <button type="submit">Готово</button>
</form>
