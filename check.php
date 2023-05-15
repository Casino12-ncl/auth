<?php
session_start();
require_once 'connect.php';

$error='';
if (!$_REQUEST['login']) {
    $error = 'Введите логин';     
}
if(!$_REQUEST['pass']) {
    $error = 'Введите пароль';
     
} 
if($error){
    print_r($error);
    exit();
}
    $login = $_POST['login'];
    $pass = $_POST['pass'];   
    $result = mysqli_query($connect, "SELECT * FROM users WHERE 'login' = '$login' AND 'pass'='$pass'"); 

if(!$result){
echo "неверные логин\пароль";    
exit();
}
require 'main.html';
 
?>