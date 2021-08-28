<?php
session_start();
if(!isset($_SESSION['login']))
{
    header('location:'.SITEURL.'/admin/login.php');  
}
    $getID = $_GET['id'];
    require('./config/db.php');
    $sql = "Delete From user where ID = '$getID'";
    mysqli_set_charset($conn,'UTF8');
    if(mysqli_query($conn,$sql)){
        header("Location: index.php");
    };
    mysqli_close($conn);
?>