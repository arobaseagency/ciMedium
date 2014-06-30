<form id="login-form" class="form-horizontal">
	<span class="img-loader-medium"></span>
	
	<div class="control-group">
		<label class="control-label" for="inputEmail">Email</label>
		<div class="controls">
			<input type="text" class="input-medium" name="email" placeholder="mon@email.com">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputPassword">Password</label>
		<div class="controls">
			<input type="password" class="input-medium" name="password" placeholder="votre mot de passe">
		</div>
	</div>
	<?php /* ?>
	<div class="control-group">
		<div class="controls">
			<label class="checkbox">
				<input type="checkbox" name="remember_me" value="1">
				Rester Connecté <a href="#" rel="tooltip" title="Si vous souhaitez garder votre session ouverte"><i class="icon-info-sign"></i></a> </label>
			
		</div>
	</div>
	<?php */ ?>
	
	<div class="control-group">
	    <div class="controls">
	        <div class="divider"></div>
			<p>
				<i class="icon-circle-arrow-right"></i>
				<a href="#">Mot de passe Oublié</a>
			</p>
			<button type="submit" name="login" class="btn btn-primary">
				Login
			</button>
	    </div>
	</div>
</form>

<script>
(function($) {
	
$(document).ready(function() {
	
	
	$("#login-form").bind('submit', function(e) {
		
		e.preventDefault();
		var formular = $(this);

		$('#login-form').find('.alert-error').remove();
		formular.find('.img-loader-medium').show();
		
		$.post("<?php echo site_url('auth/login'); ?>", {
			
			email: $(this).find("input[name=email]").val(),
			password: $(this).find("input[name=password]").val(),
			remember_me: $(this).find("input[name]").is(":checked") 
			
		}, function(data) {
			formular.find('.img-loader-medium').hide();

			if(data.status == 1) {
				window.location.href = data.redirect;

			} else {
				formular.prepend('<div class="alert alert-error">' + data.msgErrors + '</div>');
			}		
		}, 'json');
		
	});
	
});
	
})(jQuery);
</script>

