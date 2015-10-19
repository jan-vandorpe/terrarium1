<?php

require_once("data/organismeDAO.php");

class organismeservice
  {
<<<<<<< HEAD
=======

  
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
  /*
   *  array aanmaken met organismen op basis van opgegeven grootte
   * 
   * 2-5 carnivoren (soort 3)
   * 2-5 herbivoren (soort 2)
   * 1-3 planten    (soort 1)
   * 
   * 
   */

<<<<<<< HEAD
  public static function initNewOrganismen($grootte, $gameid)
  {
// 2-5 carnivoren
    organismeservice::loopCreate(3, rand(2, 4), $grootte, $gameid);
// 2-5 herbivoren
    organismeservice::loopCreate(2, rand(2, 5), $grootte, $gameid);
// 1-3 plantenµ
    organismeservice::loopCreate(1, rand(2, 3), $grootte, $gameid);
=======
  public static function initNewOrganismen($grootte,$gameid)
  {
// 2-5 carnivoren
    organismeservice::loopCreate(3, rand(2, 5), $grootte, $gameid);
// 2-5 herbivoren
    organismeservice::loopCreate(2, rand(2, 5), $grootte, $gameid);
// 1-3 plantenµ
    organismeservice::loopCreate(1, rand(1, 3), $grootte, $gameid);
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
  }

  public static function loopCreate($soort, $aantal, $grootte, $gameid)
  {
    for ($i = 1; $i <= $aantal; $i++)
      {
      do
        {
        $rij = rand(1, $grootte);
        $kolom = rand(1, $grootte);
<<<<<<< HEAD
        $check = organismeservice::checkPositionFree($kolom, $rij, $gameid);
=======
        $check = organismeservice::checkPositionFree($kolom,$rij,$gameid);
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
        } while ($check == false);
      $organisme = organismeservice::createOrganisme($soort, 1, $kolom, $rij, $gameid);
      }
  }
<<<<<<< HEAD

  public static function createOrganisme($soort, $kracht, $kolom, $rij, $gameid)
=======
  
    public static function createOrganisme($soort, $kracht, $kolom, $rij, $gameid)
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
  {
    $id = OrganismeDAO::createOrganisme($soort, $kracht, $kolom, $rij, $gameid);
// organisme object aanmaken
    $organisme = new Organisme($id, $soort, $kracht, $kolom, $rij, $gameid);
    return $organisme;
  }

  public static function checkPositionFree($kolom, $rij, $gameid)
  {
    $arrOrg = organismeservice::getAllOrganismen($gameid);
    foreach ($arrOrg as $org)
      {
      if ($org->kolom == $kolom && $org->rij == $rij && $org->gameid == $gameid)
      {
        return false;
      }
      }
    return true;
  }
<<<<<<< HEAD

  public static function checkPosition($kolom, $rij, $gameid)
  {
    $organisme = OrganismeDAO::getOrganismeFromPosition($kolom, $rij, $gameid);
    return $organisme;
  }

  public static function checkPositionInArray($kol, $rij, $gamearray)
  {
    foreach ($gamearray as $org)
      {
      if (($org->kolom == $kol) && ($org->rij == $rij))
      {
        return $org;
      }
      }
    return false;
=======
  public static function checkPosition($kolom,$rij,$gameid)
  {
  $organisme = OrganismeDAO::getOrganismeFromPosition($kolom, $rij, $gameid);
  return $organisme;
  }
  
  public static function checkPositionInArray($kol,$rij,$gamearray)
  {
    foreach($gamearray as $org)
      {
        if(($org->kolom == $kol) && ($org->rij == $rij))
        {
          return $org;
        }
      }
      return false;
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
  }

  public static function getAllOrganismen($gameid)
  {
    $arrOrganismen = OrganismeDAO::getAllOrganismen($gameid);
    return $arrOrganismen;
  }
  
<<<<<<< HEAD
  public static function deleteOrganisme($organisme)
  {
    OrganismeDAO::deleteOrganisme($organisme);
  }

  }
=======

  }
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
