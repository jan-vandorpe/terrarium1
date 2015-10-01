<?php

require_once("dbconfig.class.php");
require_once("entities/game.class.php");

class GameDAO
  {

  public static function createGame($grootte)
  {
    $sql = "insert into games (grootte) values (" . $grootte . ")";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $id = $dbh->lastInsertId();
    $dbh = null;
    $game = new Game($id, $grootte, 0);
    return $game;
  }

  public static function getAllGames()
  {
    $sql = "select * from games";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $arrGames = array();
    foreach ($result as $r)
      {
      $game = new Game($r['id'], $r["grootte"], $r["dag"]);
      array_push($arrGames, $game);
      }
    $dbh = null;
    return $arrGames;
  }
  
  public static function getGameFromId($id)
  {
    $sql = "select * from games where id=".$id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    foreach ($result as $r)
      {
      $game = new Game($r['id'], $r["grootte"], $r["dag"]);
      }
    $dbh = null;
    return $game;
  }

  }
