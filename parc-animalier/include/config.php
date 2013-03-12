<?php
/**
 * Paramètres
 * 
 * Ensemble des paramètres utilisés sur le site
 * @author David Rousse <david.rousse@gmail.com>
 * @version 1.0
 * @license Creative Commons - BY SA - http://creativecommons.org/licenses/by-sa/3.0/fr/
 */
 
/**
 * PARAMETRES GENERAUX
 */  
$nom_domaine_publique = 'www.faune-pyreneenne.fr';
$mail_webmaster = 'webmaster@faune-pyreneenne.fr';
$mail_contact = 'contact@faune-pyreneenne.fr';
$adresse_postale = 'Parc animalier des Angles, Le pla del mir, BP 10, 66210 Les Angles, France';
$chaine_par_defaut = 'traduction_non_trouvee';
$langue_par_defaut = 'fr';
$type_images_autorisees = array('JPG','jpg','gif','png');
$chemin_contenu = './contenu';
$chemin_pages = $chemin_contenu.'/pages';
$chemin_images = $chemin_contenu.'/images';
$chemin_images_animaux = $chemin_images.'/animaux';
$sous_chemin_vignettes = 'vignettes';

/**
 * PARAMETRES SELON LA LANGUE
 */ 
//Doit être en cohérence avec le contenu de menu.inc.php
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
					(	'titre_site' => 'Parc animalier des Angles',
						'bouquetin' => 'Bouquetin',
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
						'chaine_retourhaut' => 'Retour en haut',
						'telephone' => '04.68.04.17.20',
						'texte_choix_langues' => 'Langues',
						'texte_choix_langue_FR' => 'FR',
						'texte_choix_langue_EN' => 'EN',
						'texte_choix_taille_police' => 'Taille du texte',
						'texte_plan_site_titre' => 'Plan du site',
						'texte_plan_site_lien1' => 'Visite guidée',
						'texte_plan_site_lien2' => 'Venir au parc',
						'texte_plan_site_lien3' => 'Écrire au parc',
						'texte_plan_site_lien4' => 'Mentions légales',																		
						'texte_partenaires_site_titre' => 'Partenaires et liens',
						'texte_partenaires_site_partenaire1' => 'Station des Angles',
						'texte_partenaires_site_lien1' => '<a href="http://www.les-angles.com/saison/" target="_blank">',
						'texte_partenaires_site_partenaire2' => 'Les neiges catalanes',
						'texte_partenaires_site_lien2' => '<a href="http://www.neigescatalanes.com/" target="_blank">',
						'texte_partenaires_site_partenaire3' => 'La Quillane',
						'texte_partenaires_site_lien3' => '<a href="http://www.laquillane.fr/" target="_blank">',
						'texte_partenaires_site_partenaire4' => 'Tous nos partenaires ...',
						'texte_partenaires_site_lien4' => '<a href="./index.php?page=partenaires_parc">',																																																
						'lien_chemins_parc' => '<a href="index.php?page=chemins_parc">',
						'lien_plan_acces' => '<a href="index.php?page=plan_acces">',
						'lien_contact_parc' => '<a href="index.php?page=contact_parc">',
						'lien_mentions_legales' => '<a href="index.php?page=mentions_legales">',
						'contact_parc_texte1' => 'Nous écrire',
						'contact_parc_texte2' => 'Nous sommes joignables par téléphone au',
						'contact_parc_texte3' => 'Vous pouvez également nous écrire à',
						'contact_parc_texte4' => 'Nous sommes situés à l\'adresse suivante',
						'contact_parc_texte5' => 'Plan d\'accès au parc'																												
					),	
				'en' => array 
					(	'titre_site' => 'The Angles animal park',
						'bouquetin' => 'Spanish ibex',
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
						'chaine_retourhaut' => 'Back to top',
						'telephone' => '+33.4.68.04.17.20',
						'texte_choix_langues' => 'Languages',
						'texte_choix_langue_FR' => 'FR',
						'texte_choix_langue_EN' => 'EN',
						'texte_choix_taille_police' => 'Text size',
						'texte_plan_site_titre' => 'Site map',
						'texte_plan_site_lien1' => 'Guided tour',
						'texte_plan_site_lien2' => 'How to visit us',
						'texte_plan_site_lien3' => 'Contact us',
						'texte_plan_site_lien4' => 'Legal notice',																		
						'texte_partenaires_site_titre' => 'Partners',
						'texte_partenaires_site_partenaire1' => 'Les Angles\' ski resort',
						'texte_partenaires_site_lien1' => '<a href="http://www.les-angles.com/saison/index.php?lang=english" target="_blank">',
						'texte_partenaires_site_partenaire2' => 'Les neiges catalanes',
						'texte_partenaires_site_lien2' => '<a href="http://www.neigescatalanes.com/home.asp?lng=EN_NC" target="_blank">',
						'texte_partenaires_site_partenaire3' => 'La Quillane\' ski resort',
						'texte_partenaires_site_lien3' => '<a href="http://www.laquillane.fr/" target="_blank">',
						'texte_partenaires_site_partenaire4' => 'All our partners ...',
						'texte_partenaires_site_lien4' => '<a href="./index.php?page=partners_park&langue=en">',																																																
						'lien_chemins_parc' => '<a href="index.php?page=guided_tour&langue=en">',
						'lien_plan_acces' => '<a href="index.php?page=access_map&langue=en">',
						'lien_contact_parc' => '<a href="index.php?page=park_contact&langue=en">',
						'lien_mentions_legales' => '<a href="index.php?page=legal_notice&langue=en">',
						'contact_parc_texte1' => 'Contact us',
						'contact_parc_texte2' => 'Our phone number is',
						'contact_parc_texte3' => 'You can also send us an email to',
						'contact_parc_texte4' => 'Our address is',
						'contact_parc_texte5' => 'Park\'s access map'																																									
					)
				);		
//Liste des fichiers présents dans le répertoire contenu/pages/* à ne pas éditer en ligne (seulement modifiables par le webmaster)				
$liste_pages_non_editables = array ('chemins_parc.php',
												'contact_parc.php',
												'faune_pyreneenne.php', //n'existe que en français
												'galerie.php', //même par pour toutes les langues
												'plan_acces.php',
												'guided_tour.php',
												'access_map.php',
												'park_contact.php'												
											  );					
?>
