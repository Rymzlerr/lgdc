CREATE TABLE alliances (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_faction VARCHAR(100) NOT NULL,
    nom_contact VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    date_demande TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
