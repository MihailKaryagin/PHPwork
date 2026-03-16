<?php
//session_start();
////$param1 = $_GET['param1'];
////$param2 = $_GET['param2'];
////$res = $param1 + $param2;
////$res2 = $param1 - $param2;
////$res3 = $param1 * $param2;
////$res4 = $param1 / $param2;
////$data = array('p1' => $param1, 'p2' => $param2, 'res' => $res, 'res2' => $res2, 'res3' => $res3, 'res4' => $res4);
////$jsonString = json_encode($data);
////echo $jsonString;
////$data = array('p1' => 345, 'p2' => 346, 'res' => 345,);
////$full1 = 0;
////foreach ($data as $key => $value) {
////    $full1 += $value;
////    echo $full1;
////
////    echo $key . "=>" . $value . "<br>";
////}
////
////$arr = array(1,2,3,4,5,6,7,8,9);
////$full = 0;
////for ($i = 0; $i < count($arr); $i++) {
////    $full = $full + $arr[$i];
////    echo $full . "<br>";
////}
////
////
////$kv_arr = [
////    [1,2,3],[4,5,6],[7,8,9]
////];
////
////
////foreach ($kv_arr as $key => $value) {
////    echo $key . "=>" . $value . "<br>";
////}
//
//
////задача1
////создать функцию вычисляения квадрата числа без использования встроенной функции
//echo "Задача 1 <br/>";
//
//
//function myfanc($number)
//{
//    return $number * $number;
//}
//
//$num1 = 5;
//print(myfanc($num1));
//echo "<br/>";
//
//
//
////задача2
////создать функцию, которая определяет наибольшее значение из двух чисел без использования встроенной функции
//echo "Задача 2 <br/>";
//
//
//function biggest($numb1,$numb2)
//{
//    if ($numb1 > $numb2) {
//        return $numb1;
//    }elseif ($numb1 < $numb2) {
//        return $numb2;
//    }
//
//}
//$numb1 = 5;
//$numb2 = 4;
//print(biggest($numb1,$numb2));
//echo "<br/>";
////
////задача3
////создать функцию, которая принимает в аргументе массив и определяет максимальный элемент и возвращает его
//echo "Задача 3 <br/>";
//
//function maxarrayelement($array)
//{
//    $max = $array[0];
//    for ($i = 0; $i < count($array); $i++) {
//        if ($array[$i] > $max) {
//            $max = $array[$i];
//
//        }
//    }
//    return $max;
//}
////
////$array1 = [1,2,3,4,5,6,7,8,9];
////print_r(maxarrayelement($array1));
//echo "<br/>";
//
//
//
//
//
////
////задача4
////создать функцию которая вычисляет площадь круга или квадрата по заданным параметрам
//echo "Задача 4 <br/>";
//
//function ploshadKvadrata($side1,$side2,$radius1)
//{
//    return $side1*$side2;
////    return M_PI*($radius1*$radius1);
//}
//
//echo "<br/>";
//
//
////
////задача5
////Создать функцию, которая определяет длину ассоциативного массива
//
//function dlin($asc_arr)
//{
//    if (is_array($asc_arr)) {
//        $col = 0;
//        foreach ($asc_arr as $v) {
//            $col+=1;
//        }
//        return $col;
//    }
//}

//class Person
//{
//
//    public $name;
//    public $last_name;
//
//    public $otch;
//
//    public $age;
//
//    public $weight;
//
//    public $height;
//
//    public $IMT;
//
//
//
//
//    public function __construct($name, $last_name, $otch, $age, $weight, $height)
//    {
//        $this->name = $name;
//        $this->last_name = $last_name;
//        $this->otch = $otch;
//        $this->age = $age;
//        $this->weight = $weight;
//        $this->height = $height;
//        $this->IMT = $weight / ($height / 100 * $height/100);
//
//
//
//
//
//    }
//}
//
//$obj = new Person("Святогор","Лукашенко","Васильевич",31, 100, 185);
//print "Имя: " . $obj->name;
//echo "<br/>";
//
//print "Фам: " . $obj->last_name;
//echo "<br/>";
//
//print "Отчество: " . $obj->otch;
//echo "<br/>";
//
//print "Возраст: " . $obj->age;
//echo "<br/>";
//
//print "Вес: " . $obj->weight;
//echo "<br/>";
//
//print "Рост: " . $obj->height;
//echo "<br/>";
//
//print "Итоговый индексы массы тела: " . $obj->IMT;





//имя фамилия отчество возраст вес и рост



//function myfanc($number)
//{
//    return $number * $number;
//}
//
//$num1 = 5;
//print(myfanc($num1));
//echo "<br/>";

