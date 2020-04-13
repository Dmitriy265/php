<?php
 /* ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  
  // ИСПРАВЛЯЕТ ОШИБКИ //
php_value display_errors 1
php_value display_startup_errors 1
php_value error_reporting E_ALL

сработало так
php_flag display_errors on
php_value error_reporting -1 */
  
  
  
?>


<meta charset="UTF-8">
<h1>Мой первый сайт на PHP</h1>
<?php
$name = "Вася";
echo "<b>Привет ".$name."!</b>";// второй вариант привет вася
echo "<br>";
echo "<b>Привет $name!</b>";// третий вариант привет вася

// <meta charset="UTF-8">- сокращенно - без !Tab,  (выше) убирает кракозябры переводит в текст //
//echo "Привет мир !";

//echo "<b>Привет мир !</b>";//жирный текст 
//echo 555 -выведит число
?>
<div style="border:4px solid red; margin-top: 10px">
  <?php
    $bananas = 5;
    $apples =10;
    $fruitsTotal = $bananas +  $apples;
    echo "$name съел $fruitsTotal фруктов";// сложение, можно применить другие функции + - / *  %
    echo  "<br>";
    
    define("PI", 3.14);//
    $radius = 10;
    $square = PI * ($radius**2);
    echo $square;
    echo  "<br>";
    
    $stringNumber = "500";//
    $number = (integer)$stringNumber;
    echo $number + $number;
    echo  "<br>";
    
    $number = 3.49;// округляет число
    echo ceil($number)."<br>";
    echo round($number)."<br>";
    echo floor($number)."<br>";
    echo rand(10, 100)."<br>";// меняется от и до
    
    $string = "Привет, ";
    $string = "Вася ! ";
    echo $string."<br>";
  ?>
</div>
<div style="border:4px solid green; margin-top: 10px">
  <?php
    $a = 5;
    if ($a == 7) {
      echo "Равно";
    } else {
      echo "Не равно";  
    }// условие равно не равно
  ?>

</div>
</div>
<div style="border:4px solid pink; margin-top: 10px">
  <?php
    $a = 4;
    if (($a > 0 and $a <=7) or $a == 15) {// или($a > 0 and $a <=7) условие или or $a == 15) условие будет выполнятся
      echo "Равно";
    } else {
      echo "Не равно";  
    }
    echo  "<br>";
    
    $food = "apple";
    if($food == "apple") {
      echo $food. " - фрукт";
    } elseif ($food == "cucumber") {
      echo $food. " - овощ";
    } else {
      echo $food. " - не съедобно";
    }                                          //==========первый вариант
     echo  "<br>";// echo  "<br>"; отделение от //
    /*$food = "tomato";
    switch ($food) {
      case "apple":
        echo $food." - фрукт";
        break;
      case "peach":
        echo $food." - фрукт";
        break;  
      case "orange":
        echo $food." - фрукт";
        break;
      case "cucumber":
        echo $food." - овощ";
        break;
      case "carrot":
        echo $food." - овощ";
        break;
      case "tomato":
        echo $food." - овощ";
        break;
      default:
       echo $food." - не съедобен"; 
    }*/                             //=========второй  вариант
    
    
    $food = "tomato";
    switch ($food) {
      case "apple":
      case "peach":
      case "orange":
        echo $food." - фрукт";
        break;
      case "cucumber":
      case "carrot":
      case "tomato":
        echo $food." - овощ";
        break;
      default:
       echo $food." - не съедобен";    
    } //  сокращенный вариант второго  
  ?>
</div>  
  
 <h2> ЦИКЛЫ </h2> 
  
 <div style="border:2px solid black; margin-top: 10px">
  <?php 
   for($i =0; $i <= 10; $i++) {
     echo $i." | ";// цифры в стоку разделенные
   }
    echo  "<br>";
    $count = 0;
    while ($count < 5) {
      echo "<p>Счетчик: $count <p>";
      $count++;
    }
    echo  "<br>";
    do {// цикл do проходит 1 раз
      echo "<p><b>Do cчетчик: $count</b></p>";
    } while ($count > 10);// счетчики
  
    $cars = ['Лексус', 'Ламборджини','БМВ', 'Феррари','Лада'];
    for ($i = 0; $i < count( $cars) - 1; $i++) {
      echo $cars[$i].", ";
    }
    echo $cars[count( $cars) - 1];
    echo  "<br>";// первый вариант длинный, без запятой после последнего слова//
    
    foreach ($cars as $car) {
      echo $car.", ";// второй вариант короткий//
   }
   echo  "<br>";//echo  "<br>"; отделение от части 1 //
   
   $family = array(
     "Папа" => "Вася",
     "Мама" => "Света",
     "Сын" => "Дима",
     "Мама" => "Света",
     "Дочь" => "Катя",
    );
    
    echo $family["Сын"]."<br>";//Array
    /*echo var_dump($family);//Array//ЧТОБЫ ПОСМОТРЕТЬ КАКВЫГЛЯДИТ (ТИПА КОНСОЛЬ) -ЗАТЕМ УЖНО УБРАТЬ//*/
    
    echo "<table border='1'>";
    echo "<tr><th>Ключ</th><th>Значение</th></tr>";
    foreach($family as $key => $name) {
      echo "<tr><td>$key</td><td>$name</td></tr>";
    }
    echo "</table>";// в таблице...
  ?>
  
  
</div>
<div style="display: flex; justify-content: center; border: 3px solid black; margin: 35px 0; padding: 15px">
  <table border="1">
    <?php
      for ($i = 1; $i < 10; $i++) {
      echo  "<tr>";
      for ($j = 1; $j < 10; $j++) {
        $multiply = $i*$j;
        echo  "<td>$j * $i = $multiply</td>";
      }
      echo "</tr>";
    }// ---------------------------ТАБЛИЦА УМНОЖЕНИЯ-----------------------------------------//
    ?>
  </table>
