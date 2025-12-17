<?php include('models/lampe/showlumiere.php') ?>

<div class="lumiere">
  <h1><?= $lumiere['name'] ?></h1>

  <div class="lumiere-content">
    <img src="<?= $lumiere['img_default'] ?>" alt="Image de la lumière">

    <div class="lumiere-text">
      <p><?= $lumiere['description'] ?></p>

      <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin'): ?>
        <a class="admin-link" href="index.php?page=update-lamps&id=<?= $lumiere['id'] ?>">
          Mettre à jour la lumière
        </a>
      <?php endif; ?>
    </div>
  </div>
</div>
