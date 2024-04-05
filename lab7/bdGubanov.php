<?php
// Получение данных из формы
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password =  $_POST['password'];
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$email = $_POST['email'];
$note = $_POST['note'];

$mysql = new mysqli('localhost', 'root', '', 'Gubanov');


if ($mysql->connect_error) {
    die("Ошибка подключения: " . $mysql->connect_error);
}


$query = "INSERT INTO `Kor` (`login`, `password`, `name`, `birth_date`, `gender`, `country`, `email`, `note`)
        VALUES ('$login', '$password', '$name', '$birthdate', '$gender', '$country', '$email', '$note')";

if ($mysql->query($query) === TRUE) {
    
    if ($mysql->affected_rows > 0) {
        echo "Новая запись успешно добавлена";
    } else {
        echo "Запись не была добавлена";
    }
} else {
    echo "Ошибка при выполнении запроса: " . $mysql->error;
}

$query = "SELECT * FROM `Kor`";


$result = $mysql->query($query);


if ($result->num_rows > 0) {

    echo "<table border='1'>
            <tr>
                <th>Login</th>
                <th>Password</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Email</th>
                <th>Note</th>
            </tr>";

    // Вывожу данные каждого пользователя
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['login'] . "</td>
                <td>" . $row['password'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['birth_date'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['country'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['note'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Нет данных о пользователях";
}

$mysql->close();
?>
