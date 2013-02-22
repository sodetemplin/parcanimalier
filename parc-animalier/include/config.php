<?php
/************************* PARAMETRES GENERAUX *************************/  
$nom_domaine_publique = 'www.faune-pyreneenne.fr';
$mail_webmaster = 'webmaster@faune-pyreneenne.fr';
$mail_contact = 'contact@faune-pyreneenne.fr';
$adresse_postale = 'Le pla del mir, BP 10, 66210 Les Angles, France';
$telephone_fr = '04.68.04.17.20';
$telephone_en = '+33.4.68.04.17.20';
$titre_site_par_langues = array (
				'fr' => 'Parc animalier des Angles',
				'en' => 'The Angles animal park'
				);
$liste_pages_par_langues = array ( 
				'fr' => array 
					(	'accueil_parc' => './contenu/pages/accueil_parc.php',
                  'plan_acces' => './contenu/pages/plan_acces.php',
						'chemins_parc' => './contenu/pages/chemins_parc.php',
						'fiches_faune' => './contenu/pages/fiches_faune.php',	
						'mentions_legales' => './contenu/pages/mentions_legales.php',		 	 
						'faune_pyreneenne' => './contenu/pages/faune_pyreneenne.php',		 	 
						'flore_pyreneenne' => './contenu/pages/flore_pyreneenne.php',		 	 
						'loups_espace_naturel' => './contenu/pages/loups_espace_naturel.php',		 	 
						'ours_espace_naturel' => './contenu/pages/ours_espace_naturel.php',		 	 
						'contact_parc' => './contenu/pages/contact_parc.php',
						'galerie' => './contenu/pages/galerie.php',
						'histoire_parc' => './contenu/pages/histoire_parc.php',
						'parc_detail' => './contenu/pages/parc_detail.php'							
					),	
				'en' => array 
					(	'park_home' => './contenu/pages/en/park_home.php',
						'pyrenees_animals' => './contenu/pages/en/pyrenees_animals.php',
						'pyrenees_flora' => './contenu/pages/en/pyrenees_flora.php',
						'park_contact' => './contenu/pages/en/park_contact.php',
						'guided_tour' => './contenu/pages/en/guided_tour.php',
						'access_map' => './contenu/pages/en/access_map.php',
						'legal_notice' => './contenu/pages/en/legal_notice.php',
						'galerie' => './contenu/pages/galerie.php'
					)
				);
$textes_affichees_par_langues = array ( 
				'fr' => array 
					(	'bouquetin' => 'Bouquetin',
                  'cerf' => 'Cerf',
						'mouflon' => 'Mouflon',
						'sanglier' => 'Sanglier',
						'marmotte' => 'Marmotte',		 	 
						'ours' => 'Ours',		 	 
						'loup' => 'Loup',		 	 
						'chevreuil' => 'Chevreuil',		 	 
						'bison' => 'Bison',		 	 
						'daim' => 'Daim',
						'renne' => 'Renne',
						'isard' => 'Isard',
						'traduction_non_trouvee' => 'Valeur à afficher non trouvée :-(',
						'vide' => 'Pas de contenu',
						'accueil' => 'Accueil',
						'titre_page_galerie' => 'Photos et vidéos du parc',
						'texte_page_galerie' => 'En venant au parc animalier, vous pourrez admirer en vrai les divers éléments présents sur cette page'
					),	
				'en' => array 
					(	'bouquetin' => 'Spanish ibex',
                  'cerf' => 'Red deer',
						'mouflon' => 'Moufflon',
						'sanglier' => 'Wild boar',
						'marmotte' => 'Marmot',		 	 
						'ours' => 'Brown bear',		 	 
						'loup' => 'Wolf',		 	 
						'chevreuil' => 'Roedeer',		 	 
						'bison' => 'European bison',		 	 
						'daim' => 'Fallow deer',
						'renne' => 'Reindeer',
						'isard' => 'Izard',
						'traduction_non_trouvee' => 'No translation found :-(',
						'vide' => 'No data',
						'accueil' => 'Home',
						'titre_page_galerie' => 'Movies and pictures\' park',
						'texte_page_galerie' => 'Come to our animal park to see all thses animals'																					
					)
				);							
$chaine_par_defaut = 'traduction_non_trouvee';
$langue_par_defaut = 'fr';
$type_images_autorisees = array('JPG','jpg','gif','png');
$chemin_contenu = './contenu';
$chemin_pages = $chemin_contenu.'/pages';
$chemin_images = $chemin_contenu.'/images';
$chemin_images_animaux = $chemin_images.'/animaux';
$sous_chemin_vignettes = 'vignettes';
?>
