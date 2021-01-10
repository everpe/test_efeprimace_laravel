<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>efe-Prima-ce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/my-styles.css') }}" >

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        {{-- Navbar Options --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand white-color" href="/">efe-Prima-ce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active text-light" href="{{ route('actors.index') }}">Actores <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active text-light" href="{{ route('films.index') }}">Películas <span class="sr-only">(current)</span></a>
              </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

    </body>
</html>
