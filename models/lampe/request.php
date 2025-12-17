<?php
include 'models/dbConnect.php';

if (!isset($_SESSION['user'])) {
    die('Accès non autorisé');
}

if ($_SESSION['user']['role'] === 'admin') {

    $sql = "SELECT * FROM request ORDER BY date_creation DESC";
    $query = $db->query($sql);
    $reclamation = $query->fetchAll(PDO::FETCH_ASSOC);

} else {

    $user_id = $_SESSION['user']['id'];

    $sql = "SELECT * FROM request 
            WHERE id_client = :user_id 
            ORDER BY date_creation DESC";

    $query = $db->prepare($sql);
    $query->execute([
        ':user_id' => $user_id
    ]);

    $reclamation = $query->fetchAll(PDO::FETCH_ASSOC);
}
?>
