<?php

class rasterservice
  {

  public static function makeRaster($array)
  {
    $games = gameService::getAllGames();
    foreach ($games as $game)
      {
      if ($game->id == $array[0]->gameid)
      {
        $grootte = $game->grootte;
      }
      }

    for ($rij = 1; $rij <= $grootte; $rij++)
      {
      for ($kol = 1; $kol <= $grootte; $kol++)
        {
        $bln = organismeservice::checkPositionInArray($kol, $rij, $array);
        if ($bln == null)
        {
          print "[ - - - - ] ";
        }
        if ($bln != null)
        {
          print "[ ". $bln->soort . "[" . $bln->id . "]" . " ] ";
        }
        }
        print "<br>";
      }
  }

  }

/*

function maakRaster($gamearray)
{
  for ($rij = 1; $rij <= $grootte; $rij++)
    {
    for ($kol = 1; $kol <= $grootte; $kol++)
      {
      $positie = organismeservice::checkPositionInArray($kol, $rij, $gamearray);
      if ($positie == true)
      {
        print (" [ " . $kol . "/" . $rij . " ] ");
      }
      else
      {
        print (" ( " . $kol . "/" . $rij . " )");
      }
      }
    print ("<br>");
    }
}

?>
 * 
 */