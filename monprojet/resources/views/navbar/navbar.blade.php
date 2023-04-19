 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container"> 
<a class="navbar-brand" href="#">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link @if(Request::route()->getName() == 'app_home')active @endif" href="{{ route('app_home')}}">Home </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link @if(Request::route()->getName() == 'app_about')active @endif" href="{{ route('app_about')}}">About </a>
      </li>

    </ul>
  </div>
  
 <!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Mon compte</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ route('login')}}">Connection</a>
    <a class="dropdown-item" href="{{ route('register')}}">Inscription</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Déconnection</a>
  </div>
</div>
</nav>