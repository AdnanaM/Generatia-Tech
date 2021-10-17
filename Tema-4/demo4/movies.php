<?php require_once('includes/header.php'); ?>
  <div class="row">
    <h1>MOVIES</h1>
    
    <div class="row">
      <?php $i = 0; foreach ($movies as $movie){ ?>

        <?php include('includes/archive-movie.php'); ?>

      <?php } ?>

    </div>
  </div>
<?php require_once('includes/footer.php'); ?>


