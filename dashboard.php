<?php

include('./database.php');
session_start();

if(!isset($_SESSION['Email'])) {
  ?>
  <script>
      window.location.href = "Register.php";
  </script>
<?php
}

$EmailID = $_SESSION['Email'];
$Password = $_SESSION['Pass'];


$Fetch_Details = "SELECT * FROM `user` WHERE `Email`='$EmailID'";

$Result = mysqli_query($Con,$Fetch_Details);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- BOOTSTRSP LINK -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FONTAWSOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CUSTOM CSS LINK -->
    <link rel="stylesheet" href="style.css">
     <!-- Sweetalert JS -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
    .dashboard_div .right_div form input{
      outline: none !important;
      box-shadow: none !important;
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
              <a class="nav-link" href="#"><i class="mx-2 fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="./Assignments.php"><i class="mx-2 fa fa-tasks" aria-hidden="true"></i>Assignments</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="./Performance.php"><i class="mx-2 fa fa-briefcase" aria-hidden="true"></i>Performance</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="./Register.php"><i class="mx-2 fa fa-sign-out" aria-hidden="true"></i>Logout</a>
            </li>
        </div>
      </nav>

      <div class="dashboard_div">
          <?php 

          while($Row=mysqli_fetch_assoc($Result)){
          
          ?>
          <div class="left_div">
            <img src="./Image/<?php echo $Row['profile']; ?>" alt="Profile">
          </div>
          <div class="right_div">

              <form method="POST">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4"><i class="mx-2 fa fa-envelope" aria-hidden="true"></i>Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="oprait@gmail.com" value="<?php echo $Row['Email']; ?>" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4"><i class="mx-2 fa fa-key" aria-hidden="true"></i>Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="*********" name="UPass" value="<?php echo $Row['Password']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress"><i class="mx-2 fa fa-user" aria-hidden="true"></i>Name</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Sanket Sharad Suryawanshi" name="UName" value="<?php echo $Row['Name']; ?>">
                </div>
                <div class="form-group">
                  <label for="inputAddress2"><i class="mx-2 fa fa-address-card" aria-hidden="true"></i>Address</label>
                  <input type="text" class="form-control" id="inputAddress2" name="UAddress" placeholder="OPRAIT Apartment , 2nd floor" value="<?php echo $Row['Address']; ?>">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity"><i class="mx-2 fa fa-id-card" aria-hidden="true"></i>User ID</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="3110" name="UID" readonly value="<?php echo $Row['UID']; ?>">
                    <?php
                      $_SESSION['UID'] = $Row['UID'];
                    ?>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputCity"><i class="mx-2 fa fa-phone" aria-hidden="true"></i>Phone</label>
                    <input type="text" class="form-control" placeholder="+917666294825" name="UPhone" id="inputCity" value="<?php echo $Row['Phone']; ?>">
                  </div>
                </div>
                <button type="submit" class="btn btn-success w-100 my-2" name="Update_Profile">UPDATE PROFILE</button>
              </form>

          <?php
          }

          ?>
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

if(isset($_POST['Update_Profile'])){
    
    // [$] Take All Required Parameters  =>
    $Password = mysqli_real_escape_string($Con, $_POST['UPass']);
    $Name = mysqli_real_escape_string($Con, $_POST['UName']);
    $UID = mysqli_real_escape_string($Con, $_POST['UID']);
    $Address = mysqli_real_escape_string($Con, $_POST['UAddress']);
    $Phone = mysqli_real_escape_string($Con, $_POST['UPhone']);

    $Update_Info = "UPDATE `user` SET `Name`='$Name',`Password`='$Password',`Phone`='$Phone',`Address`='$Address' WHERE `UID`='$UID'";

    $Result_Update = mysqli_query($Con,$Update_Info);

    if($Result_Update){
        ?>
            <script>
              swal("Good job!", "Update Succesfull !!", "success");
              setTimeout(() => {
                window.location.href = "dashboard.php";
              }, 3000);
            </script>
        <?php
    }
    else{
        ?>
            <script>
              swal("Error !!", "Update Error !!", "error");
              setTimeout(() => {
                window.location.href = "dashboard.php";
              }, 3000);
            </script>
        <?php
    }

}

?>