<div id="act-inscription-form" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Inscription</h3>
    </div>
    <?php echo form_open($_SERVER['PHP_SELF'], array('class'=>'form-horizontal')); ?>
    <div class="modal-body">
        <div class="control-group">
            <label class="control-label" for="account_type">Choisissez le Type de Compte:</label>
            <div class="controls">
                <div class="btn-group">
                    <button class="btn btn-info">
                        <i class="icon-eye-open icon-white"></i> Voyant
                    </button>
                    <button class="btn btn-info">
                        <i class="icon-user icon-white"></i> Consultant
                    </button>
                </div>
                <input type="hidden" name="account_type" placeholder="ex: anuman">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="username">Nom d'utilisateur:</label>
            <div class="controls">
                <input type="text" name="username" placeholder="ex: anuman">
                <a href="#" rel="tooltip" data-placement="right" title="Pas de charactère spéciaux ni d'espace">
                    <i class="icon-question-sign"></i>
                </a>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="email">Votre email:</label>
            <div class="controls">
                <input type="text" name="email" placeholder="ex: votre@email.com">
            </div>
        </div>

        <div class="control-group">
            <label for="password" class="control-label">Mot de Passe:</label>
            <div class="controls">
                <input type="password" name="password">
                <a href="#" rel="tooltip" data-placement="right" title="Mot de passe avec 5 charactère minimum alphanumérique sans charactères spéciaux">
                    <i class="icon-question-sign"></i>
                </a>
            </div>
        </div>

        <div class="control-group">
            <label for="passconf" class="control-label">Confirmation:</label>
            <div class="controls">
                <input type="password" name="passconf">
            </div>
        </div>

        <div class="control-group">
            <label for="sex" class="control-label">Sex:</label>
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
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Valider</button>
        <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Fermer</a>
    </div>
    <?php echo form_close(); ?>
</div>

