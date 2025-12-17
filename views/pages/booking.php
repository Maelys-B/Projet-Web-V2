<link rel="stylesheet" href="assets/booking.css">

<?php

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=galerie_lampes;charset=utf8",
        "root",
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM lamps WHERE id = ?");
$stmt->execute([$id]);
$lampe = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div class="booking-container hoverable">
    
    <div class="booking-content">
        <div class="lamp-selected-card">
            <h2>Lampe sélectionnée</h2>
            
            <div class="lamp-info-box">
                <img src="<?= htmlspecialchars($lampe['img_default']) ?>" 
                     alt="<?= htmlspecialchars($lampe['name']) ?>">
                
                <div class="lamp-details">
                    <h3><?= htmlspecialchars($lampe['name']) ?></h3>
                    <div class="lamp-price"><?= number_format($lampe['price'], 2) ?> €</div>
                    
                    <?php if(!empty($lampe['main_category']) || !empty($lampe['sub_category'])): ?>
                    <div class="lamp-categories-mini">
                        <?php if(!empty($lampe['main_category'])): ?>
                            <span class="category-tag-mini"><?= htmlspecialchars($lampe['main_category']) ?></span>
                        <?php endif; ?>
                        <?php if(!empty($lampe['sub_category'])): ?>
                            <span class="category-tag-mini"><?= htmlspecialchars($lampe['sub_category']) ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="reservation-summary">
                <h3>Récapitulatif</h3>
                <div class="summary-line">
                    <span>Prix de location :</span>
                    <span><?= number_format($lampe['price'], 2) ?> €</span>
                </div>
                <div class="summary-line total-line">
                    <span>Total :</span>
                    <span><?= number_format($lampe['price'], 2) ?> €</span>
                </div>
            </div>
        </div>
        
        <div class="booking-form-card">
            <h2>Informations de réservation</h2>
            
            <form method="POST" action="index.php?page=process-booking">
                <input type="hidden" name="lamp_id" value="<?= $lampe['id'] ?>">
                
                <div class="form-group">
                    <label for="nom">Nom complet *</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="telephone">Téléphone *</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
                
                <div class="form-group">
                    <label for="date_debut">Date</label>
                    <input type="date" id="date_debut" name="date_debut" required>
                </div>
    
                <div class="form-group">
                    <label for="message">Message (optionnel)</label>
                    <textarea id="message" name="message" placeholder="Des questions ou des demandes particulières ?"></textarea>
                </div>
                
                <button type="submit" class="btn-submit">Confirmer la réservation</button>
            </form>
        </div>
    </div>
</div>