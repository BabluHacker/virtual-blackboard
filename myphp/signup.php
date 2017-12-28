<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 12/8/17
 * Time: 4:45 PM
 */


require ('../db/db.php');

$email = $_POST['email'];
$pass = $_POST['password'];
$desig = $_POST['designation'];
$name = $_POST['name'];

echo $name.$pass.$desig;



if($desig == "teacher"){

    $table_name = "Teacher_".$name;
    $whiteboard = $name.".html";
    //table creat with status chart
    //copy whiteboard to folder with dif name of teacher
    //
    $sql_insert = "INSERT INTO `teacher` ( `name`, `email`, `password`, `whiteboard`) VALUES
            ( '$name', '$email', '$pass', '$whiteboard');";


    $sql = "CREATE TABLE `$table_name` (
                `id` INT(6)  UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                `date`  DATE ,
                `status` TEXT ,
                `quize` TEXT 
                
                );";

    echo $sql;
    mysqli_query($con,$sql) or die(mysql_error());
    mysqli_query($con,$sql_insert) or die(mysql_error());

    //copying



    xcopy("../whiteboard/", "../teacher/".$name, 0755);


    $myfile = fopen("../teacher/".$name."/".$whiteboard, "w") or die("Unable to open file!");

    $html = "<!--**
* Created by mehedi on 11/16/17.
*-->


<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">

<html>
<head>

    <title>Virtual Class of .$name</title>

    <!--Prevents iPhone, iPad, and touch devices from scrolling or zooming when touched-->
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0\" />

    <!--CSS-->
    <style type=\"text/css\">
        html, body {
            width:  100%;
            height: 100%;
        }

        #canvas {
            background-color: #333333;
            position: absolute;
            top: 35px;
        }

        #status {
            color: #FFFFFF;
            position: absolute;
            cursor: default;
            font-family: Helvetica, Verdana, sans-serif;
            font-weight: bold;
            margin: 10px;
            top: 30px;
        }

        #controls {
            background-color: #AAAAAA;
            position: absolute;
            font-family: Helvetica, Verdana, sans-serif;
            font-weight: bold;
            font-size: smaller;
            padding: 3px;
            width: 594px;
            height: 25px;
        }

        select {
            font-family: monospace;
            font-size: medium;
        }

        * {
            padding:0;
            margin:0;
        }
    </style>

    <!--
    Load Canvas support for IE8. ExplorerCanvas courtesy Google.
    See: http://code.google.com/p/explorercanvas/
    -->
    <!-->
    <script src=\"js/excanvas.js\"></script>
    <![endif]-->

    <!--Load the OrbiterMicro JavaScript library (non-minified version). Use during development.-->
    <script type=\"text/javascript\" src=\"js/OrbiterMicro_latest.js\"></script>
    <!--Load the OrbiterMicro JavaScript library (minified version). Use for production.-->
    <!--<script type=\"text/javascript\" src=\"http://unionplatform.com/cdn/OrbiterMicro_latest_min.js\"></script>-->

    <!--Load UnionDraw application code-->
    <script src=\"js/UnionDraw.js\"></script>

</head>

<body>
<!--Drop down menus for selecting line thickness and color-->
<div id=\"controls\">
    Size:
    <select id=\"thickness\" class=\"fixed\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"10\">10</option>
        <option value=\"20\">20</option>
    </select>

    Color:
    <select id=\"color\">
        <option value=\"#FFFFFF\">#FFFFFF</option>
        <option value=\"#AAAAAA\">#AAAAAA</option>
        <option value=\"#666666\">#666666</option>
        <option value=\"#000000\">#000000</option>
        <option value=\"#9BA16C\">#9BA16C</option>
        <option value=\"#CC8F2B\">#CC8F2B</option>
        <option value=\"#63631D\">#63631D</option>
    </select>
</div>

<!--The canvas where drawings will be displayed-->
<canvas id=\"canvas\"></canvas>

