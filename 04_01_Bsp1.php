<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hausuebung</title>
</head>
<body>

	<form method="post">

	<h1>Beispiel 1</h1>

	<p>Ihre Eingabe:</p>
	<input type="text" name="eingabe"> <br><br>	

	<input type="submit" name="exploreButton" value="Explode">
	<input type="submit" name="resetBtn" value="Reset">

	<form method="post">

	<?php
		
		if (isset($_POST['exploreButton'])){
			$text=$_POST['eingabe'];
			$array=explode(" ", $text);
			echo "<br><br>";
				echo "Ihre Eingabe als Liste:";

				echo "<ul>";
				for ($i=0; $i < sizeof($array); $i++){
					echo "<li>".$array[$i]."</li>";
				}
				echo "</ul>";


		}

	?>


</body>
</html>