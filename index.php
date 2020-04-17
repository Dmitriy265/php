<?

header('Content-Type: text/html; charset=utf-8');
//Инкапсуляция, Носледование, Полиморфизм

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);// --- !!!!!!ПОКАЗЫВАЕТ ОШИБКИ!!!!!!!!-------//


class Person {
  //Модификаторы доступа public, protected, private
  protected $name;
  protected $middlename;
  protected $lastname;
  protected $partner;
  protected $father;
  protected $mother;
  protected $hp;
  
  
  public function __construct($name, $middlename, $lastname, $father = null, $mother = null ) {// $partner = null - значение по умолчанию
    $this->name = $name;
    $this->middlename = $middlename;
    $this->lastname = $lastname;
    $this->partner = null;
    $this->father = $father;
    $this->mother = $mother; 
    $this->hp = 100;
  }
  public function getName() {
    return $this->name;
  }
  public function setName($name) {
    $this->name = $name;
  }// ИНКАПСУЛЯЦИЯ - Заключение в капсулу (чтоб другие не имели досупа для изменений) Василий но выдаст Сергей вместо Василий, потому что Василий защищен//

  public function getMiddlename() {
    return $this->middlename;
  }
  public function getLastname() {
    return $this->lastname;
  }

  public function setLastname($lastname) {
    $this->lastname = $lastname;
  }
  public function getPartner() {
    return $this->partner;
  }
  public function setPartner($person) {
    $this->partner = $person;
  }
  
  public function getFather() {
    return $this->father;
  }
  public function getMother() {
    return $this->mother; 
  }
  public function getHp() {
    return $this->hp; 
  }
  protected function setHp($hp) {
    if ($hp > 100) {
      $this->hp =100;
    } elseif ($hp <= 0) {
      //$this->hp = 0; 
      $this->die();
    } else {
      $this->hp = $hp;
    }
  }
  public function smoke() { // - 5 hp
    $this->setHp( $this->getHp() - 5 );
  }
  public function takeHealthCare() { // + 10 hp
    $this->setHp( $this->getHp() + 10 );
  }
  protected function die() { 
    echo $this->getName()." Умер :(";
  }
  
  
  
  public function marry($person) {
    $this->setPartner($person);
    $person->setPartner($this);
    $person->setLastname($this->getLastname());
  }
  
}

$vasilisa = new Person("Василиса", "Васильевна", "Придумовна");
$vasya = new Person("Василий", "Васильевич", "Smith");//vasya - объект класса Person
//$vasya->setName("Сергей");
$anna = new Person("Василий", "Васильевич", "Smith", $vasya, $vasilisa);
//echo $anna->getFather()->getName();
$vasya->marry($vasilisa);



$vasya->smoke();
$vasya->smoke();
/*$vasya->smoke();
$vasya->takeHealthCare();*/
for ($i = 0; $i < 18; $i++) {
 $vasya->smoke(); 
}
//echo $vasya->getHp();


//echo $vasya->getName()." ".$vasya->getMiddlename()." ".$vasya->setLastname()."<br>";
//echo "Жена: ".$vasya->getPartner()->getName()." ".$vasya->getPartner()->getLastname();