</div>
<!-- <hr>  
  <tr>
      <th>12</th>
      <th>12</th>
    </tr>
    <tr>
     <td>51</td>
     <td>51</td> 
    </tr>
</hr> // ПРОСТАЯ ТАБЛИЦА // -->
  
    
<div style="display: flex; justify-content: center; border: 3px solid black; margin: 35px 0; padding: 15px">
    <?php
      $vasyapetrov = array("name" => "Вася", "lastname" => "Петров");
      function getUserName($user) {
        return $user["name"];
      }  
      echo getUserName($vasyapetrov);
      echo  "<br>";// echo  "<br>"; отделение //
      
      $text = "sometext";
      function showText() {
        global $text;
        $text .= " anothertext";
      }
      showText();
      echo $text;
      echo  "<br>";
      
      function func() {
        static $count = 0;//static объявляет функцию 1 раз//
        $count++;
        echo $count.'<br>';
        if($count < 10) {
          func();
        }
      }
      func();
    ?>  
</div>
<h2>Работа со строками в PHP</h2>
<div>
  <?php
    $string = "съешь еще этих мягких французских булок";
    echo mb_strlen($string)."<br>";//echo mb_strlen считает по русски,echo strlen считает английские буквы//
    $striposString = mb_stripos($string, "еще");// найти с какого числа начинается еще //
    echo $striposString.'<br>';
    $stristrString = mb_stristr($string, "мягких");
    echo $stristrString.'<br>';// найдет мягких французских булок //
    
    echo mb_substr($string, 6, 8).'<br>';// найдет еще этих //
    echo mb_substr($string, -5, 3).'<br>';// найдет бул //
    echo mb_substr($string, 6, -5).'<br>';// найдет еще этих мягких французских // 
    echo mb_substr($string, -17, -5).'<br>';// найдет французских //
    
    
    $string2 = "heiio my name is kermit frog";
    echo ucfirst($string2).'<br>';// предложение начнет с заглавной букв//
    echo ucwords($string2).'<br>';// все слова с заглавной буква//
    echo strtoupper($string2).'<br>';// всё предложение с заглавной буквы//
    
    $username = "     VasyaPetrov ";
    echo "/". $username.'/<br>';// на выходе /VasyaPetrov/ 
    $username = trim($username);//  trim СРЕЗАЕТ - прбелы в данном случае
    echo "/". $username.'/';// на выходе /VasyaPetrov/ 
    echo  "<br>";
    
    $mass = explode(" ",$string);
    echo var_dump($mass);// на выходе array(6) { [0]=> string(10) "съешь" [1]=> string(6) "еще" [2]=> string(8) "этих" [3]=> string(12) "мягких" [4]=> string(22) "французских" [5]=> string(10) "булок" } */
    echo  "<br>";
    
    $mass = explode(" ",$string);
    echo implode(", ", $mass);//съешь, еще, этих, мягких, французских, булок
    
  ?>
</div>

<hr>
<h2>Работа с массивами</h2>
<div>
  <?php
    $cars = ['Лексус', 'Ламборджини','БМВ', 'Феррари','Лада'];
    $cars [] = "Копейка";
    echo var_dump($cars)."<br>";
    
    $lastCar = array_pop($cars);
    echo var_dump($cars)."<br>";
    echo $lastCar."<br>";
    
    $firstCar = array_shift($cars);
    echo var_dump($cars)."<br>";
    echo $firstCar."<br>";
    
    array_unshift($cars,"Тойота");
    echo var_dump($cars)."<br>";
  ?>
</div>
<hr> 
<div>
  <?php
    $cmsList = ["Wordpress", "Joomla", "1C-Bitrix", "Moodle", "OpenCart"];
    $sliceList = array_slice($cmsList, 2, 2);
    echo var_dump($sliceList);// на выходе array(2) { [0]=> string(9) "1C-Bitrix" [1]=> string(6) "Moodle" }
    echo "<br>";
    
    $cmsList = ["Wordpress", "Joomla", "1C-Bitrix", "Moodle", "OpenCart"];
    $deletedCms = array_slice($cmsList, 2, 2, ["Drupal", "ModX"]);
    echo var_dump($cmsList)."<br>";//array(5) { [0]=> string(9) "Wordpress" [1]=> string(6) "Joomla" [2]=> string(9) "1C-Bitrix" [3]=> string(6) "Moodle" [4]=> string(8) "OpenCart" } 
    echo var_dump($deletedCms);//NULL    ??????????????????????????????
    echo "<br><br>";
    
    $cmsList = ["Wordpress", "Joomla", "1C-Bitrix", "Moodle", "OpenCart"];
    $reverseCmsList = array_reverse($cmsList);
    echo var_dump($reverseCmsList);// перевернет массив array(5) { [0]=> string(8) "OpenCart" [1]=> string(6) "Moodle" [2]=> string(9) "1C-Bitrix" [3]=> string(6) "Joomla" [4]=> string(9) "Wordpress" } 
    echo "<br><br>"; 
    
    $cars = ['Лексус', 'Ламборджини','БМВ', 'Феррари','Лада']; 
    sort($cars);
    echo var_dump($cars);// сортировка array(5) { [0]=> string(6) "БМВ" [1]=> string(8) "Лада" [2]=> string(22) "Ламборджини" [3]=> string(12) "Лексус" [4]=> string(14) "Феррари" } 
    echo "<br><br>";
    
    $hasLada = in_array('Лада',$cars);
    echo var_dump($hasLada);//bool(true) 
    
  ?>  
</div>
<hr>       










  

