<?php

class rasterservice
  {

<<<<<<< HEAD
  public static function makeRaster($array, $grootte)
  {
    $arrSoorten = soortService::getAllSoorten();
    print ("<div class='matrix grootte".$grootte." clearFix'>");
=======
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

>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
    for ($rij = 1; $rij <= $grootte; $rij++)
      {
      for ($kol = 1; $kol <= $grootte; $kol++)
        {
        $bln = organismeservice::checkPositionInArray($kol, $rij, $array);
        if ($bln == null)
        {
<<<<<<< HEAD
          print "<div class='cell'><div class='innercell'></div></div>";
        }
        if ($bln != null)
        {
          foreach($arrSoorten as $soort)
            {
              $posSoort = $bln->soort;
              if($soort->id == $posSoort)
              {
                $imgsrc = $soort->image;
                $imgtitle = $soort->soort;
              }
              if ($posSoort=="1") { $kracht = ""; } else { $kracht = "Kracht:".$bln->kracht; }
            }
           print "<div class='cell'><div class='innercell'><img src='".$imgsrc."' alt='".$imgtitle."'><span class='tooltip'><strong>ID : ".$bln->id."</strong> ".$imgtitle." ".$kracht."</span></div></div>";
        }
        }
      }
  print ("</div>");
}
=======
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
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0

  }

/*
<<<<<<< HEAD
<?php  
$games = gameService::getAllGames();
$soorten = soortService::getAllSoorten();

foreach($games as $game) {
    if($game->id == $_GET["game"]) {
        $grootte = $game->grootte;
    }
}
print ("<div class='matrix grootte".$grootte." clearFix'>");
for ($rij=1; $rij<=$grootte; $rij++) {
    for ($kol=1; $kol<=$grootte; $kol++) {
        $positie = organismeservice::checkPosition($kol,$rij,$_GET["game"]);
        if (isset($positie)) {
            $posSoort = $positie->soort;
            foreach($soorten as $soort) {
                if ($soort->id == $posSoort) {
                    $imgtitle = $soort->soort;
                    $imgsrc = $soort->image;
                }
            }
            if ($posSoort=="1") { $kracht = ""; } else { $kracht = $positie->kracht; }
            print ("<div class='cell'><div class='innercell'><img src='".$imgsrc."' title='".$imgtitle."'><span>".$kracht."</span></div></div>");
        } else {
            print ("<div class='cell'><div class='innercell'></div></div>");
        }
    }
    print ("<br>");
}
print ("</div>");
?>

=======

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
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
 */