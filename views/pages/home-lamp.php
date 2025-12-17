<link rel="stylesheet" href="assets/home-lamp.css">
<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=galerie_lampes;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

$stmt = $pdo->query("SELECT * FROM lamps ORDER BY id DESC");
$allLamps = $stmt->fetchAll(PDO::FETCH_ASSOC);


$filterCategory = isset($_GET['category']) ? $_GET['category'] : '';
?>

<div class="shop-container">
    
    <div class="shop-header">
        <h1>Notre collection de lampes</h1>
    </div>
    

    <div class="filter-section">
        <div class="filter-title">Filtrer par catégorie :</div>
        <div class="filter-buttons">
            <button class="filter-btn active" data-category="">Toutes</button>
            <button class="filter-btn" data-category="Lampe sombre">Lampe sombre</button>
            <button class="filter-btn" data-category="Lampe coloré">Lampe coloré</button>
            <button class="filter-btn" data-category="Lampe clair">Lampe clair</button>
        </div>
    </div>
    
    <div class="lamps-grid hoverable" id="lampsGrid">
        <?php foreach($allLamps as $lamp): ?>
            <a href="index.php?page=lamp-detail&id=<?= $lamp['id'] ?>" 
                class="lamp-card" 
                data-category="<?= htmlspecialchars($lamp['main_category']) ?>">
                <div class="lamp-image-container">
                    <img src="<?= htmlspecialchars($lamp['img_default']) ?>" 
                            alt="<?= htmlspecialchars($lamp['name']) ?>" 
                            class="lamp-image default">
                    <?php if(!empty($lamp['img_hover'])): ?>
                        <img src="<?= htmlspecialchars($lamp['img_hover']) ?>" 
                                alt="<?= htmlspecialchars($lamp['name']) ?>" 
                                class="lamp-image hover">
                    <?php endif; ?>
                </div>
                <div class="lamp-info">
                    <?php if(!empty($lamp['sub_category'])): ?>
                        <div class="lamp-category"><?= htmlspecialchars($lamp['sub_category']) ?></div>
                    <?php endif; ?>
                    <div class="lamp-name"><?= htmlspecialchars($lamp['name']) ?></div>
                    <div class="lamp-price"><?= number_format($lamp['price'], 2) ?> €</div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<script src="js/home-lamp.js"></script>