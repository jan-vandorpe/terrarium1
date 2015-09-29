<?php

require_once("data/organismeDAO.php");

class organismeservice
  {
  /*
   *  array aanmaken met organismen op basis van opgegeven grootte
   * 
   * 2-5 carnivoren (soort 3)
   * 2-5 herbivoren (soort 2)
   * 1-3 planten    (soort 1)
   * 
   * 
   */

  public static function initNewArrayOrganismen($grootte)
  {
// 2-5 carnivoren
    organismeservice::loopCreate(3, rand(2, 5), $grootte);
// 2-5 herbivoren
    organismeservice::loopCreate(2, rand(2, 5), $grootte);
// 1-3 plantenµ
    organismeservice::loopCreate(1, rand(1, 3), $grootte);
  }
  public static function initExistingArrayOrganismen()
  {
    return organismeservice::getAllOrganismen();
  }

  public static function loopCreate($soort, $aantal, $grootte)
  {
    for ($i = 1; $i <= $aantal; $i++)
      {
      do
        {
        $rij = rand(1, $grootte);
        $kolom = rand(1, $grootte);
        $check = organismeservice::checkPosition($kolom,$rij);
        } while ($check == false);
      $organisme = organismeservice::createOrganisme($soort, 0, $kolom, $rij);
      }
  }

  public static function checkPosition($kolom, $rij)
  {
    $arrOrg = organismeservice::getAllOrganismen();
    foreach ($arrOrg as $org)
      {
      if ($org->kolom == $kolom && $org->rij == $rij)
      {
        return false;
      }
      }
    return true;
  }

  public static function createOrganisme($soort, $kracht, $kolom, $rij)
  {
    $id = OrganismeDAO::createOrganisme($soort, $kracht, $kolom, $rij);
// organisme object aanmaken
    $organisme = new Organisme($id, $soort, $kracht, $kolom, $rij);
    return $organisme;
  }

  public static function getAllOrganismen()
  {
    $arrOrganismen = OrganismeDAO::getAllOrganismen();
    return $arrOrganismen;
  }
  
  public static function checkGameStarted()
  {
    $arrOrganismen = organismeservice::getAllOrganismen();
    if(empty($arrOrganismen))
    {
      return false;
    }
    return true;
  }

  }
