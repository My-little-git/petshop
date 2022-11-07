<?php

require '../ini.php';
require $root . '/config/connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$sql_select = "select id, name, password from users where login = '$login'";
$data = $db->query($sql_select);
$user = $data->fetch(PDO::FETCH_ASSOC);


if ($user['password'] && $password == $user['password']) {
  session_start();
  $_SESSION['auth'] = true;
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['user_name'] = $user['name'];
  $host  = $_SERVER['HTTP_HOST'];
  $extra = 'index.php';
  header("Location: http://$host/$extra");
  // header("Location: http://index.php");
  exit;
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>