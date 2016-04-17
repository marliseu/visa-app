<body>
  <div class="wrapper">
    <nav class="brown darken-3" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo">First Step</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <?php if ($title == "Dashboard"){
            echo '<li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="user.html"</li>';
          } elseif ($title == "Log In") {
            echo '<li><a href="register.php">Register</a></li>';
          } else {
            echo '<li><a href="login.php">Log In</a></li>';
          }
          ?>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="index.php">Home</a></li>
          <?php if (!isset($_SESSION['id']) || $_SESSION['id'] == '' ){
            echo '<li><a href="login.php">Log In</a></li>';
          } else {
            echo '<li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="user.html"</li>';
          }
          ?>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
