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

$link = mysqli_connect('localhost', 'root', '', 'store');

if (mysqli_connect_errno()){
    die ("not connect: ".mysqli_connect_error());
}

$sql = "SELECT * FROM feedback";
$res = mysqli_query($link, $sql);

if(mysqli_num_rows($res)>0){
    while ($row = mysqli_fetch_assoc($res)){
        var_dump ($row);
    }
}

    mysqli_close($link);