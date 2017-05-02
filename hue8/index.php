<!DOCTYPE html>
<html>
<head>
	<title>Liste</title>
	<meta charstet="UTF-8">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script
		src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous">
	</script>


	
	<script>

	$(document).ready(function()
	{
		$('#newLi').click(function() {$('#liste').append('<li class="item">Item</li>');});
		$('#deleteLi').click(function() {$('.item').last().remove();});
	});
	</script>
</head>
<body class="container">

		<h1>Listen</h1>

		<span id="newLi" class="glyphicon glyphicon-plus"> Neu</span> <p>
		<span id="deleteLi" class="glyphicon glyphicon-minus"> Löschen</span>
		 <ul id="liste">
		 	<li class="item">Item</li>
		 	<li class="item">Item</li>
		 	<li class="item">Item</li>
		 </ul>
</body>
</html>