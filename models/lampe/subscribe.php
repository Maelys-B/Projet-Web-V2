<?php
include('models/dbConnect.php');

$feedback = null;

if (!empty($_POST)) {

    $prenom   = trim($_POST['firstname'] ?? '');
    $nom      = trim($_POST['lastname'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $phone    = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($prenom === '' || $nom === '' || $email === '' || $phone === '' || $password === '' || $confirm_password === '') {
        echo "Veuillez remplir tous les champs.";
        exit();
    }

    if ($password !== $confirm_password) {
        echo "Les mots de passe ne correspondent pas. Veuillez réessayer.";
        exit();
    }

    $pwd = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT id FROM users WHERE email = :email LIMIT 1";
    $query = $db->prepare($sql);
    $query->execute([
        'email' => $email,
    ]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo "Un compte avec cet email existe déjà. Veuillez vous connecter.";
        exit();
    }

    $sql = "INSERT INTO users (role, prenom, nom, email, telephone, mot_de_passe, date_creation)
            VALUES ('client', :prenom, :nom, :email, :telephone, :mot_de_passe, NOW())";

    $query = $db->prepare($sql);
    $query->execute([
        'prenom'        => $prenom,
        'nom'           => $nom,
        'email'         => $email,
        'telephone'     => $phone,
        'mot_de_passe'  => $pwd,
    ]);

    header("Location: index.php?page=home");
    exit();
}
?>
