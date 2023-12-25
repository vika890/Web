<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
			<section>
				<?php
    				include "db.php";
					$definitions = mysqli_query($mysql, "SELECT * FROM `definitions`");
    				$image = mysqli_query($mysql, "SELECT * FROM `images`");
				?>
				<h2>Кулинарные термины</h2>
				<table>
					<tr>
						<th>Термин</th>
        	            <th>Определение</th>
					</tr>

                	<?php
                    	while ($row = mysqli_fetch_assoc($definitions)) {
                        	echo '<tr>'; 
                        	echo '<td>'.$row['name'].'</td>'.'<td style="text-align: left;">'.$row['definition'].'</td>';
                        	echo '</tr>';
                        }
	                ?>
        	    </table>
			</section>

			<h2>Картинки</h2>
			<section>
	            <?php
    	            while ($row = mysqli_fetch_assoc($image)) {
        	            echo '<img '; 
            	        echo 'title="'.$row['name'].'" src="images/'.$row['address'];
                	    echo '" class="image">';
                	}
            	?>
        	</section>
        </main>
    </body>
</html>