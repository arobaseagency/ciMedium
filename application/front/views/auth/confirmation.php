<?php

/*
 *  Page de modele de contenu qui sert pour toutes les pages de contenu
 *  simple concernant la partie authentification comme
 *  ex:
 *  - page perte de mot de passe
 *  - page confirmation de réinitialisation du mot de passe
 *  - page vous avez été bannie
 */

?>
<article class="row-fluid">

    <div class="span12">

        <?php if($codepage == 'inscription'): ?>
        <h1>Inscription avec Succès !!</h1>
        <hr>
        <div class="alert alert-info">
            <h2>Information</h2>
            <p>
                Votre inscription a bien été prise en compte, vous recevrez un mail de confirmation afin de valider
                votre inscription qui sera valable 24H.
                <br>
                Si vous ne confirmer pas cet email, vous devrez réhitérer votre inscription.
            </p>
        </div>
        <?php endif; ?>

        <?php if($codepage == 'activate'): ?>
        <h1>Votre Compte est Activé !!</h1>
        <hr>
        <div class="alert alert-success">
            <h2>Information</h2>
            <p>
                Votre compte a bien été activé ! Vous pouvez désormer vous connecter et participer
                à la communauté.
            </p>
        </div>
        <?php endif; ?>
        
        <?php if($codepage == 'yet_activate'): ?>
        <h1>Votre Compte est Déjà Activé</h1>
        <hr>
        <div class="alert alert-success">
            <h2>Information</h2>
            <p>
                Votre compte a déjà été activé ! Vous n'avez plus besoin de le réactiver.
            </p>
        </div>
        <?php endif; ?>
        
        
        <?php if($codepage == 'logged'): ?>
        <h1>Interdiction</h1>
        <hr>
        <div class="alert alert-info">
            <h2>Vous n'êtes pas Connecté</h2>
            <p>
                Vous devez être connecté pour accéder à cette page et avoir les autorisations requises.
            </p>
        </div>
        <?php endif; ?>
        
        
        <?php if($codepage == 'noaccess'): ?>
        <h1>Forbidden</h1>
        <hr>
        <div class="alert alert-error">
            <h2>Pas d'Accès</h2>
            <p>
                Vous n'êtes pas autorisé à accéder à cette page, vous n'âvez pas les droits suffisant requis.
            </p>
        </div>
        <?php endif; ?>
    </div>

</article>