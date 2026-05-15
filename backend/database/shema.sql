CREATE DATABASE ViteEtGourmand;
USE ViteEtGourmand;

CREATE TABLE role(
    role_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR (50)
);

INSERT INTO role (libelle) VALUES ('admin');
INSERT INTO role (libelle) VALUES ('employe');
INSERT INTO role (libelle) VALUES ('client');

CREATE TABLE utilisateur(
    utilisateur_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    telephone VARCHAR(50),
    ville VARCHAR(50),
    pays VARCHAR(50),
    adresse_postale VARCHAR(50),
    role_id INT NOT NULL,
    FOREIGN KEY (role_id) REFERENCES role(role_id)
);

-- Add log for utilisateur
INSERT INTO utilisateur (nom, prenom, telephone, email, adresse_postale, password, role_id)
VALUES ('Pascal', 'Paoli', '0620304050', 'pascal.paoli@email.com', '20218 Morosaglia', '$2y$10$n.WiY/tPpVV5megYInkFsuA8F9YhSbgD4Vns77C3Tqh/k1pijIcWq', 3);

-- Add log for employé
INSERT INTO utilisateur (nom, prenom, telephone, email, adresse_postale, password, role_id)
VALUES ('Dupont', 'Marie', '0612345678', 'employe@viteetgourmand.fr', '1 rue de Bordeaux', '$2y$10$CfLKGhCmbPuVlY2svFF.K.1XS9dy8y9DNX.3fCwYlwOrv1kTBy.3m', 2);

-- Add log for Admin
INSERT INTO utilisateur (nom, prenom, telephone, email, adresse_postale, password, role_id)
VALUES ('Doe', 'John', '0622546688', 'admin@viteetgourmand.fr', '1 rue de Bordeaux', '$2y$10$fQmplAbkJLXq/T8fxRwEWOcbuRAbpPQbdEBtjjYtTfVpsBdM7eAVy', 1);


-- Modif varchar for password
ALTER TABLE utilisateur MODIFY password VARCHAR(255) NOT NULL;

CREATE TABLE avis(
    avis_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    note VARCHAR(50),
    description VARCHAR(50),
    statut VARCHAR(50)
);

CREATE TABLE publie(
    utilisateur_id INT NOT NULL,
    avis_id INT NOT NULL,
    PRIMARY KEY(utilisateur_id, avis_id),
    FOREIGN KEY(utilisateur_id) REFERENCES utilisateur(utilisateur_id),
    FOREIGN KEY(avis_id) REFERENCES avis(avis_id)
);

CREATE TABLE menu(
    menu_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(50),
    nombre_personne_minimum INT,
    prix_par_personne DOUBLE,
    regime VARCHAR(50),
    description VARCHAR(50),
    quantite_restante INT
);

CREATE TABLE commande(
    numero_commande INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date_commande DATE,
    date_prestation DATE,
    heure_livraison VARCHAR(50),
    prix_menu DOUBLE,
    nombre_personne INT,
    prix_livraison DOUBLE,
    statut VARCHAR(50),
    pret_materiel BOOL,
    restitution_materiel BOOL,
    utilisateur_id INT NOT NULL,
    menu_id INT NOT NULL,
    
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(utilisateur_id),
    FOREIGN KEY (menu_id) REFERENCES menu(menu_id)
);


CREATE TABLE plat(
    plat_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titre_plat VARCHAR(50),
    photo BLOB
);

CREATE TABLE theme(
    theme_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(50)
);

CREATE TABLE propose(
    menu_id INT,
    plat_id INT,
    theme_id INT,
    PRIMARY KEY(menu_id, plat_id),
    FOREIGN KEY(menu_id) REFERENCES menu (menu_id),
    FOREIGN KEY(plat_id) REFERENCES plat (plat_id),
    FOREIGN KEY(theme_id) REFERENCES theme (theme_id)
);

CREATE TABLE allergene(
    allergene_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(50)
);

CREATE TABLE contient (
    plat_id INT NOT NULL,
    allergene_id INT NOT NULL,
    PRIMARY KEY (plat_id, allergene_id),
    FOREIGN KEY (plat_id) REFERENCES plat(plat_id),
    FOREIGN KEY (allergene_id) REFERENCES allergene(allergene_id)
);

CREATE TABLE horaire(
    horaire_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    jour VARCHAR(50),
    heure_ouverture VARCHAR(50),
    heure_fermeture VARCHAR(50)
);

CREATE TABLE regime(
    regime_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR (50)
);

CREATE TABLE adapte(
    menu_id INT NOT NULL,
    regime_id INT NOT NULL,
    PRIMARY KEY (menu_id, regime_id),
    FOREIGN KEY (menu_id) REFERENCES menu(menu_id),
    FOREIGN KEY (regime_id) REFERENCES regime(regime_id)
);



