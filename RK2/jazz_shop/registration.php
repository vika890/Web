<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<?php include 'header.html'; ?>
	</header>
	
	<main>
		<form name="registration" method="POST" action="https://httpbin.org/post">
            <form action="handler.php">
        	<p><input type="text" name="fio" placeholder="ФИО"></p>
			<p><input type="text" name="email" placeholder="Почта"></p>
        	<p><input type="password" name="password" placeholder="Пароль"></p>
        	<p><input type="submit" value="Зарегистрироваться"></p>
      	</form>
	</main>

	<footer>
        <?php include 'footer.html'; ?>
    </footer>
</body>
</html>