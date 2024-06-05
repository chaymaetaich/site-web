<?php
// Établir une connexion à la base de données
$con = mysqli_connect("localhost", "root", "", "base");

// Vérifier la connexion
if (!$con) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Requête pour créer la table "utilisateurs"
$query = "CREATE TABLE client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(255) NOT NULL,
    phoneNumber VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    appointmentDate DATE NOT NULL
)";
// Exécuter la requête
if (mysqli_query($con, $query)) {
    echo "Table créée avec succès";
} else {
    echo "Erreur lors de la création de la table : " . mysqli_error($con);
}

// Fermer la connexion
mysqli_close($con);
?>

