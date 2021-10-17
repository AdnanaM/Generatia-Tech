<?php require_once('includes/header.php'); ?>
  <h1>TITANIC</h1>
  </div>

  <div class="container"  >
    <div class="col-lg-3">
      <img src="img/10236_aa.jpg" class="picture">
    </div>
    <div class="col-lg-9">
      <h3><span class="badge bg-secondary"><?php echo check_old_movie('1997'); ?></span></h3>

      <p>The RMS Titanic, a luxury steamship, sank in the early hours of April 15, 1912, off the coast of Newfoundland in the North Atlantic after sideswiping an iceberg during its maiden voyage. Of the 2,240 passengers and crew on board, more than 1,500 lost their lives in the disaster. Titanic has inspired countless books, articles and films (including the 1997 “Titanic” movie starring Kate Winslet and Leonardo DiCaprio), and the ships story has entered the public consciousness as a cautionary tale about the perils of human hubris.</p>
      <p>Directed by:   <b>James Cameron</b></p>
      <p>Runtime:   <b><?php echo runtime_prettier('194'); ?></b></p>
      <p><b>Cast:</b></p>
      <ul>
        <li>Leonardo DiCaprio</li>
        <li>Kate Winslet</li>
        <li>Billy Zane</li>
        <li>LKathy Bates</li>
      </ul>
  </div>
<?php require_once('includes/footer.php'); ?>


