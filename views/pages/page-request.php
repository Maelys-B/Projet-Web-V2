<?php
include 'models/lampe/message.php';
?>

<h1>Messages de la demande <?= htmlspecialchars($id_demande) ?></h1>

<?php if (empty($messages)): ?>
    <p>Aucun message pour cette demande.</p>
<?php else: ?>

    <?php foreach ($messages as $m): ?>

        <?php
            $idAuteur = $m['id_auteur'];
            $nom    = $clients[$idAuteur]['nom'] ?? 'Inconnu';
            $prenom = $clients[$idAuteur]['prenom'] ?? '';
            $email  = $clients[$idAuteur]['email'] ?? '';
        ?>

        <div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
            <p><b>Auteur :</b> <?= htmlspecialchars(trim("$prenom $nom $email")) ?></p>
            <p><?= nl2br(htmlspecialchars($m['message'])) ?></p>
            <p>
                <small>Envoyé le : <?= htmlspecialchars($m['date_envoi']) ?></small>
            </p>
        </div>

    <?php endforeach; ?>

<?php endif; ?>

<form method="post">
    <textarea name="message" rows="3" cols="50"
              placeholder="Écrivez votre message..." required></textarea><br>
    <button type="submit">Envoyer</button>
</form>
