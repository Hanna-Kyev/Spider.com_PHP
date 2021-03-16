<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "Spider";

$conn = mysqli_connect($host, $user, $password, $dbname);
// $sql = "INSERT INTO guestbook (username, email, message)
// VALUES ('Анна', 'annaprada@annet.net', 'Привет! Моё имя есть теперь в таблице! Ура!');";

// $sql = "UPDATE guestbook SET username = 'Анна', email = 'Jolly@Jolly.mail' WHERE id = 2";

$sql = "DELETE FROM guestbook";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM guestbook";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $collection = mysqli_fetch_all($result, 1);
        print_r($collection);
} else {
    echo "Not result";
}
mysqli_close($conn);

// C:\xampp\htdocs\spider.com\app\cli\test.php