<?php
include('models/lampe/category.php');
include('models/lampe/search.php');
?>

<link rel="stylesheet" href="assets/lamp.css">

<div class="top-bar">
    <div class="top-bar-inner">

        <form method="post">
            <input
                type="text"
                class="search-input"
                name="keywords"
                placeholder="Rechercher..."
                value="<?= htmlspecialchars($keyword ?? '') ?>"
            >
            <input type="submit" class="search-input" value="OK">
        </form>

    </div>
</div>

<?php if (empty($keyword)): ?>

    <?php foreach ($lampsByCategory as $categoryName => $lamps): ?>
        <section class="section">
            <h2 class="gallery-title">
                <?= htmlspecialchars($categoryName) ?>
            </h2>

            <div class="scroll-container">
                <?php foreach ($lamps as $lamp): ?>
                    <div class="gallery-cell">
                        <a href="index.php?page=lampspages&id=<?= (int)$lamp['id'] ?>" class="lamp-link">
                            <img
                                src="<?= htmlspecialchars($lamp['img_default']) ?>"
                                class="lamp-image default"
                                alt=""
                            >
                            <img
                                src="<?= htmlspecialchars($lamp['img_hover']) ?>"
                                class="lamp-image hover"
                                alt=""
                            >
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>

<?php else: ?>

    <section class="section">
        <h2 class="gallery-title">
            Résultats pour « <?= htmlspecialchars($keyword) ?> »
        </h2>

        <div class="scroll-container">
            <?php if (!empty($lumieresshearch)): ?>
                <?php foreach ($lumieresshearch as $lamp): ?>
                    <div class="gallery-cell">
                        <a href="index.php?page=lampspages&id=<?= (int)$lamp['id'] ?>" class="lamp-link">
                            <img
                                src="<?= htmlspecialchars($lamp['img_default'] ?? $lamp['photo_url']) ?>"
                                class="lamp-image default"
                                alt=""
                            >
                            <img
                                src="<?= htmlspecialchars($lamp['img_hover'] ?? $lamp['photo_url']) ?>"
                                class="lamp-image hover"
                                alt=""
                            >
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun résultat pour « <?= htmlspecialchars($keyword) ?> ».</p>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>
