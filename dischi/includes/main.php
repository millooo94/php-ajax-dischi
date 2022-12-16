<?php
include_once __DIR__ . '/../db/data.php';
?>

<main>
  <?php
  foreach ($arrDisks as $card) { 
    <div class="card" style="width: 18rem;">
      <img src="<?= $card['poster']?>" class="card-img-top" alt="<?= $card['title']?>"
      <div class="card-body"> 
        <h2><?= $card['title']?></h2>
        <div><?= $card['author']?></div>
        <div><?= $card['year']?></div>
      </div>
    </div>
  } 
?>
</main>


