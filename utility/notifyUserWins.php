<?php
error_reporting(E_ERROR | E_PARSE);

require 'top.php';
//preparo il socket
error_reporting(E_ALL);

/* Get the port for the WWW service. */
//$service_port = getservbyname('www', 'tcp');
//$service_port = 49155;
$service_port = $port;

/* Get the IP address for the target host. */
$address = gethostbyname('www.example.com');
//$address = '192.168.10.102';
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

	function console_log($output, $with_script_tags = true) {
		$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
	');';
		if ($with_script_tags) {
			$js_code = '<script>' . $js_code . '</script>';
		}
    }

    //Nome
    $filename = "prova.txt";
    //salvo il file nella variabile $file
    $file = fopen( $filename, "a" );
    if( $file == false )
    {
    echo ( "Errore nell'apertura del file" );
    exit();
    }

    fwrite($file, $userStatus);
    fclose($file);
    
    $obj = new stdClass();
    $obj->game = "vinto";
    
	$myObj = json_encode($obj);
	socket_write($socket, $myObj, strlen($myObj)); 
?>