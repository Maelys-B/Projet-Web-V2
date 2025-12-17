<?php
include('models/dbConnect.php');

if (empty($_SESSION['user']) || ($_SESSION['user']['role'] ?? '') !== 'admin' || empty($_GET['id'])) {
    header("Location: index.php?page=connexion");
    exit;
}

$id = (int) $_GET['id'];

// SELECT
$stmt = $db->prepare("SELECT * FROM lamps WHERE id = :id");
$stmt->execute([':id' => $id]);
$lumieres = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$lumieres) {
    header("Location: index.php?page=home");
    exit;
}

if (!empty($_POST)) {

    // ❌ DELETE (si ton formulaire envoie un champ delete=1 par exemple)
    if (isset($_POST['delete'])) {
        $stmt = $db->prepare("DELETE FROM lamps WHERE id = :id");
        $stmt->execute([':id' => $id]);

    // 🖋️ UPDATE
    } else {
        $sqlUpdate = "UPDATE lamps SET 
            name = :name,
            description = :description,
            price = :price,
            main_category = :main_category,
            sub_category = :sub_category,
            img_default = :img_default,
            img_hover = :img_hover
            WHERE id = :id";

        $stmt = $db->prepare($sqlUpdate);
        $stmt->execute([
            ':name'          => $_POST['name'] ?? '',
            ':description'   => $_POST['description'] ?? '',
            ':price'         => $_POST['price'] ?? null,
            ':main_category' => $_POST['main_category'] ?? '',
            ':sub_category'  => $_POST['sub_category'] ?? null,
            ':img_default'   => $_POST['img_default'] ?? '',
            ':img_hover'     => $_POST['img_hover'] ?? '',
            ':id'            => $id,
        ]);
    }

    header("Location: index.php?page=home");
    exit;
}
