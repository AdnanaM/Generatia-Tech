<?php require_once('includes/header.php'); ?>
<?php date_default_timezone_set( 'Europe/Bucharest' )?>
<!-- <?php print date( 'd.m.Y H.i.s' )?> -->

<h2>
  <?php
    $t = localtime( time(), true ); 
    $h = $t[ 'tm_hour' ]; 
  
    if( $h >= 7 && $h <= 11 ) print "Good Morning!";
    elseif( $h > 11 && $h < 18 ) print "Good Afternoon";
    elseif( $h >= 18 && $h < 22 ) print "Good Evening!";
    elseif( $h >= 22 ) print "Good Night!";
  ?>
</h2>




  <p class="intro">Bine ai venit! Aici găsiți cele mai noi filme online la calitatea HD. Puteți viziona orice film gratis fără reclamă. Avem filme subtitrate din categoriile:  Acțiune, Animație, Aventură, Comedie, Horror, Thriller, Dramă, Documentare, Filme Indiene, Filme Romantice. Avem o colectie de 10119 filme online pe care le poti viziona gratis la noi pe site.</p>
  <p class="intro">Vă dorim vizionare plăcută!</p>
  <a href="movies.php">
    <button type="button" class="btn btn-info">MOVIES</button>
  </a>
<?php require_once('includes/footer.php'); ?>


