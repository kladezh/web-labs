<?php
session_start();

session_unset();
//unset($_SESSION['USER_ID']);
session_destroy();

header('Location: '. $_SERVER['DOCUMENT_ROOT'] .'/LR3/index.php'); 
die();