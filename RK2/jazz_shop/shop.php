<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Магазин</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<?php include 'header.html'; ?>
	</header>

	<main>
		<?php
    		include "db.php";			
		?>
		<h1>Акустические гитары</h1>
		<?php
			$guitars = mysqli_query($mysql, "SELECT image, name, price FROM guitar");
		?>
		<section>  
            <table class="table">
			<tr>
				<th>Фотография</th>
				<th>Название</th>
				<th>Цена</th>
				<th>Кнопка</th>	
			</tr>
                <?php
					while ($row = mysqli_fetch_assoc($guitars)) {
						echo "<tr>";
						echo '<td><img class="images" src="images/'.$row['image'].'"></td>';
						echo "<td class='name'>" . $row['name'] . "</td>";
						echo "<td class='price'>" . $row['price'] . "</td>";
						echo "<td class='link'><a href='guitars.php?id=" . $row['id'] . "'>Перейти</a></td>";
        				echo "</tr>";
                    }    			
                ?>        
            </table>
        </section>
	</main>

	<footer>
        <?php include 'footer.html'; ?>
    </footer>
</body>
</html>