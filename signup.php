<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 12/8/17
 * Time: 12:33 PM
 */


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
    <a type="button" href="login.php" class="btn btn-primary">Login</a>

    <a type="button" href="#" class="btn btn-secondary" >SignUp</a>
</div>
<div class="jumbotron">
    <div class="card" >
        <div class=" form-control btn-secondary " style="float: left;">
            <form action="myphp/signup.php" method="post">
                <fieldset class="col-sm-5 offset-3"  >
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="Name" placeholder="Enter Name">

                    </div>

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
                        <label for="exampleSelect1">SignUp As</label>
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

