<?php

require_once("business/organismeservice.php");

session_start();

// MAAK ORGANISMELIJST AAN
if (organismeservice::checkGameStarted() == false)
{
  organismeservice::initNewArrayOrganismen(6);
}

if (organismeservice::checkGameStarted() == true && !isset($_SESSION['arrOrganismen']))
{
  $arrOrganismen = organismeservice::initExistingArrayOrganismen();
  $_SESSION["arrOrganismen"] = $arrOrganismen;
}

var_dump($_SESSION["arrOrganismen"]);

if (!isset($_get['page']))
{
  include 'presentation/homepage.php';
}
?>