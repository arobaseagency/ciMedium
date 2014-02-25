<article class="row-fluid">
	
	<ul id="f-tab-userinfo" class="nav nav-tabs">
	    <li class="active">
	        <a href="#tb-info" data-toggle="tab"><i class="icon-info-sign"></i> Informations</a>
	    </li>
	    <li>
	        <a href="#tb-signastro" data-toggle="tab"><i class="icon-leaf"></i> Sign Astrologique</a>
	    </li>
	    <li>
	        <a href="#tb-descriptif" data-toggle="tab"><i class="icon-bullhorn"></i> Descriptif</a>
	    </li>
	</ul>
	
	<div class="tab-content">
	    <div id="tb-info" class="tab-pane fade active in">
	        <?php include 'form_tab_info.php'; ?>
	    </div>
	    
	    <div id="tb-signastro" class="tab-pane fade">
	        <?php include 'form_tab_signastro.php'; ?>
	    </div>
	    
	    <div id="tb-descriptif" class="tab-pane fade">
	        <?php include 'form_tab_descriptif.php'; ?>
	    </div>
	</div>
	
</article>