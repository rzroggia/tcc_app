<?php
        require_once 'funcoes.php';

        if (isset($_POST["submit"])) {

          $sentimento = $_POST["sentimento"];

          if (empty($sentimento) !== false) {
            header("location: ../index.php?error=emptyinput");
            exit();
          }
          else {
            print_r(buscayoutube($sentimento));
          }

        } else {
            header("location: ../index.php");
              exit();
        }
      ?>