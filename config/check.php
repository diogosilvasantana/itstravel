<?php
 
require_once 'init.php';
 
if (!isLoggedIn())
{
    header('Location: ../admin/form-login.php');
}