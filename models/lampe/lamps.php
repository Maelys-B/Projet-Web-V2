<?php
include('models/dbConnect.php');
$stmt = $db->query("SELECT * FROM lamps ORDER BY id DESC");
$allLamps = $stmt->fetchAll(PDO::FETCH_ASSOC);


$filterCategory = isset($_GET['category']) ? $_GET['category'] : '';
?>