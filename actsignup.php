<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LMS";

$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $profession = $_POST['profession'];

    $sql = "INSERT INTO users (username, password, name, surname, email, phone, age, city, profession) VALUES 
        ('$username', '$password', '$name', '$surname', '$email', '$phone', '$age', '$city', '$profession')";

    if($conn->query($sql) === TRUE){
        $_SESSION['username'] = $username;
        header('Location: index.php');
    }
    else{
        echo "Что-то пошло не так...";
    }
}