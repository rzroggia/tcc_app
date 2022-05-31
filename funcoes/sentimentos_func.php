<?php
//require_once 'funcoes.php';

if (isset($_POST["submit"])) {

  $sentimento = $_POST["sentimento"];

  if (empty($sentimento) !== false) {
    header("location: ../index.php?error=emptyinput");
		exit();
  }

  else {
    header("location: ../index2.php");
    buscayoutube($sentimento);
    exit();
  }

} else {
    header("location: ../index.php");
      exit();
}


?>