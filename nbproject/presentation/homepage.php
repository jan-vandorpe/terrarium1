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
          <script src="js/stylesheet_toggle.js" ></script> 		
        <script src="js/stylesheet_load.js"></script>
  </head>
  <body>
    <!--Start HEADER-->	
    <?php include('presentation/locked/header.php') ?>
    <!--Start jumbotron EYECATCHER-->	
    <?php include('presentation/locked/jumbotron.php') ?>
    <!--Start sectie LIJST-->			
    <section>			
      <div class="container-fluid" id="gamelijst">
        <!-- START NEW GAME -->
        <div class="row">
          <div class="col-md-2">
          </div>	
          <div class="col-md-4">
            <a href="index.php?page=newgame">Start new game</a>
            <ul class="list-group">
              <?php
              foreach ($gamelijst as $game)
                {
                ?>
                <li class="list-group-item"><a href="index.php?game=<?php print $game->id ?>">Game: <?php print $game->id ?> Grootte: <?php print $game->grootte ?> Dag: <?php print $game->dag ?></a></li>
                <?php
                }
              ?>
            </ul>
          </div>
            <div class="col-md-4">
                <?php if (isset($error)) { print ($error); } ?>
                <?php if (isset($_GET['deletegame'])) { print ("<h3>Game ".$_GET['deletegame']." verwijderd.</h3>"); }?>
            </div>
          <div class="col-md-2">
          </div>					
        </div>
      </div>
    </section>
    <!--Start sectie SPELREGELS-->			
    <?php include('presentation/locked/spelregels.php'); ?>
    <!--Start FOOTER-->			
    <?php include("presentation/locked/footer.php") ?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


