<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#" style="color:#fff">ADMIN LOGIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">';
      
      if(!$loggedin){
      echo '<li class="nav-item active">
        <a class="nav-link mx-4 active" href="/PBRS_0/login.php" style="color:#fff">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link mx-4 " href="../signup_admin.php" style="color:#fff">Signup</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="../logout.php">Logout</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../index1.php">Home <span class="sr-only">(current)</span></a>
      </li>'
;
    }
       
      
    echo '</ul>
  </div>
</nav>';
?>