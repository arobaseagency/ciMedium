<div id="act-inscription-form" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Inscription</h3>
    </div>
    <?php echo form_open('auth/inscription', array('class'=>'form-horizontal')); ?>
    <div class="modal-body">
        <div class="control-group">
            <label class="control-label" for="account_type">
                <span class="needful">*</span>Choisissez le Type de Compte:
            </label>
            <div class="controls">
                <div class="btn-group" data-toggle="buttons-radio">
                    <button type="button" class="btn btn-info" value="voyant">
                        <i class="icon-eye-open icon-white"></i> Voyant
                    </button>
                    <button type="button" class="btn btn-info" value="consultant">
                        <i class="icon-user icon-white"></i> Consultant
                    </button>
                    <input type="hidden" name="account_type">
                </div>
                <i class="icon-question-sign" rel="tooltip" data-placement="right" title="Le type de compte pourra être changé dans votre interface de membre si vous le souhaitez"></i>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="username">
                <span class="needful">*</span>Nom d'utilisateur:
            </label>
            <div class="controls">
                <input type="text" name="username" placeholder="ex: anuman">
                <i class="icon-question-sign" rel="tooltip" data-placement="right" title="Pas de charactère spéciaux ni d'espace"></i>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="email">
                <span class="needful">*</span>Votre email:
            </label>
            <div class="controls">
                <input type="text" name="email" placeholder="ex: votre@email.com">
            </div>
        </div>

        <div class="control-group">
            <label for="password" class="control-label">
                <span class="needful">*</span>Mot de Passe:
            </label>
            <div class="controls">
                <input type="password" name="password">
                <i class="icon-question-sign" rel="tooltip" data-placement="right" title="Mot de passe avec 5 charactère minimum alphanumérique sans charactères spéciaux"></i>
            </div>
        </div>

        <div class="control-group">
            <label for="passconf" class="control-label">
                <span class="needful">*</span>Confirmation:
            </label>
            <div class="controls">
                <input type="password" name="passconf">
            </div>
        </div>

        <div class="control-group">
            <label for="sex" class="control-label"><span class="needful">*</span>Sex:</label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="sex" value="homme" checked="checked">
                    Homme
                </label>
                <label class="radio">
                    <input type="radio" name="sex" value="femme">
                    Femme
                </label>
            </div>
        </div>
        <!-- FIN FORMULAIRE INPUT -->
            <p>(<span class="needful">*</span>): <i>Les champs comportants cette étoile doivent être remplient obligatoirement.</i></p>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Valider</button>
        <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Fermer</a>
    </div>
    <?php echo form_close(); ?>
</div>

<script>
(function($){

$(document).ready(function() {

   

});

})(jQuery);
</script>