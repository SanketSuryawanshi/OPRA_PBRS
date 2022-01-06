<?php

include('./database.php');

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
          <a class="nav-link" href="./Login.php"><i class="mx-2 fa fa-sign-out" aria-hidden="true"></i>Login</a>
        </li>
    </div>
  </nav>

  <div class="dashboard_div">
    <div class="left_div">
      <video src="kstpidqe.mp4" autoplay loop></video>
    </div>
    <div class="right_div">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4"><i class="mx-2 fa fa-envelope" aria-hidden="true"></i>Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="oprait@gmail.com" name="EmailID">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4"><i class="mx-2 fa fa-key" aria-hidden="true"></i>Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="*********" name="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress"><i class="mx-2 fa fa-user" aria-hidden="true"></i>Name</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Sanket Sharad Suryawanshi" name="UName">
        </div>
        <div class="form-group">
          <label for="inputAddress2"><i class="mx-2 fa fa-address-card" aria-hidden="true"></i>Address</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="OPRAIT Apartment , 2nd floor" name="UAddress">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity"><i class="mx-2 fa fa-phone" aria-hidden="true"></i>Phone</label>
            <input type="text" class="form-control" placeholder="+917666294825" id="inputCity" name="UPhone">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity"><i class="mx-2 fa fa-file-text" aria-hidden="true"></i>Upload Profile Image</label>
            <input type="file" class="form-control" name="Upload_File" accept="image/*">
          </div>
        </div>
        <button type="submit" class="btn btn-success w-100 my-2" name="Register">Register</button>
      </form>
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


// [$] If Register Button Is Pressed =>

if (isset($_POST['Register'])) {
  
  // [$] Take All Required Parameters  =>
  $Email_ID = mysqli_real_escape_string($Con, $_POST['EmailID']);
  $Password = mysqli_real_escape_string($Con, $_POST['Password']);
  $Name = mysqli_real_escape_string($Con, $_POST['UName']);
  $Address = mysqli_real_escape_string($Con, $_POST['UAddress']);
  $Phone = mysqli_real_escape_string($Con, $_POST['UPhone']);

  $filename = $_FILES['Upload_File']['name'];
  $tempname = $_FILES['Upload_File']['tmp_name'];

  $Folder = "Image/".$filename;

  if($Email_ID=="" || $Password=="" || $Name=="" || $Address=="" || $Phone=="" || $filename==""){
    ?>
      <script>
        swal("Error !", "All Fields are Required !!", "error");
      </script>
    <?php
  }
  else{


    $Select_Email = "SELECT * FROM `user` WHERE `Email`='$Email_ID'";

    $Result_Email = mysqli_query($Con,$Select_Email);

    $Count = mysqli_num_rows($Result_Email);

    move_uploaded_file($tempname,$Folder);

    if($Count>0){
      ?>
          <script>
            swal("Error !!", "Email ID Already Avialiable !!", "error");
          </script>
      <?php
    }
    else{

        $Insert_User = "INSERT INTO `user`(`Name`, `Email`, `Password`, `Phone`, `Address`,`profile`) VALUES ('$Name','$Email_ID','$Password','$Phone','$Address','$filename')";

        $Result_Insert = mysqli_query($Con,$Insert_User);

        if($Result_Insert){
          ?>
              <script>
                swal("Good job!", "Registeration Succesfull !!", "success");
                setTimeout(() => {
                  window.location.href = "Login.php";
                }, 3000);
              </script>
          <?php
        }
        else{
          ?>
              <script>
                swal("Error !!", "Registeration Error Try Again !!", "error");
              </script>
          <?php
        }
    }

  }

}


?>