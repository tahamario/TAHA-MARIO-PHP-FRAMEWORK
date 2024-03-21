<?php 
// Destroy the session
session_destroy();

// Unset the specific session variable
unset($_SESSION['auth']);

// Redirect to another page or perform any other necessary actions
header("Location: /login");
exit;