# Documentation — Gestion de Projet

## ECF Vite & Gourmand

---

## 1. Présentation du projet

Dans le cadre de mon ECF (Évaluation en Cours de Formation) pour l'obtention du titre professionnel **Graduate developpeur flutter**, j'ai été missionné pour développer une application web pour l'entreprise **Vite & Gourmand**, un traiteur bordelais fondé par Julie et José.

L'objectif est de créer une application permettant de :

- Présenter les menus et événements proposés
- Permettre aux clients de créer un compte et de commander en ligne
- Gérer les commandes via un espace employé et administrateur

---

## 2. Organisation du travail

### Contexte

Ce projet a été réalisé seul, en parallèle de ma formation :

- Le matin : suivi de la formation Studi (jusqu'à j-7 ensuite focus ECF)
- L'après-midi et parfois le soir : travail sur le projet ECF

### Outil de gestion de projet

J'ai utilisé **Trello** avec une organisation en **méthode Kanban**.

Le tableau Trello est organisé en 4 colonnes :

| Colonne | Description |
| **Backlog** | Toutes les tâches identifiées au départ |
| **À faire** | Toutes les tâches prioritaires |
| **En cours** | Tâches en cours de développement |
| **Terminé** | Tâches validées et fonctionnelles |

---

## 3. Découpage du projet

### Phase 1 — Analyse et conception

- Lecture et analyse du cahier des charges
- Identification des fonctionnalités
- Réalisation du MCD (Modèle Conceptuel de Données) **Drawio**
- Réalisation des diagrammes (utilisation, séquence) **Drawio**
- Réalisation des maquettes Wireframe et Mockup sur **Figma**
- Création de la charte graphique **Figma**

### Phase 2 — Mise en place de l'environnement

- Installation et configuration de XAMPP
- Configuration de Visual Studio Code
- Création du dépôt GitHub (branches `main`, `develop`, `feature/*`)
- Création de la base de données MySQL via `shema.sql`
- Mise en place du fichier `.env` pour la sécurité des credentials

### Phase 3 — Développement Front-end

- Intégration HTML/CSS avec Bootstrap 5
- Création des composants réutilisables (navbar, footer, head)
- Développement des pages :
  - Page d'accueil (`index.php`)
  - Vue générale des menus (`menus.php`)
  - Vue détaillée d'un menu (`menu-detail.php`)
  - Création de compte (`create-account.php`)
  - Contact (`contact.php`)
  - Espace utilisateur (`espace-utilisateur.php`)
  - Espace employé (`espace-employe.php`)
  - Espace administrateur (`espace-admin.php`)
  - Page de commande (`commande.php`)

### Phase 4 — Développement Back-end

- Connexion à la base de données via PDO (`database.php`)
- Système d'inscription sécurisé (`register.php`)
- Système de connexion avec sessions (`login.php`)
- Déconnexion sécurisée (`logout.php`)
- Traitement du formulaire de contact (`contact.php`)
- Gestion des rôles (utilisateur, employé, administrateur)
- Sécurisation : token CSRF, `password_hash()`, requêtes préparées

### Phase 5 — Tests et déploiement

- Tests fonctionnels en local via XAMPP
- Correction des bugs
- Déploiement sur Heroku
- Rédaction du README et de la documentation

---

## 4. Difficultés rencontrées

Difficulté :

- J'ai d'abord eu du mal du à mon niveau de débutant avec Bootstrap et ses multitudes de classes.
- Avec les chemins absolus entre VS code et XAMPP
- Avec le hash du mot de passe qui était tronqué du au varchar(50) fourni dans la doc de l'ECF
- Avec le token CSRF invalide lors de la connexion
- Avec la gestion des sessions sur toutes les pages

Solution:

- Beaucoup de recherches sur le site de Bootstrap officiel
- J'ai utilisé /ECF_V1/ comme base de tous les chemins sous XAMPP
- J'ai modifié la colonne password de VARCHAR(50) à VARCHAR(255)
- J'ai supprimé la génération du token dans ma page "login.php"
- J'ai ajouté le bloc "session_start() en haut de chaque page

---

## 5. Bonnes pratiques appliquées

- **Sécurité** : Token CSRF, `password_hash()`, `password_verify()`, requêtes préparées PDO, `htmlspecialchars()` à l'affichage
- **Organisation** : Composants réutilisables via `require`, séparation front/back
- **Git** : Branches `main`, `develop`, `feature/*`, commits réguliers
- **Environnement** : Fichier `.env` pour les credentials, jamais versionnés

---

## 6. Lien Trello

https://trello.com/invite/b/69ce3d1f616f1c6358d303f9/ATTIb50f5e48ada927541b2f98a199a328deC2F4F3AF/ecf-v1

---

## 7. Lien Drawio

https://drive.google.com/file/d/1Th7NfeYW1abJbLD3mInEhDhSNbxggI_O/view?usp=drive_link

## 8. Lien Figma

https://www.figma.com/design/X2lOK99OjEITakeR8JjJRQ/ECF?node-id=62-82&t=EJOqtuuB4Dom9oWJ-1
