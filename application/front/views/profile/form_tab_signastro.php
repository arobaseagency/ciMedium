<form id="f-sign-astral" action="<?php echo site_url('profile/sign_astral'); ?>" method="post">
    
    
    <ul id="zodiac-panel">
        <li>
            <a href="#" class="zodiac-sign sagitaire" title="sagitaire">
                <span class="zodiac-sign sagitaire"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign belier" title="belier">
                <span class="zodiac-sign belier"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign balance" title="balance">
                <span class="zodiac-sign balance"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign taureau" title="taureau">
                <span class="zodiac-sign taureau"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign cancer" title="cancer">
                <span class="zodiac-sign cancer"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign poisson" title="poisson">
                <span class="zodiac-sign poisson"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign capricorne" title="capricorne">
                <span class="zodiac-sign capricorne"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign vierge" title="vierge">
                <span class="zodiac-sign vierge"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign gemeaux" title="gemeaux">
                <span class="zodiac-sign gemeaux"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign verseau" title="verseau">
                <span class="zodiac-sign verseau"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign scorpion" title="scorpion">
                <span class="zodiac-sign scorpion"></span>
            </a>
        </li>
        <li>
            <a href="#" class="zodiac-sign lion" title="lion">
                <span class="zodiac-sign lion"></span>
            </a>
        </li>
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
                
            }
            
        });
        
        return false;
    });

});
</script>