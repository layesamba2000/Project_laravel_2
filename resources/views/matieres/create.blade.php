<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajoutez ces liens pour intégrer Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="...">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="..."></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="..."></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="..."></script>
    <title>Ajout Matiere</title>
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">

   <form action="{{ route('matieres.store')}}" method="POST">

   @csrf

    <h1 class="mt-5 mb-4">Modifier Matiere</h1>

        <!-- Vos champs de formulaire ici -->
        <div class="mb-3">
            <label for="nomMatiere">Nom</label>
            <input name="nomMatiere" type="text" class="form-control" id="nomMatiere" placeholder="Nom" value="">
        </div>
        <div class="mb-3">
            <label for="coef">coef</label>
            <input name="coef" type="text" class="form-control" id="coef" placeholder="coef" value="">
        </div>
        <div class="mb-3">
            <label for="credit">credit</label>
            <input name="credit" type="tel" class="form-control" id="credit" placeholder="credit" value="">
        </div>
        <div class="mb-3">
            <label for="horaire">horaire</label>
            <input name="horaire"  type="text" class="form-control" id="horaire" placeholder="horaire" value="">
        </div>

        <div class="mb-3">
    <label for="professeur">Sélectionnez un professeur :</label>
    <select class="form-select" id="professeur" name="professeur_id">
        <option value="" disabled selected>Choisissez un professeur</option>
        
        @foreach ($professeurs as $professeur)
            <option value="{{ $professeur->id }}">{{ $professeur->nomProf }} {{ $professeur->prenomProf }}</option>
        @endforeach
    </select>
</div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

</body>
</html>
