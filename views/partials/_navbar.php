<div class="navbar hoverable">
<div>
    <a href='index.php?page=home'>Clarté Ornée</a>
</div>
    <nav>
        <a href="index.php?page=home-lamp">Lampe</a>
        <a href="index.php?page=shop">Nos boutiques</a>
        <?php if (!isset($_SESSION['user'])): ?>
            <a href="index.php?page=form-inscription">Inscription</a>
        <?php endif; ?>
        <?php if (!empty($_SESSION)): ?>
            <a href="index.php?page=logout">Déconnexion</a>
            <a href="index.php?page=list-request">Réclamations clients</a>

            <?php if ($_SESSION['user']['role'] === 'admin'): ?>
                <a href="index.php?page=insert">Insérer</a>
            <?php endif; ?>

        <?php endif; ?>
    </nav>
</div>
