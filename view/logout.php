<?php

// Inialize session
session_start();

session_destroy();

// Jump to login page
header('Location: login.php');

?>