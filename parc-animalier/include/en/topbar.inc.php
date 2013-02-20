<div id="header">
<div class="col_6"><p class="left">Languages : <a href="./">FR</a> | <a href="./index.php?langue=en">EN</a></p></div>

<div class="col_6">
	<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
	<p class="right" id="textsize"> Text size : <a href="./index.php" onclick="changeFontSize(1);return false;" title="Increase font size">A+</a>  <a href="./index.php?langue=en" onclick="changeFontSize(-1);return false;" title="Decrease font size">A-</a>  <a href="./index.php?langue=en" onclick="resetFontSize(); return false;" title="Back to original font size">A</a></p>

</div>
</div>
<div>
<!-- Slideshow -->
<ul class="slideshow" width="800" height="400">
<li><img src="./contenu/images/ParcAnim00_800_400.png" width="800" height="400" /></li>
<li><img src="./contenu/images/ParcAnim01_800_400.png" width="800" height="400" /></li>
<li><img src="./contenu/images/ParcAnim02_800_400.png" width="800" height="400" /></li>
</ul>
</div>