@extends('layouts.base')
@section('title')
     Tous les articles 

@endsection

@section('contenu')
@foreach ($articles as $article)

<div class="card">
    <h5 class="card-header">{{$article->categorie}}</h5>
    <div class="card-body">
      <h5 class="card-title">{{$article->titre}}</h5>
      <p class="card-text">{{$article->contenu}}</p>
      <a href="{{route('article.show', $article->id)}}" class="btn btn-primary">Modifier votre article</a>
      {{-- <a href="{{route('article.delete', $article->id)}}" class="btn btn-primary">supprimer votre article</a> --}}

    </div>
  </div>
  <hr>
  @endforeach
@endsection
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>