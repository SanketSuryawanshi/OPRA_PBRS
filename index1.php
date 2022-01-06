<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome Performance Master">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Performance Master: Boost Your Performance</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Performance Master</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/PBRS_0/index1.php">Home <span class="sr-only">(current)</span></a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin's Activity
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="add_assignment.html">Create Assignment</a>
                        <a class="dropdown-item" href="add_user.php">All User</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./Admin_Performance.php">Performance Sheet</a>
                        <a class="dropdown-item" href="#">Write for us</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.html">Contact Us</a>
                </li>


            </ul>
            <div class="mx-2">
                <a href="logout.php" class="btn btn-danger" target="_blank">log out</a>
            </div>
        </div>
    </nav>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="color:rgb(220, 231, 56)">Welcome to Performance Master</h2>
                    <p>Assign, Assist, Reward</p>
                    <button class="btn btn-danger">Assignments</button>
                    <button class="btn btn-primary">Users</button>
                    <button class="btn btn-success">Performance Sheet</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Boost Your Performance</h2>
                    <p>Assign, Assist, Reward</p>
                    <button class="btn btn-danger">Assignments</button>
                    <button class="btn btn-primary">Users</button>
                    <button class="btn btn-success">Performance Sheet</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="color:blue">Rewards and Gifts</h2>
                    <p style="color:blue">Assign, Assist, Reward</p>
                    <button class="btn btn-danger">Assignments</button>
                    <a href="add_user.html" class="btn btn-primary" target="_blank">Users</a>
                    <!-- <a href="/app1.html" target="_blank"><button class="btn btn-primary" >Users</button></a> -->
                    <!-- <button class="btn btn-primary" onclick="window.open('app1.html','_blank')">Users</button> -->
                   
                    <button class="btn btn-success">Performance Sheet</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">Performance</strong>
                  <h3 class="mb-0">Users</h3>
                  <div class="mb-1 text-muted">Visit your user</div>
                  <p class="card-text mb-auto">This is users section after sigiing in all the user information admin can track here.</p>
                  <a href="#" class="stretched-link">See Users</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="thumb1.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success">Performance</strong>
                  <h3 class="mb-0">Performance Report</h3>
                  <div class="mb-1 text-muted">User's Performance Report</div>
                  <p class="mb-auto">After successful sign in admin can track performance report here </p>
                  <a href="#" class="stretched-link">See reports</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?performancereports" alt="">

                </div>
              </div>
            </div>
          </div>
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-danger">Learn</strong>
                  <h3 class="mb-0">Some Courses for Professionals</h3>
                  <div class="mb-1 text-muted">Learn new skills</div>
                  <p class="card-text mb-auto">Learn something new daily stay updated, stay motivated</p>
                  <a href="#" class="stretched-link">Continue learning</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?tech,Marketing courses" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-warning">Learn</strong>
                  <h3 class="mb-0">Some Courses for Professionals</h3>
                  <div class="mb-1 text-muted">Learn new skills</div>
                  <p class="mb-auto">Learn something new daily stay updated, stay motivated</p>
                  <a href="#" class="stretched-link">Continue learning</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?tech,Courses" alt="">

                </div>
              </div>
            </div>
          </div>
    </div>
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020-2021 Performance Master, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>