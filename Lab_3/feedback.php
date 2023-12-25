<!DOCTYPE html>
<html lang="ru">
  	<head>
    	<meta charset="utf-8">
		<?php
			$title = 'Сухорученкова В.И. 221-361 Работа №3';
		?>
		<title><?php echo $title;?></title>
    	<link rel="preconnect" href="https://fonts.googleapis.com">
    	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    	<link rel="stylesheet" href="style_feedback.css">
  	</head>
  	<body>
    	<header class="header">
      		<div class="container">
        		<nav class="main-menu">
				<a href=" <?php	 // начинаем первый PHP скрипт
                        $name='Главная';	// переменная с текстом ссылки
                        $link='page.php';	// переменная с адресом ссылки
                        $current_page=false;  // переменная, определяющая активность пункта меню
                        echo $link;	// выводим адрес ссылки
                    ?>"<?php	// начинаем второй PHP скрипт
						if( $current_page )	{  // если пункт меню активный
							echo ' class="active"' . $name; // выводим соответствующий класс
						} else {
							echo 'class="change-link"' . $name;
						}?>
                    >
                        <?php
							echo $name;	 // выводим текст ссылки
						?>
                    </a>


					<a href=" <?php	 // начинаем первый PHP скрипт
                        $name='Контакты';	// переменная с текстом ссылки
                        $link='#contacts';	// переменная с адресом ссылки
                        $current_page=false;  // переменная, определяющая активность пункта меню
                        echo $link;	// выводим адрес ссылки
                    ?>"<?php	// начинаем второй PHP скрипт
						if( $current_page )	{  // если пункт меню активный
                            echo ' class="active"' . $name; // выводим соответствующий класс
						} else {
							echo 'class="change-link"' . $name;
						}?>
                    >
                        <?php
							echo $name;	 // выводим текст ссылки
						?>
                    </a>


					<a href=" <?php	 // начинаем первый PHP скрипт
                        $name='Аутенфикация';	// переменная с текстом ссылки
                        $link='login.php';	// переменная с адресом ссылки
                        $current_page=false;  // переменная, определяющая активность пункта меню
                        echo $link;	// выводим адрес ссылки
                    ?>"<?php	// начинаем второй PHP скрипт
						if( $current_page )	{  // если пункт меню активный
                            echo ' class="active"' . $name; // выводим соответствующий класс
						} else {
							echo 'class="change-link"' . $name;
						}?>
                    >
                        <?php
							echo $name;	 // выводим текст ссылки
						?>
                    </a>


					<a href=" <?php	 // начинаем первый PHP скрипт
                        $name='Обратная связь';	// переменная с текстом ссылки
                        $link='feedback.php';	// переменная с адресом ссылки
                        $current_page=true;  // переменная, определяющая активность пункта меню
                        echo $link;	// выводим адрес ссылки
                    ?>"<?php	// начинаем второй PHP скрипт
						if( $current_page )	{  // если пункт меню активный
							echo ' class="active change-link"' . $name; // выводим соответствующий класс
						}?>
                    >
                        <?php
							echo $name;	 // выводим текст ссылки
						?>
                    </a>
        		</nav>
        		<div>
          			<h1 class="name">Форма обратной связи</h1>
        		</div>
      		</div>
    	</header>

    	<main class="form">
      		<form action="handler.php">
        		<p><input type="text" name="login" placeholder="ФИО"></p>
        		<p><input type="text" name="login" placeholder="email"></p>

		        <p><input type="radio" name="answer" vakue="a1">От друга<Br>
        		<input type="radio" name="answer" vakue="a2">Из интернета</p>

        		<p><input maxlength="25" size="40" value=""></p>
	  		</form>
        	<div class="block">
          		<select size="1" style="width: 100px;">
            		<option disabled>Выберите опцию</option>
            		<option value="1">Жалоба</option>
            		<option value="2">Предложение</option>
        		</select>
        	</div>

        	<p>
          		<textarea name="comment" cols="40" rows="3"></textarea>
        	</p>

        	<form enctype="multipart/form-data" method="post">
          		<p><input type="file" name="f"></p>
          		<p><input type="checkbox" name="a" value="Даю согласие на обработку персональных данных">Даю согласие на обработку<br> персональных данных</p>
          		<p><input type="submit" value="Отправить"></p>
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
