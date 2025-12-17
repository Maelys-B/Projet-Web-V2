<?php
include 'models/lampe/insert.php';

$stmt = $db->query("SELECT DISTINCT main_category FROM lamps ORDER BY main_category ASC");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="assets/forms.css">

<div class="form module hoverable">
    <h1>Ajouter une lampe</h1>

    <section>
        <form method="post">

            <fieldset class="connection-module">

                <label>
                    Catégorie principale
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
                    Nom
                    <input type="text" name="intitule" required>
                </label>

                <label>
                    Description
                    <input type="text" name="description">
                </label>

                <label>
                    Prix
                    <input type="number" step="0.01" name="price">
                </label>

                <label>
                    Image par défaut
                    <input type="text" name="img_default">
                </label>

                <label>
                    Image hover
                    <input type="text" name="img_hover">
                </label>

                <label>
                    Sous-catégorie
                    <input type="text" name="sub_category">
                </label>

            </fieldset>

            <div style="padding:60px">
                <input type="submit" value="Enregistrer">
            </div>

        </form>
    </section>
</div>
