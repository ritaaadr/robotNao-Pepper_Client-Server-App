<?php
require 'utility/top.php';
//preparo il socket
error_reporting(E_ALL);

/* Get the port for the WWW service. */
//$service_port = getservbyname('www', 'tcp');
$service_port = $port;

/* Get the IP address for the target host. */
$address = gethostbyname('www.example.com');
$address = $ip_address;

/* Create a TCP/IP socket. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
	$flag = "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
	console_log($flag, true);
} else {
	$flag = "OK.\n";
	console_log($flag, true);
}
	$result = socket_connect($socket, $address, $service_port);
	if ($result === false) {
		$flag = "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
		console_log($flag, true);
	} else {
		$flag = "connessione stabilita";
		console_log($flag, true);
	}

	$obj = new stdClass();
	$obj->game = "menu";

	$myObj = json_encode($obj);
	socket_write($socket, $myObj, strlen($myObj)); 

	function console_log($output, $with_script_tags = true) {
		$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
	');';
		if ($with_script_tags) {
			$js_code = '<script>' . $js_code . '</script>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<!--Includo Bootstrap-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url('img/jungle.jpg'); ">
<br/>

 <link rel="stylesheet" type ="text/css" href ="css/menu.css"/>

<div class="grid-container" style="margin-left: 50px;">
	<div id="snake" style="background-color: white; border-radius: 15px;">

		<input type="image" id="snake-image" height="70" width="70" 
		       src="http://icons.iconarchive.com/icons/martin-berube/animal/256/snake-icon.png"
			   onclick="location.href='games/snake/snake.php' " ><br/>
		<label id="lab">1 - Snake</label>

	</div>	       

	<div id="tetris" style="background-color: white; border-radius: 15px;">
		<input type="image" id="tetris-image" height="70" width="70" 
		       src="https://image.flaticon.com/icons/svg/528/528110.svg"
			   onclick="location.href='games/tetris/tetris.php' " > <br/>
			   <label id="lab">2 - Tetris</label>   
	</div>	

	<div id="pacman" style="background-color: white; border-radius: 15px;">
		<input type="image" id="Pacman" height="70" width="70" 
		       src="https://image.flaticon.com/icons/svg/459/459464.svg"
			   onclick="location.href='games/pacman/index.php'" ><br/>
			   <label id="lab">3 - Pacman</label>   
	</div>

	<div id="angryBirds" style="background-color: white; border-radius: 15px;">
		<input type="image" id="angry-birds" height="70" width="70" 
		       src="https://www.flaticon.com/premium-icon/icons/svg/280/280939.svg"
			   onclick="location.href='games/floppybird/index.php' " ><br/>
			   <label id="lab">4 - angrybirds</label>   
	</div>

	<div id="memorycards" style="background-color: white; border-radius: 15px;">
		<input type="image" id="memory-cards" height="70" width="70" 
		       src="https://www.flaticon.com/premium-icon/icons/svg/2247/2247779.svg"
			   onclick="location.href='games/udacity-Memory-Game/index.php' " ><br/>
			   <label id="lab">5 - Memory</label>   
	</div>



	<div id="tris" style="background-color: white; border-radius: 15px;">
		<input type="image" id="Tris" height="70" width="70" 
		       src="https://image.flaticon.com/icons/svg/2314/2314034.svg"
			   onclick="location.href='games/Tic-Tac-Toe/TicTacToe.php' " ><br/>
			   <label id="lab">6 - Tris</label>   
	</div>

	<div id="piano" style="background-color: white; border-radius: 15px;">
		<input type="image" id="Piano" height="70" width="70" 
		       src="https://image.flaticon.com/icons/svg/570/570549.svg"
			   onclick="location.href='games/piano-game/game/index.php' " ><br/>
			   <label id="lab">7 - Piano</label>   
	</div>

	<div id="simonsgame" style="background-color: white; border-radius: 15px;">
		<input type="image" id="simonsGame" height="70" width="70" 
		       src="https://image.flaticon.com/icons/svg/489/489700.svg"
			   onclick="location.href='games/simon-game/index.php'" ><br/>
			   <label id="lab">8 - Simon dice</label>   
	</div>

	<div id="youtube" style="background-color: white; border-radius: 15px;">
		<input type="image" id="Youtube" height="70" width="70" 
		       src="https://image.flaticon.com/icons/svg/1384/1384060.svg"
			   onclick="location.href='youtube/youtube_script.php'" ><br/>
			   <label id="lab">9 - Youtube</label>   
	</div>


</div>	    	       
 

<br/>
<br/>
<button class="btn btn-success" onclick="location.href='script.php' " 
style="margin-left: 330px; margin-top:5px">Indietro</button>    
<button class="btn btn-danger" onclick="location.href='utility/end.php' " 
style="margin-left: 30px; margin-top:5px:">Esci</button>    

</body>
</html>