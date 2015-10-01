<?php  
$games = gameService::getAllGames();

foreach($games as $game) {
    if($game->id == $_GET["game"]) {
        $grootte = $game->grootte;
    }
}

for ($rij=1; $rij<=$grootte; $rij++) {
    for ($kol=1; $kol<=$grootte; $kol++) {
        $positie = organismeservice::checkPosition($kol,$rij,$_GET["game"]);
        if (isset($positie)) {
            print (" [ ".$kol."/".$rij." ] ");
        } else {
            print (" ( ".$kol."/".$rij." )");
        }
    }
    print ("<br>");
}
?>
