<!DOCTYPE html>
<html>
		<head>
			<title>Piano Algorithms</title>
			<link rel="stylesheet" type="text/css" href="style/style.css"/>
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/musickey.js"></script>
			<script type="text/javascript" src="js/song.js"></script>
			<script type="text/javascript" src="js/keyboard.js"></script>
			<script type="text/javascript" src="js/keycode.js"></script>
			<script type="text/javascript" src="js/piano.js"></script>
			<script type="text/javascript" src="js/tunes.js"></script>
			<?php 
				require_once 'js/game.php'
			?>
			<script type="text/javascript" src="js/rockstar.js"></script>
		</head>
		<body>
			<div class="gameDiv">	
				<div class="gamePanel spanAuto span230">
					<div class="span50p">
					<span class="notice">></span>
						<h3>Nota suonata</h3>
					<hr/>
					</div>
					<div class="span50p">
						<div id="note" class="info"></div>
					</div>
				</div>		
				<div class="gamePanel spanAuto">
					<span class="notice">></span>
					<h3>Scegli brano</h3>
					<hr/>
					<select id="songs"><option>Seleziona</option></select>
					<button id="playSong" class="btn btn-red" type="submit" 
					  name="play">Gioca!</button>
				</div>
				<div class="gamePanel spanAuto span230">
					<div class="span50p">
					<span class="notice">></span>
						<h3>Score</h3>
					<hr/>
					</div>
					<div class="span50p">
						<div id="score" class="info red">0</div>
					</div>
				</div>
				
				<div class="gamePanel spanAuto span230">
					<div class="span50p">
					<span class="notice">></span>
						<h3>Tastiera</h3>
					<hr/>
					</div>
					<div class="span50p">
						<div id="keyboard" class="info keyboardInfo"></div>
					</div>
				</div>
				<div>
					<button style="margin-top: 10px;background-color: gray;font-size: small;" onclick="location.href='../../../menu.php'" >
						Indietro</button> 
				</div>
			</div>
			
			<div id="piano" class="pianoKeys">
				<div id="keyC" class="key">
					<div class="keyText keyboardText">C</div>
				</div>
				<div id="sharpC" class="sharp sharpC">
					<div class="sharpText keyboardText">C#</div>
				</div>
				<div id="keyD" class="key">
					<div class="keyText keyboardText">D</div>
				</div>
				<div id="sharpD" class="sharp sharpD">
					<div class="sharpText keyboardText">D#</div>
				</div>
				<div id="keyE" class="key">
					<div class="keyText keyboardText">E</div>
				</div>
				<div  id="keyF" class="key">
					<div class="keyText keyboardText">F</div>
				</div>
				<div id="sharpF" class="sharp sharpF">
					<div class="sharpText keyboardText">F#</div>
				</div>
				<div id="keyG" class="key">
					<div class="keyText keyboardText">G</div>
				</div>
				<div id="sharpG" class="sharp sharpG">
					<div class="sharpText keyboardText">G#</div>
				</div>
				<div  id="keyA" class="key">
					<div class="keyText keyboardText">A</div>
				</div>
				<div id="sharpA" class="sharp sharpA">
					<div class="sharpText keyboardText">A#</div>
				</div>
				<div id="keyB"  class="key">
					<div class="keyText keyboardText">B</div>
				</div>
				<div id="keyC1" class="key">
					<div class="keyText keyboardText">C1</div>
				</div>
				<div id="sharpC1" class="sharp sharpC1">
					<div class="sharpText keyboardText">C#</div>
				</div>
				<div id="keyD1" class="key">
					<div class="keyText keyboardText">D1</div>
				</div>
				<div id="sharpD1" class="sharp sharpD1">
					<div class="sharpText keyboardText">D#</div>
				</div>
				<div  id="keyE1" class="key">
					<div class="keyText keyboardText">E1</div>
				</div>
				<div id="keyF1" class="key">
					<div class="keyText keyboardText">F1</div>
				</div>
			</div>
			
			<div id="audio">
				<audio id="audioC" style="display: none">
					<source src="notes/C4.wav" type="audio/wav"/>
				</audio>
				<audio id="audioCsharp" style="display: none">
					<source src="notes/C4sharp.wav" type="audio/wav"/>
				</audio>
				<audio id="audioD" style="display: none" >
					<source src="notes/D4.wav" type="audio/wav"/>
				</audio>
				<audio id="audioDsharp" style="display: none" >
					<source src="notes/D4sharp.wav" type="audio/wav"/>
				</audio>
				<audio id="audioE" style="display: none" >
					<source src="notes/E4.wav" type="audio/wav"/>
				</audio>
				<audio id="audioF" style="display: none" >
					<source src="notes/F4.wav" type="audio/wav"/>
				</audio>
				<audio id="audioFsharp" style="display: none" >
					<source src="notes/F4sharp.wav" type="audio/wav"/>
				</audio>
				<audio id="audioG" style="display: none" >
					<source src="notes/G4.wav" type="audio/wav"/>
				</audio>
				<audio id="audioGsharp" style="display: none" >
					<source src="notes/G4sharp.wav" type="audio/wav"/>
				</audio>
				<audio id="audioA" style="display: none" >
					<source src="notes/A4.wav" type="audio/wav"/>
				</audio>
				<audio id="audioAsharp" style="display: none" >
					<source src="notes/A4sharp.wav" type="audio/wav"/>
				</audio>
				<audio id="audioB" style="display: none" >
					<source src="notes/B4.wav" type="audio/wav"/>
				</audio>
				<audio id="audioC5" style="display: none" >
					<source src="notes/C5.wav" type="audio/wav"/>
				</audio>
				<audio id="audioC5sharp" style="display: none" >
					<source src="notes/C5sharp.wav" type="audio/wav"/>
				</audio>
				<audio id="audioD5" style="display: none" >
					<source src="notes/D5.wav" type="audio/wav"/>
				</audio>
				<audio id="audioD5sharp" style="display: none" >
					<source src="notes/D5sharp.wav" type="audio/wav"/>
				</audio>
				<audio id="audioE5" style="display: none" >
					<source src="notes/E5.wav" type="audio/wav"/>
				</audio>
				<audio id="audioF5" style="display: none" >
					<source src="notes/F5.wav" type="audio/wav"/>
				</audio>
			</div>
		</body>
</html>
