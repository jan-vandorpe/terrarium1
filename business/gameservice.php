<?php
<<<<<<< HEAD

require_once("data/gameDAO.php");
require_once("data/organismeDAO.php");
require_once("organismeservice.php");
=======
require_once("data/gameDAO.php");
require_once("data/organismeDAO.php");
require_once("business/gameservice.php");
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0

class gameService
  {

<<<<<<< HEAD
// ***** NIEUWE GAME INITIALISEREN *****
  public static function initNewgame($grootte)
=======
  public static function initNewGame($grootte)
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
  {
    $game = GameDAO::createGame($grootte);
    organismeservice::initNewOrganismen($grootte, $game->id);
  }

<<<<<<< HEAD
// ***** LAAD ALLE GAMES IN ARRAY *****
=======
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
  public static function getAllGames()
  {
    $arrGames = GameDAO::getAllGames();
    return $arrGames;
  }

<<<<<<< HEAD
// ***** NEXT STEP ARRAY *****
  public static function nextStep($arrPrevStep)
  {
    // GEGEVENS OPHALEN VAN DE GAME
    $game = GameDAO::getGameFromId($arrPrevStep[0]->gameid);
    $grootte = $game->grootte;

    $arrNextStep = array();
    $arrVerwijderd = array();
    $arrNewBorn = array();
    $arrPrevStep = gameService::sortArray($arrPrevStep);

    // IEDERE ORGANISME UIT DE ARRAY OVERLOPEN
    foreach ($arrPrevStep as $prevOrganisme)
      {
      if (!in_array($prevOrganisme, $arrVerwijderd))
      {
        $prevOrganismeRechts = organismeservice::checkPositionInArray($prevOrganisme->kolom + 1, $prevOrganisme->rij, $arrPrevStep);
        /*
         * *********** ALS ER RECHTS NIETS STAAT **********
         */
        if ($prevOrganismeRechts == false && $prevOrganisme->soort > 1)
        {
          // ALS HET ORGANISME TEGEN DE RAND STAAT
          if ($prevOrganisme->kolom == $grootte)
          {
            $nextOrganisme = new Organisme($prevOrganisme->id, $prevOrganisme->soort, $prevOrganisme->kracht, $prevOrganisme->kolom, $prevOrganisme->rij, $prevOrganisme->gameid);
          }
          // ALS HET ORGANISME NIET TEGEN DE RAND STAAT
          if ($prevOrganisme->kolom < $grootte)
          {
            // BEWEEG NAAR EEN ANDERE POSITIE
            $movedOrganisme = gameService::moveRandom($prevOrganisme, $arrPrevStep, $arrNextStep, $grootte);
            $nextOrganisme = new Organisme($prevOrganisme->id, $prevOrganisme->soort, $prevOrganisme->kracht, $movedOrganisme->kolom, $movedOrganisme->rij, $prevOrganisme->gameid);
          }
        }
        /*
         * *********** ALS ER RECHTS WEL IETS STAAT **********
         */
        if ($prevOrganismeRechts != false && $prevOrganisme->soort > 1)
        {
          // ALS HET ORGANISME 1 LVL STERKER IS DAN RECHTS
          if ($prevOrganisme->soort == ($prevOrganismeRechts->soort + 1))
          {
            // OPETEN
            array_push($arrVerwijderd, $prevOrganismeRechts);
            $nextOrganisme = new Organisme($prevOrganisme->id, $prevOrganisme->soort, $prevOrganisme->kracht + 1, $prevOrganisme->kolom + 1, $prevOrganisme->rij, $prevOrganisme->gameid);
          }
          // ALS HET ORGANISME DEZELFDE STERKTE HEEFT ALS RECHTS
          if ($prevOrganisme->soort == $prevOrganismeRechts->soort)
          {
            // IS SOORT = 2
            if ($prevOrganisme->soort == 2)
            {
              // KIND MAKEN          
              array_push($arrNewBorn, new Organisme(0, 2, 1, 0, 0, $prevOrganisme->gameid));
              $nextOrganisme = new Organisme($prevOrganisme->id, $prevOrganisme->soort, $prevOrganisme->kracht, $prevOrganisme->kolom, $prevOrganisme->rij, $prevOrganisme->gameid);
            }
            // IS SOORT = 3
            if ($prevOrganisme->soort == 3)
            {
              // VECHTEN
              if ($prevOrganisme->kracht > $prevOrganismeRechts->kracht)
              {
                // OPETEN
                array_push($arrVerwijderd, $prevOrganismeRechts);
                $nextOrganisme = new Organisme($prevOrganisme->id, $prevOrganisme->soort, $prevOrganisme->kracht + 1, $prevOrganisme->kolom + 1, $prevOrganisme->rij, $prevOrganisme->gameid);
              }
              if ($prevOrganisme->kracht = $prevOrganismeRechts->kracht)
              {
                // BLIJVEN STAAN
                $nextOrganisme = new Organisme($prevOrganisme->id, $prevOrganisme->soort, $prevOrganisme->kracht, $prevOrganisme->kolom, $prevOrganisme->rij, $prevOrganisme->gameid);
              }
            }
          }
          // ALS HET ORGANISME ZWAKKER IS DAN RECHTS OF MEER DAN 1 LVL STERKER IS DAN RECHTS
          if ($prevOrganisme->soort < $prevOrganismeRechts->soort || $prevOrganisme->soort > $prevOrganismeRechts->soort + 1)
          {
            // blijven staan
            $nextOrganisme = new Organisme($prevOrganisme->id, $prevOrganisme->soort, $prevOrganisme->kracht, $prevOrganisme->kolom, $prevOrganisme->rij, $prevOrganisme->gameid);
          }
        }
        /*
         * *********** ALS HET ORGANISME EEN PLANT IS ***********
         */
        if ($prevOrganisme->soort == 1)
        {
          $nextOrganisme = new Organisme($prevOrganisme->id, $prevOrganisme->soort, $prevOrganisme->kracht, $prevOrganisme->kolom, $prevOrganisme->rij, $prevOrganisme->gameid);
        }
        if (count($arrNextStep) < ($grootte * $grootte))
        {
          array_push($arrNextStep, $nextOrganisme);
        }
      }
      }

    // ALLE NIEUWE ORGANISMEN TOEVOEGEN AAN ARRAY
    foreach ($arrNewBorn as $new)
      {
      if (count($arrNextStep) < ($grootte * $grootte))
      {
        $arrNextStep = gameService::addToArray($new->soort, $arrNextStep, 1, $grootte, $new->gameid);
      }
      }
    // NIEUWE PLANTEN TOEVOEGEN AAN ARRAY
    if (count($arrNextStep) < ($grootte * $grootte))
    {
      $arrNextStep = gameService::addToArray(1, $arrNextStep, rand(2, 3), $grootte, $game->id);
    }

    $_SESSION['verwijderd'] = $arrVerwijderd;
    return $arrNextStep;
  }

// ***** BEWEEG NAAR EEN ANDERE PLAATS *****
  public static function moveRandom($organisme, $array, $nextarray, $grootte)
  {
    $teller = 1;
    do
      {
      $kolom = $organisme->kolom;
      $rij = $organisme->rij;
      $posities = rand(1, 4);
=======
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
          if ($prevOrganisme->kracht > $prevOrganismeRechts->kracht)
          {
            
          }
          if ($prevOrganisme->kracht == $prevOrganismeRechts->kracht)
          {
            $nextOrganisme = $prevOrganisme;
            array_push($arrNextStep, $nextOrganisme);
          }
          if ($prevOrganisme->kracht < $prevOrganismeRechts->kracht)
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

    foreach ($arrNextStep as $next)
      {
      if (in_array($next, $arrOpgegeten))
      {
        $key = array_search($next, $arrNextStep);
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
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
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
<<<<<<< HEAD
      if ($check == false)
      {
        $check = organismeservice::checkPositionInArray($kolom, $rij, $nextarray);
      }

      if ($rij == 0 || $kolom == 0)
      {
=======
      if ($rij == 0 || $kolom == 0)
      {
        // check = true -> opnieuw controleren
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
        $check = true;
      }
      if ($rij > $grootte || $kolom > $grootte)
      {
        $check = true;
      }
<<<<<<< HEAD

      $teller = $teller + 1;
      } while ($check != false && $teller < 5);

    if ($teller === 5)
    {
      $kolom = $organisme->kolom;
      $rij = $organisme->rij;
    }
=======
      } while ($check != false);
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
    $organisme->kolom = $kolom;
    $organisme->rij = $rij;
    return $organisme;
  }

<<<<<<< HEAD
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

  public static function addToArray($soort, $array, $aantal, $grootte, $gameid)
  {
    for ($i = 1; $i <= $aantal; $i++)
      {
      if (count($array) >= ($grootte * $grootte))
      {
        return $array;
      }
      do
        {
        $kolom = rand(1, $grootte);
        $rij = rand(1, $grootte);
        $check = organismeservice::checkPositionInArray($kolom, $rij, $array);
        } while ($check != false);
      $organisme = new Organisme(0, $soort, 1, $kolom, $rij, $gameid);
      array_push($array, $organisme);
      }
    return $array;
  }

  }
=======
  }

>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
