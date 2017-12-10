<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 12/8/17
 * Time: 3:27 PM
 */

$host = "localhost";
$user = "root";
$pass = "";
$database = "virtualclass";

$con = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$con->query("SET CHARACTER SET utf8");
$con->query("SET SESSION collation_connection =’utf8_general_ci'");
?>