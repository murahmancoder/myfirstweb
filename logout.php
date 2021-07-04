<?php

// session dihancurkan atau diunset
session_start();

unset($_SESSION['user_id']);
unset($_SESSION['nama']);


header('location:index.php?page=login.php');