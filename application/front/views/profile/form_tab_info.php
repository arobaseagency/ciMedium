<form class="form-horizontal disabled-fields" action="<?php site_url('profile/informations/edit'); ?>" method="post">
	<h4>Veuillez remplir vos informations</h4>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit ratione officia illum nesciunt officiis dolores laudantium delectus non eius voluptatibus deserunt eligendi ipsa necessitatibus fugit magni iste hic. Dolorem reiciendis.</p>
	<hr>
	
	
	<div class="row-fluid">
	    <div class="span6">
	        
	       <div class="control-group <?php tp_class_error('email'); ?>">
	           <label class="control-label" for="nom">Votre Email:</label>
	           
	           <div class="controls">
	               <input type="text" disabled name="email" value="<?php echo $user['email']; ?>">
	               <a href="#" class="f-edit" rel="tooltip" title="Cliquer pour éditer le champ">
	                   <i class="icon-pencil"></i>
	               </a>
	           </div>
	       </div>
	        
	       <div class="control-group">
	           <label class="control-label" for="prenom">Votre Prénom:</label>
	           
	           <div class="controls">
	               <input type="text" name="prenom">
	           </div>
	       </div>
	        
	       <div class="control-group">
	           <label class="control-label" for="ville">Ville:</label>
	           
	           <div class="controls">
	               <input type="text" class="input-medium" name="ville">
	           </div>
	       </div>
	        
	    </div>
	    
	    <div class="span6">
	        
	        <div class="control-group">
	           <label class="control-label">Votre Sex:</label>
	           
                <div class="controls">
                   <label class="radio">
                      <input type="radio" name="sex" value="homme">
                      Homme
                   </label>
                   <label class="radio">
                      <input type="radio" name="sex" value="femme">
                      Femme
                   </label>
                </div>
	       </div>
	        
	       <div class="control-group">
	           <span>Date de naissance:</span> <br>
	           
	           <div class="controls">
	               <label for="jour" class="control-label">Jour: </label>
	               <select name="jour" class="input-mini">
	                   <option value="null">--</option>
	                   <?php for($i= 01; $i <= 31; $i++): ?>
	                   <option value="<?php echo $i; ?>">
	                       <?php echo $i; ?>
	                   </option>
	                   <?php endfor; ?>
	               </select>
	               
	               <label for="mois">Mois: </label>
	               <select name="mois" class="input-mini">
	                   <option value="null">--</option>
	                   <?php for($i= 1; $i <= 12; $i++): ?>
	                   <option value="<?php echo $i; ?>">
	                       <?php echo $i; ?>
	                   </option>
	                   <?php endfor; ?>
	               </select>
	               
	               <label for="annee">Année: </label>
	               <select name="annee" class="input-small">
	                   <option value="null">--</option>
	                   <?php for($i= 1900; $i <= date('Y'); $i++): ?>
	                   <option value="<?php echo $i; ?>">
	                       <?php echo $i; ?>
	                   </option>
	                   <?php endfor; ?>
	               </select>
	           </div>
	       </div>
	        
	    </div>
	    
	    <div class="span12">
	        <input type="submit" class="btn btn-info" value="valider" name="envoyer">
	    </div>
	</div>
	
</form>