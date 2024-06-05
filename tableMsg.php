<?php
// Établir une connexion à la base de données
$con = mysqli_connect("localhost", "root", "", "base");

// Vérifier la connexion
if (!$con) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}
// Requête pour créer la table msg si elle n'existe pas déjà
$query = "CREATE TABLE msg (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    texte TEXT NOT NULL
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
