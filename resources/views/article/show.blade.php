@extends('layouts.base')
@section('title')
     Modifier un article 

@endsection

@section('contenu')
     <h1>modifier un article </h1>
        <form action="{{route('article.update')}}" method="post">
          @csrf

          @if (session('status'))
            <div class="alert alert-success" >{{session('status')}} </div>
          @endif

          @if ($errors)
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">{{$error}}</div>
            @endforeach
          @endif
          <input type="hidden" name="id" value="{{$article->id }}">
          <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" id="titre" value="{{$article['titre'] }}" placeholder="Donnez un titre">
          </div>
          <div class="mb-3">
            <label for="contenu" class="form-label">Contenu</label>
            <textarea name="contenu" class="form-control" id="contenu" rows="3">{{ $article['contenu']}}</textarea>
          </div>
          <div class="mb-3">
            <label for="categorie" class="form-label">Categorie</label>
            <select name="categorie" class="form-select" aria-label="Default select example">
              <option selected>{{ $article['categorie']}}</option>
              <option value="Developpement web">Developpement web</option>
              <option value="Administration reseaux">Administration reseaux</option>
              <option value="Intelligence artificielle">Intelligence artificielle (IA)</option>
            </select>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Ajouter un article</button>
          </div>
        </form>
@endsection
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>