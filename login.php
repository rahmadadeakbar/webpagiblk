<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    

<section class="forms-section">
    <h1 class="section-title">Animated Forms</h1>
    <div class="forms">
    <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
        Login
            <span class="underline"></span>
        </button>
    <form class="form form-login" action="proses/proses_login.php" method="POST">
        <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
                <label for="login-username">Username</label>
                <input id="login-username" type="text" name="username" required >
            </div>
            <div class="input-block">
                <label for="login-password">Password</label>
                <input id="login-password" type="password" name="pass" required>
            </div>
        </fieldset>
            <button type="submit" class="btn-login" name="login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
      </button>
      <form class="form form-signup" action="proses/proses_registrasi.php" method="POST">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <!-- <div class="input-block">
            <label for="signup-id">ID</label>
            <input id="signup-id" type="text" name="id_user" required>
          </div> -->
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" name="email" required>
          </div>
          <div class="input-block">
            <label for="signup-username">Username</label>
            <input id="signup-username" type="text" name="username" required>
          </div>

          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" name="pass" required>
          </div>

          <div class="input-block">
            <label for="signup-nama">Nama Lengkap</label>
            <input id="signup-nama" type="text" name="nama_lengkap" required>
          </div>

          <div class="input-block">
          <label for="signup-level">Level</label>
              <select name="level" id="signup-level">
                  <option value="penjual">Penjual</option>
                  <option value="pembeli">Pembeli</option>
              </select>
          </div>

          
        </fieldset>
        <button type="submit" class="btn-signup" name="regis">Continue</button>
      </form>
    </div>
  </div>
</section>
   
   <script src="assets/js/login.js"></script>
</body>
</html>
