<?php require_once('includes/header.php'); ?>
<?php 

    $movie_id = $_GET['movie_id']; 

    $movies_filtered = array_filter($movies, 'find_movie_by_id');

    $movie = reset($movies_filtered);



?>
  <h1><?php echo $movie['title']; ?></h1>
  </div>

  <div class="container"  >
    <div class="col-lg-3">
      <img src="<?php echo $movie['posterUrl']; ?>" class="picture">
    </div>
    <div class="col-lg-9">
      <p><?php echo $movie['plot']; ?></p>
      <p>Directed by:   <b><?php echo $movie['director']; ?></b></p>
      <p>Runtime:   <b><?php echo runtime_prettier($movie['runtime']); ?></b></p>
      <p>Actors: 
        <b>
        <?php
          $actors = explode( ", ", $movie['actors']);
          foreach ($actors as $actor){ ?>
            <ul><li><?php echo $actor ?></li></ul>
        <?php } ?>
        </b>
      </p>
      <p>Appearance: <b><?php echo $movie['year']; ?></b> <?php echo check_old_movie($movie['year']);?></p>
      <p>Genres: <b><?php foreach ($movie['genres'] as $genre){
        if($genre != end($movie['genres'])){
          echo $genre.", ";
        }else{
          echo $genre;
        };
        };?></b>
      </p>
  </div>
<?php require_once('includes/footer.php'); ?>


