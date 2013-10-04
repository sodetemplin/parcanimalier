#!/bin/sh
# Creatives Commons - Parc animalier des Angles
# A lancer depuis la racine du site pour le versionnong global
# Copie les fichers non pris en compte par git (exclus dans .gitignore)
# Création le 12/03/2013 par david.rousse@gmail.com
# Dernière mise à jour le 12/03/2013 par david.rousse@gmail.com

#Parametres
utilisateur="faunepyr"
mot_de_passe="EDrCywEN"
url="ftp.faune-pyreneenne.fr"
rep_racine="www"
rep_cible="parc-animalier/admin"
rep_source="parc-animalier/admin/"
files="*.*"

if [ $# -ne 1 ]
then
    echo "Erreur dans $0 - Nombre d'arguments incorrect"
    echo "Syntaxe: $0 {PRODUCTION|VALIDATION}"
    exit 1
fi
if [ "$1" != "PRODUCTION" -a "$1" != "VALIDATION" ] 
then
    echo "Erreur dans $0 - Valeur du 1° argument incorrecte"
    echo "Syntaxe: $0 {PRODUCTION|VALIDATION}"
    exit 1
else
	if [ "$1" = "PRODUCTION" ]
	then
		cible=""
	else
		cible="validation/"
	fi
fi
#Execution
ftp -i -n $url <<END_SCRIPT
	quote USER $utilisateur
	quote PASS $mot_de_passe
	cd $rep_racine
	cd $cible$rep_cible
	lcd $rep_source
	bin
	mput $files
	quit
END_SCRIPT
exit 0
echo "Transferts OK :-)"
