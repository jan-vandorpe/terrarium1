<?php
require_once("business/organismeservice.php");

session_start();

// MAAK ORGANISMELIJST AAN
$arrOrganismeLijst = organismeservice::createOrganismeLijst(6);
var_dump($arrOrganismeLijst);

if(!isset($_get['page']))
{
  include 'presentation/homepage.php';
}
?>