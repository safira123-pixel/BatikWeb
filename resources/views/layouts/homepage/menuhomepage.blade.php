<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
  <a class="navbar-brand" href="/homepage">OMAH BATIK 78</a>
  <img src="{{ asset('images/RemoverBgOmahBatik.png') }}" class="d-block w-100" alt="...">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/homepage">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/homepage/login"> Register</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/homepage/register">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>