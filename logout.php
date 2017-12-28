<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 12/27/17
 * Time: 10:32 PM
 */

session_start();
session_destroy();
unset($_SESSION['username']);

header("Location: login.php");

?>