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



if (!isset($_get['page']))
{
  include 'presentation/homepage.php';
}
?>