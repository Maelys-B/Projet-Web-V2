<?php include('models/lampe/login.php'); ?>

<link rel="stylesheet" href="assets/forms.css">
<div class="form module hoverable">
    <h1>Connection</h1>
    <section>
        <form method="post">
            <fieldset class="connection-module">
        <label>
            Email
            <input type="email" name="email" placeholder=" ...@gmail.com" autocomplete="email" required/>
        </label>
        <label>
            Mot de passe
            <input type="password" name="password" autocomplete="new-password" required/>
        </label>
    </fieldset>
        <a href="index.php?page=form-inscription"> Vous ne possédez pas de compte ?</a>
    <div style="padding:60px">
        <input
                type="submit"
                value="Se connecter" />
    </div>
        </form>
    </section>
</div>

    