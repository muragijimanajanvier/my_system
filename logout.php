<?php
session_start();
// Gusiba session
session_unset();
session_destroy(); // Guhagarika session

// Redirect kuri page2.php
header("Location: page2.php"); // Gutera redirect kuri page2
exit();