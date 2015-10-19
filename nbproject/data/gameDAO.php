<?php

require_once("dbconfig.class.php");
require_once("entities/game.class.php");

class GameDAO
  {

  public static function createGame($grootte)
  {
    $sql = "insert into games (grootte, dag) values (" . $grootte . ", '1')";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $id = $dbh->lastInsertId();
    $dbh = null;
    $game = new Game($id, $grootte, 1);
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
    if (isset($game)) {
        return $game;
    }
  }
  
  // DELETE GAME
  public static function deleteGame($id) {
      $sql = "DELETE games, organismen FROM games INNER JOIN organismen WHERE games.id = organismen.gameid and games.id = '".$id."'";
      $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
      $result = $dbh->query($sql);
      $dbh = NULL;
  }
  
  // DAG UPDATE
  public static function updatedate($id, $dag) {
      $sql = "UPDATE games SET dag = ".$dag." WHERE id = '".$id."';";
      $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
      $result = $dbh->query($sql);
      $dbh = NULL;
  }
  
  }
