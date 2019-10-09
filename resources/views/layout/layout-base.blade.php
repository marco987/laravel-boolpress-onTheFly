<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Boolpress</title>

      <!-- CSS -->
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">

      {{-- Font Raleway --}}
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet">

  </head>
  <body>

    <div id="container">

      <header>
        <h1>Boolpress</h1>
      </header>

      <main>
        @yield('content')
      </main>

      <footer>
        <h5>By marco987</h5>
      </footer>

    </div>

  </body>
</html>
