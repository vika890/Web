<!DOCTYPE html>
<html lang="ru">
  	<head>
    	<meta charset="utf-8">
		<?php
			$title = 'Сухорученкова В.И. 221-361 Работа №4';
		?>
		<title><?php echo $title;?></title>
    	<link rel="stylesheet" href="style.css">
  	</head>
  	<body>
    <?php include 'header.html' ?>
    <main>
        <h1>Форма для авторизации</h1>
        <form name="authorization" method="POST" action="https://httpbin.org/post">
        	<p><input type="text" name="login" placeholder="Логин"></p>
        	<p><input type="password" name="password" placeholder="Пароль"></p>

		    <p><input type="checkbox" name="a" value="Запомнить меня">Запомнить меня</p>
        	<p><input type="submit" value="Войти"></p>
      	</form>
    </main>

    <footer class="footer">
      		<div class="container">
        		&copy; Сухорученкова Виктория
      		</div>
      		<section id="contacts">
			  	<figure class="con">
                        <p>Телефон: +7 (111) 111-11-11</p>
                        <p>Почта: email@yandex.ru</p>
                </figure>
      		</section>
	  		<?php
	  			$today = date('Сформировано d.m.Y в H-i:s');
	  			echo $today;
	  		?>
    	</footer>
</body>
</html>