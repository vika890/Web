<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
		<title>Сухорученкова В.И. 221-361 Работа №9 Вариант 15</title>
    </head>
    <body>
        <header>
			<img class="logo" src="photos/logo.png">
			<h2>Сухорученкова В.И. 221-361 Работа №9 Вариант 15</h2>
		</header>
		
		<main>
			<img class="photo" src="photos/photo.png">
			<p></p>
			<?php
    			$x = 1;
    			$encounting = 7;
    			$step = 2;
				$min_value=20;
				$max_value=-10;

				$e_f = array();
				$e_x = array();

				$type = 'E';

				for ($i = 0; $i < $encounting; $i++, $x += $step) { 
					if ($x <= 10) {
					   $f = (3 * $x) + 9;
					} else if ($x > 10 && $x < 20) {
					   $f = ($x + 3) / (pow($x, 2) - 121);
					} else if ($x >= 20) {
					   $f= pow($x, 2) * 4;
					}
					
					if ($x == 11) {
					   $f = "error";
					}
			   
					$e_f[] = $f;
					$e_x[] = $x;
			   }


				switch($type) {
					case 'A':
						foreach ($e_f as $key => $f) {
							echo 'f('.$e_x[$key].')='.round($f,3).'<br>';
						}
						break;
					case 'B':
						echo '<ul>';
						foreach ($e_f as $key => $f) {
							echo '<li>f('.$e_x[$key].')='.round($f,3).'</li>';
						}
						echo '</ul>';
						break;
					case 'C':
						echo '<ol>';
						foreach ($e_f as $key => $f) {
							echo '<li>f('.$e_x[$key].')='.round($f,3).'</li>';
						}
						echo '</ol>';
						break;
						case 'D':
							echo "<table border='1'>";
        					echo "<tr><th>Номер</th><th>Аргумент</th><th>Значение</th></tr>";
							foreach ($e_f as $key => $f) {
								echo '<tr><td>'.$key.'</td><td>'.$e_x[$key].'</td><td>'.round($f,3).'</td></tr>';
							}
							echo "</table>";
							break;
						case 'E':
							foreach ($e_f as $key => $f) {
								echo "<div style='display: inline-block; border: 2px solid red; margin-right: 8px;'>f($e_x[$key])=$f</div>";
							}
							break;
				}

				$max = round(max($e_f), 3);
				$min = round(min($e_f), 3);
				$avg = round(array_sum($e_f) / count($e_f), 3);
				$sum = round(array_sum($e_f), 3);

				echo "<br>Максимальное значение: $max";
				echo "<br>Минимальное значение: $min";
				echo "<br>Среднее арифметическое: $avg";
				echo "<br>Сумма: $sum";
			?>
		</main>
		
		<footer>
			<div class="container">
                &copy; Сухорученкова Виктория

				<?php
   					echo ' | Тип верстки: '.$type;
				?>
            </div>
		</footer>
    </body>
</html>