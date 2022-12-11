<?php 
class Movie{

public $director;
public $itTitle;
public $title;
public $date;
public $poster;
public $vote;
public $genre = [];
public $cast;

/**
 * @param String $director
 * @param String $itTitle
 * @param String $title
 * @param String $date
 * @param String $poster
 * @param Array $genre
 * @param Cast $cast
 */

public function __construct($_director , $_title, $_date, $_poster, $_genre  , $_vote, Cast $_cast){
  $this->director = $_director;
  $this->title =  $_title ; 
  $this->date = $_date ;
  $this->poster = $_poster ;
  $this->genre = $_genre;
  $this->vote = $_vote ;
  $this->cast = $_cast ;
 }

public function setTitle($_itTitle){
$this->itTitle = $_itTitle;
}

public function getTitle(){
  $showedTitle = $this->title ;

  if(!empty($this->itTitle) && $this->itTitle != $this->title){
    $showedTitle = $this->itTitle;
  }
  return $showedTitle;
}

public function getGenre(){
  return join(', ', $this->genre);
}

} 

?>