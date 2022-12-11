<?php 
// var_dump($movies)
?>

<main class="container-fluid">
  <div class="row">
  <?php foreach($movies as $movie ) : ?>
    <div class="np-card col-4 ">

      <div class="image-container">
        <img src="<?php echo $movie->poster ?>" alt="<?php echo $movie->title ?>">
      </div>

      <div class="info">
        <h3 class="title" ><?php echo $movie->title ?></h3>
        <h3 class="it-title"></h3>
        <span class="director" >Regista: <?php echo $movie->director ?></span>
        <span class="genre" >Genere: <?php echo $movie->getGenre() ?></span>
        <span class="vote" >Media Gradimento: <?php echo $movie->vote ?>/5</span>
        <span class="co-star" ></span>
      </div>

      <div class="hidden-info">
        <span class="cast"></span>
      </div>

    </div>
    <?php endforeach ; ?>
  </div>
  
</main>