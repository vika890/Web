<?php 
    define('DB_HOST', 'localhost'); //Адрес
    define('DB_USER', ''); //Имя пользователя
    define('DB_PASSWORD', ''); //Пароль
    define('DB_NAME', 'jazz_shop'); //Имя БД
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	
	if ($mysql->connect_error) {
        echo "Ошибка соединения: " . $mysql->connect_error . '<br>';
		echo "Код ошибки: " . $mysql->connect_errno;
        exit();
    }
?>
