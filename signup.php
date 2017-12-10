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
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<div class="btn-group offset-5" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary">Login</button>

    <button type="button" class="btn btn-secondary" >SignUp</button>
</div>
<div class="jumbotron">
    <div class="card" >
        <div class=" form-control btn-secondary " style="float: left;">
            <form action="myphp/signup.php" method="post">
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
                        <label for="exampleSelect1">SignUp As</label>
                        <select class="form-control" id="designation" name="designation">
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-secondary">Submit</button>
                </fieldset>

            </form>
        </div>
    </div>




</div>


<div w3-include-html="navigation.php"></div>
</body>
</html>

