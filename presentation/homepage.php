<?php
/*
 * HIER KOMT DE HTML PAGINA
 */

// GAMELIJST = $gamelijst
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <title>Scrum project in Bootstrap</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"  />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"  />
  </head>
  <body>
    <!--Start HEADER-->	
    <?php include('presentation/locked/header.php') ?>
    <!--Start HOOFDMENU-->		
    <?php include('presentation/locked/navigation.php') ?>
    <!--Start jumbotron EYECATCHER-->	
    <?php include('presentation/locked/jumbotron.php') ?>
    <!--Start sectie SPELREGELS-->			
    <?php include('presentation/locked/spelregels.php'); ?>
    <!--Start sectie LIJST-->			
    <section>			
      <div class="container-fluid" id="gamelijst">
        <!-- START NEW GAME -->
        <div class="row">
          <div class="col-md-2">
            <img src="img/Herbivoor.svg" alt="afbeelding1" title="Herbivoor" class="hidden-xs">
          </div>	
          <div class="col-md-4">
            <a href="index.php?page=newgame">start new game</a>
            <ul>
              <?php
              foreach ($gamelijst as $game)
                {
                ?>
                <li><a href="index.php?game=<?php print $game->id ?>">Game: <?php print $game->id ?> Grootte: <?php print $game->grootte ?> Dag: <?php print $game->dag ?></a></li>
                <?php
                }
              ?>
            </ul>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-2">
            <img src="img/Carnivoor.svg" alt="afbeelding2" title="Carnivoor" class="hidden-xs">
          </div>					
        </div>
      </div>
    </section>
    <!--Start FOOTER-->			
    <?php include("presentation/locked/footer.php") ?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


