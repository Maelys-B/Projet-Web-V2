<?php include('models/lampe/request.php'); ?>

<h1>Reclamation</h1>

<div class="grid">
    <?php if (empty($reclamation)) : ?>
        <p>Aucune demande trouvée.</p>
    <?php else : ?>
        <?php foreach ($reclamation as $r) : ?>
            <article>
                <a href="index.php?page=page-request&id=<?= urlencode($r['id']) ?>">
                    <h3><?= htmlspecialchars($r['sujet']) ?></h3>
                </a>
            </article>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
