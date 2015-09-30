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
    <header>
      <div class="container-fluid">
        <div class="pull-right">
          <a href="#" title="Facebook" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-thumbs-up"></span>
          </a>
          <a href="#" title="Share" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-share"></span>
          </a>
          <a href="#" title="Settings" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-cog"></span>
          </a>
        </div>	
      </div>
    </header>
    <!--Start HOOFDMENU-->		
<?php include('presentation/locked/navigation.php') ?>
    <!--Start jumbotron EYECATCHER-->	
    <section>			
      <div class="container-fluid">		
        <div class="jumbotron">
          <h2>jumbotron</h2>
        </div>
      </div>
    </section>
    <!--Start sectie SPELREGELS-->			
    <section>			
      <div class="container-fluid">
        <div class="col-md-2">
          <h2>Spelregels</h2>
          <div class="row">
            <div class="col-md-12">
              <p>paragraaf1</p>
              <p>paragraaf2</p>
            </div>	
          </div>
        </div>
    </section>
    <!--Start sectie LIJST-->			
    <section>			
      <div class="container-fluid" id="gamelijst">
            <!-- START NEW GAME -->
            <a href="index.php?page=newgame">start new game</a>
            <ul>
              <?php
            foreach($gamelijst as $game)
              {
              ?>
              <li><a href="index.php?game=<?php print $game->id ?>">Game: <?php print $game->id ?> Grootte: <?php print $game->grootte ?> Dag: <?php print $game->dag ?></a></li>
              <?php
              }
            ?>
            </ul>
      </div>
    </section>
    <!--Start FOOTER-->			
    <footer>			
      <div class="container-fluid">
        <p>footer</p>
      </div>
    </footer>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


