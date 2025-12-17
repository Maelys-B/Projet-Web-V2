<?php include('models/lampe/contact.php'); ?>

<link rel="stylesheet" href="assets/client-service.css">

<h1>Service Client</h1>
<p class="subtitle">Notre équipe est à votre écoute pour toute question ou demande</p>

<div class="service-container hoverable">
<form method="POST" action="">

    <label for="fullname">Nom & Prénom</label>
    <input type="text" name="fullname" id="fullname" 
           value="<?= isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom']) : '' ?>" 
           required>

    <label for="email">Adresse e-mail</label>
    <input type="email" name="email" id="email" 
           value="<?= isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']['email']) : '' ?>" 
           required>

    <label for="subject">Motif de la demande</label>
    <select name="subject" id="subject" required>
        <option value="">-- Sélectionner --</option>
        <option>Information sur un produit</option>
        <option>Question avant achat</option>
        <option>Suivi de commande</option>
        <option>Retour / remboursement</option>
        <option>Problème technique</option>
        <option>Réclamation</option>
        <option>Autre</option>
    </select>

    <label for="lamp">Produit concerné</label>
    <select name="lamp" id="lamp">
        <option value="">Aucun</option>
        <option>Lampe sombre – Alexandre</option>
        <option>Lampe claire – Benjamin</option>
        <option>Lampe colorée – Clément</option>
    </select>

    <label for="order">Numéro de commande (facultatif)</label>
    <input type="text" name="order" id="order">

    <label for="message">Votre message</label>
    <textarea name="message" id="message" placeholder="Expliquez votre demande..." required></textarea>

    <button type="submit">Contacter le service client</button>

</form>

<div class="help-box">
    <h3>Informations Service Client</h3>
    <p><strong>Horaires :</strong> Lundi – Vendredi | 9h – 18h</p>
    <p><strong>Email :</strong> contact@clarte-ornee.fr</p>
    <p><strong>Téléphone :</strong> +33 1 23 45 67 88</p>
    <p><strong>Adresse :</strong> 12 rue de la Lumière, 75010 Paris</p>
</div>
</div>