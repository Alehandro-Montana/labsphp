<?php

$conn = new mysqli("localhost", "root", "", "MySiteDB");
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}



// Обработка формы для создания записи в таблице Notes
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $article = $_POST["article"];

   
    $sql = "INSERT INTO `Notes` (`created`, `Title`, `Article`) VALUES (NOW(), '$title', '$article')";
    if ($conn->query($sql) === TRUE) {
        echo "Note created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



// Обработка формы для создания записи в таблице Comments
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author = $_POST["author"];
    $comment = $_POST["comment"];
    $art_id = $_POST["art_id"];

    // Вставка записи в таблицу Comments
    $sql = "INSERT INTO `Comments` (`created`, `Author`, `Comment`, `Art_id`) VALUES (NOW(), '$author', '$comment', '$art_id')";
    if ($conn->query($sql) === TRUE) {
        echo "Comment created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Обработка формы для создания записи в таблице Privileges
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $rights = $_POST["rights"];


    $sql = "INSERT INTO `Privileges` (`Name`, `Password`, `Rights`) VALUES ('$name', '$password', '$rights')";
    if ($conn->query($sql) === TRUE) {
        echo "Privilege created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//--------------------
// SQL запрос для выборки всех записей из таблицы Privileges, отсортированных по имени в алфавитном порядке
$sql_privileges = "SELECT * FROM Privileges ORDER BY Name";
$result_privileges = $conn->query($sql_privileges);
if ($result_privileges->num_rows > 0) {
    
    while ($row = $result_privileges->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Имя: " . $row["Name"]. " - Пароль: " . $row["Password"]. " - Права: " . $row["Rights"]. "<br>";
    }
} else {
    echo "0 результатов";
}

// SQL запрос для выборки всех записей из таблицы Comments, связанных с  Art_id
$sql_comments = "SELECT * FROM Comments WHERE Art_id = 1"; 
$result_comments = $conn->query($sql_comments);
if ($result_comments->num_rows > 0) {
    
    while ($row = $result_comments->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Автор: " . $row["Author"]. " - Комментарий: " . $row["Comment"]. "<br>";
    }
} else {
    echo "0 результатов";
}

// SQL запрос для обновления данных в таблице Notes
$sql_update_notes = "UPDATE Notes SET Title = 'Новый заголовок', Article = 'Новая статья' WHERE id = 1"; // Здесь 1 - это id заметки, которую вы хотите обновить
if ($conn->query($sql_update_notes) === TRUE) {
    echo "Данные обновлены успешно";
} else {
    echo "Ошибка при обновлении данных: " . $conn->error;
}


$conn->close();
?>
