<!DOCTYPE html>
<html>
<?php	
	require_once('include/config.php');
	require_once('include/fonctions.php');
?>
<!-- ===================================== START HEADER ===================================== -->
<head>
<title><?php $titre_page = (isset($_GET['langue']) ? $titre_site_par_langues[$_GET['langue']] : $titre_site_par_langues[$langue_par_defaut] ); echo $titre_page; ?></title>
<meta charset="UTF-8">
<meta name="description" content="Parc animalier Les Angles, les animaux sauvages dans leur espace naturel" />
<meta name="keywords" content="faune des pyrénées, flore des pyrénées, animaux sauvages pyrénées, parc animalier" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="js/prettify.js"></script>                                   <!-- PRETTIFY -->
<script type="text/javascript" src="js/kickstart.js"></script>                                  <!-- KICKSTART -->
<script type="text/javascript" src="js/textsize.js"></script>                                   <!-- TEXTSIZE -->
<link rel="shortcut icon" href="contenu/images/ParcAnimIcone.png" media="all" />                  <!-- ICON -->
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="style.css" media="all" />                          <!-- STYLES -->
<link rel="stylesheet" type="text/css" href="style_custo.css" media="all" />                    <!-- CUSTOM STYLES -->
</head>
<!-- ===================================== END HEADER ===================================== -->
<body><a id="top-of-page"></a>
<div id="wrap" class="clearfix">
			<?php				 
		      // verification de la langue
		      if ( (isset($_GET['langue'])) && $_GET['langue']<>$langue_par_defaut ) { 
					$langue_chemin = '/'.$_GET['langue'].'/';
					$langue = $_GET['langue']; 
				} else { 
					$langue_chemin = '/';
					$langue = $langue_par_defaut;
				}
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
			<?php include('include'.$langue_chemin.'footer.inc.php'); ?>
</div>
<!-- ===================================== END FOOTER ===================================== -->

</div><!-- END WRAP -->
</body>
</html>
