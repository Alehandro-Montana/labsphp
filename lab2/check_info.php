<?php

$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


if (!empty($login) && !empty($password)) {
    
    switch ($login) {
        case 'log1':
            $expected_password = '5555';
            $user_name = 'Рамський Петро Іванович';
            break;
        case 'log2':
            $expected_password = '6666';
            $user_name = 'Джумаль Омар Маркович';
            break;
        case 'log3':
            $expected_password = '7777';
            $user_name = 'Губанов Олександр Сергійович';
            break;
        case 'log4':
            $expected_password = '8888';
            $user_name = 'Нестеренко Максим Володимирович';
            break;
        default:
            $expected_password = null;
            $user_name = null;
            break;
    }

    
    if ($expected_password && $password === $expected_password) {
        echo "Доброго дня, $user_name!";
    } else {
        echo "Вибачте, Ви у нас не зареєстровані.";
    }
} else {
    echo "Будь-ласка , введіть логін та  пароль.";
}
?>
