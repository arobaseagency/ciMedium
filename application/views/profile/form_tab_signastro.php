<form id="f-sign-astral" style="position:relative;">

    <legend>Choisissez votre Signe Astrologique</legend>

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
