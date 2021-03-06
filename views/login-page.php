<div id="banner" class="parallax-container">
  <div class="section">
    <div class="container">
      <br><br>
      <h1 class="header center white-text text-lighten-2">Welcome!</h1>
      <div class="row center">
        <h5 class="header col s12 light">Ready to continue your journey?</h5>
      </div>
    </div>
  </div>
  <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
</div>
<div class="container" id="form" style="height:55%;">
  <div class="section" style="margin:10px;">
    <div class="row">
      <form class="col s12" action="login.php" method="post">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons brown-text prefix">email</i>
            <input id="email" type="email" name="email" class="validate" required>
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons brown-text prefix">vpn_key</i>
            <input id="password" type="password" name="password" class="validate" required>
            <label for="password">Password</label>
          </div>
        </div>
        <div class="center-align">
          <button class="btn waves-effect brown waves-light" type="submit" action="submit" name="submit" value="submit">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
      <div class="center-align">
        <p class="center-align">Or <a href="register.php" class="brown-text text-lighten-2">register</a></p>
      </div>
    </div>
  </div>
</div>
