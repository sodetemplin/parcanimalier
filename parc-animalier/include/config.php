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
						'galerie' => './contenu/pages/galerie.php'						
						
					),
				'en' => array 
					(	'park_home' => './contenu/pages/en/park_home.php',
						'pyrenees_animals' => './contenu/pages/en/pyrenees_animals.php',
						'pyrenees_flowers' => './contenu/pages/en/pyrenees_flowers.php',
						'park_contact' => './contenu/pages/en/park_contact.php',
						'guided_tour' => './contenu/pages/en/guided_tour.php',
						'access_map' => './contenu/pages/en/access_map.php',
						'legal_notice' => './contenu/pages/en/legal_notice.php'																								
					)
				);
$langue_par_defaut = 'fr';
?>
