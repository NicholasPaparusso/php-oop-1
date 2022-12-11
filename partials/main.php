<?php 
// var_dump($movies)
?>

<main class="container-fluid">
  <div class="row">
  <?php foreach($movies as $movie ) : ?>
    <div class="np-card col-3 ">

      <div class="image-container">
        <img src="<?php echo $movie->poster ?>" alt="<?php echo $movie->title ?>">
      </div>

      <div class="info">
        <h3 class="title" ><?php echo $movie->title ?></h3>
        <h3 class="it-title"><?php echo $movie->getTitle($movie->title, $movie->itTitle) ?></h3>
        <span class="director" >Regista: <?php echo $movie->director ?></span>
        <span class="genre" >Genere: <?php echo $movie->getGenre() ?></span>
        <span class="vote" >Media Gradimento: <?php echo $movie->vote ?>/5</span>
        <div class="cast">
          <h5 class="star">Protagonista: <?php echo $movie->cast->leadingActor ?></h5>
          <h5 class="co-star">Coprotagonista: <?php echo $movie->cast->coStar ?></h5>
          <span class="actors">Attori principali: <?php echo $movie->cast->getCast() ?></span>
        </div>
      </div>



    </div>
    <?php endforeach ; ?>
  </div>
  
</main>