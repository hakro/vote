#!/bin/bash
echo "Contenu de www avant le déploiement de $APPLICATION_NAME - $DEPLOYMENT_GROUP_NAME" > before.php
ls -l /var/www/html >> before.php
