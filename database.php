<?php 

$Host = "localhost";
$User = "root";
$Pass = "";
$Database = "pbrs";

$Con = mysqli_connect($Host,$User,$Pass,$Database);

if($Con){
    ?>
        <script>
            console.log("Database Connected !!");
        </script>
    <?php
}
else{
    ?>
        <script>
            console.log("Database Not Connected !!");
        </script>
    <?php
}



?>