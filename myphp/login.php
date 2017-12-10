<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 12/8/17
 * Time: 4:44 PM
 */

require ('../db/db.php');

$name = $_POST['email'];
$pass = $_POST['password'];
$desig = $_POST['designation'];

echo $name.$pass.$desig;

if($desig == "teacher"){

}
else{

}

?>