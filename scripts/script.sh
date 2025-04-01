#!/bin/bash

# Vérifier l’arborescence
if [ ! -d "site" ] || [ ! -d "site/img" ] || [ ! -d "site/css" ] || [ ! -d 
"site/js" ] || [ ! -d "src" ]; then
    echo "Arborescence incorrecte"
    exit 1
fi

# Vérifier les types de fichiers
find site -type f ! -name "*.html" ! -name "*.php" -exec echo "Fichier non 
autorisé dans site: {}" \; -quit
find site/img -type f ! -name "*.png" ! -name "*.jpg" -exec echo "Fichier 
non autorisé dans img: {}" \; -quit
find site/css -type f ! -name "*.css" -exec echo "Fichier non autorisé 
dans css: {}" \; -quit
find site/js -type f ! -name "*.js" -exec echo "Fichier non autorisé dans 
js: {}" \; -quit
