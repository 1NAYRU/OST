<?php 
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;
        
        if(empty($_POST['name'])) exit('Поле "логин" не заполнено');
        if(empty($_POST['password'])) exit('Поле "пароль" не заполнено');
        if(empty($_POST['password1'])) exit('Поле "пароль" не заполнено');
        if(empty($_POST['mail'])) exit('Поле "почта" не заполнено');
        $len = strlen($_POST["password"]);
        if($len<8)exit('Минимальное длина пароля 8 символов');
        if($_POST['password'] !== $_POST['password1']) exit('Пороли не совподают');

        else {
        echo 'Здравствуйте, '.htmlspecialchars($_POST['name']).'. <br>';
        echo 'Ваш аккаунт создан'.'. <br>';}

?>
  
