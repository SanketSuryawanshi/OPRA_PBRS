<?php

include('./database.php');

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- BOOTSTRSP LINK -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- FONTAWSOME LINK -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CUSTOM CSS LINK -->
  <link rel="stylesheet" href="style.css">
  <style>
    .dashboard_div .right_div form input{
      outline: none !important;
      box-shadow: none !important;
    }
    .dashboard_div .left_div video{ 
      outline:none; 
      clip-path: inset(1px 1px);
      border: none !important;
    }
    .dashboard_div .left_div{
      border: none !important;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><i class="mx-2 fa fa-free-code-camp" aria-hidden="true"></i>P.B.R.S.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-4 active">
          <a class="nav-link" href="#"><i class="mx-2 fa fa-home" aria-hidden="true"></i>Home</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#"><i class="mx-2 fa fa-tasks" aria-hidden="true"></i>Assignments</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#"><i class="mx-2 fa fa-briefcase" aria-hidden="true"></i>Performance</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="./Register.php"><i class="mx-2 fa fa-sign-out" aria-hidden="true"></i>Register</a>
        </li>
    </div>
  </nav>

  <div class="dashboard_div">
    <div class="right_div">
      <form method="POST">
        <div class="form-group">
          <label for="inputAddress"><i class="mx-2 fa fa-envelope" aria-hidden="true"></i>EmailID</label>
          <input type="email" class="form-control" id="inputAddress" placeholder="oprait@gmail.com" name="EmailID">
        </div>
        <div class="form-group">
          <label for="inputAddress2"><i class="mx-2 fa fa-key" aria-hidden="true"></i>Password</label>
          <input type="password" class="form-control" id="inputAddress2" placeholder="*******" name="Password">
        </div>
        <small id="emailHelp" class="form-text text-muted">If You are admin you can <a href="./login_admin.php">Login Here</a>.</small>
        <button type="submit" name="Login" class="btn btn-success w-100 my-2">Login</button>
      </form>
    </div>
    <div class="left_div">
      <video src="kse89tjz.mp4" autoplay loop></video>
    </div>
  </div>

  <footer>
    <p>Creted With 💘 By OPRA IT SOLUTIONS &copy;2020-2021</p>
  </footer>

  <!-- Sweetalert JS -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- BOOTSTRAP JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

<?php

// [$] If Login Button Is Pressed =>

if (isset($_POST['Login'])) {

  // [$] Taking All Required Parameters =>
  $EmailID = mysqli_real_escape_string($Con, $_POST['EmailID']);
  $Password = mysqli_real_escape_string($Con, $_POST['Password']);

  $Select_Email = "SELECT * FROM `user` WHERE `Email`='$EmailID'";

  $Result_Email = mysqli_query($Con, $Select_Email);
  $Count = mysqli_num_rows($Result_Email);

  if ($Count > 0) {
     
      while($Row = mysqli_fetch_assoc($Result_Email)){
        if($Row['Password']==$Password){
          $_SESSION['Email'] = $EmailID;
          $_SESSION['Pass'] = $Password;
          ?>
          <script>
            swal("Success !!", "Login Succesfull !!", "success");
            setTimeout(() => {
                window.location.href = "dashboard.php";
            }, 3000);
          </script>
          <?php
        }
        else{
          ?>
          <script>
            swal("Error !!", "Email ID & Password Wrong !!", "error");
          </script>
          <?php
        }
      }

     
  } 
  else {
      ?>
      <script>
        swal("Error !!", "Email ID Not Exist  Register First !!", "error");
        setTimeout(() => {
            window.location.href = "Register.php";
        }, 3000);
      </script>
      <?php
  }


}

?>