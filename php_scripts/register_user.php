<?php

require '../ini.php';
require $root . '/config/connect.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$rules = $_POST['rules'] == 'on' ? 1 : 0;


if ($_POST['name'] && $password == $repeat_password) {
  $sql_insert = "insert into users(name, surname, patronymic, email, login, password, rules) 
                VALUES ('$name', '$surname', '$patronymic', '$email', '$login', '$password', $rules)";
  $db->query($sql_insert);
  session_start();
  $_SESSION['auth'] = true;
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['user_name'] = $user['name'];
  $host  = $_SERVER['HTTP_HOST'];
  $extra = 'index.php';
  header("Location: http://$host/$extra");
  exit;
}



header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

?>