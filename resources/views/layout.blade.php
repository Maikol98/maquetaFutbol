<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" /> --}}
    <script src="https://use.fontawesome.com/c53c06c750.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Maqueta</title>
  </head>
  <body>
        <header style="background-color: rgba(253, 169, 163, 0.849)">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 0, 0, 0)">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                      <a class="nav-link active" aria-current="page" href="{{route('acerdaDeNosotros')}}">Acerca de Nosotros</a>
                      <a class="nav-link active" aria-current="page" href="{{route('producto')}}">Productos</a>
                      <a class="nav-link active" aria-current="page" href="#">Contactanos</a>
                    </div>
                  </div>
                </div>
            </nav>
            
            @yield('header')
        </header>

        @yield('content')

        <footer class="text-white">
            <div class="row">
                <div class="col-lg-3">
                    <h3>Descarga nuestra App</h3>
                    <p>Descarga la App android y IOS en tu Smartphone.</p>
                    <div class="app-logo">
                        <img src="{{ asset('asset/img/play-store.png') }}" >
                        <img src="{{ asset('asset/img/app-store.png') }}" >
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="app-logo">
                        <img src="{{ asset('asset/img/logo-white.png') }}" >
                    </div>
                    <p>Nuestro proposito es hacer de forma sostenible el 
                        placer del deporte accesible al dinero. 
                    </p>
                </div>
                <div class="col-lg-3">
                    <h3>Enlaces utiles</h3>
                    <ul>
                        <li>Cupones</li>
                        <li>Blogs</li>
                        <li>Unete al Afiliado </li>
                        <li>Politica de Devoluciones</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Redes Sociales</h3>
                    <ul>
                        <li><i class="fa fa-facebook"> facebook.com</i></li>
                        <li><i class="fa fa-twitter"> twitter.com</i></li>
                        <li><i class="fa fa-instagram"> instagram.com</i></li>
                        <li><i class="fa fa-youtube"> youtube.com</i></li>
                    </ul>
                </div>
            </div>
        </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>