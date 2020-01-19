<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{route('home')}}">
     <strong> Blog</strong>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="{{route('home')}}" class="navbar-item">
        Home
      </a>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          @if(auth()->check())
            <a href="{{route('account')}}" class="navbar-item">Your Account</a>
            <a href="#" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          @else
            <a href="{{route('register')}}" class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a href="{{route('login')}}" class="button is-light">
              Log in
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="is-hiddden">
    @csrf
</form>