<?php include('models/lampe/subscribe.php') ?>

<link rel="stylesheet" href="assets/forms.css">
<div class="form module hoverable">
<h1>S'inscrire</h1>
<section>
	<form method="post">
		<fieldset class="form-grid">
            <label class="f-name">
                Prénom
                <input name="firstname" placeholder="Prénom" autocomplete="firstname" required/>
            </label>
            <label class="l-name">
                Nom
                <input name="lastname" placeholder="Nom" autocomplete="lastname" required/>
            </label>
            <label class="email">
                Email
                <input type="email" name="email" placeholder=" ...@gmail.com" autocomplete="email" required/>
            </label>
            <label class="tel">
                Numéro de téléphone
                <input type="tel" name="phone" placeholder="06 ..." autocomplete="tel" required/>
            </label>
            <label class="password">
                Mot de passe
                <input type="password" name="password" id="password" autocomplete="new-password" required/>
            </label>
            <label class="c-password">
                Confirmer le mot de passe
                <input type="password" name="confirm_password" id="confirm_password" autocomplete="new-password" required/>
            </label>
    </fieldset>
    <a href="index.php?page=form-connection"> Vous possédez déjà un compte ?</a>
<div style="padding:60px">
    <input
			type="submit"
			value="S'incrire" />
</div>
	</form>
</section>
    </div>



    