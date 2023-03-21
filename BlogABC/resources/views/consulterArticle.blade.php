<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Consulter Article</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a href="{{route('cat.list')}}"><img src="{{asset('images/logo_ABC.png')}}" width="150px" alt="Blog ABC"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
        <div>
        <button class="btn btn-dark rounded-5">Mon compte</button>
        </div>
    </div>
  </div>
</nav>

<div class="container">
        <div class="row">
            <div class="text-center mt-5 mb-5"><h1>{{$article->titreArticle}}</h1></div>
            <!-- Gauche -->
            <div class="col-6">
                <h3>Auteur : {{$auteur->pseudo}}</h3>
                <h6>Categorie : {{$categorie->nomCategorie}}</h6>
                <h6>Date de création : {{$article->dateArticle}}</h6><br>
                <h5 class="fst-italic">À lire...</h5>
                <p class="lh-lg fst-italic">{{$article->resumeArticle}}</p>
                <hr>
                <p align="justify" class="lh-lg">{{$article->texteArticle}}</p>
            </div>
            <!-- Droit -->
            <div class="col-6">
            <h6 class="text-center">Commentaires</h6><br>
                @foreach($commentaires as $commentaire)
                    <div class="bg-light w-75 mx-auto rounded shadow">
                        <p class="ms-4 me-2 pt-2 lh-1"><b>{{$commentaire->pseudo}}</b></p>
                        <p class="ms-3 me-3 lh-1">{{$commentaire->textCommentaire}}</p>
                        <p class="text-end me-4 pb-1 fst-italic lh-1">{{$commentaire->dateCommentaire}}</p>
                    </div><br>
                @endforeach
                <div class="text-center">
                    <form action="{{route('comment.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="idArticle" value="{{$article->idArticle}}">
                        <textarea class="bg-light rounded border border-dark shadow" name="newCommentaire" id="" cols="30" rows="3"></textarea><br>
                        @error('newCommentaire')
                            <small class="text-danger">{{ $message }}</small><br>
                        @enderror
                        <input type="submit" class="btn btn-dark mt-2" value="Commenter">
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- FOOTER -->
@include('footer')
    </body>
</html>