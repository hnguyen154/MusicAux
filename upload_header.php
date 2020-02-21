<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.html">MusicAux</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="upload.php">Upload<span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <?php  if(!$_SESSION['email']) {?>
          <li><a href="./Register.php" class="btn btn-space btn-outline-success my-2 my-sm-0">Sign Up</a></li>
        <?php } else { ?>
          <li>
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="Dashboard.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome <?php echo $fname;?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href = "logout.php">Sign Out</a>
                    </div>
                </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</header>
