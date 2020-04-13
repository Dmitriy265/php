<?php
//$_GET// пока не используем- будет видно адрес отправки, $_POST - не видно
header('Content-type: text/html; charset=utf-8');// для коректного отображения в браузере

$login = trim($_POST["login"]);
$pass = trim($_POST["pass"]);
$passrepeat = trim($_POST["passrepeat"]);
$name = trim($_POST["name"]);
$lastname = trim($_POST["lastname"]);
$patronymic = trim($_POST["patronymic"]) ;
$birthdate = trim($_POST["birthdate"]);

$login = htmlspecialchars($login);//
$pass = htmlspecialchars($pass);//
$passrepeat = htmlspecialchars($passrepeat);//
$lastname  = htmlspecialchars($lastname );//
$patronymic = htmlspecialchars($patronymic);//
$name = htmlspecialchars($name);//
$birthdate = htmlspecialchars($birthdate);// ограничения использования в строке ссылок, div, отправки на другую страницу "ЛОВУШКА ДЖОКЕРА" ---XSS АТАКА---//

if (empty($login) or empty($pass) or empty($passrepeat) or empty($lastname) or empty($patronymic) or empty($name) or empty($birthdate)) {
  exit("Не все поля заполнены");// если будет пустая строка - не даст дальше ничего делать //
}

if (!preg_match("/^([a-zA-Z0-9])+([-_\.@])*/",$login) 
    or !preg_match("/^([a-zA-Z0-9-_.])+$/",$pass)) {
  exit("Недопустимые символы в логине или пароле");
} 
 
 
 
 
//======================================== m&APj5FFПАРОЛЬ К БАЗЕ ДАННЫХ==========================================//

if ((mb_strlen($login) < 3 or mb_strlen($login) > 32)
    or (mb_strlen($pass) < 3 or mb_strlen($pass) > 16)) {
  exit("Слишком длинные или короткие логин/паполь");
}

  
if ($pass != $passrepeat) {
  exit("Пароли не совпадают");
}

$pass = password_hash($pass, PASSWORD_BCRYPT);//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  hash пароля 72 символа БЕЗ ЭТОГО ПАРОЛЬ НЕЛЬЗЯ ПОСМОТРЕТЬ В БД MySQL  !!!!!!!!!!!!!!!!!!!!!!! //

//------------------------------------- НИЖЕ ПОДКЛЮЧЕНИЕ К БД -----------------------------------------------//

$dbhost = "localhost";
$dbuser = "y95327t3_auth";
$dbpass = "m&APj5FF";
$dbname = "y95327t3_auth";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД".$mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'");
$result = $result->fetch_assoc();// приводит к ассоциативному массиву
if (isset($result)) {
  exit("Такой пользователь уже зарегистрирован");
}

$result = $mysqli->query("INSERT INTO `users`(`login`, `password`, `name`, `lastname`, `patronymic`, `birthdate`) VALUES ('$login','$pass','$name','$lastname','$patronymic','$birthdate')");

if(!$result) {
  exit("Не удалось добавить пользователя");
}
exit("Пользователь $login успешно зарегистрирован");





//exit("$login | $pass | $passrepeat | $name | $lastname | $patronymic | $birthdate <br>");// как return,  после него ничего е работает //






