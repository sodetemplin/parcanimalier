<div id="header">
<div class="col_6"><p class="left">Langues : <a href="./">FR</a> | <a href="./index.php?page=park_home&langue=en">EN</a></p></div>

<div class="col_6">
	<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
	<p class="right" id="textsize"> Taille du texte : <a href="./index.php" onclick="changeFontSize(1);return false;" title="Augmenter la taille">A+</a>  <a href="./index.php" onclick="changeFontSize(-1);return false;" title="Diminuer la taille">A-</a>  <a href="./index.php" onclick="resetFontSize(); return false;" title="Retour à la taille par défaut">A</a></p>
</div>
</div>
<div>
<!-- Slideshow -->
<ul class="slideshow" width="820" height="410">
<li><img src="./contenu/images/ParcAnim00_800_400.png" width="820" height="410" /></li>
<li><img src="./contenu/images/ParcAnim01_800_400.png" width="820" height="410" /></li>
<li><img src="./contenu/images/ParcAnim02_800_400.png" width="820" height="410" /></li>
</ul>
</div>