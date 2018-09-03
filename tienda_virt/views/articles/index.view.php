<?php include APP_PATH . '/views/parts/head.view.php' ?>
   
<?php include APP_PATH . '/views/parts/header.view.php' ?>
  
    <div class="l-main ed-container">
      <div class="ed-item">
        <h2 class="productos__title">Productos destacados</h2>
        <div class="productos-container">
          <div class="productos">
          <?php foreach ($articles as $article): ?>
          
            <div class="producto">
              <h3 class="producto__title"><?= $article->name ?></h3>
              <a href="<?= PUBLIC_PATH . '/producto?id=' . $article->id ?>">
                <img src="<?= PUBLIC_PATH . '/img/'. $article->image?>" class="producto__img"/>
                </a>
              <p class="producto__price icon-cart"><?= $article->price ?></p>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  
    <?php include APP_PATH . '/views/parts/foot.view.php' ?>