<?php

require_once("business/organismeservice.php");
require_once("business/gameservice.php");

session_start();

// CHECK FOR POST
if (isset($_POST["grootte"]))
{
  gameService::initNewGame($_POST["grootte"]);
  header('Location:index.php');
  die();
}

// MAAK GAMELIJST AAN
$gamelijst = gameService::getAllGames();

if (!isset($_GET['page']) && !isset($_GET['game']))
{
  include 'presentation/homepage.php';
}

if (isset($_GET['game']))
{
  $arrGameOrganismen = organismeservice::getAllOrganismen($_GET['game']);
  include 'presentation/game.php';
}

if (isset($_GET['page']))
{
  include 'presentation/'.$_GET['page'].'.php';
}
?>