<article class="row-fluid">

	<ul id="f-tab-userinfo" class="nav nav-tabs">
	    <li class="active">
	        <a href="#tb-info" data-toggle="tab"><i class="icon-info-sign"></i> Informations</a>
	    </li>
	    <li>
	        <a href="#tb-signastro" data-toggle="tab"><i class="icon-leaf"></i> Sign Astrologique</a>
	    </li>
	    <li>
	        <a href="#tb-changepassword" data-toggle="tab"><i class="icon-lock"></i> Changement Password</a>
	    </li>
	</ul>

	<div class="tab-content">
	    <div id="tb-info" class="tab-pane fade active in">
	        <?php include 'form_tab_info.php'; ?>
	    </div>

	    <div id="tb-signastro" class="tab-pane fade">
	        <?php include 'form_tab_signastro.php'; ?>
	    </div>

	    <div id="tb-changepassword" class="tab-pane fade">
	        <?php include 'form_tab_password.php'; ?>
	    </div>
	</div>

<script>
$(document).ready(function() {

    // Gestion du formulaire sign astrologique
    // Ref: form_tab_signastro
    $('#f-sign-astral').find('a').bind('click', function() {
        var form = $('#f-sign-astral');
        var valLink = $(this).attr('title');
        var inputSign = $('input[name=sign_astral]').val(valLink);
        var inputVal = $('input[name=sign_astral]').val();
        // on active le loader
        $('#f-sign-astral').prepend('<span class="img-loader"></span>');

        $.post("<?php echo site_url('profile/sign_astral'); ?>",
        {
            sign_astral: inputVal
        }, function(dataReturn) {
            // on supprime le loader
            $('.img-loader').remove();
            if(dataReturn.status === 1) {
            	form.find('a[rel=active]').removeAttr('rel');
                form.find('a[title=' + dataReturn.sign + ']').attr('rel', 'active');
                $('#flash-msg').remove();
                $('body').append(dataReturn.msgSuccess);
                $('#flash-msg').delay(3000).hide('normal', function() { $(this).remove(); });
            }
        });

        return false;
    });


    // gestion du formulaire de changement de mot de passe
    // Ref: form_tab_password
    $('#f-form-changepassword').bind('submit', function(i) {

       i.preventDefault();
       var formular = $(this);

       $.post("<?php echo site_url('profile/password_edit'); ?>", {
            old_password: $('input[name=old_password]').val(),
            password: $('input[name=password]').val(),
            confirm_password: $('input[name=confirm_password]').val()
       }, function(dataBack){
            formular.html(dataBack);
       });

    });

});
</script>

</article>