<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>:: <?php echo $layout_title; ?> ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php //echo meta($meta); ?>

    <link href="<?php echo asset_css('front/bootstrap.min'); ?>" rel="stylesheet">
    <link href="<?php echo asset_css('front/bootstrap-responsive.min'); ?>" rel="stylesheet">
    <link href="<?php echo asset_css('front/carousel'); ?>" rel="stylesheet">
    <link href="<?php echo asset_css('front/style'); ?>" rel="stylesheet">

    <link href="<?php echo asset_css('rating'); ?>" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="<?php echo asset_js('html5shiv'); ?>"></script>
  <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo asset_img('front/favicon.png'); ?>">

	<script type="text/javascript" src="<?php echo asset_js('jquery.min'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset_js('front/bootstrap.min'); ?>"></script>
</head>

<body>
<a id="hover-zetop" href="#" title="Retour en Haut"><img src="<?php echo assets('/img/jsicon-top.png'); ?>" alt="retour en haut automatiquement"></a>

<a id="logo" class="hidden-phone" href="#" title="Voyance Online - Retour Accueil">
    <img src="<?php echo asset_img('logo-site.png'); ?>" alt="logo voyance online">
</a>

<?php include 'elements/navigation.php'; ?>

<!-- SLIDESHOW -->
<?php include 'elements/slideshow.php'; ?>

<div id="block-content" class="container">

	<div class="row">

		<aside id="sidebar-left" class="span3">

			<?php include 'elements/sidebar-left.php'; ?>
            <!-- FIN ROW -->
		</aside>
		<!-- FIN SIDEBAR -->


		<!-- CONTENEUR -->
		<section class="span9 grille-voyant">
			<?php echo $layout_content; ?>
		</section>
	</div>

</div>

<div id="footer">
    <?php include 'elements/footer.php'; ?>
</div>

<script type="text/javascript" src="<?php echo asset_js('rating'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_js('front/script'); ?>"></script>
</body>
</html>
