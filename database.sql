CREATE DATABASE IF NOT EXISTS gestion_utilisateurs;

USE gestion_utilisateurs;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
