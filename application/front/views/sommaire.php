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

<a id="logo" href="#" title="Voyance Online - Retour Accueil">
    <img src="<?php echo asset_img('logo-site.png'); ?>" alt="logo voyance online">
</a>
	
<div id="navigation" class="navbar navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
			<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="#" class="brand">
                Voyance <span>Online</span>
            </a>
			<nav class="nav-collapse" role="navigation">
				<ul class="nav">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						  Voyants en ligne <strong class="caret"></strong>
				        </a>
				        <ul class="dropdown-menu">
							<li>
								<a href="#">Nos Forfaits</a>
							</li>
							<li>
								<a href="#">FAQ</a>
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
					
					<li>
				        <a href="#">Nos Forfaits</a>
					</li>
					
				</ul>
			</nav>
            
            <ul class="nav pull-right">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      Aide <strong class="caret"></strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Nos Forfaits</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
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
                
                <li>
                    <a href="#">
                        <i class="icon-edit icon-white"></i> Inscription
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user icon-white"></i> Login
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form id="login-form" class="form-horizontal">
                              <div class="control-group">
                                <label class="control-label" for="inputEmail">Email</label>
                                <div class="controls">
                                  <input type="text" id="inputEmail" class="input-medium" placeholder="Email">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                  <input type="password" id="inputPassword" class="input-medium" placeholder="Password">
                                </div>
                              </div>
                              <div class="control-group">
                                <div class="controls">
                                  <label class="checkbox">
                                    <input type="checkbox"> Remember me
                                    <a href="#" rel="tooltip" title="Si vous désirez rester connecter"><i class="icon-info-sign"></i></a>
                                  </label>
                                  <div class="divider"></div>
                                  <p>
                                      <i class="icon-circle-arrow-right"></i> 
                                      <a href="#">Mot de passe Oublié</a>
                                  </p>
                                  <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                              </div>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="divider-vertical"></li>
                <li class="dropdown tpl-flag">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="flag flag-fr"></i>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="flag flag-be"></i></a></li>
                        <li><a href="#"><i class="flag flag-ca"></i></a></li>
                        <li><a href="#"><i class="flag flag-de"></i></a></li>
                    </ul>
                </li>
            </ul>
            
		</div>
	</div>

</div>

<!-- SLIDESHOW -->
<div class="container">
    <section class="row">
        <div class="span12">
            
            <div id="slideshow" class="carousel slide" data-interval="3000">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                    <img class="pull-right" src="<?php echo assets('media/slider/slide1.png'); ?>" alt="">
                    <div class="carousel-caption">
                        <h3>Voyance En Ligne</h3>
                        <p>Cartomancie</p>
                        <p>Numérologie</p>
                    </div>
                </div>
                <div class="item">
                    <img class="pull-right" src="<?php echo assets('media/slider/slide1.png'); ?>" alt="">
                    <div class="carousel-caption">
                        <h3>Voyance En Ligne</h3>
                        <p>Cartomancie</p>
                        <p>Numérologie</p>
                    </div>
                </div>
                <div class="item">
                    <img class="pull-right" src="<?php echo assets('media/slider/slide1.png'); ?>" alt="">
                    <div class="carousel-caption">
                        <h3>Voyance En Ligne</h3>
                        <p>Cartomancie</p>
                        <p>Numérologie</p>
                    </div>
                </div>
              </div>
              
              <ol class="carousel-indicators">
                <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                <li data-target="#slideshow" data-slide-to="1"></li>
                <li data-target="#slideshow" data-slide-to="2"></li>
              </ol>
            </div>
            
        </div>
    </section>
</div>

