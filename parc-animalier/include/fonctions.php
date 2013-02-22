<?php 

function traduction($langue,$chaine) {
	global $textes_affichees_par_langues;
	global $langue_par_defaut;
	global $chaine_par_defaut;
	if($langue <> "" && (isset($textes_affichees_par_langues[$langue][$chaine])))	
		$retour = $textes_affichees_par_langues[$langue][$chaine];
	else 
		$textes_affichees_par_langues[$langue_par_defaut][$chaine_par_defaut];
	return $retour;
}

function liste_repertoire($dirtolist) {
   	$contenu=array();
	if ($handle = opendir($dirtolist))  {
   	$cpt=0;
    	while (false !== ($file = readdir($handle))) {
      	if($file != "." && $file != ".." ) {
		      if(is_dir($dirtolist.'/'.$file)) {
		      	$contenu[$cpt]=$file; 
      			$cpt++;
      		}
      	}
      }
      closedir($handle);
    }
	return $contenu;
}

function affiche_onglets($tab_repertoires,$type_tab,$langue) {
	global $chemin_images_animaux;
	global $sous_chemin_vignettes;
	$link = "";
	if($type_tab == "tabs left") {
		$nb_items = count($tab_repertoires);
		$link = "<ul class=\"".$type_tab."\">";
		for($index=0; $index < $nb_items; $index++) { 
				$link .= "<li><a href=\"#".traduction($langue,$tab_repertoires[$index])."\">".traduction($langue,$tab_repertoires[$index])."</a></li>"; 
		}
		$link .= "</ul>";
	} 
	if($type_tab == "tab-content") {
		$nb_items = count($tab_repertoires);
		for($index=0; $index < $nb_items; $index++) { 
			$link .= '<div id="'.traduction($langue,$tab_repertoires[$index]).'" class="tab-content">';
			$link .= '<div class="gallery">';
			$photos = liste_photos($chemin_images_animaux.'/'.$tab_repertoires[$index]); 
			$vignettes = liste_photos($chemin_images_animaux.'/'.$tab_repertoires[$index].'/'.$sous_chemin_vignettes);
			$lien_a_afficher = affiche_photos(traduction($langue,$tab_repertoires[$index]),$photos,$vignettes);
			if ($lien_a_afficher <> "")
				$link .= $lien_a_afficher;
			else 
				$link .= traduction($langue,'vide');
			$link .= "</div>";
			$link .= "</div>";		
		}
	} 
	return $link;
}

function liste_photos($dirtolist) {
	global $type_images_autorisees;
	// open this directory 
	$myDirectory = opendir($dirtolist);
	
	// get each entry
	while($entryName = readdir($myDirectory)) {
	    if (substr("$entryName", 0, 1) != ".") { // don't list hidden files or else than authorized images type		
			foreach($type_images_autorisees as $type) {
				if (substr("$entryName", -3, 3) == $type) 
  					$dirArray[] = $dirtolist."/".$entryName;
			}
		}
	}
	
	//sort by name
	sort($dirArray, SORT_STRING);
	
	// close directory
	closedir($myDirectory);
	
	return $dirArray;
}

function affiche_photos($animal,$tab_photos,$tab_vignettes) {
	global $sous_chemin_vignettes;
	$nb_photos = count($tab_photos);
	$link = "";
	//si la photo ET la vignette existent, on montre le lien
	for($index=0; $index < $nb_photos; $index++) { 
		if(file_exists($tab_photos[$index]) && file_exists($tab_vignettes[$index])) 
			$link .= "<a href=\"".$tab_photos[$index]."\" title=\"".$animal."\"><img alt=\"".$animal."\" src=\"".$tab_vignettes[$index]."\"/></a>"; 
	} 
	return $link;
}

?>