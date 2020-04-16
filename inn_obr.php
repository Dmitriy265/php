<?php
header('Content-type:text/html; charset=utf-8');

$nam = htmlspecialchars(trim($_POST['name']));
$fam = htmlspecialchars(trim($_POST['lastname']));
$otch = htmlspecialchars(trim($_POST['patronymic']));
$bdate = htmlspecialchars(trim($_POST['birthdate']));
$docno = htmlspecialchars(trim($_POST['docno']));

if (empty($nam) or empty($fam) or empty($otch) or empty($docno)) {
  exit("Не все поля заполнены");
}
  


$docno = str_replace([" ", "-"], "", $docno);// убирает пробелы и тире-

if (mb_strlen($docno) != 10) {
  exit("Не корректный номер паспорта");// не более 10 цифр в номере паспорта
}

$docno = mb_substr($docno, 0, 2)." ".mb_substr($docno, 2, 2)." ".mb_substr($docno, 4);//делает пробелы в № паспорта

$bdate = explode('-', $bdate);//
$bdate = array_reverse($bdate);//
$bdate = join('.', $bdate);// переворачивает дату в нужный формат 3 верхних строчки, 

$data = "c=innMy&captcha=&captchaToken=&fam=$fam&nam=$nam&otch=$otch&bdate=$bdate&bplace=&doctype=21&docno=$docno&docdt=";
$result = getCurl("https://service.nalog.ru/inn-proc.do", $data);
if ($result['code'] == 1) {
  exit($result['inn']);
} else {
  exit( var_dump($result) ); 
}

function getCurl($url, $data) {
  $curl = curl_init();// Инициализируем сессию curl
  curl_setopt($curl, CURLOPT_URL, $url);//На какой  url идет запрос
  curl_setopt($curl, CURLOPT_POST, true);//Указываем что отправляем методом POST 
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);// тело запроса POST
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);// Переводит ответ из текста в массив
  $result = curl_exec($curl);//Выполняем запрос curl
  curl_close($curl);// Закрывает сессию curl
  $result = json_decode($result, true);
  return $result;
}


 
//exit("$nam |$fam | $otch | $bdate | $docno");
