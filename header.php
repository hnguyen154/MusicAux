<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.html">MusicAux</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Dashboard.php">Main<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="upload.php">Upload</a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
          <li>
                <h4 style="color:white;">Welcome <?php echo $fname;?> <?php echo $lname;?>, </h4>
          </li>
          <li>
              <a href = "logout.php" class="btn btn-link my-2 my-sm-0">Sign Out </a>
          </li>
      </ul>
    </div>
  </nav>
</header>