//class Person
//{
//    public $name;
//    public $hp;
//    public $dmg;
//
//    public $heal;
//    public $alive;
//
//    public function __construct($name, $hp , $dmg , $alive , $heal ) {
//        $this->name = $name;
//        $this->hp = $hp;
//        $this->alive = $alive;
//        $this->heal = $heal;
//        $this->dmg = $dmg;
//    }
//    public function takedamage($dmg){
//        if (!$this->alive) return;
//        $this->hp -= $dmg;
//        if ($this->hp <= 0) {
//            $this->hp = 0;
//            $this->alive = 0;
//            echo "{$this->name} погиб \n";
//        } else {
//            echo "{$this->name} получил {$dmg} урона \n";
//            echo "Осталось {$this->hp}\n";
//        }
//
//
//    }
//    public function getheal($heal){
//        if (!$this->alive) return;
//        $this->hp += $heal;
//        if ($this->hp > 100) $this->hp = 100;
//        echo "{$this->name} вылечели. Теперь у {$this->hp} здоровья.\n";
//    }
//}
//class Warrior extends Person
//{
//    public function __construct($name, $hp = 100, $dmg = 10, $heal = 0, $alive = 1)
//    {
//    }
//
//    public function attack($target)
//    {
//        if (!$this->alive) {
//            return;
//        }
//        echo "{$this->name} атаковал {$target->name}\n";
//        $target->takeDamage($this->dmg);
//    }
//}
//
//
//class Zhitel extends Person {
//    public function __construct($name, $hp = 100, $dmg = 0, $heal = 0, $alive = 1){}
//
//}
//
//class Healer extends Person {
//    public function __construct($name, $hp = 100, $heal = 5, $dmg = 0, $alive = 1) {
//    }
//    public function heal_person($target) {
//        if (!$this->alive) {
//            return;
//        }
//        echo "{$this->name} лечит {$target->name}\n";
//        $target->receiveHeal($this->heal);
//    }
//    public function attack($target) {
//        if (!$this->alive) {
//            return;
//        }
//
//    }
//
//}
//
//
//
//$village1_warrior = new Warrior("Воин из деревни 1", 100, rand(5,10));
//$village1_healer = new Healer("Лекарь из деревни 1", 100, 5);
//$village1_zhitel = new Zhitel("Житель деревни 1 по имени Святослав");
//
//
//$village2_warrior = new Warrior("Воин из деревни 2", 100, rand(5,10));
//$village2_healer = new Healer("Лекарь из деревни 2", 100, 5);
//$village2_zhitel = new Zhitel("Житель деревни 2 по имени Святой Кирилл");
//
//

try {
    $host = '127.0.0.1';
    $db = 'miha';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    // Получение объекта PDO
    $pdo = new PDO($dsn, $user, $pass, $opt);
    var_dump($pdo);
    echo "<br/>";

    // Получение данных из таблицы student по полю name
    $stmt = $pdo->query('SELECT * FROM student');
    var_dump($stmt);
    echo "<br/>";
    while ($row = $stmt->fetch()) {
        echo $row['fam'] . " " . $row['name'] . " " . $row['ote'] . " " . $row['stepen'] . " " . $row['dr_st'];
        echo "<br/>";
        //printf("%d", $row['stepen']);
    }

    // Вставка данных
//    $name = "iPhone 11";
//    $company = "Apple";
//    $product_count = 7;
//    $price = 22000;
//
//
//    $stmt = $pdo->prepare("INSERT INTO products (name, company,product_count,price) VALUES (?, ?, ?, ?)");
//    $stmt->execute(['iPhone 17', 'Apple', 7,22000]);
    // второй вариант
//    $stmt->bindParam(1, $name);
//    $stmt->bindParam(2, $company);
//    $stmt->bindParam(3, $product_count);
//    $stmt->bindParam(4, $price);
//    $stmt->execute();


//    задание 1
//    $stmt = $pdo->query('DELETE FROM products WHERE id = 9');
//    var_dump($stmt);
//    задание 2
//    $stmt = $pdo->prapare('UPDATE products SET name = "iPhone 6" WHERE id = 2');

//    задание 3

//    задание 4
    $stmt = $pdo->query('SELECT * FROM student');
    var_dump($stmt);
    echo "<br/>";
    while ($row = $stmt->fetch()) {
        echo $row['fam'] . " " . $row['name'] . " " . $row['ote'] . " " . $row['stepen'] . " " . $row['dr_st'];
        echo "<br/>";
        //printf("%d", $row['stepen']);
    }
//    $stmt = $pdo->query('DELETE FROM student WHERE id = 0');
    $stmt = $pdo->prepare("INSERT INTO student (fam, name,ote,stepen) VALUES (?, ?, ?, ?) ON DUPLICATE KEY UPDATE");
    $stmt->execute(['Карягин', 'Михаил', 'Сергеевич',0]);
    $stmt = $pdo->query("INSERT INTO student2 SELECT * FROM student ON DUPLICATE KEY UPDATE");


} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}
?>

