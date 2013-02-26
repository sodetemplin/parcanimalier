<div id="header">
<div class="col_6"><p class="left">Langues : <a href="./index.php?page=accueil_parc">FR</a> | <a href="./index.php?page=park_home&langue=en">EN</a></p></div>

<div class="col_6">
	<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
	<p class="right" id="textsize"> Taille du texte : <a href="./index.php" onclick="changeFontSize(1);return false;" title="Augmenter la taille">A+</a>  <a href="./index.php" onclick="changeFontSize(-1);return false;" title="Diminuer la taille">A-</a>  <a href="./index.php" onclick="resetFontSize(); return false;" title="Retour à la taille par défaut">A</a></p>
</div>
</div>
<div>
<!-- Slideshow -->
<ul class="slideshow" width="820" height="410">
<li><img alt="Parc animalier des Angles logo" src="./contenu/images/ParcAnim00_820_410_optim.jpg" width="820" height="410" /></li>
<li><img alt="Parc animalier des Angles logo" src="./contenu/images/ParcAnim01_820_410_optim.jpg" width="820" height="410" /></li>
<li><img alt="Parc animalier des Angles logo" src="./contenu/images/ParcAnim02_820_410_optim.jpg" width="820" height="410" /></li>
</ul>
</div>