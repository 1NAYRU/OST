<?php 
 $host       = "db4.myarena.ru";      // Адрес сервера базы данных
 $dbname     = "u19978_b13";    // Имя базы данных
 $user       = "u19978_b13";           // Имя пользователя
 $password   = "dP2fU4fM8u";               // Пароль
 $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;
        
                if(empty($_POST['name'])) exit('Поле "логин" не заполнено');
                if(empty($_POST['password'])) exit('Поле "пароль" не заполнено');
                if(empty($_POST['password1'])) exit('Поле "пароль" не заполнено');
                $len = strlen($_POST["password"]);
                if($len<8)exit('Минимальное длина пароля 8 символов');
                if($_POST['password'] !== $_POST['password1']) exit('Пороли не совподают');
                if(empty($_POST['mail'])) exit('Поле "почта" не заполнено');
        
        $pas_hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
        
        //создание нового пользователя
        $date = [ $_POST['name'], $pas_hash, $_POST['mail']];
        $res = $connection->prepare("INSERT INTO `PF7_users` (`name`,`password`,`Email`) VALUES (?,?,?);");
        $res = $res->execute($date);
        if($res){
                exit('Регистрация прошла успешно');
        }
        exit('Ошибка регистрации');
        
?>
  
