<?php

// набрать в ком строке в каталоге проекта:
// C:\xampp\htdocs\spider.com>php -r"print_r(get_defined_constants());"
// print_r(get_defined_constants());
// var_dump($argv);
// var_dump($argc);

// что бы открыть или выполнить данный скрипт в консоли:
// C:\xampp\htdocs\spider.com\app\cli\test.php

// подключение к бд длинное
// $conn = mysqli_init();
// if($conn){
//     if(!mysqli_options($conn, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT=0')){
//         die("Error set Auto Commit");
//     }
// } else {
//     die("Error not init isyanse");
// }
// if (!mysqli_real_connect($conn, 'localhost', 'root', '', 'test')){
//     die('Error Connection ('.mysqli_connect_errno().')'. mysqli_connect_error());
// }
// var_dump($conn);
// mysqli_close($conn);

// КОРОТКОЕ ПОДКЛЮЧЕНИЕ:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "test";
// $conn = mysqli_connect($host, $user, $password, $dbname);
// if(mysqli_connect_error()){
//           echo ("Error connection");
//         exit();    
// } 
// echo mysqli_get_host_info($conn);
// закрыте файла бд:
// mysqli_close($conn);

// создание базы данных:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "test";

// $conn = mysqli_connect($host, $user, $password);

// $sql = "DROP DATABASE IF EXISTS Spider; CREATE DATABASE Spider;";
// mysqli_query($conn, "DROP DATABASE IF EXISTS Spider;");
// mysqli_query($conn, "CREATE DATABASE Spider;");

// echo mysqli_get_host_info($conn);
// mysqli_multi_query($conn, $sql);
// mysqli_close($conn);

// создание бд в виде схемы и добавление своего unicode:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "test";
// $conn = mysqli_connect($host, $user, $password);
// mysqli_query($conn, "DROP DATABASE IF EXISTS Spider;");
// $sql = "DROP SCHEMA IF EXISTS Spider; CREATE SCHEMA Spider CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
// mysqli_query($conn, "CREATE DATABASE Spider;");
// echo mysqli_get_host_info($conn);
// mysqli_multi_query($conn, $sql);
// mysqli_close($conn);

// запись с помощью <<<
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "test";
// $conn = mysqli_connect($host, $user, $password);
// mysqli_query($conn, "DROP DATABASE IF EXISTS Spider;");
// $sql = <<<EOT
//     DROP SCHEMA IF EXISTS Spider;
//     CREATE SCHEMA Spider CHARACTER 
//     SET utf8mb4 
//     COLLATE utf8mb4_unicode_ci;
// EOT;
// mysqli_multi_query($conn, $sql);
// mysqli_close($conn);

// создание пустой таблицы данных:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";
// $conn = mysqli_connect($host, $user, $password, $dbname);
// $sql = <<<EOT
//     CREATE TABLE guestbook (
//         id int(11) NOT NULL AUTO_INCREMENT,
//         username varchar(25) NOT NULL,
//         email varchar(30) NOT NULL,
//         message text NOT NULL,
//         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//         PRIMARY KEY(id)
//     );    
// EOT;
// mysqli_multi_query($conn, $sql);
// mysqli_close($conn);
// // выполнить скрипт- набрать в ком строке
// php C:\xampp\htdocs\spider.com\app\cli\test.php

// добавить записи в таблицу бз, посмотреть можно в admin панель xamp:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";
// $conn = mysqli_connect($host, $user, $password, $dbname);
// $sql = "INSERT INTO guestbook (username, email, message)
// VALUES ('John', 'john@example.com', 'Hi, It is John Doe');";
// mysqli_query($conn, $sql);
// если несколько строк то выполняем:
// mysqli_multi_query($conn, $sql);
// mysqli_close($conn);

// вывести в ком строку записанные данные:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";
// $conn = mysqli_connect($host, $user, $password, $dbname);
// $sql = "SELECT * FROM guestbook";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while ($row = mysqli_fetch_assoc($result)) {
//         print_r($row);
//     }
// } else {
//     echo "Not result";
// }
// mysqli_close($conn);
// выполнить скрипт и вывести данные
// C:\xampp\htdocs\spider.com\app\cli\test.php

// получение всей выборки целиком:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";
// $conn = mysqli_connect($host, $user, $password, $dbname);
// $sql = "SELECT * FROM guestbook";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     $collection = mysqli_fetch_all($result, 1);
//         print_r($collection);
// } else {
//     echo "Not result";
// }
// mysqli_close($conn);

// обновить существующие данные:
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "Spider";
// $conn = mysqli_connect($host, $user, $password, $dbname);
// $sql = "UPDATE guestbook SET username = 'Джоли', email = 'Jolly@Jolly.mail' WHERE id = 2";
// mysqli_query($conn, $sql);
// $sql = "SELECT * FROM guestbook";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     $collection = mysqli_fetch_all($result, 1);
//         print_r($collection);
// } else {
//     echo "Not result";
// }
// mysqli_close($conn);

// удаление данных:
// $sql = "DELETE FROM guestbook WHERE id = 2";
