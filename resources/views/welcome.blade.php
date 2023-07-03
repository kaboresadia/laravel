<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formulaire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>Formulaire</h1>
        <form method="POST" action="/register/traitement">
            @csrf <!-- Ajoutez le jeton CSRF pour la protection des formulaires Laravel -->

            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" class="form-control" required>

            <label for="telephone">Téléphone :</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" required>

            <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
        </form>
        
    </div>
</body>
</html>
