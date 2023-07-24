<header id="header">
  <nav class="navbar navbar-light" style="background-color: rgb(255, 0, 91); ">
      <a class="navbar-brand" href="{{ route('accueil') }}">
          <img src="{{ asset('images/logo.png') }}" alt="" width="110" height="60"
              style="margin-left:60px;">
      </a>
      <ul class="nav nav-pills">
          <li class="nav-item">
              <a class="btn btn-outline-light" href="{{ route('accueil') }}" role="button">Accueil</a>
          </li>
          <li class="nav-item">
              <a class="btn btn-outline-light" href="{{ route('accueil') }}#about" role="button">Qui suis-je?</a>
          </li>
          <li class="nav-item">
              <div class="dropdown">
                  <button type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Mon parcours
                  </button>
                  <div class="dropdown-content">
                      <a href="{{ route('accueil') }}#services">Services</a>
                      <a href="{{ route('accueil') }}#education">Education</a>
                      <a href="{{ route('accueil') }}#experience">Expérience</a>
                      <a href="{{ route('accueil') }}#clients">Clients</a>
                      <a href="{{ route('accueil') }}#prix">Prix remportés</a>
                  </div>
          </li>
          <li class="nav-item">
              <a class="btn btn-outline-light" href="{{ route('accueil') }}#projects" role="button">Mes projets</a>
          </li>
          <li class="nav-item" style="margin-right: 50px;">
              <a class="btn btn-outline-light" href="{{asset('contact')}}" role="button">Contactez-moi</a>
          </li>
      </ul>
      </div>
  </nav>
</header>
