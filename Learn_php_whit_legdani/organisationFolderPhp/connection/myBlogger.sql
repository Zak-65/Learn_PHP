use myblogger ;

CREATE TABLE utilisateur (
    idUtilisateur INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(40) NOT NULL UNIQUE,
    nom VARCHAR(30) NOT NULL,
    password VARCHAR(25) NOT NULL
);

CREATE TABLE Blog (
    idBlog INT AUTO_INCREMENT PRIMARY KEY,
    idUtilisateur INT,
    titre VARCHAR(40) NOT NULL,
    texte VARCHAR(130),
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur)
);
