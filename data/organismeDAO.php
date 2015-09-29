<?php
require_once("entities/organisme.class.php");
require_once("dbconfig.class.php");

class OrganismeDAO
  {
  public static function createOrganisme($soort,$kracht)
  {
    $sql = "insert into organismen (soort,kracht) values ('" . $soort . "','" . $kracht . "')";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $dbh = null;
  }
  }
?>