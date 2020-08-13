<?php
	require '../../../utility/top.php';
    //Nome
    $filename = "score.txt";
    //salvo il file nella variabile $file
    $file = fopen( $filename, "a" );
    if( $file == false )
    {
    echo ( "Errore nell'apertura del file" );
    exit();
	}

	//preparo il socket
    error_reporting(E_ALL);

    /* Get the port for the WWW service. */
    //$service_port = getservbyname('www', 'tcp');
	//$service_port = 49155;
	$service_port = $port;

    /* Get the IP address for the target host. */
    $address = gethostbyname('www.example.com');
	//$address = '192.168.10.100';
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
    $obj->game = "piano";

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

<script type="text/javascript">
function Game(keyboard) {
			
	var tunesList;
	var song;
	var songsDropDown;
	var score ;
	var scorePanel;

	this.handleKeyboardClick = handleKeyboardClick;
	this.isGameRunning = isGameRunning;
	
	setupGame();

	function setupGame() {
		songsDropDown = jQuery("#songs");
		scorePanel = jQuery("#score");
		score = 0;
		loadTunes();
		handlePlaySong();
	}

	function loadTunes() {
		var tunes = new Tunes();
		tunesList = tunes.list;
		loadSongsToScreen();
	}

	function loadSongsToScreen() {
		for(var currentSongNumber = 0; currentSongNumber < tunesList.length; currentSongNumber = currentSongNumber+1) {
			var songName = tunesList[currentSongNumber].name;
			appendOption(songName, currentSongNumber);
		} 
	}

	function appendOption(songName, songVal) {
		songsDropDown.append('<option value="' +songVal+'">'+
			songName +'</option>');
	}

	function isGameRunning() {
		if(song) {
			var currentNote = song.note();
			//if current note is blank game not playing
			if(currentNote == "") {
				return false;
			} else { //note value is not blank so game playing
				return true;
			}
		} 
		return false;
	}

	function handlePlaySong() {
		var playButton = jQuery("#playSong");
		playButton.click(function() {
			playSong();			
		});
	}

	function playSong() {
		var songOption = jQuery("#songs option:selected");
		var songValue = songOption.val();
		song = new Song(tunesList[songValue], 1000, keyboard);
		score = 0;
		scorePanel.text(score);
		song.play();
	}

	function handleKeyboardClick(keyHit) {
		var currentNote = song.note();
		var hitNote = keyboard.getMusicKeyFromKeyboard(keyHit);
		var expectedNote = keyboard.getKey(currentNote);

		if(hitNote == expectedNote) {
			expectedNote.clickNote();
			score = score + 10;
			scorePanel.text(score);
			document.cookie = "myScore = " + score;
		}
	}
}
</script>

<?php
	 $score = $_COOKIE['myScore'];
	 fwrite($file, "score = ");
     fwrite($file, $score);
    ?>