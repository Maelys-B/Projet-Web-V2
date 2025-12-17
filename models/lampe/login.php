<?php

include('models/dbConnect.php');

$feedback = null;

if (!empty($_POST)) {
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($email === '' || $password === '') {
        echo "Veuillez remplir tous les champs.";
    }
    else {
        $sql = "SELECT * FROM users WHERE email = :email";
        $query = $db->prepare($sql);
        $query->execute([
            'email' => $email
        ]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        $role = $user['role'];

        if ($user && password_verify($password, $user['mot_de_passe'])) {
            $_SESSION['user'] = $user;
            $_SESSION['user']['role'] = $role;
            header("Location: index.php?page=home");
            exit;
        } else {
            echo "Mot de passe ou email incorrect. Veuillez réessayer.";
        }
    }
}
?>
