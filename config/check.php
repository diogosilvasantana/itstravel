<?php
 
require_once 'init.php';
 
if (!isLoggedIn())
{
    header('Location: ../admin/login.php');
}