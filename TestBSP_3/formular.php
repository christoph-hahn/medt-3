<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formularverarbeitung</title>
</head>
<body>
	<?php
		echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=post>";
	?>
		<input type="checkbox" name="vacation[]" value="mo"> Montag<p>
		<input type="checkbox" name="vacation[]" value="di"> Dienstag <p>
		<input type="checkbox" name="vacation[]" value="mi"> Mittwoch <p>
		<input type="checkbox" name="vacation[]" value="do"> Donnerstag <p>
		<input type="checkbox" name="vacation[]" value="fr"> Freitag<p>
		
		<input type="submit" value="Abschicken" name="submitBtn">
	</form>	
	<?php
		if(isset($_POST['submitBtn']))
		{
			$vacation= $_POST['vacation'];
			if(in_array('fr', $vacation))
			{
				echo "Freitag kann nicht ausgewählt werden";
			}

			else
			{
				echo "Ausgewählte Tage:";
				?>
				<ul>
					<?php
			foreach ($vacation as $item) 
			{
				echo "<li>".$item."</li>";
			}
				echo "</ul>";
			}
		}
			
	?>

</body>
</html>