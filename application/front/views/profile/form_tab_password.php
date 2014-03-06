<form id="f-form-changepassword">

	<legend>Changer de mot de Passe</legend>

	<div class="span5 offset3">
        <?php if(isset($validationSuccessPassword)): ?>
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>Votre nouveau mot de passé a bien été enregistré avec succès</p>
        </div>
        <?php endif; ?>

        <?php  if(validation_errors() == true): ?>
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    <?php echo validation_errors('<li>', '</li>'); ?>
                </ul>
            </div>
        <?php endif; ?>

		<div class="control-group">
            <label class="control-label" for="old_password">
                <span class="needful">*</span>Votre Mot de passe Actuel:
            </label>
            <input type="password" name="old_password">
        </div>

		<div class="control-password">
            <label class="control-label" for="new_password">
                <span class="needful">*</span>Votre Nouveau Mot de passe:
            </label>
            <input type="password" name="new_password">
        </div>

		<div class="control-group">
            <label class="control-label" for="confirm_pass">
                <span class="needful">*</span>Confirmer Votre Mot de passe:
            </label>
            <input type="password" name="confirm_pass">
        </div>

		<p>
			<input type="submit" value="Envoyer" class="btn btn-info" />
		</p>
	</div>

</form>
