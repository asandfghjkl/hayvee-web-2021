<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- Font -->
    <!-- Headline (Montserrat) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Body (Opensans) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #094D92">
      <div class="container-fluid">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="img/logo.png">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav" >
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">About</a></li>
                <li><a class="dropdown-item {{ Request::is('hayPedia') ? 'active' : '' }}" href="{{ url('hayPedia') }}">hayPedia</a></li>
                <li><a class="dropdown-item {{ Request::is('hayTalk') ? 'active' : '' }}" href="{{ url('hayTalk') }}">hayTalk</a></li>
                <li><a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}#testimonial">Testimoni</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Container -->
    @yield('container')
    <!-- Akhir Container -->

    <!-- Footer -->
    <footer class="text-white shadow-sm" style="background-color: #094D92;">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-3 mt-5">
            <h3>Follow Us!</h3>
            <div class="container mt-4">
              <div class="col">
                <a href="https://www.facebook.com/hayveeid/" target="_blank">
                  <img src="img/fb.png" alt="">
                  <span class="text-light">@hayveeid</span>
                </a>
              </div>
              <div class="col mt-4">
                <a href="https://www.instagram.com/hayveeid/" target="_blank">
                  <img src="img/ig.png" alt="">
                  <span class="text-light">@hayveeid</span>
                </a>
              </div>
              <div class="col mt-4">
                <a href="https://twitter.com/hayVeeID?s=20" target="_blank">
                  <img src="img/tw.png" alt="">
                  <span class="text-light">@hayVeeID</span>
                </a>
              </div>
            </div>

          </div>
          <div class="col-md-5 mt-5">
            <h3>About Us</h3>
            <div class="container mt-4">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias laboriosam sint veniam! Itaque maxime aliquid doloribus illo nihil, voluptatem autem ullam atque rem mollitia dolorum dolore! Aliquam, doloremque? Molestiae tempora dignissimos illo, tenetur beatae nesciunt quo atque quia placeat culpa ratione amet accusamus, fugiat iste.</p>
            </div>
           </div>
          <div class="col-md-3 mt-5">
            <h2>Navigasi</h2>
            <div class="container mt-4 text-center">
              <ul>
              <li><a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">About</a></li>
                <li><a class="dropdown-item {{ Request::is('hayPedia') ? 'active' : '' }}" href="{{ url('hayPedia') }}">hayPedia</a></li>
                <li><a class="dropdown-item {{ Request::is('hayTalk') ? 'active' : '' }}" href="{{ url('hayTalk') }}">hayTalk</a></li>
                <li><a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}#testimonial">Testimoni</a></li>
              </ul></div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
