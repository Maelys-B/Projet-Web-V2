<?php include('models/lampe/contact.php') ?>
<?php 
if (empty($_SESSION['user'])) {
    header('Location: index.php?page=login');
    exit();
 }
?>

<link rel="stylesheet" href="assets/forms.css">
<div class="form module hoverable">
    <h1>Connection</h1>
    <section>
        <form method="post">
            <fieldset class="connection-module">
        <label>
            Sujet
            <input type="text" name="sujet" placeholder=" Problème produit, probleme SAV,..." autocomplete="text" required/>
        </label>
        <label>
            Message
            <input type="text" name="message" placeholder="Ma demande concerne..."autocomplete="texte" required/>
        </label>
    </fieldset>
    <div style="padding:60px">
        <input
                type="submit"
                value="Soumettre la demande" />
    </div>
        </form>
    </section>
</div>

    