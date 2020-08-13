<!DOCTYPE html>
<html>
	<head>
		<!--Includo Bootstrap-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!--Fine inclusione-->
		<title>Tris</title>
		<link rel="stylesheet" type="text/css" href="TicTacToe.css">
	</head>
	<body class="body" >
		<div style="text-align:center;">
		<span id="0" class="pointer"> - </span><span id="1" class="pointer"> - </span><span id="2" class="pointer"> - </span> <br />
		<span id="3" class="pointer"> - </span><span id="4" class="pointer"> - </span><span id="5" class="pointer"> - </span> <br />
		<span id="6" class="pointer"> - </span><span id="7" class="pointer"> - </span><span id="8" class="pointer"> - </span> <br />
		<p id="status" class="status">E' il turno del giocatore X</p>
		<button id="reset" class="btn btn-primary">Ricomincia</button>
		<button class="btn btn-primary" onclick="location.href='../../menu.php'" >Indietro</button> 
		</div>
	</body>
    <?php
            require_once 'script.php';
    ?>
</html>