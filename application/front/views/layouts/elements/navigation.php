<div id="navigation" class="navbar navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
			<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="<?php echo base_url(); ?>" class="brand" title="">
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

				</ul><!-- FIN NAVIGATION LEFT -->

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
                        <a href="<?php echo base_url('auth/inscription'); ?>" title="Inscription voyance en ligne">
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
                                <?php $this->load->view('auth/login'); ?>
                            </li>
                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown tpl-flag">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Français">
                            <i class="flag france"></i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" title="Belge"><i class="flag belgium"></i></a></li>
                            <li><a href="#" title="Canada"><i class="flag canada"></i></a></li>
                            <li><a href="#" title="Anglais"><i class="flag england"></i></a></li>
                            <li><a href="#" title="Allemand"><i class="flag germany"></i></a></li>
                            <li><a href="#" title="Américain"><i class="flag usa"></i></a></li>
                        </ul>
                    </li>
                </ul>
			</nav><!-- FIN NAVIGATION RIGHT -->

		</div>
	</div>

</div>
