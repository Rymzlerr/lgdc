CREATE TABLE inscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    profession VARCHAR(100) NOT NULL,
    pseudo_minecraft VARCHAR(50) NOT NULL,
    pseudo_discord VARCHAR(50) NOT NULL,
    temps_jeu VARCHAR(50) NOT NULL,
    experience TEXT NOT NULL,
    motivation TEXT NOT NULL,
    enigme TEXT NOT NULL,
    planning TEXT NOT NULL,
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
