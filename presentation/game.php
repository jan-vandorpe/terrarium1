<<<<<<< HEAD

=======
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
<<<<<<< HEAD
    <?php
    $autoplay = "nextstep=true&autoplay=refresh";
    $autoplaybutton = "refresh";
    $game = GameDAO::getGameFromId($_GET["game"]);
    $grootte = $game->grootte;
    $dag = $game->dag;
    $arrPrev = $arrGameOrganismen;
    $teller = count($arrPrev);
    $vol = $grootte*$grootte;
    $nextday = true;
    if ($teller==$vol) { $nextday = false; } 
    if (isset($_GET['autoplay']) && isset($_GET['game'])) {
      if ($_GET['autoplay']=="refresh") {
        $autoplay = "autoplay=stop";
        $autoplaybutton = "stop";
        if ($nextday) {
            print("<meta http-equiv='refresh' content='1'>");
        }
      }
    }
?>
    <title>Scrum project in Bootstrap</title>
    <link rel="stylesheet" type="text/css" href="css/matrix.css"  />
    <script src="js/stylesheet_load.js"></script>
=======
    <title>Scrum project in Bootstrap</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"  />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"  />
    <link rel="stylesheet" type="text/css" href="css/matrix.css"  />
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
  </head>
  <body>
    <!--Start HEADER-->	
    <?php include('presentation/locked/header.php') ?>
<<<<<<< HEAD
=======
    <!--Start HOOFDMENU-->		
    <?php include('presentation/locked/navigation.php') ?>
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
    <!--Start jumbotron EYECATCHER-->	
    <?php include('presentation/locked/jumbotron.php') ?>
    <!--Start sectie ROOSTER-->			
    <section>			
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
<<<<<<< HEAD
             <h1>Game: <?php print $_GET["game"]; ?></h1>
         </div>	   
          <div class="col-md-4">
            <?php
            print ("<h2>Dag : ".$dag."</h2>");
            rasterservice::makeRaster($arrPrev, $grootte);
            ?>
          </div>
          <div class="col-md-4">
            <?php
            if ($nextday) {
                $dag = $dag+1;
                print ("<h2>Dag : ".$dag."</h2>");
                $arrNext = gameService::nextStep($arrPrev);
                $_SESSION['nextStep'] = $arrNext;
                rasterservice::makeRaster($arrNext, $grootte);
            }
            ?>
          </div>
          <div class="col-md-2">
=======
            <img src="img/Herbivoor.svg" alt="afbeelding1" title="Herbivoor" class="hidden-xs">
          </div>	   
          <div class="col-md-4">
            <h1>Game: <?php print $_GET["game"]; ?></h1>
            <?php include ('raster.php'); ?>
          </div>
          <div class="col-md-4">
              <h1>Nieuwe versie</h1>
            <?php include ('raster.php'); ?>
          </div>
           <div class="col-md-2">
            <img src="img/Carnivoor.svg" alt="afbeelding2" title="Carnivoor" class="hidden-xs">
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
          </div>
        </div>
      </div>
    </section>
    <!--Start sectie KNOPPEN-->			
    <section>			
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <p></p>
          </div>
<<<<<<< HEAD
          <div class="col-md-4 text-center">
<?php if ($nextday) { ?>              
            <a href="index.php?game=<?php print $game->id ?>&nextstep=true" class="btn btn-info btn-lg pull-left">
              <span class="glyphicon glyphicon-play"></span> PLAY
            </a>
            <a href="index.php?game=<?php print $game->id."&".$autoplay; ?>" class="btn btn-info btn-lg">
              <span class="glyphicon glyphicon-<?php print $autoplaybutton; ?>"></span> AUTOPLAY
            </a>
<?php } ?>
              <a href="index.php?deletegame=<?php print $game->id ?>" class="btn btn-info btn-lg pull-right" onclick="return confirm('Game <?php print($_GET["game"]); ?> verwijderen?');">
=======
          <div class="col-md-4">
            <a href="#" class="btn btn-info btn-lg">
              <span class="glyphicon glyphicon-play"></span> PLAY
            </a>

            <a href="#" class="btn btn-info btn-lg pull-right">
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
              <span class="glyphicon glyphicon-stop"></span> STOP
            </a>
          </div>	
          <div class="col-md-4">
            <p></p>
          </div>					
        </div>
      </div>	
    </section>
    <!--Start FOOTER-->			
    <?php include("presentation/locked/footer.php") ?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
<<<<<<< HEAD
</html>
=======
</html>

>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