<div id="block-content" class="container">
    
	<div class="row">
		
		<aside id="sidebar-left" class="span3">
			
			<div class="row">
			    <div class="span3">
                    <form class="form-search" role="search">
                        <input type="text" name="search" placeholder="Rechercher un voyant..." class="input-medium search-query">
                        <button type="submit" class="btn btn-link"><i class="icon-search"></i></button>
                    </form>
                </div>
			
                <div class="span3">
                    <div class="accordion" id="accordion-553022">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-553022" href="#accordion-element-408954">
                                    <i class="icon-plus-sign"></i> Catégorie
                                </a>
                            </div>
                            <div id="accordion-element-408954" class="accordion-body collapse in">
                                <div class="accordion-inner">
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-553022" href="#accordion-element-8105">Aide & FAQ</a>
                            </div>
                            <div id="accordion-element-8105" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    Anim pariatur cliche...
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-553022" href="#accordion-element-5">Forfait & Paiement</a>
                            </div>
                            <div id="accordion-element-5" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    Anim pariatur cliche...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN BLOC ACCORDEON -->
			
                <div class="span3">
                    <figure>
                        <img alt="140x140" src="http://lorempixel.com/160/160/" class="img-polaroid">
                    </figure>
                </div>
            </div>
            <!-- FIN ROW -->
		</aside>
		<!-- FIN SIDEBAR -->
		
		
		<!-- CONTENEUR -->
		<section class="span9 grille-voyant">
			<article id="zone-voyant" class="row-fluid">
				
				<?php for($i=0; $i < 6; $i++): ?>
				<ul class="thumbnails">
				    <li class="span4">
				        <span class="label label-info"><strong>New !</strong></span>
				        <div class="caption">
				            <h3>nom du voyant 
				                <span class="pull-right">
				                    <i class="icon-star"></i>
				                    <i class="icon-star"></i>
				                    <i class="icon-star"></i>
				                    <i class="icon-star-empty"></i>
				                    <i class="icon-star-empty"></i>
				                </span>
				            </h3>
				            <div class="f-rating"></div>
				        </div>
				        <div class="photo pull-left">
				            <a href="#" class="f-image">
				                <span class="f-overlay"><i class="icon-eye-open icon-white"></i></span>
				                <img src="http://lorempixel.com/130/100/people/1/" alt="">
				            </a>
				        </div>
				        <div class="fiche pull-right">
				            <ul>
				                <li><strong>Tarifs:</strong> <span class="badge badge-warning">1.90 €</span></li>
				                <li><strong>Pays:</strong> <span class="flag flag-fr"></span></li>
				                <li><strong>Expérience:</strong> 20 ans</li>
				            </ul>
				            <br>
				            <button class="btn btn-mini btn-info">
				                <i class="icon-eye-open icon-white"></i>
				                 Online
				            </button>
				        </div>
				        <div class="describ">
				            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, officia!</p>
				        </div>
				        <div class="specialite">
				            <strong>Spécialité: </strong>
				            <ul class="nav nav-pills">
				                <li><i class="icon-headphones" rel="tooltip" title="Audio"></i></li>
				                <li><i class="icon-heart" rel="tooltip" title="Sentiment & Coeur"></i></li>
				                <li><i class="icon-envelope" rel="tooltip" title="Consultattion par Email"></i></li>
				                <li><i class="icon-tint" rel="tooltip" title="Par Pendule"></i></li>
				            </ul>
				        </div>
				    </li>
				    <li class="span4">
				        <div class="caption">
				            <h3>nom du voyant</h3>
				            <div class="f-rating"></div>
				        </div>
				        <div class="photo pull-left">
				            <a href="#" class="f-image">
				                <span class="f-overlay"><i class="icon-eye-open icon-white"></i></span>
				                <img src="http://lorempixel.com/130/100/people/9/" alt="">
				            </a>
				        </div>
				        <div class="fiche pull-right">
				            <ul>
				                <li><strong>Tarifs:</strong> 1.90 €</li>
				                <li><strong>Pays:</strong> France</li>
				                <li><strong>Expérience:</strong> 20 ans</li>
				            </ul>
				            <br>
				            <button class="btn btn-mini btn-info">
				                <i class="icon-eye-open icon-white"></i>
				                 Online
				            </button>
				        </div>
				        <div class="describ">
				            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, officia!</p>
				        </div>
				        <div class="specialite">
				            <strong>Spécialité: </strong>
				            <ul class="nav nav-pills">
				                <li><i class="icon-headphones" rel="tooltip" title="Audio"></i></li>
				                <li><i class="icon-heart" rel="tooltip" title="Sentiment & Coeur"></i></li>
				                <li><i class="icon-envelope" rel="tooltip" title="Consultattion par Email"></i></li>
				                <li><i class="icon-tint" rel="tooltip" title="Par Pendule"></i></li>
				            </ul>
				        </div>
				    </li>
				    
				    <li class="span4">
				        <div class="caption">
				            <h3>nom du voyant</h3>
				            <div class="f-rating"></div>
				        </div>
				        <div class="photo pull-left">
				            <a href="#" class="f-image">
				                <span class="f-overlay"><i class="icon-eye-open icon-white"></i></span>
				                <img src="http://lorempixel.com/130/100/people/7/" alt="">
				            </a>
				        </div>
				        <div class="fiche pull-right">
				            <ul>
				                <li><strong>Tarifs:</strong> 1.90 €</li>
				                <li><strong>Pays:</strong> France</li>
				                <li><strong>Expérience:</strong> 20 ans</li>
				            </ul>
				            <br>
				            <button class="btn btn-mini disabled">
				                <i class="icon-eye-close"></i>
				                 Online
				            </button>
				        </div>
				        <div class="describ">
				            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, officia!</p>
				        </div>
				        <div class="specialite">
				            <strong>Spécialité: </strong>
				            <ul class="nav nav-pills">
				                <li><i class="icon-headphones" rel="tooltip" title="Audio"></i></li>
				                <li><i class="icon-heart" rel="tooltip" title="Sentiment & Coeur"></i></li>
				                <li><i class="icon-envelope" rel="tooltip" title="Consultattion par Email"></i></li>
				                <li><i class="icon-tint" rel="tooltip" title="Par Pendule"></i></li>
				            </ul>
				        </div>
				    </li>
				    
				</ul>
				<!-- FIN ROW THUMBNAILS -->
				<?php endfor; ?>
				
			</article>
			
			<hr>
			<div class="pagination pagination-large">
				<ul>
					<li>
						<a href="#"><i class="icon-chevron-left"></i></a>
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
						<a href="#"><i class="icon-chevron-right"></i></a>
					</li>
				</ul>
			</div>
		</section>
	</div>
	
</div>

<div id="footer">
    <footer class="container">
        <div class="row">
        		<div class="span12">
        			<div class="row">
        				<div class="span4">
        					<ul>
        						<li>
        							Lorem ipsum dulor sit amet
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
        					</ul>
        				</div>
        				<div class="span4">
        					<ul>
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
        					</ul>
        				</div>
        				<div class="span4">
        					 <address> <strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
        				</div>
        			</div>
        		</div>
        	</div>
    </footer>
</div>

<script type="text/javascript" src="<?php echo asset_js('rating'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_js('front/script'); ?>"></script>
</body>
</html>
