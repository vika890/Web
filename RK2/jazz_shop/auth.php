<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<?php include 'header.html'; ?>
	</header>
	
	<main>
		<form name="auth" method="POST" action="https://httpbin.org/post">
            <form action="handler.php">
        	<p><input type="text" name="login" placeholder="Логин"></p>
        	<p><input type="password" name="password" placeholder="Пароль"></p>

		    <p><input type="checkbox" name="a" value="Запомнить меня">Запомнить меня</p>
        	<p><input type="submit" value="Войти"></p>
      	</form>
	</main>
	

	<footer>
        <?php include 'footer.html'; ?>
    </footer>
</body>
</html>