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
    <title>Ajouter Apprenants</title>
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">

    <form action="{{route('store-student')}}" class="border p-4" style="width: 600px;" method="post">
    @csrf
    <h1 class="mt-5 mb-4">Ajout Apprenants</h1>

        <!-- Vos champs de formulaire ici -->
        <div class="mb-3">
            <label for="nom">Nom</label>
            <input name="nom" type="text" class="form-control" id="nom" placeholder="nom">
        </div>
        <div class="mb-3">
            <label for="prenom">Prenom</label>
            <input name="prenom" type="text" class="form-control" id="prenom" placeholder="prenom">
        </div>
        <div class="mb-3">
            <label for="telephone">Telephone</label>
            <input name="telephone" type="tel" class="form-control" id="telephone" placeholder="telephone">
        </div>
        <div class="mb-3">
            <label for="matricule">Matricule</label>
            <input name="matricule"  type="text" class="form-control" id="matricule" placeholder="matricule">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</body>
</html>
