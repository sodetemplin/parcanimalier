<?php
/************************* PARAMETRES GENERAUX *************************/  
$nom_domaine_publique = 'www.faune-pyreneenne.fr';
$mail_webmaster = 'webmaster@faune-pyreneenne.fr';
$mail_contact = 'contact@faune-pyreneenne.fr';
$adresse_postale = 'Parc animalier des Angles, Le pla del mir, BP 10, 66210 Les Angles, France';
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
						'parc_detail' => './contenu/pages/parc_detail.php',
						'faq_parc' => './contenu/pages/faq_parc.php',
						'partenaires_parc' => './contenu/pages/partenaires_parc.php'
					),	
				'en' => array 
					(	'park_home' => './contenu/pages/en/park_home.php',
						'pyrenees_animals' => './contenu/pages/en/pyrenees_animals.php',
						'pyrenees_flora' => './contenu/pages/en/pyrenees_flora.php',
						'park_contact' => './contenu/pages/en/park_contact.php',
						'guided_tour' => './contenu/pages/en/guided_tour.php',
						'access_map' => './contenu/pages/en/access_map.php',
						'legal_notice' => './contenu/pages/en/legal_notice.php',
						'galerie' => './contenu/pages/galerie.php',
						'faq_park' => './contenu/pages/en/faq_park.php',
						'partners_park' => './contenu/pages/en/partners_park.php'																			
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
						'visite_guidee' => 'Visite guidée',
						'plan_acces' => 'Plan d\'accès',
						'titre_page_galerie' => 'Photos et vidéos du parc',
						'texte_page_galerie' => 'En venant au parc animalier, vous pourrez admirer en vrai les diverses espèces présentes sur cette page',
						'lien_accueil' => '<a href="./index.php?page=acceuil_parc">',
						'description_site' => 'Parc animalier Les Angles, les animaux sauvages dans leur espace naturel',
						'motscles_site' => 'faune des pyrénées, flore des pyrénées, animaux sauvages pyrénées, parc animalier',
						'copyright_site' => 'Tous droits réservés',
						'chaine_telephone' => 'Tél. ',
						'chaine_email' => 'Email ',
						'chaine_retourhaut' => 'Retour en haut ',
						'telephone' => '04.68.04.17.20'
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
						'visite_guidee' => 'Guided tour',
						'plan_acces' => 'Access map',
						'titre_page_galerie' => 'Movies and pictures\' park',
						'texte_page_galerie' => 'Come to our park to see all theses species for real',
						'lien_accueil' => '<a href="./index.php?page=park_home&langue=en">',
						'description_site' => 'Les Angles\' animal park, wild animals in their natural area',
						'motscles_site' => 'pyrénées\' fauna, pyrénées\' flora, wild animals of the pyrénées, animal park',
						'copyright_site' => 'Copyright',
						'chaine_telephone' => 'Phone ',
						'chaine_email' => 'Email ',
						'chaine_retourhaut' => 'Back to top ',
						'telephone' => '+33.4.68.04.17.20'																																	
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
