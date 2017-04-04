<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<?php

	$host = 'localhost';
	$dbname = 'classicmodels';
	$user = 'root';
	$pwd = '';
	
	$propage = 20;
	
	try {
		if (isset($_GET['AnzahlSeiten']))
			$numberOfPages = $_GET['AnzahlSeiten'];
		
		else
			$numberOfPages = 0;
		
	$db = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pwd );
	$sql = "SELECT productCode, productName, productLine FROM products LIMIT $numberOfPages,$propage";
	$maxsql = "SELECT (ceiling(count(*)/".$propage.")-1)*".$propage." maxPage FROM products";
	$max = $db->query($maxsql)->fetchAll(PDO::FETCH_ASSOC)[0]['maxPage'];
	
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	}
	catch (PDOException $e) {

    die("<p>Datenbank nicht verfügbar</p>");
    $db = null;
	}
	
	
	echo "<h1>Kundenübersicht</h1>";
	
	
	echo "<table class=\"table table-hover\">";

	echo "<thead>";
		echo "<th>Code</th>";
		echo "<th>Name</th>";
		echo "<th>Line</th>";
	echo "</thead>";

	foreach ($db->query($sql) as $item)
	{
		echo "<tr>";

		?> <td class="col-xs-4 col-md-4"> <?php
		echo $item->productCode;
		echo "</td>";

		?> <td class="col-xs-4 col-md-4"> <?php
		echo $item->productName;
		echo "</td>";

		?> <td class="col-xs-4 col-md-4"> <?php
		echo $item->productLine;
		echo "</td>";
		echo "</tr>";
	}

	echo "</table>";
	?>

	<div style="text-align: center">
		<a href="pagination.php?AnzahlSeiten=0"> &lt;&lt; </a>

		<a href="pagination.php?AnzahlSeiten=<?php echo $numberOfPages-$propage < 0 ? 0 : $numberOfPages-$propage; ?>"> &lt; </a>

		<a href="pagination.php?AnzahlSeiten=<?php echo $numberOfPages+$propage > $max ? $max : $numberOfPages+$propage; ?>"> &gt; </a>

		<a href="pagination.php?AnzahlSeiten=<?php echo $max; ?>"> &gt;&gt; </a>
	</div>
</body>
</html>