<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Intégration de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="...">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="..."></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="..."></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="..."></script>

    <title>Liste des Matières</title>
</head>
<body>
<div class="container">
    <h1>Liste des Matières</h1>
    
    <!-- Bouton Ajouter -->
    <a href="{{ route('matieres.create') }}" type="button" class="btn btn-success float-end">Ajouter</a>

    <!-- Tableau des Matières -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Coef</th>
                <th scope="col">Credit</th>
                <th scope="col">Horaire</th>
                <th scope="col">Professeur</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($liste as $matiere)
            <tr>
                <th scope="row">{{ $matiere->id }}</th>
                <td>{{ $matiere->nomMatiere }}</td>
                <td>{{ $matiere->coef }}</td>
                <td>{{ $matiere->credit }}</td>
                <td>{{ $matiere->horaire }}</td>
                <td>{{ optional($matiere->professeur)->nomProf }} {{ optional($matiere->professeur)->prenomProf }}</td>
                <td>
                    <!-- Bouton Modifier -->
                    <a href="{{ route('matieres.edit', $matiere->id) }}" class="btn btn-primary">Modifier</a>

                    <!-- Formulaire Supprimer -->
                    <form action="{{ route('matieres.destroy', $matiere->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach    
        </tbody>
    </table>
</div>
</body>
</html>
