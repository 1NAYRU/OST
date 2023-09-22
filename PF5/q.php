<?php
    $host       = "b13.19oi.local";      // Адрес сервера базы данных
    $dbname     = "b13_typical";    // Имя базы данных
    $user       = "root";           // Имя пользователя
    $password   = "1";               // Пароль
    $connection = new PDO('mysql:host=b13.19oi.local;dbname=b13_typical;charset=utf8', 'root', 'password');

    $result = $connection->query('SELECT * FROM `TABLE_NAME`');
    while($row = $result->fetch( PDO::FETCH_ASSOC )){
    foreach ($row as $key => $value) {
        echo "<td>".$value."</td>";
    }
}
?>
