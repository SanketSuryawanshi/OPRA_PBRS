<?php

include('./database.php');
session_start();

if(isset($_POST['Assignment_ID'])){
  $AID = $_POST['Assignment_ID'];  
}

$Fetch_Assignments = "SELECT * FROM `assignment` WHERE `Assignment_id`='$AID'";

$Result = mysqli_query($Con,$Fetch_Assignments);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Submission</title>
    <!-- BOOTSTRSP LINK -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FONTAWSOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CUSTOM CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <style>
    .assignmets .right_div form textarea{
      outline: none !important;
      box-shadow: none !important;
    }
    </style>
    <!-- FONT AWSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
              <a class="nav-link" href="./dashboard.php"><i class="mx-2 fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
            </li>
            <li class="nav-item mx-4 active">
              <a class="nav-link" href="./Assignments.php"><i class="mx-2 fa fa-tasks" aria-hidden="true"></i>Assignment</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="./Assignments.php"><i class="mx-2 fa fa-tasks" aria-hidden="true"></i>All Assignments</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="./Performance.php"><i class="mx-2 fa fa-briefcase" aria-hidden="true"></i>Performance</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="./logout.php"><i class="mx-2 fa fa-sign-out" aria-hidden="true"></i>Logout</a>
            </li>
        </div>
    </nav>

      <div class="assignmets">
        <div class="right_div">
            <?php 

              while($Row=mysqli_fetch_assoc($Result)){

                ?>


              <form method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1"><i class="fa fa-book mr-2" aria-hidden="true"></i>Assignment ID </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1" name="AID" readonly value="<?php echo $_POST['Assignment_ID']; ?>">
                      </div>
                      <div class="form-group col-md-9">
                        <label for="exampleInputPassword1"><i class="mr-2 fa fa-question-circle" aria-hidden="true"></i>Statement </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Gravitational Force Derivation Explain" value="<?php echo $Row['statement']; ?>" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="exampleInputPassword1"><i class="mr-2 fa fa-calendar" aria-hidden="true"></i>Due Date </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="20/12/21" name="Due_Date" value="<?php echo $Row['Due_date']; ?>" readonly>
                    </div>
                    <div class="form-group col-md-9">
                        <label for="exampleInputPassword1"><i class="mr-2 fa fa-file-text" aria-hidden="true"></i>Attachments </label>
                        <a href="./Assignments/<?php echo $Row['Attachments']; ?>" id="exampleInputPassword1" class="form-control" download><?php echo $Row['Attachments']; ?></a>
                    </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1"><i class="fa fa-book mr-2" aria-hidden="true"></i>Submit Answersheet </label>
                  <input type="file" accept="application/pdf" class="form-control" name="Answer_File" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1"><i class="mr-2 fa fa-commenting" aria-hidden="true"></i>Comments Or Reply </label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="Comments" rows="3"></textarea>
                </div>
                <button type="submit" name="Submit_Assignments" class="w-100 btn btn-success">Submit</button>
              </form>

                
                <?php
                

              }

            ?>
        </div>
        <div class="left_div">
            <video src="./kqdle14s.mp4" autoplay loop></video>
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

$UID = $_SESSION['UID'];

if(isset($_POST['Submit_Assignments'])){
  
  $AID = mysqli_real_escape_string($Con,$_POST['AID']);
  $Due_Date = mysqli_real_escape_string($Con,$_POST['Due_Date']);
  $Answers = $_FILES['Answer_File']['name'];
  $TempAnswers = $_FILES['Answer_File']['tmp_name'];
  $Comments =  mysqli_real_escape_string($Con,$_POST['Comments']);
  $Date = date("Y-m-d");

  $Folder = "Performance/".$Answers;

  $Insert_Submission = "INSERT INTO `performance`(`Assignment_id`, `user_id`,`Answers`, `Comments`, `due_date`, `submitted_date`) VALUES ('$AID','$UID','$Answers','$Comments','$Due_Date','$Date')";

  $Result = mysqli_query($Con,$Insert_Submission);

  if($Result){
    move_uploaded_file($TempAnswers,$Folder);
    ?>
    <script>
      swal("Good job!", "Assignment Submitted Succesfull !!", "success");
      setTimeout(() => {
        window.location.href = "dashboard.php";
      }, 2000);
    </script>
    <?php
  }
  else{
      ?>
      <script>
        swal("Error !!", "Error In Assignment Submission !!", "error");
        setTimeout(() => {
          window.location.href = "Assignments.php";
        }, 2000);
      </script>
      <?php
  }


}

?>