<?php
session_start();
 if($_SESSION['role']!=1){
    echo header('Location: index.php');
    exit();
}
?>
<?php
    $name=$_POST['name'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $id = $_GET['id'];
    $acc = $_POST['acc'];
    $per = $_POST['permission'];
    $password = md5($pass,PASSWORD_DEFAULT);
    
    require('./config/db.php');
    
        if(!($pass == "")){
            $sql = "UPDATE user set full_name = '$name',account = '$acc',password = '$pass',phone_number = '$phone', permission = $per  where ID = '$id' ";
            mysqli_set_charset($conn,'UTF8');
            if(mysqli_query($conn,$sql)){
                echo'Thanh cong';
                header("Location:index.php");
            };
        }
        else{
            $sql = "UPDATE user set full_name = '$name',account = '$acc',phone_number = '$phone', permission = $per where ID = '$id' ";
            mysqli_set_charset($conn,'UTF8');
            if(mysqli_query($conn,$sql)){
                echo'Thanh cong';
                header("Location:index.php");
            };
        }
    
    
    mysqli_close($conn);
?>