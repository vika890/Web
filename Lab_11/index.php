<!DOCTYPE html>
<html>
	<head>
		<title>Document</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	
  	<body>
	  	<header>
			<div id="main_menu" class="menu">
				<?php
					echo '<a href="?html_type=TABLE'; // начало ссылки ТАБЛИЧНАЯ ФОРМА
					if( isset($_GET['content']) ) // если параметр content был передан в скрипт
						echo '&content='.$_GET['content']; // добавляем в ссылку второй параметр
					echo '"'; // завершаем формирование адреса ссылки и закрываем кавычку
					
					// если в скрипт был передан параметр html_type и параметр равен TABLE
					if( array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'TABLE' )
						echo ' class="selected"'; // ссылка выделяется через CSS-класс
					echo '>Табличная верстка</a>'; // конец ссылки ТАБЛИЧНАЯ ФОРМА
					


					echo '<a href="?html_type=DIV"'; // начало ссылки БЛОКОВАЯ ФОРМА
					if( isset($_GET['content']) ) // если параметр content был передан в скрипт
						echo '&content='.$_GET['content']; // добавляем в ссылку второй параметр
					echo '"'; // завершаем формирование адреса ссылки и закрываем кавычку
					
					// если в скрипт был передан параметр html_type и параметр равен DIV
					if( array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'DIV' )
						echo ' class="selected"'; // ссылка выделяется через CSS-класс
					echo '>Блочная верстка</a>'; // конец ссылки БЛОКОВАЯ ФОРМА
				?>
			</div>
		</header>

		
		<div id="product_menu">
			<?php
				echo '<a href="/"'; // начало ссылки ВСЯ ТАБЛИЦА УМНОЖНЕНИЯ
				if( !isset($_GET['content']) ) // если в скрипт НЕ был передан параметр content
					echo ' class="selected"'; // ссылка выделяется через CSS-класс
				echo '>Вся таблица умножения</a><br>'; // конец ссылки
				
				for( $i=2; $i<=9; $i++ ) { // цикл со счетчиком от 2 до 9 включительно
					echo '<a href="?content='.$i. '" '; // начало ссылки
					// если в скрипт был передан параметр content
					// и параметр равен значению счетчика
					if( isset($_GET['content']) && $_GET['content']==$i )
						echo ' class="selected"'; // ссылка выделяется через CSS-класс
					echo '>Таблица умножения на '.$i.'</a><br>'; // конец ссылки
				}
			?>
		</div>

		
		
		<?php 
			if (isset($_GET['html_type']) && $_GET['html_type'] == 'TABLE' ){
				echo '<div style="margin-left: 700px; margin-top: -250px; width:300px; display: flex; flex-direction: row;">';
				outTableForm(); // выводим таблицу умножения в табличной форме
				echo '</div>';
			}
			else {
				echo '<div style="margin-left: 700px; margin-top: -250px; flex-direction: column;">';
				outDivForm(); // выводим таблицу умножения в блочной форме
				echo '</div>';
			}


			// функция ВЫВОДИТ ТАБЛИЦУ УМНОЖЕНИЯ В ТАБЛИЧНОЙ ФОРМЕ
			function outTableForm() {
				// если параметр content не был передан в программу
				if( !isset($_GET['content']) ) {
					for($i=2; $i<10; $i++) { // цикл со счетчиком от 2 до 9
						echo '<table class="table">';
                        outRow2( $i );
                        echo '</table>';
					}
				}
				else {
					echo '<table class="table">';
                    outRow2( $_GET['content'] );
                    echo '</table>';
				}
			}
			
			// функция ВЫВОДИТ ТАБЛИЦУ УМНОЖЕНИЯ В БЛОЧНОЙ ФОРМЕ
			function outDivForm () {
				// если параметр content не был передан в программу
				if( !isset($_GET['content']) ) {
					for($i=2; $i<10; $i++) { // цикл со счетчиком от 2 до 9
						echo '<div class="ttRow">'; // оформляем таблицу в блочной форме
						outRow( $i ); // вызовем функцию, формирующую содержание
						// столбца умножения на $i (на 4, если $i==4)
						echo '</div>';
					}
				}
				else {
					echo '<table class="ttSingleRow">'; // оформляем таблицу в блочной форме
					outRow( $_GET['content'] ); // выводим выбранный в меню столбец
					echo '</table>';
				}
			}


			// функция ВЫВОДИТ СТОЛБЕЦ ТАБЛИЦЫ УМНОЖЕНИЯ В БЛОЧНОЙ ФОРМУ
			function outRow ( $n ) {
				echo '<table>';
				for($i=2; $i<=9; $i++) { // цикл со счетчиком от 2 до 9						
					echo '<tr><td>'.outNumAsLink($n).'*'.outNumAsLink($i).'='.outNumAsLink($i*$n).'</td></tr>'; 
				}
				echo '</table>'; 
			}

			// функция ВЫВОДИТ СТОЛБЕЦ ТАБЛИЦЫ УМНОЖЕНИЯ В ТАБЛИЧНОЙ ФОРМЕ
			function outRow2 ( $n ) {
				echo '<table>';
				for($i=2; $i<=9; $i++) { // цикл со счетчиком от 2 до 9						
					echo '<tr><td>'.outNumAsLink($n).'*'.outNumAsLink($i).'</td><td>'.outNumAsLink($i*$n).'</td></tr>'; 					
				}
				echo '</table>';
			}

			// функция ВЫВОДИТ ЧИСЛО КАК ССЫЛКУ
			function outNumAsLink($n) {
				$final = '';
			
				if ($n >= 0 && $n < 10) {
					$final .= '<a href="';
			
					if (isset($_GET['html_type'])) {
						if ($_GET['html_type'] == 'TABLE') {
							$final .= '?html_type=TABLE&';
						} else {
							$final .= '?html_type=DIV&';
						}
						
						$final .= 'content=' . $n . '">' . $n;
					} else {
						$final .= '?content=' . $n . '">' . $n;
					}
			
					$final .= '</a>';
				} else {
					$final .= $n;
				}
				
				return $final;
			}
			

		?>


		<footer>
			<?php
				if( !isset($_GET['html_type']) || $_GET['html_type']== 'TABLE' )
					$s='Табличная верстка<br>'; // строка с информацией
				else
					$s='Блочная верстка<br>';
				if( !isset($_GET['content']) )
					$s.='Таблица умножения полностью<br>';
				else
					$s='Столбец таблицы умножения на '.$_GET['content']. '<br>';
				echo $s.date('d.m.Y h:i:s');
			?>
		</footer>
	</body>
</html>
