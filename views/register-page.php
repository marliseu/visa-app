  <div id="banner" class="parallax-container">
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">
      <?= $formError ?>
      <form class="col s12" action="register.php" method="post">
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons brown-text prefix">account_circle</i>
              <input id="first_name" type="text" name="fname" class="validate" required>
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" name="lname" class="validate" required>
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons brown-text prefix">vpn_key</i>
              <input id="password" type="password" name="password" class="validate" required>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons brown-text prefix">vpn_key</i>
              <input id="password" type="password" name="password2" class="validate" required>
              <label for="password">Password Confirm</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons brown-text prefix">email</i>
              <input id="email" type="email" name="email" class="validate" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons brown-text prefix">credit_card</i>
              <input id="email" type="number" name="ccnum" class="validate" required>
              <label for="email">Credit Card Number</label>
            </div>
          </div>
          <div class="center-align">
            <button class="btn waves-effect brown waves-light" type="submit" name="submit" value="submit">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </form>
      </div>
    </div>
</div>
