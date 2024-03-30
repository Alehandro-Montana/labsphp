<?php

session_start();

if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = 356;
}

$secretNumber = isset($_POST['secretNumber']) ? intval($_POST['secretNumber']) : null;

if ($secretNumber !== null) {
    if ($secretNumber == $_SESSION['number']) {
        echo 'correct';
        unset($_SESSION['number']); 
    } elseif ($secretNumber < $_SESSION['number']) {
        echo 'big';
    } else {
        echo 'small';
    }
} else {
    echo 'notGuessed'; 
}


?>
