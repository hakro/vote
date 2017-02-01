#!/bin/bash
echo "Contenu de www après le déploiement de $APPLICATION_NAME - $DEPLOYMENT_GROUP_NAME" > after.php
ls -l /var/www/html >> after.php
