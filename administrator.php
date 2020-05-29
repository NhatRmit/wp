<?php
session_name();
if (isset($_SESSION['userdata']['username'])) {
    header("location: login.php");
    exit();
}
?>

<?php $_SESSION['userdata']['username'] ?> You have logined successfully ! 
<a href="logout.php"> Click here</a> to logout. 


<?php


                    
?>