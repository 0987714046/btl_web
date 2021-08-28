
<?php
session_start();
if(!isset($_SESSION['login']))
{
    header('location:'.SITEURL.'/admin/login.php');  
}
include("config/db.php");
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM `news` WHERE `news`.`id` = '$id'";
if ($conn->query($sql) === TRUE) {
    header('location:index.php');
} else {
    header('location:index.php');
}

$conn->close();
}
?>
