<header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

  <nav id="navbar" class="navbar">
    <ul>
      @auth
      <li><a class="nav-link scrollto active" href="{{ url('/home') }}">Home</a></li>
      @else
      <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
      @endif
      <li><a class="nav-link scrollto" href="#about">About</a></li>
      <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      @if (Route::has('login'))
          @auth
            <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a></li>
          @else
          <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>
      @endif
    @endif
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

</header>