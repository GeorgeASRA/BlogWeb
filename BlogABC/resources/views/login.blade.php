<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>ABC Login</title>
</head>
<body class="container">
    <br/>
    <div class="text-center"><img src="{{asset('images/logo_ABC.png')}}" width="40%" alt="Blog ABC"></div>
    <div class="row">
        <div class="offset-2 col-8 border border-dark rounded-5">
            <form class="m-4" action="{{route('cat.list')}}">
                <div class="mb-3">
                    <label for="InputPseudo" class="form-label">Pseudo :</label>
                    <input type="text" class="form-control" id="InputPesudo">
                </div>
                <div class="mb-3">
                    <label for="InputPassword1" class="form-label">Mot de pass :</label>
                    <input type="password" class="form-control" id="InputPassword1">
                </div>
                <div class="text-center"><button type="submit" class="btn btn-dark float-center">Se connecter</button></div>
            </form>
        </div>
        <div class="text-center">
                <br/><button class="btn btn-light border-dark">Créer une compte</button>
                <br/><button class="btn btn-light mt-2 border-dark">J'ai oublié mon compte</button>
        </div>
    </div>
</body>
</html>