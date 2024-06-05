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
$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$appointmentDate = $_POST['appointmentDate'];

// Préparer la requête SQL d'insertion
$sql = "INSERT INTO client (fullName, phoneNumber, email, appointmentDate) VALUES ('$fullName', '$phoneNumber', '$email', '$appointmentDate')";

// Exécuter la requête
if ($conn) {
    if (mysqli_query($conn, $sql)) {
        echo "Enregistrement réussi";
    } else {
        echo "Erreur d'enregistrement : " . mysqli_error($conn);
    }
} else {
    echo "La connexion à la base de données a échoué.";
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
