<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Floppy Bird</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="author" content="Nebez Briefkani" />
      <meta name="description" content="play floppy bird. a remake of popular game flappy bird built in html/css/js" />
      <meta name="keywords" content="flappybird,flappy,bird,floppybird,floppy,html,html5,css,css3,js,javascript,jquery,github,nebez,briefkani,nebezb,open,source,opensource" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

      <!-- Open Graph tags -->
      <meta property="og:title" content="Floppy Bird" />
      <meta property="og:description" content="play floppy bird. a remake of popular game flappy bird built in html/css/js" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="https://nebezb.com/floppybird/assets/thumb.png" />
      <meta property="og:url" content="https://nebezb.com/floppybird/" />
      <meta property="og:site_name" content="Floppy Bird" />

      <!--Includo Bootstrap-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!--Fine inclusione-->
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

      <!-- Style sheets -->
      <link href="css/reset.css" rel="stylesheet">
      <link href="css/main.css" rel="stylesheet">
   </head>
   <body>
      <div id="gamecontainer">
         <div id="gamescreen">
            <div id="sky" class="animated">
               <div id="flyarea">
                  <div id="ceiling" class="animated"></div>
                  <!-- This is the flying and pipe area container -->
                  <button class="btn btn-success" onclick="location.href='../../menu.php'" 
style="margin-left: 20px;margin-top: 30px;" >Indietro</button>
                  <div id="player" class="bird animated"></div>

                  <div id="bigscore"></div>

                  <div id="splash"></div>

                  <div id="scoreboard">
                     <div id="medal"></div>
                     <div id="currentscore"></div>
                     <div id="highscore"></div>
                     <div id="replay"><img src="assets/replay.png" alt="replay"></div>
                  </div>

                  <!-- Pipes go here! -->
               </div>
            </div>
            <div id="land" class="animated"><div id="debug"></div></div>
         </div>
      </div>
      <div class="boundingbox" id="playerbox"></div>
      <div class="boundingbox" id="pipebox"></div>

      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.transit.min.js"></script>
      <script src="js/buzz.min.js"></script>
      <?php
         require_once 'js/main.php';
      ?>

      <script>
      function inIframe() {
          try {
              return window.self !== window.top;
          } catch (e) {
              return true;
          }
      }
      if (!inIframe() && window.location.hostname == 'nebezb.com') {
         window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
         ga('create', 'UA-48047334-1', 'auto');
         ga('send', 'pageview');
      }
      </script>
      <script async src='https://www.google-analytics.com/analytics.js'></script>
   </body>
</html>
