<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('titre')</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/sign.png')}}" alt="Bootstrap" width="50" height="46" class="d-inline-block align-top">
                <span class="hidden">EASY-SHOP</span>
              </a>
            <button
            	class="navbar-toggler"
            	type="button"
            	data-bs-toggle="collapse"
            	data-bs-target="#toggleMobileMenu"
            	aria-controls="toggleMobileMenu"
            	aria-expanded="false"
            	aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">

                <ul class="navbar-nav ms-auto text-center">
                    <li>
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{'login'}}">Features</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{'sign'}}">Contact</a>
                    </li>
                </ul>


            </div>
        </nav>
      </div>
      <div class="container">
          @yield('contenu')
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
