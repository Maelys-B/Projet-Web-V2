<?php
// models/lampe/message.php
include('models/dbConnect.php');

$id_demande = $_GET['id'] ?? null;

$id_user = $_SESSION['user']['id'] ?? null;

$messages = [];
$clients  = [];

if (!$id_demande) {
    return;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['message']) && $id_user) {

    $sqlInsert = "INSERT INTO message (id_demande, id_auteur, message, date_envoi)
                 VALUES (:id_demande, :id_auteur, :message, NOW())";

    $stmt = $db->prepare($sqlInsert);
    $stmt->execute([
        ':id_demande' => $id_demande,
        ':id_auteur'  => $id_user,
        ':message'    => $_POST['message'],
    ]);

    // Évite le renvoi du formulaire (PRG)
    header('Location: index.php?page=page-request&id=' . $id_demande);
    exit();
}

$sqlMessages = "SELECT * FROM message WHERE id_demande = :id_demande ORDER BY date_envoi ASC";
$stmt = $db->prepare($sqlMessages);
$stmt->execute([':id_demande' => $id_demande]);
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!empty($messages)) {

    $auteursIds = array_unique(array_column($messages, 'id_auteur'));

    $auteursIds = array_values(array_filter($auteursIds, fn($v) => !empty($v)));

    if (!empty($auteursIds)) {
        $placeholders = implode(',', array_fill(0, count($auteursIds), '?'));

        $sqlUsers = "SELECT id, nom, prenom, email FROM users WHERE id IN ($placeholders)";
        $stmt = $db->prepare($sqlUsers);
        $stmt->execute($auteursIds);

        $usersData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($usersData as $u) {
            $clients[$u['id']] = $u;
        }
    }
}
