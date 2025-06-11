<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare('INSERT INTO users (name, email) VALUES (?, ?)');
    $stmt->execute([$name, $email]);

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <h1>Ajouter un utilisateur</h1>
    <form method="post">
        <label>Nom :</label>
        <input type="text" name="name" required>
        <br>
        <label>Email :</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit">Ajouter</button>
    </form>
    <a href="index.php">Retour à la liste</a>
</body>
</html>
