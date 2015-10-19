<?php

class Soort
  {

  public $id;
  public $soort;
  public $image;

  public function __construct($id, $soort, $image)
  {
    $this->setId($id);
    $this->setSoort($soort);
    $this->setImage($image);
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

  public function setSoort($soort)
  {
    $this->soort = $soort;
    return $this;
  }

  public function getSoort()
  {
    return $this->soort;
  }

  public function setImage($image)
  {
    $this->image = $image;
    return $this;
  }

  public function getImage()
  {
    return $this->image;
  }

  }
