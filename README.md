# ECF_v1

Vite & Gourmand — Application Web
Application web de gestion de menus et commandes pour le traiteur Vite & Gourmand (Bordeaux).
Développée dans le cadre de l'ECF du titre professionnel Développeur Web et Web Mobile.

Stack technique

Front-end : HTML5, CSS3, Bootstrap 5.3, JavaScript
Back-end : PHP 8.2 (PDO)
Base de données relationnelle : MySQL
Serveur local : XAMPP
Éditeur : Visual Studio Code

Prérequis

XAMPP (Apache + MySQL + PHP 8.2)
Un navigateur web (Chrome, Firefox, Edge...)
Git

Installation et déploiement en local
1 — Cloner le dépôt
bashgit clone https://github.com/Antho2b85/ECF_V1.git
2 — Placer le projet dans htdocs
Déplacez le dossier ECF_V1 dans le répertoire htdocs de XAMPP :
C:/xampp/htdocs/ECF_V1/
3 — Démarrer XAMPP
Lancez XAMPP Control Panel et démarrez :

✅ Apache
✅ MySQL

4 — Créer la base de données

Ouvrez phpMyAdmin : http://localhost/phpmyadmin
Cliquez sur Nouvelle base de données
Nommez-la ViteEtGourmand et cliquez sur Créer
Sélectionnez la base, cliquez sur Importer
Importez le fichier backend/database/shema.sql
Cliquez sur Exécuter

5 — Configurer le fichier .env
Créez un fichier .env à la racine du projet (ECF_V1/.env) :
DB_HOST=localhost
DB_NAME=ViteEtGourmand
DB_USER=root
DB_PASS=

⚠️ Le fichier .env est dans le .gitignore — il ne sera jamais envoyé sur GitHub.

6 — Accéder à l'application
Ouvrez votre navigateur et accédez à :
http://localhost/ECF_V1/frontend/pages/index.php
