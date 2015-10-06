<?php  
$games = gameService::getAllGames();

foreach($games as $game) {
    if($game->id == $_GET["game"]) {
        $grootte = $game->grootte;
    }
}
print ("<div class='matrix clearFix'>");
for ($rij=1; $rij<=$grootte; $rij++) {
    for ($kol=1; $kol<=$grootte; $kol++) {
        $positie = organismeservice::checkPosition($kol,$rij,$_GET["game"]);
        if (isset($positie)) {
//            print (" [ ".$kol."/".$rij." ] ");
              print ("<div class='cell'><div class='innercell'><img src='img/carnivoor.svg' title='carnivoor'></div></div>");
        } else {
//           print (" ( ".$kol."/".$rij." )");
              print ("<div class='cell'><div class='innercell'>leeg</div></div>");
        }
    }
    print ("<br>");
}
print ("</div>");
?>
