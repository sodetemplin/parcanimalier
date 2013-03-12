#!/bin/sh
# Creatives Commons - Parc animalier des Angles
# A lancer depuis la racine du site pour le versionnong global
# Création le 11/03/2013 par david.rousse@gmail.com
# Dernière mise à jour le 12/03/2013 par david.rousse@gmail.com

#Parametres
utilisateur="faunepyr"
mot_de_passe="EDrCywEN"
url="ftp://ftp.faune-pyreneenne.fr/www"

if [ $# -lt 1 ]
then
    echo "Erreur dans $0 - Nombre d'arguments incorrect"
    echo "Syntaxe: $0 {PRODUCTION|VALIDATION} [INIT_FTP]"
    exit 1
fi
if [ "$1" != "PRODUCTION" -a "$1" != "VALIDATION" ] 
then
    echo "Erreur dans $0 - Valeur du 1° argument incorrecte"
    echo "Syntaxe: $0 {PRODUCTION|VALIDATION} [INIT_FTP]"
    exit 1
else
	if [ "$1" = "PRODUCTION" ]
	then
		cible=""
	else
		cible="/validation"
	fi
fi
if [ "$2" != "" -a "$2" != "INIT_FTP" ] 
then
    echo "Erreur dans $0 - Valeur du 2° argument incorrecte"
    echo "Syntaxe: $0 {PRODUCTION|VALIDATION} [INIT_FTP]"
    exit 1
else
	if [ "$2" = "INIT_FTP" ]
	then
    		init_ftp="1"
	else
		init_ftp="0"
	fi
fi
#Execution
if [ "$init_ftp" = "1" ]
then
	git ftp init -u $utilisateur -p $mot_de_passe - $url$cible
else
	git ftp push --user $utilisateur --passwd $mot_de_passe $url$cible
fi
echo "Déploiement OK :-) Attention, certains fichiers (.htaccess, ...) sont à traiter à la main !"
