<?php

require_once("business/organismeservice.php");

session_start();

// GROOTTE INSTELLEN
$grootte = 6;
// MAAK ORGANISMELIJST AAN
if (organismeservice::checkGameStarted() == false)
{
  organismeservice::initNewOrganismen($grootte);
}

if (organismeservice::checkGameStarted() == true && !isset($_SESSION['arrOrganismen']))
{
  $arrOrganismen = organismeservice::initExistingArrayOrganismen($grootte);
  $_SESSION["arrOrganismen"] = $arrOrganismen;
}

// TABEL MAKEN
if(isset($_SESSION["arrOrganismen"]))
{
  for($i=1;$i<=$grootte;$i++)
    {
    for($j=1;$j<=$grootte;$j++)
      {
        $organisme = organismeservice::checkPosition($j, $i);
        if(isset($organisme))
        {
          print "[ ORGANISME ]";
        }
        if(!isset($organisme))
        {
          print "[  LEEG     ]";
        }
      }
      print "<br>";
    }
}


if (!isset($_get['page']))
{
  include 'presentation/homepage.php';
}
?>