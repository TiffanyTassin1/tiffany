<?php
	
// Connexion à la base de données //
$conn = new PDO ("mysql:host=localhost;dbname=reservation;charset=utf8mb4","tiffany1","toto","",[]);

// Requête SQL + envoi //
$stmt = $conn->prepare("SELECT * FROM reservation");
$stmt->execute();

// Récupération de tous les enregistrements sous forme de tableau associatif//
$reservation = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($reservation); // Permet d'afficher le contenu d'une variable //