
<?php
    include("config/db.php");
    session_destroy(); //Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('location:'.SITEURL.'/admin/login.php');
?>