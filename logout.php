<?php
  //start session to recognise which user
  session_start();

  //kill session (log user out)
  session_destroy();

  //redirect user
  header("Location:index.php");

?>
