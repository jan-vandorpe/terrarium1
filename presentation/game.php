
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
    <!--Start sectie ROOSTER-->			
    <section>			
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <img src="img/Herbivoor.svg" alt="afbeelding1" title="Herbivoor" class="hidden-xs">
          </div>	   
          <div class="col-md-4">
            <h1>Game: <?php print $_GET["game"]; ?></h1>
            <?php 
            $game = GameDAO::getGameFromId($_GET["game"]);
            $grootte = $game->grootte;
            $arrPrev = $arrGameOrganismen;
            rasterservice::makeRaster($arrPrev);
            ?>
          </div>
          <div class="col-md-4">
            <?php 
            $arrNext = gameService::nextStep($arrPrev,$grootte);
            print "<br>";
            rasterservice::makeRaster($arrNext);
            ?>
          </div>
           <div class="col-md-2">
            <img src="img/Carnivoor.svg" alt="afbeelding2" title="Carnivoor" class="hidden-xs">
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
          <div class="col-md-4">
            <a href="#" class="btn btn-info btn-lg">
              <span class="glyphicon glyphicon-play"></span> PLAY
            </a>

            <a href="#" class="btn btn-info btn-lg pull-right">
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
</html>
