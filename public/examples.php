<!-- <h1>Hello PHP!</h1> -->

<?php


// СМОТРИМ ГДЕ НАХОДИМСЯ
// echo __DIR__;

// назначаем константы и указываем путь:

// define('ROOT', realpath(__DIR__.'/../'));
// const VIEWS = ROOT.'/app/Views';

// phpinfo();

// комментарии

/*
комментарии
*/

// многомерные массивы
// $arr = [
//     "foo"=>"bar",
//     10=>100,
//     "m" => [
//         "d" => [
//             "a"=>"zoo"
//         ]
//     ]
// ];

// добавление элемента в массив
// print_r($arr);
// echo "<br>";
// $arr[] = 1000;
// print_r($arr);
// echo "<br>";

// переиндексация массива
// $arr = array_values($arr);
// print_r($arr);
// echo "<br>";

// Двойные кавычки нужны для вывода переменной
// $foo = "World";
// echo "Hello $foo";

// echo "Hello PHP!",  3*9,"Hello Echo";
// print "Hello Print";

// var_dump('Int Size', PHP_INT_MIN);

// $foo = "1";
// var_dump($foo);S
// умножаем переменную:
// $foo *= 2;
// var_dump($foo);

// $foo = $foo*3.14;
// var_dump($foo);

// $foo = 5 * "10 little Pigs";
// var_dump($foo);

// $foo = "10 little Pigs";
// var_dump($foo);
// // settype($foo, "integer");
// var_dump((boolean)$foo);

?>
<!-- <ul>
<li><a href="/">Home</a></li>
<li><a href="/about">About</a></li>
<li><a href="/shop">Shop</a></li>
<li><a href="/contact">Contact</a></li>
</ul> -->
<?php

// phpinfo();

// echo $_SERVER['REQUEST_URI'];

// if ($_SERVER['REQUEST_URI']=="/"){
//    echo "<h1>Home Page</h1>";
// } elseif ($_SERVER['REQUEST_URI']=="/about"){
//     echo "<h1>About Page</h1>";
//  } elseif ($_SERVER['REQUEST_URI']=="/shop"){
//     echo "<h1>Shop Page</h1>";
//  } elseif ($_SERVER['REQUEST_URI']=="/contact"){
//     echo "<h1>Contact Page</h1>";
//  } else {
//      echo "<h1>404 Not Found</h1>";
//  }

// switch ($_SERVER ['REQUEST_URI']) {
//     case '/':
//         echo "<h1>Home Page</h1>";
//         break;
//     case '/about':
//         echo "<h1>About Page</h1>";
//         break;
//     case '/shop':
//         echo "<h1>Shop Page</h1>";
//         break;
//     case '/contact':
//         echo "<h1>Contact Page</h1>";

//         if(isset($_REQUEST['username'])){
//             var_dump($_POST);
//             var_dump($_REQUEST);
//             echo "<h2>Hi, ".$_REQUEST["username"]."!</h2>";
//         }
// ?>
//         <form method="POST"  action="<?php echo $_SERVER['REQUEST_URI'];?>">
//             <lable>Name</lable>
//             <input name="username">
//             <input type="submit">
//         </form>

// <?php
//         break;         
//     default:
//     echo "<h1>404 Not Found</h1>";
//         break;
// }

 

