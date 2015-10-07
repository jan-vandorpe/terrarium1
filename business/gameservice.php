<?php

require_once("data/gameDAO.php");
require_once("data/organismeDAO.php");
require_once("business/gameservice.php");

class gameService
  {

  public static function initNewGame($grootte)
  {
    $game = GameDAO::createGame($grootte);
    organismeservice::initNewOrganismen($grootte, $game->id);
  }

  public static function getAllGames()
  {
    $arrGames = GameDAO::getAllGames();
    return $arrGames;
  }

  public static function nextStep($arrPrevStep)
  {
    $game = GameDAO::getGameFromId($arrPrevStep[0]->gameid);
    $grootte = $game->grootte;
    $arrNextStep = array();
    $arrOpgegeten = array();
    // SORTEER ARRAY
    $arrPrevStep = gameService::sortArray($arrPrevStep);

    foreach ($arrPrevStep as $prevOrganisme)
      {
      $prevOrganismeRechts = organismeservice::checkPositionInArray($prevOrganisme->kolom + 1, $prevOrganisme->rij, $arrPrevStep);
      if ($prevOrganismeRechts == false && $prevOrganisme->soort > 1)
      {
        // MOVE RANDOM
        $nextOrganisme = gameService::moveRandom($prevOrganisme, $arrPrevStep, $grootte);
        array_push($arrNextStep, $nextOrganisme);
      }
      if ($prevOrganismeRechts != false && $prevOrganisme->soort > 1)
      {
        // ONDERNEEM ACTIE
        if ($prevOrganisme->soort > $prevOrganismeRechts->soort)
        {
          $prevOrganisme->kolom = $prevOrganisme->kolom + 1;
          // OPETEN
          $key = array_search($prevOrganismeRechts, $arrPrevStep);
          array_push($arrOpgegeten, $arrPrevStep[$key]);
          array_push($arrNextStep, $prevOrganisme);
        }
        if ($prevOrganisme->soort < $prevOrganismeRechts->soort)
        {
          // LATEN STAAN
          $nextOrganisme = $prevOrganisme;
          array_push($arrNextStep, $nextOrganisme);
        }
        if ($prevOrganisme->soort == $prevOrganismeRechts->soort)
        {
          if($prevOrganisme->kracht > $prevOrganismeRechts->kracht)
          {
            
          }
          if($prevOrganisme->kracht == $prevOrganismeRechts->kracht)
          {
            $nextOrganisme = $prevOrganisme;
            array_push($arrNextStep,$nextOrganisme);
          }
          if($prevOrganisme->kracht < $prevOrganismeRechts->kracht)
          {
            
          }
        }
      }
      if ($prevOrganisme->soort == 1)
      {
        // LATEN STAAN
        $nextOrganisme = $prevOrganisme;
        array_push($arrNextStep, $nextOrganisme);
      }
      }

      foreach($arrNextStep as $next)
        {
          if(in_array($next,$arrOpgegeten))
          {
            $key = array_search($next,$arrNextStep);
            unset($arrNextStep[$key]);
          }
        }
    return $arrNextStep;
  }

  public static function sortArray($array)
  {
    $games = gameService::getAllGames();
    foreach ($games as $game)
      {
      if ($game->id == $array[0]->gameid)
      {
        $grootte = $game->grootte;
      }
      }

    $arrNew = array();
    for ($i = 1; $i <= $grootte; $i++)
      {
      for ($j = 1; $j <= $grootte; $j++)
        {
        $org = organismeservice::checkPositionInArray($j, $i, $array);
        if ($org != null)
        {
          array_push($arrNew, $org);
        }
        }
      }
    return $arrNew;
  }

  public static function moveRandom($organisme, $array, $grootte)
  {
    do
      {
      $posities = rand(1, 4);
      $kolom = $organisme->kolom;
      $rij = $organisme->rij;
      switch ($posities)
        {
        case 1: {
            $kolom = $kolom + 1;
            break;
          }
        case 2: {
            $kolom = $kolom - 1;
            break;
          }
        case 3: {
            $rij = $rij + 1;
            break;
          }
        case 4: {
            $rij = $rij - 1;
            break;
          }
        }
      $check = organismeservice::checkPositionInArray($kolom, $rij, $array);
      if ($rij == 0 || $kolom == 0)
      {
        // check = true -> opnieuw controleren
        $check = true;
      }
      if ($rij > $grootte || $kolom > $grootte)
      {
        $check = true;
      }
      } while ($check != false);
    $organisme->kolom = $kolom;
    $organisme->rij = $rij;
    return $organisme;
  }

  }