<!--A status text field, for displaying connection information-->
<div id=\"status\"></div>
</body>
</html>";


    fwrite($myfile, $html);
    fclose($myfile);

    echo "<script>alert('Success!!')</script>";


}
else{
    $table_name = "Student_".$name;
    $whiteboard = $name.".html";

    $sql_insert = "INSERT INTO `student` ( `name`, `email`, `password`, `whiteboard`) VALUES
            ( '$name', '$email', '$pass', '$whiteboard');";


    $sql = "CREATE TABLE `$table_name` (
                `id` INT(6)  UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                `date`  DATE ,
                `status` TEXT 
               
                
                );";

    echo $sql;
    mysqli_query($con,$sql) or die(mysql_error());
    mysqli_query($con,$sql_insert) or die(mysql_error());




    xcopy("../whiteboard/", "../student/".$name, 0755);


    $myfile = fopen("../student/".$name."/".$whiteboard, "w") or die("Unable to open file!");

    $html = "<!--**
* Created by mehedi on 11/16/17.
*-->


<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">

<html>
<head>

    <title>Virtual Class of .$name</title>

    <!--Prevents iPhone, iPad, and touch devices from scrolling or zooming when touched-->
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0\" />

    <!--CSS-->
    <style type=\"text/css\">
        html, body {
            width:  100%;
            height: 100%;
        }

        #canvas {
            background-color: #333333;
            position: absolute;
            top: 35px;
        }

        #status {
            color: #FFFFFF;
            position: absolute;
            cursor: default;
            font-family: Helvetica, Verdana, sans-serif;
            font-weight: bold;
            margin: 10px;
            top: 30px;
        }

        #controls {
            background-color: #AAAAAA;
            position: absolute;
            font-family: Helvetica, Verdana, sans-serif;
            font-weight: bold;
            font-size: smaller;
            padding: 3px;
            width: 594px;
            height: 25px;
        }

        select {
            font-family: monospace;
            font-size: medium;
        }

        * {
            padding:0;
            margin:0;
        }
    </style>

    <!--
    Load Canvas support for IE8. ExplorerCanvas courtesy Google.
    See: http://code.google.com/p/explorercanvas/
    -->
    <!-->
    <script src=\"js/excanvas.js\"></script>
    <![endif]-->

    <!--Load the OrbiterMicro JavaScript library (non-minified version). Use during development.-->
    <script type=\"text/javascript\" src=\"js/OrbiterMicro_latest.js\"></script>
    <!--Load the OrbiterMicro JavaScript library (minified version). Use for production.-->
    <!--<script type=\"text/javascript\" src=\"http://unionplatform.com/cdn/OrbiterMicro_latest_min.js\"></script>-->

    <!--Load UnionDraw application code-->
    <script src=\"js/UnionDraw.js\"></script>

</head>

<body>
<!--Drop down menus for selecting line thickness and color-->
<div id=\"controls\">
    Size:
    <select id=\"thickness\" class=\"fixed\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"10\">10</option>
        <option value=\"20\">20</option>
    </select>

    Color:
    <select id=\"color\">
        <option value=\"#FFFFFF\">#FFFFFF</option>
        <option value=\"#AAAAAA\">#AAAAAA</option>
        <option value=\"#666666\">#666666</option>
        <option value=\"#000000\">#000000</option>
        <option value=\"#9BA16C\">#9BA16C</option>
        <option value=\"#CC8F2B\">#CC8F2B</option>
        <option value=\"#63631D\">#63631D</option>
    </select>
</div>

<!--The canvas where drawings will be displayed-->
<canvas id=\"canvas\"></canvas>

<!--A status text field, for displaying connection information-->
<div id=\"status\"></div>
</body>
</html>";


    fwrite($myfile, $html);
    fclose($myfile);

    echo "<script>alert('Success!!')</script>";



}


function xcopy($source, $dest, $permissions = 0755)
{
    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $dest);
    }

    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest, $permissions);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        xcopy("$source/$entry", "$dest/$entry", $permissions);
    }

    // Clean up
    $dir->close();
    return true;
}

?>

<script>
    window.location = '../login.php';
</script>
