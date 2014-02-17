<div id="act-inscription-form" class="modal hide fade">
    <span class="img-loader-medium"></span>
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
                <?php tp_form_error('account_type'); ?>
                <i class="icon-question-sign" rel="tooltip" data-placement="right" title="Le type de compte pourra être changé dans votre interface de membre si vous le souhaitez"></i>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="username">
                <span class="needful">*</span>Nom d'utilisateur:
            </label>
            <div class="controls">
                <input type="text" name="username" placeholder="ex: anuman" value="<?php echo set_value('username'); ?>">
                <i class="icon-question-sign" rel="tooltip" data-placement="right" title="Pas de charactère spéciaux ni d'espace"></i>
                <?php tp_form_error('username'); ?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="email">
                <span class="needful">*</span>Votre email:
            </label>
            <div class="controls">
                <input type="text" name="email" placeholder="ex: votre@email.com" value="<?php echo set_value('email'); ?>">
                <?php tp_form_error('email'); ?>
            </div>
        </div>

        <div class="control-group">
            <label for="password" class="control-label">
                <span class="needful">*</span>Mot de Passe:
            </label>
            <div class="controls">
                <input type="password" name="password">
                <i class="icon-question-sign" rel="tooltip" data-placement="right" title="Mot de passe avec 5 charactère minimum alphanumérique sans charactères spéciaux"></i>
                <?php tp_form_error('password'); ?>
            </div>
        </div>

        <div class="control-group">
            <label for="passconf" class="control-label">
                <span class="needful">*</span>Confirmation:
            </label>
            <div class="controls">
                <input type="password" name="password_compare">
            </div>
        </div>

        <div class="control-group">
            <label for="sex" class="control-label"><span class="needful">*</span>Sex:</label>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="sex" value="homme" <?php echo set_radio('sex', 'homme'); ?>>
                    Homme
                </label>
                <label class="radio">
                    <input type="radio" name="sex" value="femme" <?php echo set_radio('sex', 'femme'); ?>>
                    Femme
                </label>
                <?php tp_form_error('sex'); ?>
            </div>
        </div>
        <!-- FIN FORMULAIRE INPUT -->
            <p>(<span class="needful">*</span>): <i>Les champs comportants cette étoile doivent être remplient obligatoirement.</i></p>
    </div>
    <div class="modal-footer">
        <input class="btn btn-primary" type="submit" value="Valider">
        <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Fermer</a>
    </div>
    <?php echo form_close(); ?>
</div>

<script>
(function($){

$(document).ready(function() {

    $('#act-inscription-form form').submit(function() {

        var formulaire = $('#act-inscription-form');
        var loader = $('.img-loader-medium');
        var data = $(this).serialize();
        var urlPost = $(this).attr('action');

        //loader.show();
        $.post(urlPost, data, function(data){
            loader.hide();
            formulaire.html(data);
        });

        return false;
    });

});

})(jQuery);
</script>