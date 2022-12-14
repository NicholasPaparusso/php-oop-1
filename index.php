<!-- 
  esercizio di oggi:
nome repo: php-oop-1
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layou dividendto la struttura ed i contenuti in file e parziali dedicati.
buon ponte! :sciatore:
 -->
 <?php
 include_once './models/Cast.php';
 include_once './models/Movie.php';
 include_once './db.php';

  // $movie1 = new Movie("Ridley Scott", "American Gangstar", "American Gangstar", "2007", "https://mr.comingsoon.it/imgdb/locandine/big/856.jpg", ['poliziesco' ,'drammatico'] , "4,6", new Cast("Denzel Washington", "Russel Crowe", ['Chiwetel Ejiofor','Josh Brolin','Cuba Gooding Jr']) );

  // $movie2 = new Movie("Martin Scorsese","Quei Bravi Ragazzi", "Goodfellas", "	1990", "https://m.media-amazon.com/images/M/MV5BY2NkZjEzMDgtN2RjYy00YzM1LWI4ZmQtMjIwYjFjNmI3ZGEwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg", ['biografico', 'noir', 'gangster', 'drammatico'] , "4,4", new Cast("Ray Liotta", "Robert De Niro", ['Joe Pesci','Lorraine Bracco','Paul Sorvino']) );

  // $movie3 = new Movie("Ted Demme", "Blow", "Blow", "2001", "https://pad.mymovies.it/movieclub/2001/09/011/locandina.jpg", ['biografico', 'drammatico'] , "4,1", new Cast("Johnny Depp", "Penélope Cruz", ['Franka Potente','Ray Liotta','Rachel Griffiths']) );

  // $movie4 = new Movie("Jonathan Demme", "Philadelpia", "Philadelpia", "1993", "https://pad.mymovies.it/movieclub/2006/08/219/locandina.jpg", ['drammatico'] , "4,5", new Cast("Tom Hanks", "Denzel Washington", ['Jason Robards','Mary Steenburgen','Ron Vawter']) );
  $movies = [];

  foreach($movieList as $movie){
    $movies [] = new Movie($movie['director'], $movie['title'], $movie['itTitle'], $movie['date'], $movie['poster'],$movie['genre'],$movie['vote'], new Cast($movie['cast']['star'],$movie['cast']['coStar'], $movie['cast']['actors']));
    }

  // var_dump($movies)
//  ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.css' integrity='sha512-tBwPRcI1t+0jTsIMtf//+V1f0xAWHh7pvPE82A2n5FcBrzl6b0LRE6XnxUTRHti59y4Js7z4Wb/zal2HBsVVOQ==' crossorigin='anonymous'/>

  <link rel="stylesheet" href="./style/style.css">

  <title>PHP-OOP-Movies</title>
 </head>
 <body>
 
 <?php include_once './partials/header.php' ?>
 <?php include_once './partials/main.php' ?>
 <?php include_once './partials/footer.php' ?>

 </body>
 </html>