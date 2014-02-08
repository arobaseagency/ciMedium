<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Bootstrap, from LayoutIt!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

	<link href="<?php echo asset_css('front/bootstrap.min'); ?>" rel="stylesheet">
	<link href="<?php echo asset_css('front/bootstrap-responsive.min'); ?>" rel="stylesheet">
	<link href="<?php echo asset_css('front/style'); ?>" rel="stylesheet">

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

<div class="container">
	<div class="row">
		<div class="span12">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container-fluid">
						<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a href="#" class="brand">Title</a>
						<nav class="nav-collapse" role="navigation">
							<ul class="nav">
								<li class="active">
									<a href="#">Home</a>
								</li>
								<li>
									<a href="#">Link</a>
								</li>
								<li>
									<a href="#">Link</a>
								</li>
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider">
										</li>
										<li class="nav-header">
											Nav header
										</li>
										<li>
											<a href="#">Separated link</a>
										</li>
										<li>
											<a href="#">One more separated link</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>

					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<div class="carousel slide" id="carousel-625984">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-625984">
					</li>
					<li data-slide-to="1" data-target="#carousel-625984">
					</li>
					<li data-slide-to="2" data-target="#carousel-625984">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active left">
						<img alt="" src="http://lorempixel.com/1600/500/sports/1">
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item next left">
						<img alt="" src="http://lorempixel.com/1600/500/sports/2">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="http://lorempixel.com/1600/500/sports/3">
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a data-slide="prev" href="#carousel-625984" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-625984" class="right carousel-control">›</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span3">
			<div class="accordion" id="accordion-553022">
				<div class="accordion-group">
					<div class="accordion-heading">
						 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-553022" href="#accordion-element-408954">Collapsible Group Item #1</a>
					</div>
					<div id="accordion-element-408954" class="accordion-body collapse">
						<div class="accordion-inner">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
						 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-553022" href="#accordion-element-8105">Collapsible Group Item #2</a>
					</div>
					<div id="accordion-element-8105" class="accordion-body collapse">
						<div class="accordion-inner">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
			</div>
			<ul class="nav nav-list">
				<li class="nav-header">
					List header
				</li>
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Library</a>
				</li>
				<li>
					<a href="#">Applications</a>
				</li>
				<li class="nav-header">
					Another list header
				</li>
				<li>
					<a href="#">Profile</a>
				</li>
				<li>
					<a href="#">Settings</a>
				</li>
				<li class="divider">
				</li>
				<li>
					<a href="#">Help</a>
				</li>
			</ul><img alt="140x140" src="http://lorempixel.com/140/140/">
		</div>
		<div class="span9">
			<div class="row">
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
			</div>
			<div class="row">
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
			</div>
			<div class="row">
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
			</div>
			<div class="row">
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
				<div class="span4">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
			</div>
			<div class="pagination">
				<ul>
					<li>
						<a href="#">Prev</a>
					</li>
					<li>
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">Next</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<div class="row">
				<div class="span4">
					<ol>
						<li>
							Lorem ipsum dolor sit amet
						</li>
						<li>
							Consectetur adipiscing elit
						</li>
						<li>
							Integer molestie lorem at massa
						</li>
						<li>
							Facilisis in pretium nisl aliquet
						</li>
						<li>
							Nulla volutpat aliquam velit
						</li>
						<li>
							Faucibus porta lacus fringilla vel
						</li>
						<li>
							Aenean sit amet erat nunc
						</li>
						<li>
							Eget porttitor lorem
						</li>
					</ol>
				</div>
				<div class="span4">
					<ol>
						<li>
							Lorem ipsum dolor sit amet
						</li>
						<li>
							Consectetur adipiscing elit
						</li>
						<li>
							Integer molestie lorem at massa
						</li>
						<li>
							Facilisis in pretium nisl aliquet
						</li>
						<li>
							Nulla volutpat aliquam velit
						</li>
						<li>
							Faucibus porta lacus fringilla vel
						</li>
						<li>
							Aenean sit amet erat nunc
						</li>
						<li>
							Eget porttitor lorem
						</li>
					</ol>
				</div>
				<div class="span4">
					 <address> <strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo asset_js('front/script'); ?>"></script>
</body>
</html>
