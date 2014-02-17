<div id="act-inscription-form" class="modal hide fade">
    <span class="img-loader-medium"></span>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Inscription</h3>
    </div>
    <?php include '_form-inscription.php'; ?>
</div>

<script>
(function($){



    $('#act-inscription-form form').on('submit', function(e) {
        e.preventDefault();

        var formulaire = $('#act-inscription-form');
        var loader = $('.img-loader-medium');
        var data = $(this).serialize();
        var urlPost = $(this).attr('action');

        loader.show();
        $.post(urlPost, data, function(response){
            loader.hide();
            $('.modal-header', formulaire).next().html(response);
        });

    });



})(jQuery);
</script>