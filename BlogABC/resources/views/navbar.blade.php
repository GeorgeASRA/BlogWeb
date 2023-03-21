<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="{{asset('images/logo_ABC.png')}}" width="150px" alt="Blog ABC">
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
            <li><a class="dropdown-item" href="#"><input type="hidden" value="{{$categorie->idCategorie}}">{{$categorie->nomCategorie}}</a></li>
            @endforeach
          </ul>
        </li>
        <form class="d-flex" role="search">
        <input class="form-control me-2 ms-5" type="search" placeholder="Rechercher. . ." aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Rechercher</button>
      </form>
      </ul>
        <div>
        <button class="btn btn-dark rounded-5">Mon compte</button>
        </div>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>