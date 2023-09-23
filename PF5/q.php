<?php
    $host       = "db4.myarena.ru";      // Адрес сервера базы данных
    $dbname     = "u19978_b13";    // Имя базы данных
    $user       = "u19978_b13";           // Имя пользователя
    $password   = "dP2fU4fM8u";               // Пароль
    $connection = new PDO('mysql:host=b13.19oi.local;dbname=b13_typical;charset=utf8', 'root', 'password');

    $result = $connection->query('SELECT * FROM `product`');
    while($row = $result->fetch( PDO::FETCH_ASSOC )){
    foreach ($row as $key => $value) {
        echo "<td>".$value."</td>";
    }
}
?>
