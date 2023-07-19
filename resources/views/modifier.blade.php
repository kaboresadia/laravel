
<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="{{ asset('style/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<body>
    <form action="{{ route('modif', ['id' => $etudiant->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="{{ $etudiant->nom }}" >
    </div>

    <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="{{ $etudiant->prenom }}" >
    </div>

    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="{{ $etudiant->email }}" >
    </div>

    <div class="form-group">
        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone" value="{{ $etudiant->telephone }}" >
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</body>
</html>
