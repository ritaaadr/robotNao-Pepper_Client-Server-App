<?php
error_reporting(E_ERROR | E_PARSE);
	$name=$_POST["nickname"];
	$age=$_POST["age"];
	//Nome
	$filename = "data.txt";
	//cambio i permessi del file e quindi permetto di scrivere su di esso
	chmod($filename,0777);
	//salvo il file nella variabile $file
	$file = fopen( $filename, "w" );
	if( $file == false )
	{
		echo ( "Errore nell'apertura del file" );
		exit();
	}
?>

<html>
<head>
<!--Includo Bootstrap-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Includo il mio file di css-->
  <link rel="stylesheet" type ="text/css" href ="css/script.css"/>
</head>

	<body style="background-image: url('img/clouds.jpg'); ">
	<div class="content">
		<form method="post" class="form-inline" action="menu.php">

			<label class="label">Nome:</label>
			<input type="text" name="nickname" value="" class="name-input" placeholder="Inserisci il tuo nome" required>
			<br/>

			<label class="label">Età:</label>
			<input type="text" name="age" class="age-input" value="" placeholder="Inserisci la tua età" required>
			<br/>

			<input name="sub_button"type="submit" class="btn btn-info" value="Gioca!" style="margin-top: 40px; margin-left: 110px;">
		</form>
	</div>
	</body>	
</html>	

<?php
	require 'utility/top.php';
	//preparo il socket
	error_reporting(E_ALL);
	console_log($name, true);
	
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
		$obj->game = "log";
	
		$myObj = json_encode($obj);
		socket_write($socket, $myObj, strlen($myObj)); 
	
		function console_log($output, $with_script_tags = true) {
			$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
		');';
			if ($with_script_tags) {
				$js_code = '<script>' . $js_code . '</script>';
			}
		}
	fwrite($file, $name);
	fclose($file);
?>