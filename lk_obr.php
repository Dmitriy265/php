<?php
session_start();
require_once("db.php"); // подключение к базе - db.php
if (!isset($_POST)) {
  exit('Неверный запрос');
}
$id = $_SESSION['id'];
$response = "";
foreach($_POST as $name=>$value) {
  $value = htmlspecialchars(trim($value));
  if($name == 'login' or $name == 'password' or $name == 'id') {
    exit("Нельзя поменять пароль или логин");
  }
  $result = $mysqli->query("UPDATE `users` SET `$name`='$value' WHERE `id` = '$id'");
  if ($result) {
    $response = "Данные обновлены";
    $_SESSION[$name] = $value;
  } else {
    $response = "Не удалось обновить данные";
  }
}

exit($response);// response - как реторн в джава скрипт
