<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LMS";

$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE username='$username' AND `password`='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        //echo "Авторизация успешна!";
        //echo $_SESSION['username'];
        header('Location: index.php');
    } else {
        echo "Неверное имя пользователя или пароль";
    }
}