<?php

require_once("data/gameDAO.php");

class gameService {

    public static function initNewGame($grootte) {
        $game = GameDAO::createGame($grootte);
        organismeservice::initNewOrganismen($grootte, $game->id);
    }
    
    public static function getAllGames() {
        $arrGames = GameDAO::getAllGames();
        return $arrGames;
    }
}