<?php
include_once __DIR__ . '/../db/data.php';
?>

<main>
    <div class="container">
      <div
        class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-5"
      >
      <?php foreach ($arr_disks as $card) { ?>
              <div class="col">
              <div class="contents p-4">
                <img
                  class="img-fluid"
                  src="<?= $card['poster']?>"
                  alt="<?= $card['title']?>"
                >
                <h2 class="title text-white text-center mt-4 mb-3 text-uppercase fs-5">
                <?= $card['title']?>
                </h2>
                <span class="author d-block text-center fs-6"><?= $card['author']?></span>
                <span class="year d-block text-center fs-6"><?= $card['year']?></span>
              </div>
            </div>
        <?php
      }
      ?>
      </div>
    </div>
  </main>




