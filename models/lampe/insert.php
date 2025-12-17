<?php
include('models/dbConnect.php');

if (empty($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    header("Location: index.php?page=form-connection");
    exit;
}

if (!empty($_POST)) {

    $sql = "INSERT INTO lamps (
                main_category,
                name,
                price,
                sub_category,
                description,
                img_default,
                img_hover
            ) VALUES (
                :main_category,
                :name,
                :price,
                :sub_category,
                :description,
                :img_default,
                :img_hover
            )";

    $query = $db->prepare($sql);
    $query->execute([
        ':main_category' => $_POST['category'],
        ':name'          => $_POST['intitule'],
        ':price'         => $_POST['price'] ?? null,
        ':sub_category'  => $_POST['sub_category'] ?? null,
        ':description'   => $_POST['description'] ?? '',
        ':img_default'   => $_POST['img_default'] ?? '',
        ':img_hover'     => $_POST['img_hover'] ?? '',
    ]);

    header("Location: index.php?page=insert");
    exit;
}
