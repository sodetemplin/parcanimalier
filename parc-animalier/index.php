<!DOCTYPE html>
<html>
<?php	
	require_once('include/config.php');
	require_once('include/fonctions.php');
	$langue = affecte_langue();
	$langue_chemin = affecte_chemin_langue();
?>
<!-- ===================================== START HEADER ===================================== -->
<head>
<title><?php echo titre_page($langue); ?></title>
<meta charset="UTF-8">
<?php echo description_meta($langue); ?> <!-- META BALISE -->
<?php echo motscles_meta($langue); ?> <!-- KEYWORDS BALISE -->
<link rel="shortcut icon" href="contenu/images/ParcAnimIcone.png" media="all" />                <!-- ICON -->
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="style.css" media="all" />                          <!-- STYLES -->
<link rel="stylesheet" type="text/css" href="style_custo.css" media="screen" />                    <!-- CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="style_custo_mobile.css" media="screen and (max-width: 700px)" /> <!-- CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="style_custo_print.css" media="print" />            <!-- CUSTOM STYLES -->
</head>
<!-- ===================================== END HEADER ===================================== -->
<body>
	<a id="top-of-page"></a>
	<div id="wrap" class="clearfix">
			<?php				 
				include('include'.$langue_chemin.'topbar.inc.php'); 
			?>

			<!-- Menu Horizontal -->
			<?php include('include'.$langue_chemin.'menu.inc.php');   // menu par défaut en français ?>
			
			<!-- Contenu -->
			<?php                
		                // verification que l'URL est autorisée
		                if ( (isset($_GET['page'])) && (isset($liste_pages_par_langues[$langue][$_GET['page']])) ) {
	    	        	      include($liste_pages_par_langues[$langue][$_GET['page']]);   // appel de la page
							} else {
	                  	include('contenu/pages/accueil_parc.php');   // page par défaut
	                 	} 
			?>

			<!-- Sous section -->            	 	
			<hr class="hr_custo"/>
    		<?php include('include'.$langue_chemin.'sub_footer.inc.php'); ?>
   
	</div>

<!-- ===================================== START FOOTER ===================================== -->
	<div class="clear"></div>
			<?php 
				include('include'.$langue_chemin.'footer.inc.php');
				include('include/stats.inc.php'); 
			?>
	</div>
<!-- ===================================== END FOOTER ===================================== -->
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="js/prettify.js"></script>                                   <!-- PRETTIFY -->
<script type="text/javascript" src="js/kickstart.js"></script>                                  <!-- KICKSTART -->
<script type="text/javascript" src="js/textsize.js"></script>                                   <!-- TEXTSIZE -->
</html>
