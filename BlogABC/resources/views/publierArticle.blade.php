<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier un article</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    
     {{--@include('navbar')--}} <!-- Commentaire en blade -->

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
            <div class="text-center mt-5 mb-5"><h1>Publier un article</h1></div>
            <!-- Gauche -->
            <div class="col-6">
                <form action="{{route('art.store')}}" method="POST">
                    @csrf
                    <select name="idCategorie" class="form-select mb-3" aria-label="Categorie">
                        <option selected disabled>Choisir une categorie</option>
                        @foreach($categories as $categorie)
                            <option value="{{$categorie->idCategorie}}">{{$categorie->nomCategorie}}</option>
                        @endforeach
                    </select>
                        @error('idCategorie')
                            <small class="text-danger float-end">{{ $message }}</small>
                        @enderror
                    <div class="mb-3">
                        <input type="text" name="titreArticle" value="{{old('titreArticle')}}" class="form-control" placeholder="Titre">
                        @error('titreArticle')
                            <small class="text-danger float-end">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea name="resumeArticle" class="form-control" rows="2" placeholder="Resume de l'article">{{old('resumeArticle')}}</textarea>
                        @error('resumeArticle')
                            <small class="text-danger float-end">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea name="texteArticle" class="form-control" rows="6" placeholder="Text de l'article">{{old('texteArticle')}}</textarea>
                        @error('texteArticle')
                            <small class="text-danger float-end">{{ $message }}</small>
                        @enderror
                    </div><br/>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-dark mb-3">Publier</button>
                        <button type="reset" class="btn btn-light mb-3">Effacer</button>
                    </div>
                </form>
            </div>
            <!-- Droit -->
            <div class="col-6 text-center">
            <img src="{{asset('images/stylo.jpg')}}" width="400px" alt="Blog ABC">
            </div>
        </div>
    </div>

    @include('footer')
</body>
</html>