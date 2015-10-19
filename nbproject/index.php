<?php

require_once("business/organismeservice.php");
require_once("business/gameservice.php");
require_once("business/soortservice.php");
require_once("business/rasterservice.php");
require_once("business/playservice.php");

session_start();

// DELETE GAME
if (isset($_GET['deletegame'])) {
    $game = GameDAO::deleteGame($_GET['deletegame']);
}

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

if (isset($_GET['nextstep']) && isset($_GET['game']))
{
  if (isset($_SESSION['nextStep']))
  {
    $game = GameDAO::getGameFromId($_GET['game']);
    playservice::play($game, $_SESSION['nextStep']);
  }
}

if (isset($_GET['game']))
{
    $game = GameDAO::getGameFromId($_GET['game']);
    if (isset($game)) {
        $arrGameOrganismen = organismeservice::getAllOrganismen($_GET['game']);
        include 'presentation/game.php';
    }
    if (!isset($game)) {
        $error = "<h3>Game ".$_GET['game']." bestaat niet meer.</h3>Selecteer een andere of start een nieuwe game.";
        include 'presentation/homepage.php';
    }
}

if (isset($_GET['page']))
{
  include 'presentation/' . $_GET['page'] . '.php';
}

?>