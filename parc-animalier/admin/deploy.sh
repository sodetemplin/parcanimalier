#!/bin/sh
# Creatives Commons - Parc animalier des Angles
# Création le 11/03/2013 par david.rousse@gmail.com
# Dernière mise à jour le 11/03/2013 par david.rousse@gmail.com

#Parametres
utilisateur="faunepyr"
mot_de_passe="EDrCywEN"
url="ftp://ftp.faune-pyreneenne.fr/www"

if [ $# -lt 2 ]
then
    echo "Erreur dans $0 - Nombre d'arguments incorrect"
    echo "Syntaxe: $0 'Message de commit' {PRODUCTION|VALIDATION} [INIT_FTP]"
    exit 1
fi
message_commit="$1"
if [ "$2" != "PRODUCTION" -a "$2" != "VALIDATION" ] 
then
    echo "Erreur dans $0 - Valeur du 2° argument incorrecte"
    echo "Syntaxe: $0 'Message de commit' {PRODUCTION|VALIDATION} [INIT_FTP]"
    exit 1
else
	if [ "$2" = "PRODUCTION" ]
	then
		cible=""
	else
		cible="/validation"
	fi
fi
init_ftp=1
if [ "$3" != "" -a "$3" != "INIT_FTP" ] 
then
    echo "Erreur dans $0 - Valeur du 3° argument incorrecte"
    echo "Syntaxe: $0 'Message de commit' {PRODUCTION|VALIDATION} [INIT_FTP]"
    exit 1
else
    init_ftp=0
fi

#Execution
git add -A
git commit -a -m $message_commit
git push -u origin master
if [ $init_ftp = 0 ]
then
	git ftp init -u $utilisateur -p $mot_de_passe - $url$cible
else
	git ftp push --user $utilisateur --passwd $mot_de_passe $url$cible
fi
echo "Déploiement OK :-) Attention, certains fichiers (.htaccess, ...) sont à traiter à la main !"
