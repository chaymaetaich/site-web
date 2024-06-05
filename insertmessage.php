<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base";

// Établir la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$texte = $_POST['texte'];

// Préparer la requête SQL d'insertion
$sql = "INSERT INTO msg (nom, email, texte) VALUES ('$nom', '$email', '$texte')";

// Exécuter la requête d'insertion
if (mysqli_query($conn, $sql)) {
    echo "Message envoyé avec succès";
} else {
    echo "Erreur d'envoi du message : " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
