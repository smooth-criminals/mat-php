<nav id="navbar" class="navbar navbar-expand-sm navbar-dark">
  <a id="brand" class="navbar-brand" href="index.php">Matchisuru</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <?php
      if (isset($_SESSION['uid'])) {
        echo '
        <form action="controllers/logout.php" method="POST">
          <button type="submit" name="logout" class="nav-item nav-link">Logout</button>
        </form> ';
      } else {
        echo '
        <a href="login.php" class="nav-item nav-link">Login</a>
        <a href="register.php" class="nav-item nav-link">Register</a> ';
      }
      ?>
    </div>
  </div>
</nav>