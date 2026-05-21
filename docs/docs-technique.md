# Documentation Technique

## ECF Vite & Gourmand — Titre Professionnel Développeur Web et Web Mobile

---

## 1. Réflexions initiales technologiques

### Contexte

L'entreprise Vite & Gourmand souhaitait une application web permettant de présenter ses menus, de gérer les commandes en ligne et de disposer d'espaces dédiés pour les utilisateurs, employés et administrateurs.

### Choix technologiques

#### Front-end

| Technologie | Justification |

| **HTML5 / CSS3** | Base standard du développement web, sémantique et accessible |
| **Bootstrap 5.3** | Framework CSS permettant un développement rapide et un rendu responsive sans configuration complexe |
| **JavaScript** | Utilisé pour les interactions dynamiques (filtres, toggle password, curseurs de prix) |

#### Back-end

| Technologie | Justification |

| **PHP 8.2** | Langage back-end largement utilisé, bien adapté aux projets de taille moyenne, intégration native avec MySQL |
| **PDO** | Couche d'abstraction pour la base de données permettant des requêtes préparées et une protection contre les injections SQL |

#### Base de données

| Technologie | Justification |

| **MySQL** | Base de données relationnelle robuste, intégrée à XAMPP, idéale pour structurer les données métier |
| **MongoDB** | Base de données NoSQL utilisée pour les statistiques de commandes dans l'espace administrateur | (Malheureusement pas utilisé car jen'ai pas eu le temps de travailler ce thème avant la deadline de l'ECF)

#### Déploiement

| Technologie | Justification |

| **InfinityFree** | Plateforme de déploiement cloud simple à configurer, offre une version gratuite adaptée à un projet ECF |

---

## 2. Configuration de l'environnement de travail

### Outils utilisés

Outil - Version - Rôle

Visual Studio Code - Dernière version - Éditeur de code |
XAMPP - 8.2.12 - Serveur local (Apache + MySQL + PHP) |
PHP - 8.2.12 - Langage back-end |
MySQL - Via XAMPP - Base de données relationnelle |
Git - Dernière version - Gestion de version |
GitHub - Hébergement du dépôt |
Figma - Maquettes Wireframe et Mockup |
draw.io - Diagrammes MCD, utilisation, séquence |
Trello - Gestion de projet Kanban |

### Configuration XAMPP

1. Installation de XAMPP sur Windows
2. Démarrage des services **Apache** et **MySQL**
3. Placement du projet dans `C:/xampp/htdocs/ECF_V1/`
4. Accès à l'application via `http://localhost/ECF_V1/frontend/index.php`
5. Accès à phpMyAdmin via `http://localhost/phpmyadmin`

### Configuration du fichier .env

Fichier `.env` placé à la racine du projet, chargé via `parse_ini_file()` dans `database.php` :

> Le fichier `.env` est ajouté au `.gitignore` afin de ne jamais exposer les credentials sur GitHub.

### Extensions VS Code utilisées

- PHP Intelephense
- Bootstrap 5 Quick Snippets
- GitLens
- Prettier

---

## 3. Modèle Conceptuel de Données (MCD)

Le MCD a été réalisé sur **draw.io**.

Les entités principales sont :

| Entité | Description |

| `utilisateur` | Clients, employés et administrateurs |
| `role` | Rôles attribués aux utilisateurs (admin, employé, client) |
| `menu` | Menus proposés par Vite & Gourmand |
| `commande` | Commandes passées par les utilisateurs |
| `plat` | Plats composant les menus |
| `theme` | Thèmes des menus (Noël, Pâques, classique...) |
| `regime` | Régimes alimentaires (classique, végétarien, vegan) |
| `allergene` | Allergènes présents dans les plats |
| `avis` | Avis clients publiés sur la page d'accueil |
| `horaire` | Horaires d'ouverture affichés en pied de page |

> Le diagramme complet est disponible dans le dossier `docs/`.

---

## 4. Diagrammes

### Diagramme d'utilisation (Use Case)

Les acteurs identifiés sont :

- **Visiteur** : consulte les menus, crée un compte, contacte l'entreprise
- **Utilisateur connecté** : commande un menu, gère son espace, donne un avis
- **Employé** : gère les commandes, menus, plats, horaires et valide les avis
- **Administrateur** : gère les comptes employés, accède aux statistiques, fait tout ce que l'employé peut faire

> Le diagramme complet est disponible dans le dossier `docs/`.

### Diagramme de séquence

Les séquences principales documentées sont :

1. **Inscription** : Visiteur → formulaire → `register.php` → BDD → redirection
2. **Connexion** : Utilisateur → formulaire → `login.php` → vérification BDD → session → redirection selon rôle
3. **Commande** : Utilisateur connecté → `menu-detail.php` → `commande.php` → BDD → mail de confirmation
4. **Validation avis** : Employé → espace employé → validation → BDD → affichage page accueil

> Les diagrammes complets sont disponibles dans le dossier `docs/`.

---

## 5. Sécurité

| Mesure | Description |

| **Token CSRF** | Généré à chaque session, vérifié à chaque soumission de formulaire |
| **Requêtes préparées PDO** | Protection contre les injections SQL |
| **`password_hash()`** | Hashage des mots de passe avec l'algorithme bcrypt |
| **`password_verify()`** | Vérification sécurisée du mot de passe à la connexion |
| **`htmlspecialchars()`** | Protection contre les attaques XSS à l'affichage des données |
| **Fichier .env** | Credentials de la BDD jamais versionnés |
| **Sessions PHP** | Gestion des utilisateurs connectés et de leurs rôles |
| **Validation serveur** | Vérification de tous les champs côté PHP (email, mot de passe, champs vides) |

---

## 6. Documentation du déploiement

### Plateforme choisie : infinityFree

infinityFree a été choisi pour sa simplicité de configuration et sa compatibilité avec les applications PHP.

### Étapes de déploiement

#### 1 — Création de l'hébergement

- Créer un compte sur [infinityfree.com](https://infinityfree.com)
- Créer un nouvel hébergement depuis le panneau de contrôle
- Noter le sous-domaine attribué (ex: `viteetgourmand.rf.gd`)

#### 2 — Création de la base de données

- Dans le panneau de contrôle, aller dans **"MySQL Databases"**
- Créer une nouvelle base de données
- Noter les credentials fournis : host, database name, username, password

#### 3 — Import de la base de données

- Accéder à **phpMyAdmin** depuis le panneau de contrôle InfinityFree
- Sélectionner la base de données créée
- Importer le fichier `shema.sql` via l'onglet **"Importer"**

#### 4 — Upload des fichiers

- Accéder au **File Manager** depuis le panneau de contrôle
- Naviguer dans `htdocs`
- Uploader les dossiers `assets/`, `backend/`, `frontend/`, `JS/` via **"Upload & Unzip"**

#### 5 — Configuration du fichier .env

Créer un fichier `.env` directement sur le serveur via le File Manager avec les credentials InfinityFree :
DB_HOST=sql311.infinityfree.com
DB_NAME=if0_XXXXXXX_viteetgourmand
DB_USER=if0_XXXXXXX
DB_PASS=votremotdepasse

### URL de l'application déployée

🔗 [http://viteetgourmand.rf.gd/ECF_V1/frontend/index.php](http://viteetgourmand.rf.gd/ECF_V1/frontend/index.php)
