<?php 

function affecte_langue() {
	global $langue_par_defaut;
   // verification de la langue
   if ( (isset($_GET['langue'])) && $_GET['langue']<>$langue_par_defaut ) { 
		$langue_chemin = '/'.$_GET['langue'].'/';
		$langue = $_GET['langue']; 
	} else { 
		$langue_chemin = '/';
		$langue = $langue_par_defaut;
	}	
	return $langue;
}

function affecte_chemin_langue() {
	global $langue_par_defaut;
   // verification de la langue
   if ( (isset($_GET['langue'])) && $_GET['langue']<>$langue_par_defaut ) { 
		$langue_chemin = '/'.$_GET['langue'].'/';
	} else { 
		$langue_chemin = '/';
	}	
	return $langue_chemin;
}

function titre_page($langue) {
	global $titre_site_par_langues;
	global $langue_par_defaut;
	$titre_page = ($langue ? $titre_site_par_langues[$langue] : $titre_site_par_langues[$langue_par_defaut] );
	return $titre_page; 	
}

function description_meta($langue) {
	return "<meta name=\"description\" content=\"".traduction($langue,'description_site')."\"/>";	
}

function motscles_meta($langue) {
	return "<meta name=\"keywords\" content=\"".traduction($langue,'motscles_site')."\" />";	
}


function email($type_mail) {
	global $mail_contact;
	global $mail_webmaster;
	if ((isset($type_mail)) && $type_mail == 'webmaster') 
		$retour = str_replace('.','&#46;',str_replace('@','&#64;',$mail_webmaster)); 
	else 
		$retour = str_replace('.','&#46;',str_replace('@','&#64;',$mail_contact)); 
	return $retour;	
}
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
				$link .= "<li><a href=\"#".$tab_repertoires[$index]."\">".traduction($langue,$tab_repertoires[$index])."</a></li>";
		}
		$link .= "</ul>";
	} 
	if($type_tab == "tab-content") {
		$nb_items = count($tab_repertoires);
		for($index=0; $index < $nb_items; $index++) { 
			$link .= '<div id="'.$tab_repertoires[$index].'" class="tab-content">';
			if($langue == 'fr') 
				$link .= '<h6><em><a href="./index.php?page=faune_pyreneenne#'.traduction($langue,$tab_repertoires[$index]).'">Voir la fiche descriptive de l\'espèce</a></em></h6>';
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