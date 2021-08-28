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
                <p class="text-center h2">Chỉnh Sửa Tin Tức</p>


                <?php
// Kết nối Database

$id=$_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM `news` WHERE `news`.`id` = '$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form" style=" width: 30%;margin : 0 35%;">
<table>
<tr><td> Tiêu Đề:</td><td><input type="text" value="<?php echo $row['title']; ?>" name="title" size=50></td></tr> <br>

<tr><td>Nội dung: </td><td><input type="text" value="<?php echo $row['content']; ?>" name="cont" size=50></td></tr><br>
<tr><td>Ngày Đăng: </td><td><input type="date" value="<?php echo $row['post_date']; ?>" name="date" size=50></td></tr><br>
<tr><td>Ảnh: </td><td><input type="file" value="<?php echo $row['image']; ?>" name="image" size=50></td></tr><br>
<tr><td></td><td><input type="submit" value="Update" name="update_course" class="bg-primary"></td></tr>
</table>
<?php

if (isset($_POST['update_course'])){

$title=$_POST['title'];
$cont=$_POST['cont'];
$date=$_POST['date'];
$image=$_POST['image'];

if ($title == "" || $cont == "" || $date == "" || $image == "") {
    echo "bạn vui lòng nhập đầy đủ thông tin";
}else{
    $sql = "UPDATE `news` SET `title` = '$title', `content` = '$cont', `post_date` = '$date', `image` = './imgs/$image'  WHERE `news`.`id` = '$id';";

echo $sql;
if(mysqli_query($conn,$sql)){
   
 header("location:index.php");
}

$conn->close();
                         
     
}


}
?>

<p class="text-center">Created By - <a href="https://www.facebook.com/profile.php?id=100004869885566">Cuong and Hiếu</a></p>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </body>

    </html>