<?php
require_once("business/organismeservice.php");

session_start();

if(!isset($_get['page']))
{
  include 'presentation/homepage.php';
}
?>