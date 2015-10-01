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
    $arrNextStep = array();
    $arrPrev = $arrPrevStep;
    // ARRAY VOLGORDE VERANDEREN
    // ELK OBJECT AFLOPEN EN CONTROLEREN WAT RECHTS STAAT
    foreach ($arrPrev as $PrevOrganisme)
      {
        // WAT STAAT ER RECHTS
        $OrganismeRechts = OrganismeDAO::getOrganismeFromPosition(($PrevOrganisme->kolom + 1), $PrevOrganisme->rij, $PrevOrganisme->gameid);
        
        // ALS ER RECHTS NIETS STAAT
        if (!isset($OrganismeRechts) && ($PrevOrganisme->soort > 1))
        {
          array_push($arrNextStep,gameService::moveRandom($PrevOrganisme));
        }

        // ALS ER RECHTS WEL IETS STAAT
        if ((isset($OrganismeRechts)) && ($PrevOrganisme->soort > 1))
        {
          switch ($OrganismeRechts)
            {
            // ALS SOORT STERKER IS DAN SOORT RECHTS
            case $PrevOrganisme->soort > $OrganismeRechts->soort:
              array_push($arrNextStep, gameService::eat($PrevOrganisme, $OrganismeRechts));
              unset($arrPrev[$OrganismeRechts->getId()]);
              break;
            // ALS SOORT EVEN STERK IS ALS SOORT RECHTS
            case $PrevOrganisme->soort == $OrganismeRechts->soort:
              if ($PrevOrganisme->soort == 2)
              {
                array_push($arrNextStep,gameService::newBorn($PrevOrganisme));
              }
              if ($PrevOrganisme->soort == 3)
              {
                array_push($arrNextStep,$PrevOrganisme);
              }
              break;
            }
        }
        if($PrevOrganisme->soort == 1)
        {
          array_push($arrNextStep,$PrevOrganisme);
        }
      
      }
    // PLANTEN WILLEKEURIG TOEVOEGEN
      return $arrNextStep;
  }

  public static function moveRandom($organisme)
  {
    do
      {
      $positie = rand(1,4);
      switch($positie)
        {
        case 1:
          $kolom = $organisme->kolom - 1;
          $rij = $organisme->rij;
          break;
        case 2:
          $kolom = $organisme->kolom + 1;
          $rij = $organisme->rij;
          break;
        case 3:
          $kolom = $organisme->kolom;
          $rij = $organisme->rij - 1;
          break;
        case 4:
          $kolom = $organisme->kolom;
          $rij = $organisme->rij + 1;
          break;
        }
      $check = organismeservice::checkPositionFree($kolom, $rij, $organisme->gameid);
      } while (($check == false) && $kolom > 0 && $rij > 0);
    $organisme->kolom = $kolom;
    $organisme->rij = $rij;
    return $organisme;
  }

  public static function eat($organisme, $doodorganisme)
  {
    $organisme->kolom = $organisme->kolom + 1;
    $organisme->kracht = $organisme->kracht + $doodorganisme->kracht;
    return $organisme;
  }

  public static function newBorn($organisme)
  {
    $game = GameDAO::getGameFromId($organisme->gameid);
    do
      {
      $rij = rand(1, $game->grootte);
      $kolom = rand(1, $game->grootte);
      $check = organismeservice::checkPositionFree($kolom, $rij, $organisme->gameid);
      } while ($check == false);
    $newBornOrganisme = new Organisme(0,$organisme->soort,1,$kolom,$rij,$organisme->gameid);
    return $newBornOrganisme;
  }

  }
