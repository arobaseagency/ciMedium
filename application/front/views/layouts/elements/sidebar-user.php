<div class="row">
    <div class="span3">
    	<span class="label label-warning"><?php echo auth_data('group_name'); ?></span>
        <figure>
        	<img class="img-circle img-polaroid" alt="140x140" src="http://lorempixel.com/160/160/" class="img-polaroid">
        </figure>
        <h3 class="text-center">
        	<?php echo ucfirst(auth_data('username')); ?>
        </h3>
    </div>

    <div class="span3">
    	
		<ul class="nav nav-list">
			<li class="nav-header">
				Profile complété à
				<div class="progress progress-striped" style="margin-bottom:0;">
				  <div class="bar" style="width: 60%;"></div>
				</div>
			</li>
			<li class="nav-header">
				Informations Profile
			</li>
			<li class="active">
				<a href="#">Vos Informations</a>
			</li>
			<li>
				<a href="#">Changer email / mot de passe</a>
			</li>
			<li class="nav-header">
				Gestion de votre Compte
			</li>
			<li>
				<a href="#">Profile</a>
			</li>
			<li>
				<a href="#">Settings</a>
			</li>
			<li class="divider"></li>
		</ul>
    	
        <div class="accordion" id="accordion-553022">
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-553022" href="#accordion-element-408954">Panneau de Gestion</a>
                </div>

                <div id="accordion-element-408954" class="accordion-body collapse in">
                    <div class="accordion-inner">
                        <ul class="nav nav-list">
                            <li class="nav-header">List header</li>

                            <li class="active"><a href="#">Home</a></li>

                            <li><a href="#">Library</a></li>

                            <li><a href="#">Applications</a></li>

                            <li><a href="#">Event</a></li>

                            <li><a href="#">Jeux</a></li>

                            <li><a href="#">Astrologie</a></li>

                            <li class="nav-header">Another list header</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-553022" href="#accordion-element-8105">Aide &amp; FAQ</a>
                </div>

                <div id="accordion-element-8105" class="accordion-body collapse">
                    <div class="accordion-inner">
                        Anim pariatur cliche...
                    </div>
                </div>
            </div>

            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-553022" href="#accordion-element-5">Forfait &amp; Paiement</a>
                </div>

            </div>
        </div>
    </div><!-- FIN BLOC ACCORDEON -->

</div>