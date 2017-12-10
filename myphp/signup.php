<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 12/8/17
 * Time: 4:45 PM
 */


require ('../db/db.php');

$name = $_POST['email'];
$pass = $_POST['password'];
$desig = $_POST['designation'];

echo $name.$pass.$desig;


if($desig == "teacher"){
    //table creat with status chart
    //copy whiteboard to folder with dif name of teacher
    //
}
else{
    //table creat with status chart
    //copy whiteboard to folder with dif name of teacher
    //
}

?>