
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">LAFLEUR | Une passion à fleur de peau...</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link active" href="index.php?page=accueil">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=catalogue">Catalogue</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=connexion1">Connexion</a>
          </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestion
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php  echo "/lafleur5/news/gestion"; ?>">News</a></li>
            <li><a class="dropdown-item" href="<?php  echo "/lafleur5/fleurs/gestion"; ?>">Fleurs</a></li>

          </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
