<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"]; // Ajout du prénom
    $email = $_POST["email"];
    $age = $_POST["age"]; // Ajout de l'age

    echo "<p>Merci $prenom $nom, votre email est $email et vous avez $age ans.</p>";
}
?>