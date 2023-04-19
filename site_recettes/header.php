<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $rootUrl . 'index.php'; ?>">Site de recettes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $rootUrl . 'index.php'; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $rootUrl . 'contact.php'; ?>">Contact</a>
        </li>
        <?php if(isset($loggedUser)): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $rootUrl . 'recipes/create.php'; ?>">Ajouter une recette !</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $rootUrl . 'deconnexion.php'; ?>">Déconnexion</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>