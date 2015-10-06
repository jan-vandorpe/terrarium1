<?php  
$games = gameService::getAllGames();
//$organisme = OrganismeDAO::getAllOrganismen($_GET["game"]);

foreach($games as $game) 
{
    if($game->id == $_GET["game"]) 
    {
        $grootte = $game->grootte;
    }
}
print ("<div class='matrix clearFix'>");
for ($rij=1; $rij<=$grootte; $rij++) {
    for ($kol=1; $kol<=$grootte; $kol++) {
        $positie = organismeservice::checkPosition($kol,$rij,$_GET["game"]);
        if (isset($positie))
        {
            $soort = $positie->soort;
            $imgtitle = OrganismeDAO::getSoort($soort);
            $imgsrc = OrganismeDAO::getImage($soort);
            $kracht = $positie->kracht;
            print ("<div class='cell'><div class='innercell'><img src='".$imgsrc."' title='".$imgtitle."'><span>".$kracht."</span></div></div>");
        } 
        else 
        {
            print ("<div class='cell'><div class='innercell'></div></div>");
        }
    }
    print ("<br>");
}
print ("</div>");
?>
