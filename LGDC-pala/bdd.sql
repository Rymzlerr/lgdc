-- Création de la base de données
CREATE DATABASE IF NOT EXISTS LGDC;

-- Utilisation de la base de données créée
USE LGDC;

-- Création de la table des utilisateurs
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    role ENUM('admin', 'moderateur',) NOT NULL
);
