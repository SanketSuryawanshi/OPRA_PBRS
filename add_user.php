<?php

include('./database.php');
session_start();


$Fetch_Assignments = "SELECT * FROM `user`";

$Result = mysqli_query($Con,$Fetch_Assignments);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments</title>
    <!-- BOOTSTRSP LINK -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FONTAWSOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CUSTOM CSS LINK -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="mx-2 fa fa-free-code-camp" aria-hidden="true"></i>P.B.R.S.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-4">
              <a class="nav-link" href="./index1.php"><i class="mx-2 fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
            </li>
            <li class="nav-item mx-4 active">
              <a class="nav-link" href="#"><i class="mx-2 fa fa-tasks" aria-hidden="true"></i>All Users</a>
            </li>
        </div>
      </nav>

      <div class="assignmets">
        <div class="left_div">
          <video src="./kqdle14s.mp4" autoplay loop></video>
        </div>
        <div class="right_div">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">UID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $Count = 1;
              while($Row=mysqli_fetch_assoc($Result)){
              ?>
              <form method="POST" action="Assignment_Submission.php">
                <tr>
                 <th scope="row"><?php echo $Row['UID']; ?></th>
                 <td><?php echo $Row['Name']; ?></td>
                 <td><?php echo $Row['Email']; ?></td>
                 <td><?php echo $Row['Phone']; ?></td>
                 <td><?php echo $Row['Address']; ?></td>
               </tr>
              </form>
              <?php
                $Count++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <footer>
        <p>Creted With 💘 By OPRA IT SOLUTIONS &copy;2020-2021</p>
      </footer>

    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

<?php 

if(isset($_POST['Check_Assignments'])){
  ?>
    <script>
      window.location.href = "Assignment_Submission.php";
    </script>
  <?php
}

?>