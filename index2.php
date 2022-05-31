<?php
  session_start();
  include_once 'funcoes/funcoes.php';
?>

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


    <section class="index-intro">
      <h2>Mental Health Assistant</h2>
    </section>

    <section class="index-categories">
      <h2>Eis aqui algumas sugestões:</h2>
        <?php
          include_once 'funcoes/funcoes.php';
          if (isset($_POST["submit"])) {

            $sentimento = $_POST["sentimento"];

            if (empty($sentimento) !== false) {
              header("location: index.php?error=emptyinput");
              exit();
            }

            else {
              buscayoutube($sentimento);
                exit();
            }

          } else {
            exit();
          }
        ?>
    </section>

  </body>

  <footer>
    <p>Desenvolvido por Rodrigo Roggia</p> 
  </footer>
</html>

<script src="js/script.js"></script>