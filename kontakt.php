<!DOCTYPE html>
<html>
<head>
	<title>Aufgabenstellung 6.2</title>
	<style>
		a 
		{
			text-decoration: none;
			color: black;
			margin-right: 5px;
		}
		.infos input 
		{
			margin-top: 3.5px;
			margin-bottom: 3.5px;
		}

		body
		{
			text-align: center;
		}
		
	</style>
</head>
<body>
<wrapper>

	<nav>
	<?php
	$Navigation = ["Home", "About", "Portfolio", "Kontakt", "Login"];
	foreach ($Navigation as $key) { ?>
		<a href="#"> <?php echo "$key"; ?> </a>
		|
		<?php } ?>
</nav>


	<h3><u>Kontaktformular</u></h3>
	

	<p>Anliegen:</p>
	<input type="radio" name="reason" value="fs">Freie Stellen<br>
	<input type="radio" name="reason" value="pr">Produktreklamation<br>
	<input type="radio" name="reason" value="pn">Produktneuheiten<br><br>

	Anrede* <input type="radio" name="gender" value="woman" required>Frau 
	<input type="radio" name="gender" value="man" required>Herr
	<br><br>

	Vorname* <input type="text" name="vn" required><br><br>
	Nachname* <input type="text" name="nn" required>

	<br><br><br><br>

	<div class="infos">
		Ort:
		<input type="text" name="straße"><br>
		Postleitzahl:
		<input type="text" name="plz"><br>
		Straße:
		<input type="text" name="ort"><br>
		Land:    				
		<select>
  			<option value="austria">Österreich</option>
 			<option value="germany">Deutschland</option>
  			<option value="hunagry">Ungarn</option>
  			<option value="italy">Italien</option>
		</select><br>
		Telefonnummer:
		<input type="text" name="telefonnummer"><br>
		E-Mail:    
		<input type="email" name="email"><br>
		Ihr Anliegen genauer beschrieben:
		<textarea name="textarea"></textarea>
	</div>
	<br><br>

	<input type="submit" name="submitBtn" value="Senden">

</wrapper>
</body>
</html>