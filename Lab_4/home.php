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
        <h1>Заявка принята</h1>
        <section class="result">
            <p>
                <?php 
                if (isset($_POST['login'])) {
                    echo '<p> Здравствуйте, '.$_POST['login'].'</p>';
                }
                if (isset($_POST['type_request'])) {
                    if ($_POST['type_request'] == '2'){
                        echo '<p>Спасибо за ваше предложение:</p>';
                    }
                    else {
                        echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                    }
                }
                if (isset($_POST['comment'])) {
                    echo '<p>'.$_POST['comment'].'</p>';
                }     
                if (isset($_POST['f']) & $_POST['f'] != '')
                    echo 'Вы приложили следующий файл: '.$_POST['f'];
                if (isset($_POST['answer']))   
                    echo '<a href="feedback.php?login='.$_POST['login'].'&email='.$_POST['email'].'&answer='.$_POST['answer'].'"> Заполнить снова</a>';
                else {
                    echo '<a href="feedback.php?login='.$_POST['login'].'&email='.$_POST['email'].'"> Заполнить снова</a>';
                }
                ?>
            </p>
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