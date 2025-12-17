<?php include('models/lampe/update-delete.php') ?>

<?php
$stmt = $db->query("SELECT DISTINCT main_category FROM lamps ORDER BY main_category ASC");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="assets/forms.css">

<div class="form module hoverable">
    <h1>Mettre à jour la lampe <?= htmlspecialchars($lumieres['name']) ?></h1>

    <section>
        <form method="post">

            <fieldset class="connection-module">

                <label>
                    Catégorie
                    <select name="category" required>
                        <option value="">-- Choisir une catégorie --</option>
                        <?php foreach ($categories as $c): ?>
                            <option value="<?= htmlspecialchars($c['main_category']) ?>">
                                <?= htmlspecialchars($c['main_category']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>

                <label>
                    Intitulé
                    <input
                        type="text"
                        name="name"
                        value="<?= htmlspecialchars($lumieres['name'] ?? '') ?>"
                        required
                    >
                </label>

                <label>
                    Description
                    <input
                        type="text"
                        name="description"
                        value="<?= htmlspecialchars($lumieres['description'] ?? '') ?>"
                    >
                </label>

                <label>
                    Prix
                    <input 
                        type="number" 
                        step="0.01" 
                        name="price"
                        value="<?= htmlspecialchars($lumieres['price'] ?? '') ?>"
                    >
                </label>

                </label>

                <label>
                    Image par défaut
                    <input
                        type="text"
                        name="img_default"
                        value="<?= htmlspecialchars($lumieres['img_default'] ?? '') ?>"
                    >
                </label>

                <label>
                    Image hover
                    <input
                        type="text"
                        name="img_hover"
                        value="<?= htmlspecialchars($lumieres['img_hover'] ?? '') ?>"
                    >
                </label>

                <label>
                    Sous-catégorie
                    <input 
                        type="text" 
                        name="sub_category">
                </label>

            </fieldset>

            <div style="padding:60px">
                <input type="submit" value="Mettre à jour">
            </div>

        </form>

        <form method="post">
            <input type="hidden" name="id" value="<?= (int)$_GET['id'] ?>">
            <div style="padding:60px">
                <input
                    type="submit"
                    class="outline secondary"
                    value="Supprimer la lampe"
                >
            </div>
        </form>
    </section>
</div>
