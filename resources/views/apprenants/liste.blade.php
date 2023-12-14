<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajoutez ces liens pour intégrer Bootstrap -->
   <!-- Ajoutez ces liens pour intégrer Bootstrap -->
<!-- Ajoutez ces liens pour intégrer Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="...">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="..."></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="..."></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="..."></script>

    <title>Liste des Apprenants</title>
  </head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Liste des Apprenants</h1>
        <p></p>
      <!-------------- Pour afficher le bouton ajouter avec le lien------------->
        <!-----<a href={{ url('apprenants/new')}} type="button" class="btn btn-success float-end">Ajouter</a>--->
        <a href={{ route('ajouter-apprenants')}} type="button" class="btn btn-success float-end">Ajouter</a>


     
    <table class="table table-striped">
          <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Telephone</th>
                </tr>
            </thead>
            <tbody>
            @foreach($liste as $apprenant)
                <tr>
                    <th scope="row">{{ $apprenant->id }}</th>
                    <td>{{ $apprenant->nom }}</td>
                    <td>{{ $apprenant->prenom }}</td>
                    <td>{{ $apprenant->matricule }}</td>
                    <td>{{ $apprenant->telephone }}</td>
               
                  </tr>
                  @endforeach
            </tbody>
        </table>
       
    </div>
</body>
</html>
