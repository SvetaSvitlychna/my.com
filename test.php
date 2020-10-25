<?php


// $link =mysqli_connect($link, 'localhost', 'root', '');
// if ($link){
//     echo "Success";
// } else {
//     die('Not success');
// }
// if (!mysqli_real_connect($link, 'localhost', 'root', '')){
//     die("not connect");
// } else {
//     var_dump($link);
// }


// $link = mysqli_connect('localhost', 'root', '');

// if (mysqli_connect_errno()){
//     die ("not connect: ".mysqli_connect_error());
// }

// $sql = "DROP DATABASE IF EXISTS store; CREATE DATABASE store;";

// if (mysqli_multi_query($link, $sql)){

// echo "Database store created successfully";
// } else{
//  echo  "Error creating database".mysqli_error($link);
// }

// echo "Connected".mysqli_get_host_info($link);
// mysqli_close($link);

// $link = mysqli_connect('localhost', 'root', '');

// if (mysqli_connect_errno()){
//     die ("not connect: ".mysqli_connect_error());
// }

// $sql = "DROP DATABASE IF EXISTS store;";

// if (mysqli_query($link, $sql)){

// echo "Database droped successfully";
// } 

// $sql = <<<EOT
//     DROP SCHEMA IF EXISTS store;
//     CREATE SCHEMA store
//     CHARACTER SET utf8mb4
//     COLLATE utf8mb4_unicode_ci;
//     EOT;
//     if (mysqli_multi_query($link, $sql)){
//     echo "Database created successfully";
//     } else{
//    echo  mysqli_error($link);
//     }
//     mysqli_close($link);

// $link = mysqli_connect('localhost', 'root', '', 'store');

// if (mysqli_connect_errno()){
//     die ("not connect: ".mysqli_connect_error());
// }
// $sql = <<<EOT
//     CREATE TABLE feedback(
//         id int(11) NOT NULL AUTO_INCREMENT,
//         firstName VARCHAR(30) NOT NULL,
//         lastName VARCHAR(30) NOT NULL,
//         email VARCHAR(30) NOT NULL,
//         message TEXT NOT NULL,
//         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//         PRIMARY KEY (id)
//     );
//     EOT;
//     if (mysqli_query($link, $sql)){
//     echo "TABLE feedback created successfully";
//     } else{
//    echo  mysqli_error($link);
//     }
//     mysqli_close($link);

// $link = mysqli_connect('localhost', 'root', '', 'store');

// if (mysqli_connect_errno()){
//     die ("not connect: ".mysqli_connect_error());
// }

// $sql = "INSERT INTO feedback(email, firstName,lastName , message) VALUES('jimmy@my.com',
// 'John','Dou', 'Hi, it\'s John Dou');
// INSERT INTO feedback(email, firstName,lastName , message) VALUES('alice@my.com',
// 'Alice','Dou', 'Hi, it\'s Alice Dou');";

// if (mysqli_multi_query($link, $sql)){
//     echo "New record created successfully";
//     } else{
//    echo  mysqli_error($link);
//     }
//     mysqli_close($link);

// $link = mysqli_connect('localhost', 'root', '', 'store');

// if (mysqli_connect_errno()){
//     die ("not connect: ".mysqli_connect_error());
// }

// $sql = "SELECT * FROM feedback";
// $res = mysqli_query($link, $sql);

// if(mysqli_num_rows($res)>0){
//     while ($row = mysqli_fetch_assoc($res)){
//         var_dump ($row);
//     }
// }

//     mysqli_close($link);

// class User {
//     const FOO = "bar";
// private $firstName;
// private $lastName;
// public $email;
// protected $age;

// static public $status = 0;
// public function __construct($fn, $ln, $em, $age)
// {
//     $this ->email = $em;
//     $this ->firstName = $fn;
//     $this ->lastName = $ln;
//     $this ->age = $age;
// }
// public function setFirstName($var){
//     $this -> firstName = $var;
// }
// public function setLastName($var){
//     $this -> lastName = $var;
// }
// public function setAge($var){
//     $this -> age = $var;
    
//  }
// public function getAge(){
//     return $this->age;
// }
// public function name(){
//     return self::FOO.$this ->firstName.$this ->lastName;
// }
// }
// $user = new User("Tom", "Johns", "ex@my.com", 41);
// var_dump($user);

// $user1 = new User("Alice", "Dreams", "ex1@my.com", 35);
// var_dump($user1);
// $user1 -> email = "test@my.com";
// var_dump($user1);
// $user1->setAge(25);
// var_dump($user1);

// echo $user1 -> getAge();
//echo $user1 -> name();
//  echo User::FOO;
// echo $user1->name();

// echo User::$status = 1;



// echo get_class($user);

// $className = 'User';
// $inst = new $className();
// var_dump($inst);

// print_r(PDO::getAvailableDrivers());

// $host ="localhost";
// $dbname ="store";
// $user = "root";
// $password = "";


// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
//     echo " Connected Successfully".PHP_EOL;
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql= "CREATE DATABASE IF NOT EXISTS mydb";
//     $pdo->exec($sql);
//     //$pdo->prepare("DELECT name from posts")->execute();
// } catch(PDOException $e) {
//     error_log($e->getMessage());
//     file_put_contents("PDOErrors.log", $e->getMessage());
//     echo "Not connection".$e->getMessage().PHP_EOL;
// }


print_r(PDO::getAvailableDrivers());

$host ="localhost";
$dbname ="store";
$user = "root";
$password = "";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    echo " Connected Successfully".PHP_EOL;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql= <<<SQL
        CREATE TABLE products(
            id int (11) NOT null AUTO_INCREMENT,
            name varchar(255) NOT NULL,
            status tinyint(1) NOT NULL,
            category_id int(11) unsigned DEFAULT NULL,
            price float unsigned NOT NULL,
            description text NOT NULL,
            is_new tinyint(1) DEFAULT 1,
            is_recommended tinyint (1) DEFAULT 0,
            PRIMARY KEY(id)
        )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        SQL;
    $pdo->exec($sql);
    //$pdo->prepare("DELECT name from posts")->execute();
} catch(PDOException $e) {
    error_log($e->getMessage());
    file_put_contents("PDOErrors.log", $e->getMessage());
    echo "Not connection".$e->getMessage().PHP_EOL;
}