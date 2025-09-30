
<?php
session_start(); // Start session

// Destroy all session data
session_unset();
session_destroy();

// Redirect to login page (adjust if your login file is different)
header("Location: login.php");
exit();
?>
