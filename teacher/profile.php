<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 12/8/17
 * Time: 12:19 PM
 */

session_start();
if(!isset($_SESSION['username'])){
    header("location: ../login.php");
}
?>


<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">TSG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout [<?php echo $_SESSION['username'] ?>]</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../teacher/profile.php">Teacher's Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../student/profile.php">Student's Profile</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div w3-include-html="navigation.php"></div>


<button type="button" class="btn btn-primary btn-lg btn-block">Teacher's Profile</button>

<table id="table" class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Whiteboard</th>

    </tr>
    </thead>
    <tbody>
    <tr class="table-active">
        <th scope="row">Active</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>

    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"> </script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/front.js"></script>
<script src="../js/add_teacherTable.js"></script>


</body>
</html>
