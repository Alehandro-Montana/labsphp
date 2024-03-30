<html>
<body>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fileName = $_POST["fileName"];
    $filePath = "./" . $fileName; // Шлях до файлу у поточному каталозі

    if (file_exists($filePath)) {
        echo "<h2>Інформація про файл $fileName:</h2>";
        echo "Шлях до файлу: $filePath<br>";
        echo "Розмір файлу: " . filesize($filePath) . " байт<br>";
        echo "Час створення: " . date("F d Y H:i:s.", filectime($filePath)) . "<br>";
        echo "Час останньої модифікації: " . date("F d Y H:i:s.", filemtime($filePath)) . "<br>";
        echo "<h3>Вміст файлу:</h3>";
        echo "<pre>" . htmlspecialchars(file_get_contents($filePath)) . "</pre>";
    } else {
        echo "<p>Файл з іменем $fileName у поточному каталозі не існує.</p>";
    }
}
?>

<h2>Перевірка файлу</h2>
<form method="post" action="">
    <label for="fileName">Введіть ім'я файлу:</label>
    <input type="text" id="fileName" name="fileName" required>
    <button type="submit">Готово</button>
</form>

</body>
</html>
