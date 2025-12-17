<?php
include('models/dbConnect.php');

$lampsByCategory = [];

// Récupère toutes les catégories existantes dans la DB
$stmt = $db->query("SELECT DISTINCT main_category FROM lamps ORDER BY main_category ASC");
$categories = $stmt->fetchAll(PDO::FETCH_COLUMN);

foreach ($categories as $category) {
    $stmt = $db->prepare("SELECT * FROM lamps WHERE main_category = :category ORDER BY id DESC");
    $stmt->execute([':category' => $category]);
    $lampsByCategory[$category] = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>