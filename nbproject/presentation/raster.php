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
            if ($posSoort=="1") { $kracht = ""; } else { $kracht = "Kracht:".$positie->kracht; }
            print ("<div class='cell'><div class='innercell'><img src='".$imgsrc."' alt='".$imgtitle."'><span class='tooltip'>".$imgtitle." ".$kracht."</span></div></div>");
        } else {
            print ("<div class='cell'><div class='innercell'></div></div>");
        }
    }
    print ("<br>");
}
print ("</div>");
?>