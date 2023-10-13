    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ФБР</title>
        <Style>
        .error{
            color: red;
        }
        </style>
    </head>
    <body>
        <form action="q.php" method="post">
        <p><span class="error"> * обязательное поле </span></p>
            <p>Логин:<span class="error">* <input type="text" name="name" required></p>
            <p>Пароль:<span class="error">* <input type="password" name="password" required></p>
            <p>Подтвердите пароль:<span class="error">* <input type="password" name="password1" required></p>
            <p>Почта:<span class="error">* <input type="email" name="mail" required></p>
            <p><input type="submit" value="Зарегестрироваться"></p> 
        </form>
    </body>
</html>