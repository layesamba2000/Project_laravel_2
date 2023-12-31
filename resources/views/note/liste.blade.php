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

    <title>Liste des Notes</title>
  </head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Liste des Notes</h1>
        
        <table class="table table-striped">
          <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Devoir</th>
                    <th scope="col">Exemen</th>
                    <th scope="col">Apprenant</th>
                    <th scope="col">UE</th>
                </tr>
            </thead>
            <tbody>
               @foreach($liste as $notes)
                <tr>
                    <th scope="row">{{ $notes->id }}</th>
                    <td>{{ $notes->devoir }}</td>
                    <td>{{ $notes->examen }}</td>
                    
                    <td>{{ optional($notes->apprenants)->nom }} {{ optional($notes->apprenants)->prenom }}</td>

                    <td>{{ optional($notes->ues)->nomUE }}</td>

               
                  </tr>
                  @endforeach
            </tbody>
        </table>
       
    </div>
</body>
</html>
