<?php

require_once("data/organismeDAO.php");

class organismeservice
  {

  public static function createOrganisme($soort, $kracht, $rij, $kolom)
  {
    $id = OrganismeDAO::createOrganisme($soort, $kracht, $rij, $kolom);
    // organisme object aanmaken
    $organisme = new Organisme();
    $organisme->id = $id;
    $organisme->kracht = $kracht;
    $organisme->soort = $soort;
    return $organisme;
  }

  /*
   *  array aanmaken met organismen op basis van opgegeven grootte
   * 
   * 2-5 carnivoren (soort 3)
   * 2-5 herbivoren (soort 2)
   * 1-3 planten    (soort 1)
   */

  public static function createOrganismeLijst($grootte)
  {
    $arrOrganismelijst = array();

    // 2-5 carnivoren
    $aantalCarnivoren = rand(2, $grootte);
    for ($i = 1; $i <= $aantalCarnivoren; $i++)
      {
      do
        {
          $Crij = rand(1,$grootte);
          $Ckolom = rand(1,$grootte);
        } while(checkIfFree($Crij,$Ckolom)==false);
      $carnivoor = organismeservice::createOrganisme(3, 0, $Crij, $Ckolom);
      }
    // herbivoren
    $aantalHerbivoren = rand(2, $grootte);
    for ($i = 1; $i <= $aantalHerbivoren; $i++)
      {
      do
        {
          $Hrij = rand(1,$grootte);
          $Hkolom = rand(1,$grootte);
        } while(checkIfFree($Crij,$Ckolom)==false);
      $herbivoor = organismeservice::createOrganisme(2, 0, $Hrij, $Hkolom);
      }
    // planten
    $aantalPlanten = rand(1, $grootte / 2);
    for ($i = 1; $i <= $aantalPlanten; $i++)
      {
      do
        {
          $Prij = rand(1,$grootte);
          $Pkolom = rand(1,$grootte);
        } while(checkIfFree($Crij,$Ckolom)==false);
      $plant = organismeservice::createOrganisme(1, 0, $Prij, $Pkolom);
      }
  }

  public static function getAllOrganismen()
  {
    $arrOrganismen = OrganismeDAO::getAllOrganismen();
    return $arrOrganismen;
  }

  public static function checkIfFree($rij, $kolom)
  {
    $arrOrganismen = organismeservice::getAllOrganismen();

    foreach ($arrOrganismen as $organisme)
      {
      if (($rij == $organisme->rij) && ($kolom == $organisme->kolom))
      {
        return false;
      }
      }
    return true;
  }

  }
