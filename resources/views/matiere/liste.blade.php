<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajoutez ces liens pour intégrer Bootstrap -->
    <!-- Ajoutez ces liens pour intégrer Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="...">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="..."></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="..."></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="..."></script>

    <title>Liste des Matieres</title>
</head>
<body>
<div class="container">
    <h1>Liste Des Matieres</h2>
    
   

    <table class="table table-striped">
       <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Coef</th>
      <th scope="col">Credit</th>
      <th scope="col">Horaire</th>
      <th scope="col">Proffeseur</th>
    </tr>
  </thead>
  <tbody>
  @foreach($liste as $matieres)
    <tr>
      <th scope="row">{{($matieres->id)}}</th>
      <td>{{($matieres->nomMatiere)}}</td>
      <td>{{($matieres->coef)}}</td>
      <td>{{($matieres->credit)}}</td>
      <td>{{($matieres->horaire)}}</td>
      <td>{{ optional($matieres->professeur)->nomProf }} {{ optional($matieres->professeur)->prenomProf }}</td>
      @endforeach    
  </tbody>
</table>
</div>
</body>
</html>