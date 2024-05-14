<?php
// Start the session. This function initializes the session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
session_start();

// Unset all of the session variables. This function frees all session variables currently registered.
session_unset();

// Destroy the session. This function destroys all of the data associated with the current session.
session_destroy();

// Redirect to the login page. The header() function sends a raw HTTP header to the client, in this case, to navigate to 'login.php'.
header("Location: login.php");

// Exit the script to ensure that no further code is executed after the redirection.
exit();
?>
