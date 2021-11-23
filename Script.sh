#!/bin/bash

printf "Version Software" > $out
date >> $out

#Commande pour recuperer la version soft.
docker ps --format '{{.Image}}' | cut -d : -f 3 >> $out
