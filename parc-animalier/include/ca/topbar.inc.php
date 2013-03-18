<div id="header">
<div class="col_6">
<p class="left">
	<?php echo traduction('fr','texte_choix_langues'); ?> : <?php echo traduction('fr','lien_accueil'); ?><?php echo traduction('fr','texte_choix_langue_FR'); ?></a>
	 | <?php echo traduction('en','lien_accueil'); ?><?php echo traduction('en','texte_choix_langue_EN'); ?></a>
	 | <?php echo traduction('ca','lien_accueil'); ?><?php echo traduction('ca','texte_choix_langue_CA'); ?></a>
</p>
</div>

<div class="col_6">
	<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
	<p class="right" id="textsize"> <?php echo traduction($langue,'texte_choix_taille_police'); ?> : <a href="./index.php?page=parc_inici&langue=ca" onclick="changeFontSize(1);return false;" title="Augmentar mida de lletra">A+</a>  <a href="./index.php?page=parc_inici&langue=ca" onclick="changeFontSize(-1);return false;" title="Reduir Text">A-</a>  <a href="./index.php?page=parc_inici&langue=ca" onclick="resetFontSize(); return false;" title="Mida original">A</a></p>
</div>
</div>
<div id="sub-header">
<!-- Slideshow -->
<ul class="slideshow" width="820" height="410">
<li><img alt="El Parc d\'animals dels Angles 1" src="./contenu/images/ParcAnim00_820_410_optim.jpg" width="820" height="410" /></li>
<li><img alt="El Parc d\'animals dels Angles 2" src="./contenu/images/ParcAnim01_820_410_optim.jpg" width="820" height="410" /></li>
<li><img alt="El Parc d\'animals dels Angles 3" src="./contenu/images/ParcAnim02_820_410_optim.jpg" width="820" height="410" /></li>
</ul>
</div>