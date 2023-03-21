<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Accueil Blog ABC</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a href="{{route('cat.list')}}"><img src="{{asset('images/logo_ABC.png')}}" width="150px" alt="Blog ABC"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active ms-5" aria-current="page" href="{{route('art.publier')}}">Publier</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle ms-5 nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            @foreach($categories as $categorie)
            <li class="dropdown-item">
              <form action="{{route('cat.list')}}" method="GET">
              <input type="hidden" name="categorieChoisie" value="{{$categorie->idCategorie}}">
              <input type="submit" class="dropdown-item" value="{{$categorie->nomCategorie}}" >
              </form>
            </li>
            @endforeach
          </ul>
        </li>
        <form class="d-flex" method="GET">
          <input class="form-control me-2 ms-5" type="text" name="rechercher" placeholder="Rechercher. . ." aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Rechercher</button>
        </form>
      </ul>
        <div>
        <button class="btn btn-dark rounded-5">Mon compte</button>
        </div>
    </div>
  </div>
</nav>
  <!-- Affichage articles -->
  <br/>
  <div class="container">
  <div class="row">
      <!-- Premier interfaz a montrer "Les article le plus recents" -->
    @if($recherche == null && $nomCategorie == null)
      <div class="text-center mb-3"><h1>Articles les plus recents...</h1></div>
        @foreach($artRecents as $artR)
        <div class="col-6">
          <div class="card mb-3">
            <div class="card-body shadow">
              <h5 class="card-title">{{$artR->titreArticle}}</h5>
              <p class="card-text text-truncate">{{$artR->resumeArticle}}</p>
              <form action="{{route('art.show')}}" method="GET">
                <input type="hidden" name="idArticle" value="{{$artR->idArticle}}">
                <input type="submit" class="btn btn-dark" value="Lire">
              </form>
            </div>
          </div>
        </div>
      @endforeach
      <!-- Afficher les articles par categories -->
    @elseif($categorieChoisie != null && $recherche == null)
      <div class="text-center mb-3"><h1>Categorie : {{$nomCategorie->nomCategorie}}</h1></div>
        @foreach($categorieChoisie as $artParCategorie)
        <div class="col-6">
          <div class="card mb-3">
            <div class="card-body shadow">
              <h5 class="card-title">{{$artParCategorie->titreArticle}}</h5>
              <p class="card-text text-truncate">{{$artParCategorie->resumeArticle}}</p>
              <form action="{{route('art.show')}}" method="GET">
                <input type="hidden" name="idArticle" value="{{$artParCategorie->idArticle}}">
                <input type="submit" class="btn btn-dark" value="Lire">
              </form>
            </div>
          </div>
        </div>
        @endforeach
        <!-- Afficher le resultat de la recherche -->
    @else
      <div class="text-center mb-3"><h1>Resultat de votre recherche...</h1></div>
        @foreach($resultatRecherche as $resultat)
        <div class="col-6">
            <div class="card mb-3">
              <div class="card-body shadow">
                <h5 class="card-title">{{$resultat->titreArticle}}</h5>
                <p class="card-text text-truncate">{{$resultat->resumeArticle}}</p>
                <form action="{{route('art.show')}}" method="GET">
                  <input type="hidden" name="idArticle" value="{{$resultat->idArticle}}">
                  <input type="submit" class="btn btn-dark" value="Lire">
                 </form>
              </div>
          </div>
        </div>
      @endforeach
    @endif
    </div>
  </div>

  <!-- Footer -->
  @include('footer')

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>