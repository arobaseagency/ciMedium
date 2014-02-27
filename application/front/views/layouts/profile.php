<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>:: <?php echo $layout_title; ?> ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php //echo meta($meta); ?>

    <?php include 'elements/head.php'; ?>

    <?php include 'elements/stylesheet-head.php'; ?>
</head>

<body>
<a id="hover-zetop" href="#" title="Retour en Haut"><img src="<?php echo assets('/img/jsicon-top.png'); ?>" alt="retour en haut automatiquement"></a>

<?php tp_flash_msg(); ?>

<a id="logo" class="hidden-phone" href="<?php echo site_url(); ?>" title="Voyance Online - Retour Accueil">
    <img src="<?php echo asset_img('logo-site.png'); ?>" alt="logo voyance online">
</a>

<?php include 'elements/navigation.php'; ?>

<!-- SLIDESHOW -->


<div id="block-content" class="container no-slideshow">

	<div class="row">
        <aside id="sidebar-left" class="span3">
			<?php include 'elements/sidebar-user.php'; ?>
            <!-- FIN ROW -->
		</aside>

		<!-- CONTENEUR -->
		<section class="span9">
			<h1><?php echo ucfirst($this->uri->segment(2)); ?></h1>
			
            <span class="pull-right badge badge-success">
                <span class="txt-price">24</span>.00 € Crédit
            </span>
			<hr />
			
			<?php echo $layout_content; ?>
		</section>
		
	</div>

</div>

<div id="footer">
    <?php include 'elements/footer.php'; ?>
</div>

<?php include 'elements/script-default.php'; ?>
<script type="text/javascript" src="<?php echo asset_js('front/users'); ?>"></script>
</body>
</html>
