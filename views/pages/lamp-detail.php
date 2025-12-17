<link rel="stylesheet" href="assets/lamp-detail.css">
<?php

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=galerie_lampes;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupérer les détails de la lampe
$stmt = $pdo->prepare("SELECT * FROM lamps WHERE id = ?");
$stmt->execute([$id]);
$lampe = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div class="lamp-detail-container hoverable">
    
    <div class="lampe-detail">
        <div class="lampe-images">
            <img src="<?= htmlspecialchars($lampe['img_default']) ?>" 
                 alt="<?= htmlspecialchars($lampe['name']) ?>" 
                 class="lampe-image"
                 id="mainImage"
                 onmouseover="if('<?= htmlspecialchars($lampe['img_hover']) ?>' !== '') this.src='<?= htmlspecialchars($lampe['img_hover']) ?>'"
                 onmouseout="this.src='<?= htmlspecialchars($lampe['img_default']) ?>'">
        </div>
        
        <div class="lampe-info">
            <?php if(!empty($lampe['main_category']) || !empty($lampe['sub_category'])): ?>
            <div class="breadcrumb">
                <?php if(!empty($lampe['main_category'])): ?>
                    <?= htmlspecialchars($lampe['main_category']) ?>
                <?php endif; ?>
                <?php if(!empty($lampe['sub_category'])): ?>
                    <span>></span> <?= htmlspecialchars($lampe['sub_category']) ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <h1><?= htmlspecialchars($lampe['name']) ?></h1>
            <div class="lampe-prix"><?= number_format($lampe['price'], 2) ?> €</div>
            
            <div class="lampe-description">
                <?= nl2br(htmlspecialchars($lampe['description'])) ?>
            </div>
            
            <?php if(!empty($lampe['main_category']) || !empty($lampe['sub_category'])): ?>
            <div class="lampe-categories">
                <h3>Catégories</h3>
                <div class="category-tags">
                    <?php if(!empty($lampe['main_category'])): ?>
                    <span class="category-tag"><?= htmlspecialchars($lampe['main_category']) ?></span>
                    <?php endif; ?>
                    <?php if(!empty($lampe['sub_category'])): ?>
                    <span class="category-tag"><?= htmlspecialchars($lampe['sub_category']) ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <a href="index.php?page=booking&id=<?= $lampe['id'] ?>" class="btn-acheter">
                Réserver cette lampe
            </a>
        </div>
    </div>
</div>