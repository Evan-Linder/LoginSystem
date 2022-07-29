<!-- reputes the user to the login screen when logout button is clicked. -->
<?php 
session_start();

session_unset();
session_destroy();

header("Location: index.php");