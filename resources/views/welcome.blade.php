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
    <div class="container ">
        <div class="row">
            <div class="col-md-8 s1 pt-3">
                @if (session('status'))
                <div class="alert alert-success">
        {{session('status')}}
                </div>
                @endif
        <h1 class="form ">Formulaire d'inscription</h1>
        <form method="POST" action='/register/traitement'>
            @csrf <!-- Ajoutez le jeton CSRF pour la protection des formulaires Laravel -->
            <div class="mb-3">
            <label for="nom"  class="form-label">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control" required>

            <div class="mb-3">
            <label for="prenom"  class="form-label">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
            </div>
            <div class="mb-3">
            <label for="email"  class="form-label">Email :</label>
            <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
            <label for="telephone"  class="form-label">Téléphone :</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" required>
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
            </div>
        </form>
        </div>
    </div>
    </div>
</body>
</html>
