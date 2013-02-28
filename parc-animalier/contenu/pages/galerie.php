<div class="col_12">
<!-- Breadcrumbs -->
<ul class="breadcrumbs">
<li><?php echo traduction($langue,'lien_accueil'); ?><?php echo traduction($langue,'accueil'); ?></a></li>
<li><?php echo traduction($langue,'titre_page_galerie'); ?></li>
</ul>
<p><?php echo traduction($langue,'texte_page_galerie'); ?> :<p>

<?php
	if( isset($_GET['langue']) ) 
		$langue_courante = $_GET['langue'];
	else 
		$langue_courante = $langue_par_defaut;
	//Affichage des onglets
	echo affiche_onglets(liste_repertoire($chemin_images_animaux),"tabs left",$langue_courante);
	//Affichage du contenu
	echo affiche_onglets(liste_repertoire($chemin_images_animaux),"tab-content",$langue_courante);	
?>
</div>