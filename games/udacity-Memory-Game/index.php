<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Memory Game</title>
    <meta name="description" content="Simple memory game">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Coda">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
<button onclick="location.href='../../menu.php' " 
style="margin-left: 900px; margin-top: 50px;background-color:#add8e6;border-radius: 4px;
border: 2px solid #add8e6;font-size: 12px;">Indietro</button>
    <div class="container">
        <header>
            <h1 class="game-heading">Memory Game</h1>
        </header>
        <div class="score-panel">
            <div id="score">
                <ul class="stars">
                    <li class="star">
                        <i class="fas fa-star"></i>
                    </li>
                    <li class="star">
                        <i class="fas fa-star"></i>
                    </li>
                    <li class="star">
                        <i class="fas fa-star"></i>
                    </li>
                </ul>
                <div class="moves">
                    <span class="moves-count">0</span>
                    <span class="moves-text"> Mosse</span>
                </div>
            </div>
            <div id="timer">
                <span class="hours">00</span> :
                <span class="minutes">00</span> :
                <span class="seconds">00</span>
            </div>
        </div>
        <ul class="deck">
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
            <li class="card">
                <i class="fab"></i>
            </li>
        </ul>
    </div>
    <div id="simpleModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-close-btn">&times;</span>
                <h2>Congratulazioni!</h2>
            </div>
            <div class="modal-body">
                <h3>Hai completato il gioco con successo!</h3>
                <p>Hai impiegato
                    <span class="hours"></span>
                    <span class="minutes"></span>
                    <span class="seconds"></span> &
                    <span class="moves-count"></span> per finire il gioco!
                    <br> Il tuo punteggio e'
                    <span class="rating"></span> su 3.
                </p>
            </div>
            <div class="replay">
                <button type="button" class="modal-replay-btn">
                    Gioca di nuovo!
                </button>
            </div>
        </div>
    </div>
    <?php 
		require_once 'js/functions.php';
    ?>
</body>
</html>