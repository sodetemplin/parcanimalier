<div id="header">
<div class="col_6"><p class="left">Languages : <a href="./index.php?page=accueil_parc">FR</a> | <a href="./index.php?langue=en&page=park_home">EN</a></p></div>

<div class="col_6">
	<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
	<p class="right" id="textsize"> Text size : <a href="./index.php" onclick="changeFontSize(1);return false;" title="Increase font size">A+</a>  <a href="./index.php?langue=en" onclick="changeFontSize(-1);return false;" title="Decrease font size">A-</a>  <a href="./index.php?langue=en" onclick="resetFontSize(); return false;" title="Back to original font size">A</a></p>

</div>
</div>
<div>
<!-- Slideshow -->
<ul class="slideshow" width="820" height="410">
<li><img alt="The Angles animal park logo" src="./contenu/images/ParcAnim00_820_410_optim.jpg" width="820" height="410" /></li>
<li><img alt="The Angles animal park logo" src="./contenu/images/ParcAnim01_820_410_optim.jpg" width="820" height="410" /></li>
<li><img alt="The Angles animal park logo" src="./contenu/images/ParcAnim02_820_410_optim.jpg" width="820" height="410" /></li>
</ul>
</div>