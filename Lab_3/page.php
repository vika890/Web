<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
		<?php
			$title = 'Сухорученкова В.И. 221-361 Работа №3';
			$array = array (
				'Сова может повернуть голову на 270 градусов.',
    	        'Совы - единственные птицы, способные различать синий цвет.',
        	    'Самая крупная сова - бородатая неясыть - вырастает до 84 см.',
            	'Сова не может двигать глазами, как человек, поэтому для перевода взгляда она вынуждена поворачивать всю голову.',
            	'Перуанская карликовая сова (Glaucidium peruanum) - самая маленькая в мире сова. Ее рост не превышает 15 см, а весит она около 30 г.',
            	'Совы обычно живут около 15 лет.'
			);
		?>
		<title><?php echo $title;?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <nav class="main-menu">                    
					<a href=" <?php	 // начинаем первый PHP скрипт
                        $name='Главная';	// переменная с текстом ссылки
                        $link='#home';	// переменная с адресом ссылки
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


                </nav>
				<div>
                    <h1 class="name">Совы</h1>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <section id="home">
                    <figure class="avatar">
                        <img src="photos/ee57.jpg">
                        <?php
						$s = date('s');	// определяем текущую секунду
						$os = $s % 2;	// вычисляем остаток от деления
						
						if( $os === 0 )	// если в переменной $os хранится ноль
						$name='photos/sova.jpg'; // сохраняем имя первого файла
						else	// иначе
						$name='photos/owl.jpg'; // сохраняем имя второго файла
						
						echo '<img src="'.$name.'" alt="Меняющаяся фотография">'; // выводим сформированный HTML‐код
						?>
                    </figure>
                </section>
            </div>

            <article>
            <h1>Описание</h1>
            <p>Совы — хищные птицы из семейства совиных отряда совообразных. Считается, что первые предки совиных, которые появились на планете более 60 млн. лет назад, мало чем напоминали современных представителей семейства. В ходе эволюции у сов изменился как внешний вид, так и строение тела, при этом наиболее значительные трансформации произошли в течение последних 2-3 млн. лет.</p>

            <h2>Краткая информация</h2>
            <table>
                <tr>
                    <td class="bg-1">Охранный статус</td>
                    <td class="bg-2">Наименьшие опасения</td>
                    <td class="bg-3">Ареал</td>
                    <td class="bg-4">Весь мир, кроме Антарктиды, Арктики и Австралии</td>
                </tr>

                <tr>
                    <td class="bg-1">Вес</td>
                    <td class="bg-2">2-3 кг</td>
                    <td class="bg-3">Класс</td>
                    <td class="bg-4">Птицы</td>
                </tr>

                <tr>
                    <td class="bg-1">Длина</td>
                    <td class="bg-2">≈ 70 см</td>
                    <td class="bg-3">Отряд</td>
                    <td class="bg-4">Совообразные</td>
                </tr>

                <tr>
                    <td class="bg-1">Скорость</td>
                    <td class="bg-2">≈ 80 км/ч</td>
                    <td class="bg-3">Семейство</td>
                    <td class="bg-4">В зависимости от вида</td>
                </tr>

                <tr>
                    <td class="bg-1">Продолжительность жизни</td>
                    <td class="bg-2">В среднем 5 лет, но есть и долгожители (до 27 лет)</td>
                    <td class="bg-3">Род</td>
                    <td class="bg-4">В зависимости от вида</td>
                </tr>

                <tr>
                    <td class="bg-1">Питание</td>
                    <td class="bg-2">Крысы, полевки, кролики, зайцы, хомяки</td>
                    <td class="bg-3">Враги</td>
                    <td class="bg-4">Орлы, ястребы, беркуты</td>
                </tr>
            </table>

            <h2>Интересные факты</h2>
			<ul>
				<?php 
                    foreach ($array as $arr) {
                        echo '<li>', $arr, '</li>';
                    }
                ?>
			</ul>

            </article>
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