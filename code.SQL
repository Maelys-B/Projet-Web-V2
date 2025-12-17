

CREATE TABLE clients (
    id_client INT AUTO_INCREMENT PRIMARY KEY,

    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    telephone VARCHAR(20) DEFAULT NULL,

    adresse VARCHAR(255) DEFAULT NULL,
    ville VARCHAR(100) DEFAULT NULL,
    code_postal VARCHAR(20) DEFAULT NULL,
    pays VARCHAR(100) DEFAULT 'France',

    mot_de_passe VARCHAR(255) NOT NULL,

    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_modification DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE lumieres (
    id_lumiere INT AUTO_INCREMENT PRIMARY KEY,

    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    stock INT NOT NULL DEFAULT 0,
    description TEXT,

    type_lumiere VARCHAR(100) NOT NULL DEFAULT 'non défini',
    couleur VARCHAR(50) NOT NULL DEFAULT 'non défini',

    hauteur DECIMAL(6,2) NOT NULL DEFAULT 0.00,
    largeur DECIMAL(6,2) NOT NULL DEFAULT 0.00,
    poids DECIMAL(6,3) NOT NULL DEFAULT 0.000
);


CREATE TABLE commandes (
    id_commande INT AUTO_INCREMENT PRIMARY KEY,
    id_client INT NOT NULL,

    date_commande DATETIME DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_commande_client
        FOREIGN KEY (id_client) REFERENCES clients(id_client)
);


CREATE TABLE ligne_commandes (
    id_ligne INT AUTO_INCREMENT PRIMARY KEY,

    id_commande INT NOT NULL,
    id_lumiere INT NOT NULL,

    quantite INT NOT NULL DEFAULT 1,
    prix_unitaire DECIMAL(10,2) NOT NULL,

    CONSTRAINT fk_ligne_commande
        FOREIGN KEY (id_commande) REFERENCES commandes(id_commande),

    CONSTRAINT fk_ligne_lumiere
        FOREIGN KEY (id_lumiere) REFERENCES lumieres(id_lumiere)
);


CREATE TABLE avis (
    id_avis INT AUTO_INCREMENT PRIMARY KEY,

    id_client INT NOT NULL,
    id_lumiere INT NOT NULL,

    note INT NOT NULL CHECK (note BETWEEN 1 AND 5),
    commentaire TEXT DEFAULT NULL,
    date_avis DATETIME DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_avis_client
        FOREIGN KEY (id_client) REFERENCES clients(id_client),

    CONSTRAINT fk_avis_lumiere
        FOREIGN KEY (id_lumiere) REFERENCES lumieres(id_lumiere)
);


CREATE TABLE images (
    id_image INT AUTO_INCREMENT PRIMARY KEY,

    id_lumiere INT NOT NULL,
    url_image VARCHAR(255) NOT NULL,
    description VARCHAR(255) DEFAULT NULL,

    CONSTRAINT fk_image_lumiere
        FOREIGN KEY (id_lumiere) REFERENCES lumieres(id_lumiere)
);