<?php

$config = require_once CONFIG. '/db.php';

$address = config('contacts');
$title = 'Свяжитесь с нами!';
$subtitle = 'Наш адрес';
$messages = [];
$error = null;


$conn = mysqli_connect($config ['db'] ['DB_HOST'], 
$config ['DB_USERNAME'], $config ['DB_PASSWORD'] , 
$config ['db'] ['DB_NAME'] );

if(!empty($_POST)){

    try {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $message  = mysqli_real_escape_string ($conn, $_POST['message']);
        $sql = "INSERT INTO guestbook (username, email, message) VALUES ('$username', '$email ', '$message')";
        mysqli_query($conn, $sql);
        } catch(Exception $e){
            $error = $e->getMessage();
    }

}

    



$sql = "SELECT * FROM guestbook";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $messages = mysqli_fetch_all($result, 1);
} else {
    echo "Not messages yet";
}
mysqli_close($conn);

render('contacts/index', compact('title', 'subtitle', 'address', 'messages'));

// include_once VIEWS.'/contacts/index.php';