<?php

include('models/dbConnect.php');

$keyword = $_POST['keywords'] ?? '';

if (!empty($keyword)) {

    $sql = "SELECT *
            FROM lamps 
            WHERE name LIKE :search OR description LIKE :search";
    $query = $db->prepare($sql);
    $query->execute([':search' => '%' . $keyword . '%']);
    $lumieresshearch = $query->fetchAll(PDO::FETCH_ASSOC);
}
?>