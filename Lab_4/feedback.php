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
		<h1 class="name">Форма обратной связи</h1>

        <section class="request_section">
            
            <form name="request" method="POST" action="home.php">
                
                <p><input type="text" name="login" placeholder="ФИО" 
					<?php 
						if (isset($_GET['login'])) {
							echo 'value='.$_GET['login'];
						} 
					?>>
				</p>
                
                <p><input type="text" name="email" placeholder="email" 
					<?php 
						if (isset($_GET['email'])) {
							echo 'value='.$_GET['email'];
						} 
					?>>
				</p>
                
                <p><input type="radio" name="answer" value="Реклама из интернета" 
					<?php 
						if (isset($_GET['answer']) && $_GET['answer'] == 'Реклама из интернета') {
							echo 'checked';
						} 
					?>>Реклама из интернета</p>
                
				
				<p><input type="radio" name="answer" value="Рассказали друзья" 
					<?php 
						if (isset($_GET['answer']) && $_GET['answer'] == 'Рассказали друзья') {
							echo 'checked';
						} 
					?>>Рассказали друзья</p>
                
        
                <select name="type_request" class="text_block" name="type_request">
                    <option disabled>Выберите опцию</option>
                    <option value="1" name="1">Жалоба</option>
                    <option value="2" name="2">Предложение</option>
                </select>

                <p><textarea name="comment" cols="40" rows="3"></textarea></p>
                
				<p><input type="file" name="f"></p>
                <p><input type="checkbox" name="a" value="Даю согласие на обработку персональных данных">Даю согласие на обработку персональных данных</p>
                <p><input type="submit" value="Отправить"></p>
            </form>
        </section>
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