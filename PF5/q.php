<?php
    $host       = "db4.myarena.ru";      // Адрес сервера базы данных
    $dbname     = "u19978_b13";    // Имя базы данных
    $user       = "u19978_b13";           // Имя пользователя
    $password   = "dP2fU4fM8u";               // Пароль
    $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

    echo '<table tellspacing="1" bgcolor="#000000">';
    $result = $connection->query('SELECT * FROM `product`');

    while($row = $result->fetch( PDO::FETCH_ASSOC )){
        echo'<tr bgcolor="#ffffff">';
        foreach ($row as $key => $value) {
            echo "<td>".$value."</td>"; 
        }
        echo'</tr>';
    }
    echo'</table>';

?>
