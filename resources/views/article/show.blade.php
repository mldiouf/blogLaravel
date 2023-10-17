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
          <div class="card">
            <h5 class="card-header">{{ $article['categorie']}}</h5>
            <div class="card-body">
              <h5 class="card-title">{{$article['titre'] }}</h5>
              <p class="card-text">{{ $article['contenu']}}</p>
            </div>
          </div>
            {{-- <button type="submit" class="btn btn-primary">Ajouter un article</button> --}}
          </div>
        </form>
@endsection
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>