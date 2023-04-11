<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="/node_modules/bulma/css/bulma.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="/home">
            <img src="/logo.png" width="112" height="28">
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
              Home
            </a>
        </div>
      </nav>
      <div class="container p-2">
        @yield('container')
    </div>
</body>
</html>
