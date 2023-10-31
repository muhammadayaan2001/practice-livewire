<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Practice - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @livewireStyles
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">LiveWire Practice</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
              <a class="nav-link {{ Request::is('search') ? 'active' : '' }}" href="{{ url('/search') }}">Rendering-input</a>
              <a class="nav-link {{ Request::is('property-binding') ? 'active' : '' }}" href="{{ url('/property-binding') }}">Property-Binding</a>
              <a class="nav-link {{ Request::is('livewire-actions') ? 'active' : '' }}" href="{{ url('/livewire-actions') }}">Livewire-Actions</a>
              <a class="nav-link {{ Request::is('lifecycle-hook') ? 'active' : '' }}" href="{{ url('/lifecycle-hook') }}">Lifecyle-Hooks</a>
              <a class="nav-link {{ Request::is('nested-component') ? 'active' : '' }}" href="{{ url('/nested-component') }}">Nested-Component</a>
              <a class="nav-link {{ Request::is('submit-form') ? 'active' : '' }}" href="{{ url('/submit-form') }}">Submit-Form</a>
              <a class="nav-link {{ Request::is('livewire-route') ? 'active' : '' }}" href="{{ url('/livewire-route') }}">Routes</a>
              <a class="nav-link {{ Request::is('data-sharing') ? 'active' : '' }}" href="{{ url('/data-sharing') }}">Data-Share</a>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Others
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('/employee-crud') }}">CRUD Livewire</a></li>
                </ul>
              </li>

            </div>
          </div>
        </div>
      </nav>


      <div class="main mt-3">
        @yield('content')
      </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>