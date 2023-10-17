@extends('layouts.base')
@section('title')
     Tous les articles 

@endsection

@section('contenu')     
          @foreach($articles->chunk(4) as $chunk)
            <div class="card-group mt-3">
               @foreach($articles as $article)
               <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$article->categorie}}</h5>
                  <p class="card-text">{{$article->titre}}</p>
                  <a href="{{route('article.show', $article->id)}}" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
                @endforeach
            </div>
          @endforeach

  
        
@endsection
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>