#!/bin/sh
# Creatives Commons - Parc animalier des Angles
# A lancer depuis la racine du site pour le versionnong global
# Création le 12/03/2013 par david.rousse@gmail.com
# Dernière mise à jour le 12/03/2013 par david.rousse@gmail.com

#Parametres
if [ $# -ne 1 ]
then
    echo "Erreur dans $0 - Nombre d'arguments incorrect"
    echo "Syntaxe: $0 'Message de commit'"
    exit 1
fi
message_commit="$1"

#Execution
git add -A
git commit -a -m $message_commit
git push -u origin master
echo "Commit OK :-) Attention, certains fichiers (.htaccess, ...) sont exclus du versionning (voir le fichier .gitignore) !"
