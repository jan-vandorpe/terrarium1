<?php

class Game
  {

  public $id;
  public $grootte;
  public $dag;

  public function __construct($id, $grootte, $dag)
  {
    $this->setId($id);
    $this->setGrootte($grootte);
    $this->setDag($dag);
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setGrootte($grootte)
  {
    $this->grootte = $grootte;
    return $this;
  }

  public function getGrootte()
  {
    return $this->grootte;
  }

  public function setDag($dag)
  {
    $this->dag = $dag;
    return $this;
  }

  public function getDag()
  {
    return $this->dag;
  }

  }
