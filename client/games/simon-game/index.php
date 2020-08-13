<html>
	<head>
		<link href="main.css" rel="stylesheet" />
		<!--Includo Bootstrap-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!--Fine inclusione-->
	</head>
	<body>
	<button style="margin-top: 40px;margin-left: 1060px;"class="btn btn-success" onclick="location.href='../../menu.php'" >Indietro</button> 
		<div id="score-wrapper"><span>SCORE: </span><span id="score">0</span></div>
		<div id="highscore-wrapper"><span>MAX SCORE: </span><span id="highscore">0</span></div>
		<div id="simon-says">
			<div id="top-right" class="simon-btn"></div>
			<div id="top-left" class="simon-btn"></div>
			<div id="bot-right" class="simon-btn"></div>
			<div id="bot-left" class="simon-btn"></div>
			<div id="start-btn"><div id="label-marca">VIA</div></div>
		</div>
		<?php 
			require_once 'script/main.php';
		?>	
	</body>
</html>

