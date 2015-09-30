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

  public static function initNewOrganismen($grootte,$gameid)
  {
// 2-5 carnivoren
    organismeservice::loopCreate(3, rand(2, 5), $grootte, $gameid);
// 2-5 herbivoren
    organismeservice::loopCreate(2, rand(2, 5), $grootte, $gameid);
// 1-3 plantenµ
    organismeservice::loopCreate(1, rand(1, 3), $grootte, $gameid);
  }

  public static function loopCreate($soort, $aantal, $grootte, $gameid)
  {
    for ($i = 1; $i <= $aantal; $i++)
      {
      do
        {
        $rij = rand(1, $grootte);
        $kolom = rand(1, $grootte);
        $check = organismeservice::checkPositionFree($kolom,$rij,$gameid);
        } while ($check == false);
      $organisme = organismeservice::createOrganisme($soort, 0, $kolom, $rij, $gameid);
      }
  }
  
    public static function createOrganisme($soort, $kracht, $kolom, $rij, $gameid)
  {
    $id = OrganismeDAO::createOrganisme($soort, $kracht, $kolom, $rij, $gameid);
// organisme object aanmaken
    $organisme = new Organisme($id, $soort, $kracht, $kolom, $rij, $gameid);
    return $organisme;
  }
  
   public static function initExistingArrayOrganismen($grootte)
  {
    // array aanmaken met alle organismen en lege posities
    return organismeservice::getAllOrganismen();
  }

  public static function checkPositionFree($kolom, $rij, $gameid)
  {
    $arrOrg = organismeservice::getAllOrganismen();
    foreach ($arrOrg as $org)
      {
      if ($org->kolom == $kolom && $org->rij == $rij && $org->gameid == $gameid)
      {
        return false;
      }
      }
    return true;
  }

  public static function getAllOrganismen($gameid)
  {
    $arrOrganismen = OrganismeDAO::getAllOrganismen();
    return $arrOrganismen;
  }
  
  public static function checkGameStarted($gameid)
  {
    
  }
  
  public static function checkPosition($kolom,$rij)
  {
    $organisme = OrganismeDAO::getOrganismeFromPosition($kolom, $rij);
    return $organisme;
  }
  
  public static function showGame($gameid)
  {
    
  }

  }
