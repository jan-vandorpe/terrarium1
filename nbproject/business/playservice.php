<?php

require_once("data/gameDAO.php");
require_once("data/organismeDAO.php");
require_once("business/gameservice.php");

class playservice
  {

  public static function play($game, $arrNextStep)
  {
// DAG UPDATE
    $dag = $game->dag;
    $id = $game->id;
    $dag += 1;
    GameDAO::updatedate($id, $dag);
    
    // VERWIJDER OPGEGETEN
    foreach ($_SESSION['verwijderd'] as $verwijder)
      {
      organismeservice::deleteOrganisme($verwijder);
      }
      
      
    $arrDBorganismen = organismeservice::getAllOrganismen($game->id);
    foreach ($arrNextStep as $organisme)
      {
      foreach ($arrDBorganismen as $dborganisme)
        {
        if ($organisme->id == $dborganisme->id)
        {
          OrganismeDAO::updateOrganisme($organisme);
        }
        }

      if ($organisme->id == 0)
      {
        organismeservice::createOrganisme($organisme->soort, $organisme->kracht, $organisme->kolom, $organisme->rij, $organisme->gameid);
      }
      }
  }

  }
