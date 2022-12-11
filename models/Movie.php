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

public function __construct($_director ,$_itTitle, $_title, $_date, $_poster, $_genre  , $_vote, Cast $_cast){
  $this->director = $_director;
  $this->itTitle = $_itTitle;
  $this->title =  $_title ; 
  $this->date = $_date ;
  $this->poster = $_poster ;
  $this->genre = $_genre;
  $this->vote = $_vote ;
  $this->cast = $_cast ;
 }


public static function getTitle($_title, $_itTitle){
  if($_itTitle == $_title){
    $_itTitle = "";
  }else{
   return $_itTitle ;
  }
  
}

public function getGenre(){
  return join(', ', $this->genre);
}

} 

?>