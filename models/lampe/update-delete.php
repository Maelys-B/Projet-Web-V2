<?php
include('models/dbConnect.php');

if (empty($_SESSION['user']) || ($_SESSION['user']['role'] ?? '') !== 'admin' || empty($_GET['id'])) {
    header("Location: index.php?page=connexion");
    exit;
}

$id = (int) $_GET['id'];

/* SELECT */
$stmt = $db->prepare("SELECT * FROM lamps WHERE id = :id");
$stmt->execute([':id' => $id]);
$lumieres = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$lumieres) {
    header("Location: index.php?page=home");
    exit;
}

if (!empty($_POST)) {

    /* DELETE : ton formulaire envoie <input type="hidden" name="id" ...> */
    if (isset($_POST['id'])) {
        $stmt = $db->prepare("DELETE FROM lamps WHERE id = :id");
        $stmt->execute([':id' => $id]);

    /* UPDATE */
    } else {
        $sqlUpdate = "UPDATE lamps SET
            name = :name,
            description = :description,
            price = :price,
            img_default = :img_default,
            img_hover = :img_hover,
            main_category = :main_category,
            sub_category = :sub_category
        WHERE id = :id";

        $stmt = $db->prepare($sqlUpdate);
        $stmt->execute([
            ':name'          => $_POST['name'] ?? '',
            ':description'   => $_POST['description'] ?? '',
            ':price'         => ($_POST['price'] ?? '') !== '' ? $_POST['price'] : null,
            ':img_default'   => $_POST['img_default'] ?? '',
            ':img_hover'     => $_POST['img_hover'] ?? '',
            ':main_category' => $_POST['category'] ?? '',      // <-- correspond au SELECT du formulaire
            ':sub_category'  => ($_POST['sub_category'] ?? '') !== '' ? $_POST['sub_category'] : null,
            ':id'            => $id,
        ]);
    }

    header("Location: index.php?page=home");
    exit;
}
