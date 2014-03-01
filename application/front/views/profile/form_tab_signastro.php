<form id="f-sign-astral" action="<?php echo site_url('profile/sign_astral'); ?>" method="post">
    
    <?php $conf = $this->config->item('global'); ?>
    <ul id="zodiac-panel">
    	<?php foreach($conf['signs'] as $sign): ?>
    		<?php
    			if(isset($userInfo['sign_astral']) and $userInfo['sign_astral'] == $sign):
					$signStatus = 'rel="active"';
				else:
					$signStatus = null;
				endif;
    		?>
        <li>
            <a href="#" class="zodiac-sign <?php echo $sign; ?>" title="<?php echo $sign; ?>" <?php echo $signStatus; ?> >
                <span class="zodiac-sign <?php echo $sign; ?>"></span>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    
    <input type="hidden" name="sign_astral">
</form>
<script>
$(document).ready(function() {
    
    $('#f-sign-astral').find('a').bind('click', function() {
        var form = $('#f-sign-astral');
        
        var valLink = $(this).attr('title');
        var formUrl = form.attr('action');
        
        
        var inputSign = $('input[name=sign_astral]').val(valLink);
        var inputVal = $('input[name=sign_astral]').val();
        
        $.post(formUrl, 
        { 
            sign_astral: inputVal 
        }, function(dataReturn) {
            
            if(dataReturn.status === 1) {
            	form.find('a[rel=active]').removeAttr('rel');
                form.find('a[title=' + dataReturn.sign + ']').attr('rel', 'active');
                $('#flash-msg').remove();
                $('body').append(dataReturn.msgSuccess);
                $('#flash-msg').delay(4000).hide('normal', function() { $(this).remove(); });

            }
            
        });
        
        return false;
    });

});
</script>