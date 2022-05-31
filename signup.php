<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Mental Health Assitant</title>    
    <link rel="stylesheet" href="css/estilo1.css">
  </head>
  <body>
    <nav>
      <div class="wrapper">
        <ul>
          <li><a href="index.php">Home</a></li>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>Profile Page</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        </ul>
      </div class="wrapper">
    </nav>

    <section class="signup-form">
      <h2>Sign Up</h2>
      <div class="signup-form-form">
        <form action="funcoes/signup_func.php" method="post">
          <input type="text" name="name" placeholder="Seu nome">
          <input type="text" name="email" placeholder="Seu Email">
          <input type="text" name="uid" placeholder="Seu Usuário">
          <input type="password" name="pwd" placeholder="Sua Senha">
          <input type="password" name="pwdrepeat" placeholder="Repita Sua Senha">
          <button type="submit" name="submit">Sign up</button>
        </form>
      </div>
      <?php

        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
          }
          else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
          }
          else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
          }
          else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords doesn't match!</p>";
          }
          else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong!</p>";
          }
          else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
          }
          else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
          }
        }
      ?>
    </section>
  </body>
</html>
