<?php

 session_start();
 //include("config.php");
 session_unset(); //unset the fucken session!!
 session_destroy(); //destroy the session
 header("location:welcomepage.php"); //to redirect back to the welcome page after logging out

?>

