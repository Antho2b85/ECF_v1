# Manuel d'Utilisation

## Application Vite & Gourmand

---

**Auteur** : Mara Anthony  
**Formation** : Titre Professionnel Développeur Web et Web Mobile  
**Établissement** : Studi  
**Année** : 2025/2026 session septembre/octobre 2026

---

## Présentation de l'application

**Vite & Gourmand** est une application web développée pour le traiteur bordelais Julie et José. Elle permet de :

- Consulter les menus et événements proposés
- Commander un menu en ligne
- Gérer son espace personnel (commandes, informations)
- Gérer les commandes et menus via un espace employé
- Administrer l'application via un espace administrateur

---

## Accès à l'application

### En local

```
http://localhost/ECF_V1/frontend/pages/index.php
```

### En ligne

```
https://vite-et-gourmand.herokuapp.com *(à mettre à jour)*
```

---

## Comptes de test

**Administrateur** | admin@viteetgourmand.fr | Administrateur123!
**Employé** | employe@viteetgourmand.fr | Employe123!
**Utilisateur** | pascal.paoli@email.com | Morosaglia123!

---

## Parcours Visiteur (non connecté)

### 1 — Page d'accueil

La page d'accueil présente l'entreprise Vite & Gourmand avec :

- Une image hero avec le nom de l'entreprise
- Une présentation de Julie et José
- Les menus de fêtes mis en avant
- Les avis clients validés

**Accès** : `http://localhost/ECF_V1/frontend/index.php`

---

### 2 — Consulter les menus

Depuis la navbar, cliquez sur **"Nos menus & événements"** pour accéder à la vue générale des menus.

Cette page propose :

- Une liste de tous les menus disponibles
- Des filtres (prix maximum, fourchette de prix, thème, régime, nombre de personnes)
- Un bouton **"Voir le détail"** sur chaque carte menu

**Accès** : `http://localhost/ECF_V1/frontend/pages/menus.php`

---

### 3 — Voir le détail d'un menu

En cliquant sur **"Voir le détail"**, vous accédez à la page détaillée du menu avec :

- La description complète
- Le prix par personne
- Le nombre de personnes minimum
- Les conditions importantes (délai de commande...)
- Un bouton **"Commander ce menu"** (réservé aux utilisateurs connectés)

> Si vous n'êtes pas connecté, un bouton **"Se connecter / S'inscrire"** s'affiche à la place.

---

### 4 — Créer un compte

Cliquez sur **"Connexion/S'inscrire"** dans la navbar, puis sur **"Pas encore de compte ? S'inscrire"**.

Remplissez le formulaire avec :

- Nom et prénom
- Numéro de téléphone
- Adresse mail
- Adresse postale
- Mot de passe (10 caractères minimum, 1 majuscule, 1 chiffre, 1 caractère spécial)
- Confirmation du mot de passe

Un email de bienvenue vous sera envoyé automatiquement.

**Accès** : `http://localhost/ECF_V1/frontend/pages/create-account.php`

---

### 5 — Se connecter

Cliquez sur **"Connexion/S'inscrire"** dans la navbar et renseignez votre email et mot de passe.

Vous serez automatiquement redirigé vers votre espace selon votre rôle.

---

### 6 — Page Contact

Depuis la navbar, cliquez sur **"Contacts"** pour accéder au formulaire de contact.

Remplissez :

- Titre / Objet de votre message
- Description
- Votre adresse email

**Accès** : `http://localhost/ECF_V1/frontend/pages/contact.php`

---

## Parcours Utilisateur connecté

### 1 — Espace utilisateur

Après connexion, vous êtes redirigé vers votre tableau de bord personnel.

Vous y trouvez :

- Votre nom, email et rôle
- La liste de vos commandes avec leur statut
- Des actions rapides (voir les menus, nouvelle commande)

**Accès** : `http://localhost/ECF_V1/frontend/pages/espace-utilisateur.php`

---

### 2 — Commander un menu

Depuis la page détail d'un menu, cliquez sur **"Commander ce menu"**.

Renseignez :

- Vos informations (pré-remplies depuis votre compte)
- L'adresse et la date de prestation
- L'heure souhaitée et le lieu précis
- Le nombre de personnes

> Une réduction de 10% s'applique pour toute commande avec 5 personnes supplémentaires au minimum.

Un récapitulatif du prix (menu + livraison + réduction) s'affiche avant validation.

Un email de confirmation vous sera envoyé après validation.

---

### 3 — Se déconnecter

Cliquez sur le bouton **"Déconnexion"** dans la navbar.

---

## Parcours Employé

### Accès

Connectez-vous avec un compte employé. Vous serez redirigé vers l'espace employé.

**Accès** : `http://localhost/ECF_V1/frontend/pages/espace-employe.php`

### Fonctionnalités

**Gestion des commandes :**

- Filtrer par statut ou par client
- Mettre à jour le statut d'une commande :
  - Accepté → En préparation → En cours de livraison → Livré → En attente du retour de matériel → Terminée
- Annuler une commande (motif + mode de contact obligatoires)

**Gestion des menus et plats :**

- Modifier ou supprimer un menu
- Modifier ou supprimer un plat
- Modifier les horaires

**Validation des avis clients :**

- Valider ou refuser les avis soumis par les utilisateurs

---

## Parcours Administrateur

### Accès

Connectez-vous avec un compte administrateur. Vous serez redirigé vers l'espace administrateur.

**Accès** : `http://localhost/ECF_V1/frontend/pages/espace-admin.php`

### Fonctionnalités

**Gestion des comptes employés :**

- Créer un compte employé (email + mot de passe)
- Activer ou désactiver un compte employé

**Statistiques :**

- Graphique du nombre de commandes par menu
- Calcul du chiffre d'affaires avec filtres par menu et par période

**L'administrateur dispose également de toutes les fonctionnalités de l'espace employé.**

> ⚠️ Il n'est pas possible de créer un compte administrateur depuis l'application. Ce compte doit être créé directement en base de données.

---

## Navigation générale

| Page               | URL                                      |
| ------------------ | ---------------------------------------- |
| Accueil            | `/frontend/index.php`                    |
| Menus              | `/frontend/pages/menus.php`              |
| Détail menu        | `/frontend/pages/menu-detail.php?id=X`   |
| Créer un compte    | `/frontend/pages/create-account.php`     |
| Contact            | `/frontend/pages/contact.php`            |
| Espace utilisateur | `/frontend/pages/espace-utilisateur.php` |
| Espace employé     | `/frontend/pages/espace-employe.php`     |
| Espace admin       | `/frontend/pages/espace-admin.php`       |
| Commande           | `/frontend/pages/commande.php`           |

---

_Document rédigé par **Mara Anthony** — ECF Studi 2026_
