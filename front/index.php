<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Simple</title>
    <style>
        /* Ajoute ici ton CSS si besoin */
        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulaire Simple</h1>
        <form method="post" action="../back/traitement.php">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Envoyer</button>
        </form>
        <div id="reponse"></div> 
    </div>
</body>
</html>