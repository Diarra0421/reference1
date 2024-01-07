<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Departement</title>
  </head>
  <body>
    <h1 class="text-center text-success">Personnels</h1>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('enregistrer.personnel') }}" method="POST">
            @csrf
            <label for="">Nom:</label>
            <input type="text" name="nom" id="" class="form-control"><br>
            <label for="">Prenom:</label>

            <input type="text" name="prenom" id="" class="form-control"><br>
            <label for="">Département:</label>

            <select name="departement_id" id="" class="form-control"><br>
                @foreach($dep as $d)
                <option value="{{ $d->id }}">{{ $d->nom }}</option>
                @endforeach
            </select>

            <button class="btn btn-primary mt-3">Enregistrer</button>
        </form>
    </div>

    <h2 class="text-center">Liste Personnel</h2>

  <div class="container">
  <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Departement</th>

            </tr>
            
        </thead>

        <tbody>
        @foreach($p  as $pr)

            <tr>
                <td>#{{ $pr->id}}</td>
                <td>{{ $pr->nom}}</td>
                <td>{{ $pr->prenom}}</td>
                <td>{{ $pr->departement->nom}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
