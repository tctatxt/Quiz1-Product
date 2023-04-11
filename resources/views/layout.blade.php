<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="/node_modules/bulma/css/bulma.css">
    <title>@yield('judul')</title>
</head>
<body>
    <nav class="navbar has-background-grey-lighter" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="/home">
            <img src="/logo.png"  width="50" height="200">
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a href="/home" class="navbar-item">
              Home
            </a>
        </div>
      </nav>
      <div class="container p-2">
        @yield('container')
    </div>
</body>
</html>
