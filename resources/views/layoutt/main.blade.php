<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <title>{{ $title }}</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="/">Hallo Wafiq</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ $title == 'home' ? 'active' : ''}}" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title == 'profile' ? 'active' : ''}}" href="/profile">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title == 'berita' ? 'active' : ''}}" href="/berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title == 'kontak' ? 'active' : ''}}" href="/kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title == 'about' ? 'active' : ''}}" href="/about">About</a>
          </li>

          @auth
            <li class="nav-item">
              <a class="nav-link {{ $title == 'mahasiswa' ? 'active' : ''}}" href="/mahasiswa">Data Mahasiswa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Hi, {{ auth()->user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </div>
            </li>
          @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($title ?? '') === 'Login' ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          @endauth
        </ul>
      </div>
    </nav>
    <div class= "container mt-5 pt-5">
      @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>