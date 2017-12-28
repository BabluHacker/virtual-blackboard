<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 12/8/17
 * Time: 12:33 PM
 */

session_start();
if(isset($_SESSION['username'])){
    header("location: index.php");
}


require ('db/db.php');

if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];
    $desig = $_POST['designation'];

    if ($desig == "teacher") {
        $query = "SELECT * FROM `teacher` WHERE password='$pass' and email='$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);


        if ($rows == 1) {
            $info = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $email;
            header("Location: index.php"); // Redirect user to index.php
        } else {
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Username or Password was incorrect!');\n";
            echo "window.location='login.php'";
            echo "</script>";
        }
    } else {
        $query = "SELECT * FROM `student` WHERE password='$pass' and email='$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);


        if ($rows == 1) {
            $info = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $email;
            header("Location: index.php"); // Redirect user to index.php
        } else {
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Username or Password was incorrect!');\n";
            echo "window.location='login.php'";
            echo "</script>";
        }
    }
}

?>



<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">TSG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


</nav>


<div class="btn-group offset-5" role="group" aria-label="Basic example">
    <a type="button" href="#" class="btn btn-primary">Login</a>

    <a type="button" href="signup.php" class="btn btn-secondary">SignUp</a>
</div>
<div class="jumbotron">
    <div class="card" >
        <div class=" form-control btn-primary " style="float: left;">
            <form action="" method="post">
                <fieldset class="col-sm-5 offset-3"  >


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Login As</label>
                        <select class="form-control" id="designation" name="designation">
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>

                        </select>
                    </div>

                    <button name="submit" type="submit" class="btn btn-secondary">Submit</button>
                </fieldset>

            </form>
        </div>
    </div>




</div>


<div w3-include-html="navigation.php"></div>
</body>
</html>

