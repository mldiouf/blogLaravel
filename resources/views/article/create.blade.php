@extends('layouts.base')
@section('title')
     Ajouter un article 

@endsection

@section('contenu')
     <h1>Ajouter un article </h1>
        <form action="" method="">
          <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" placeholder="Donnez un titre">
          </div>
          <div class="mb-3">
            <label for="contenu" class="form-label">Contenu</label>
            <textarea class="form-control" id="contenu" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="categorie" class="form-label">Categorie</label>
            <input type="text" class="form-control" id="categorie" placeholder="Categorie">
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Ajouter un article</button>
          </div>
        </form>
@endsection
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>