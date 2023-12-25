<!DOCTYPE html>
<html>
	<head>
		<title>Document</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<style>
			table {
				border-collapse: collapse;
			}
			td, th {
				border: 1px solid black;
				padding: 5px;
			}
    	</style>
	</head>
	<body>
		<?php
			if( isset($_POST['text']) && $_POST['text'] ) { // если передан текст для анализа
				echo '<div class="src_text" style="font-style: italic; color: blue">'.$_POST['text'].'</div><br>'; // выводим текст
				//test_it( $_POST['text'] ); // анализируем текст
				test_it( iconv("utf-8", "cp1251",$_POST['text']) );
				
			} else { // если текста нет или он пустой
				echo '<div class="src_error">Нет текста для анализа</div><br>'; // выводим ошибку
			}

			function test_it( $text ) {
				// определяем ассоциированный массив с цифрами
				$cifra=array( '0'=>true, '1'=>true, '2'=>true, '3'=>true, '4'=>true,
							'5'=>true, '6'=>true, '7'=>true, '8'=>true, '9'=>true );
				// вводим переменные для хранения информации о:
				$cifra_amount=0; // количество цифр в тексте
				$letter=0;
				$punctuation=0;
				$count_words=0;
				$symbs=0;
				$word=''; // текущее слово
				$words=array(); // список всех слов
				for($i=0; $i<=strlen($text); $i++) { // перебираем все символы текста
					if( array_key_exists($text[$i], $cifra) ) // если встретилась цифра
						$cifra_amount++; // увеличиваем счетчик цифр
					// если в тексте встретился пробел или текст закончился
					if( $text[$i]==' ' || $i==strlen($text) ) {
						if( $word ) { // если есть текущее слово
							// если текущее слово сохранено в списке слов
							if( isset($words[$word]) )
								$words[ $word ]++; // увеличиваем число его повторов
							else
								$words[ $word ]=1; // первый повтор слова
							
						}
						$word=''; // сбрасываем текущее слово
					}
					else // если слово продолжается
						$word.=$text[$i]; //добавляем в текущее слово новый символ
				}

				$alp_letter=iconv("utf-8", "cp1251", '/[a-zA-Zа-яА-Я]/');
				$alp_lowercase=iconv("utf-8", "cp1251", '/[a-zа-я]/');
				$alp_uppercase=iconv("utf-8", "cp1251", '/[A-ZА-Я]/');
				$alp_punctuation=iconv("utf-8", "cp1251", '/[[:punct:]]/');
				

				$letter = preg_match_all($alp_letter, $text);
				$lowercase = preg_match_all($alp_lowercase, $text);
				$uppercase = preg_match_all($alp_uppercase, $text);
				$punctuation = preg_match_all($alp_punctuation, $text);
				$count_words = count($words);
				$symbs = test_symbs($text);

				
				// Вывод результатов
				echo "<table>";
				$strlen = strlen($text);
				echo "<tr><td>Количество символов</td><td>$strlen</td></tr>";
			
				echo "<tr><td>Количество букв</td><td>$letter</td></tr>";
				
				echo "<tr><td>Количество строчных букв</td><td>$lowercase</td></tr>";
				
				echo "<tr><td>Количество заглавных букв</td><td>$uppercase</td></tr>";
				
				echo "<tr><td>Количество знаков препинания</td><td>$punctuation</td></tr>";
				
				echo "<tr><td>Количество цифр</td><td>$cifra_amount</td></tr>";
				
				echo "<tr><td>Количество слов</td><td>$count_words</td></tr>";
				
        		echo "<tr><th>Символ</th><th>Количество вхождений</th></tr>";
        		foreach ($symbs as $key => $value) {
					$key = iconv("cp1251", "utf-8", $key); 
            		echo "<tr><td>$key</td><td>$value</td></tr>";
        		}
				
				
				$words_sort=$words;
				ksort($words_sort);
        		echo "<tr><th>Слово</th><th>Количество вхождений</th></tr>";
        		foreach ($words_sort as $key => $value) {
					$key = iconv("cp1251", "utf-8", $key); 
            		echo "<tr><td>$key</td><td>$value</td></tr>";
        		}
        		echo "</table>";
			}

			
			function test_symbs( $text ) { // подсчет количества повторений символов
				$symbs=array(); // массив символов текста
				$l_text=strtolower( $text ); // переводим текст в нижний регистр
				
				// последовательно перебираем все символы текста
				for($i=0; $i<strlen($l_text); $i++) {
					if( isset($symbs[$l_text[$i]]) ) // если символ есть в массиве
						$symbs[$l_text[$i]]++; // увеличиваем счетчик повторов
					else // иначе
						$symbs[$l_text[$i]]=1; // добавляем символ в массив
				}
				return $symbs; // возвращаем массив с числом вхождений символов в тексте
			}
		?>

		<br><a href="index.html" style="color: blueviolet; text-decoration: none; ">Другой анализ</a>
	</body>
</html>
