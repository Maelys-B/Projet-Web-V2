<?php
include('models/dbConnect.php');

if (!empty($_POST)) {
    
    $fullname = trim($_POST['fullname'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $subject  = trim($_POST['subject'] ?? '');
    $lamp     = trim($_POST['lamp'] ?? '');
    $order    = trim($_POST['order'] ?? '');
    $message  = trim($_POST['message'] ?? '');

    if ($fullname === '' || $email === '' || $subject === '' || $message === '') {
        echo "<script>alert('Veuillez remplir tous les champs obligatoires.');</script>";
    } else {
        

        $user_id = $_SESSION['user']['id'] ?? null;
        

        $sujet_complet = $subject;
        if ($lamp) {
            $sujet_complet .= " - " . $lamp;
        }
        if ($order) {
            $sujet_complet .= " (Commande: " . $order . ")";
        }

        $sql = "INSERT INTO request (id_client, id_receveur, sujet, date_creation)
                VALUES (:id_client, 3, :sujet, NOW())";
        
        $query = $db->prepare($sql);
        $query->execute([
            ':id_client' => $user_id, 
            ':sujet'     => $sujet_complet,
        ]);

        $id_demande = $db->lastInsertId();


        $message_complet = "De: " . $fullname . "\n";
        $message_complet .= "Email: " . $email . "\n\n";
        $message_complet .= $message;

        $sql2 = "INSERT INTO message (id_demande, id_auteur, message, date_envoi)
                 VALUES (:id_demande, :id_auteur, :message, NOW())";
        
        $query2 = $db->prepare($sql2);
        $query2->execute([
            ':id_demande' => $id_demande,
            ':id_auteur'  => $user_id, 
            ':message'    => $message_complet
        ]);


        echo "<script>
            alert('Votre message a bien été envoyé ! Notre service client vous répondra sous 24 à 48h.');
            window.location.href = 'index.php?page=home';
        </script>";
        exit;
    }
}
?>