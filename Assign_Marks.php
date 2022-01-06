<?php

include('./database.php');
session_start();

$AID = $_SESSION['AID'];

$Select_Assignment = "SELECT * FROM `performance` WHERE `Assignment_id`='$AID'";
$Result_Select = mysqli_query($Con, $Select_Assignment);


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
    <style>
        .assignmets .top_div img {
            width: 730px;
            height: 320px;
            margin-bottom: 20px;
        }

        .assignmets {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 25px;
            flex-direction: column;
        }

        .footer-1 {
            display: flex;
            justify-content: space-around;
            align-items: center;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Performance Master</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/PBRS_0/index1.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/PBRS_0/about.html">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin's Activity
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="add_assignment.html">Create Assignment</a>
                        <a class="dropdown-item" href="add_user.html">Add/Remove User</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Performance.php">Performance Sheet</a>
                        <a class="dropdown-item" href="#">Write for us</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="assignmets">
        <div class="top_div">
            <img src="performance_test.jpg" style="height: 300px;">
        </div>
        <div class="right_div">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Submitted Date</th>
                        <th scope="col">Marks</th>
                        <th scope="col">Evaluated Marks</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($Row = mysqli_fetch_assoc($Result_Select)) {
                    ?>
                        <form method="POST">
                            <tr>
                                <th scope="row">1</th>
                                <td> <a href="./Performance/<?php echo $Row['Answers']; ?>" download><?php echo $Row['Answers']; ?></a></td>
                                <td><?php echo $Row['Comments']; ?></td>
                                <td><?php echo $Row['due_date']; ?></td>
                                <td><?php echo $Row['submitted_date']; ?></td>
                                <td> <input type="text" class="form-control" name="Marks"> </td>
                                <td> <input type="text" class="form-control" name="Evaluated_Marks"> </td>
                                <td><button class="btn btn-primary" name="Submit_Marks">Assign Marks</button></td>
                                <input type="hidden" name="assignment_id" value="<?php echo $Row['Assignment_id']; ?>">
                            </tr>
                        </form>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <p class="footer-1">Creted With 💘 By OPRA IT SOLUTIONS &copy;2020-2021</p>
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

if(isset($_POST['Submit_Marks'])){
    $Marks = mysqli_real_escape_string($Con,$_POST['Marks']);
    $Evualted_Marks = mysqli_real_escape_string($Con,$_POST['Evaluated_Marks']);

    $Update_Marks = "UPDATE `performance` SET `Marks`='$Marks',`Evaluated_Marks`='$Evualted_Marks' WHERE `Assignment_id`='$AID'";

    $Result_Update = mysqli_query($Con,$Update_Marks);

    if($Result_Update){
        ?>
            <script>
            swal("Success !!", "Update Marks Succesfully !!", "success");
            setTimeout(() => {
                window.location.href = "Admin_Performance.php";
            }, 3000);
          </script>
        <?php
    }
    else{
        ?>
        <script>
            swal("Error !!", "Update unsuccesfull !!", "error");
            setTimeout(() => {
                window.location.href = "Admin_Performance.php";
            }, 3000);
          </script>
        <?php
    }

}


?>