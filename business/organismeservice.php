<?php

require_once("data/organismeDAO.php");

class organismeservice
  {
  public static function createOrganisme($soort,$kracht)
  {
    OrganismeDAO::createOrganisme($soort, $kracht);
  }
  }