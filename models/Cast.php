<?php 
class Cast{
 public $leadingActor;
 public $coStar;
 public $actors;

 /**
  * @param String $leadingActor
  * @param String $coStar
  * @param Array  $actors
  */

  public function __construct($_leadingActor, $_coStar , $_actors)
   {
    $this->leadingActor = $_leadingActor;
    $this->coStar = $_coStar;
    $this->actors = $_actors;
  }

  public function getCast(){
    return join(', ' , $this->actors);
  }
}
?>