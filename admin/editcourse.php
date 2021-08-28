<?php
require("./config/db.php");

 session_start();
 if (!isset($_SESSION['login'])) {
     header('location:' . SITEURL . '/admin/login.php');
}
include("./template/header.php");
?>



<div class="admin" style="background-color: rgb(166, 226, 226);">

    <div class="container">
    </div>
    <div class="main">
        <div class="content">
            <div id="content_Post">

                <p class="text-center h2">Chỉnh Sửa Khóa học</p>


                <?php
// Kết nối Database


$id=$_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM `course` WHERE `course`.`id_course` = '$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form" style=" width: 30%;margin : 0 35%;">
<table>
<tr><td>Tên khóa hoc: </td><td><input type="text" value="<?php echo $row['Name']; ?>" name="name" size=50></td></tr> <br>
<tr><td>Kiểu: </td><td><input type="text" value="<?php echo $row['type']; ?>" name="type" size=50></td></tr> <br>

<tr><td>Mô tả: </td><td><input type="text" value="<?php echo $row['desc']; ?>" name="desc" size=50></td></tr> <br>
<tr><td>Giá gốc:</td><td> <input type="number" value="<?php echo $row['cost']; ?>" name="cost" size=50></td></tr> <br>
<tr><td>Giá giảm: </td><td><input type="number" value="<?php echo $row['price']; ?>" name="price" size=50></td></tr> <br>
<tr><td>Ảnh:</td><td> <input type="file" value="<?php echo $row['image']; ?>" name="image"></td></tr> <br>

<tr><td></td><td><input type="submit" value="Cập Nhật" name="update_course" class="bg-primary "></td></tr> <br>
</table>

<?php

if (isset($_POST['update_course'])){

$name=$_POST['name'];
$type=$_POST['type'];
$cost=$_POST['cost'];
$price=$_POST['price'];

$desc=$_POST['desc'];
$image=$_POST['image'];


if ($name == "" || $type == "" || $cost == "" || $price == "" || $desc == "" || $image == "") {
    echo "bạn vui lòng nhập đầy đủ thông tin";
}else{
    $sql = "UPDATE `course` SET `Name` = '$name', `type` = '$type', `cost` = '$cost', `price` = '$price', `desc` = '$desc', `image` = './imgs/$image'  WHERE `course`.`id_course` = '$id';";

    if(mysqli_query($conn,$sql)){
       
        header('location:'.SITEURL.'/admin/index.php');
    }
    
    $conn->close();
                         
     
}


}
?>

  
<p class="text-center">Created By - <a href="https://www.facebook.com/profile.php?id=100004869885566">Cuong and Hiếu</a></p>





    