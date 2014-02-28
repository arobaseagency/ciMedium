<form class="form-horizontal" action="<?php site_url('profile/informations/edit'); ?>" method="post">
	<h4>Veuillez remplir vos informations</h4>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit ratione officia illum nesciunt officiis dolores laudantium delectus non eius voluptatibus deserunt eligendi ipsa necessitatibus fugit magni iste hic. Dolorem reiciendis.</p>
	<hr>
	
	
	<div class="row-fluid">
	    <div class="span6">
	        
	       <div class="control-group <?php tp_class_error('email'); ?>">
	           <label class="control-label" for="nom">
	           		<span class="needful">*</span>Votre Email:
	           	</label>
	           
	           <div class="controls">
	               <input type="text" name="email" value="<?php echo $user['email']; ?>">
	               <!--
	               <a href="#" class="f-edit" rel="tooltip" title="Cliquer pour éditer le champ">
	                   <i class="icon-pencil"></i>
	               </a>
	               -->
	               <?php echo tp_form_error('email'); ?>
	           </div>
	       </div>
	        
	       <div class="control-group <?php tp_class_error('ville'); ?>">
	           <label class="control-label" for="ville">Ville:</label>
	           
	           <div class="controls">
	               <input type="text" class="input-medium" name="ville" value="<?php echo (isset($userInfo['ville'])) ? $userInfo['ville'] : false; ?>">
	           </div>
	       </div>
	       
	       <div class="control-group <?php tp_class_error('sex'); ?>">
	           <label class="control-label">
	           		<span class="needful">*</span>Votre Sex:
	           	</label>
	           
                <div class="controls">
                   <label class="radio inline">
                      <input type="radio" name="sex" value="homme" <?php echo (isset($userInfo['sex']) && $userInfo['sex'] == 'homme') ? 'checked' : null; ?>>
                      Homme
                   </label>
                   <label class="radio inline">
                      <input type="radio" name="sex" value="femme" <?php echo (isset($userInfo['sex']) && $userInfo['sex'] == 'femme') ? 'checked' : null; ?>>
                      Femme
                   </label>
                   <?php echo tp_form_error('sex'); ?>
                </div>
	       </div>
	       
	       <div class="control-group <?php tp_class_error('date_naissance'); ?>">
	           	<label class="control-label">Date de naissance:</label> 
	           
                <div class="controls">
                   <input type="text" class="input-small" name="date_naissance" maxlength="10" <?php echo (isset($userInfo['date_naissance'])) ? 'value="'. $userInfo['date_naissance'] .'"' : 'placeholder="AAAA-MM-JJ"' ; ?> />
                   <?php echo tp_form_error('date_naissance'); ?>
                </div>
	           
	       </div>
	       
	       <div class="clearboth text-center">
           		<input type="submit" class="btn btn-info" name="valider" value"envoyer">
           </div>
	        
	    </div>
	</div>
	
</form>