<?php
$mysqli = new mysqli("localhost", "root", "", "LMS");

// Проверяем подключение
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
} else {
    echo "Подключение к MySQL успешно установлено!";
}

// Закрываем подключение
$mysqli->close();
?>