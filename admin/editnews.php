<?php
require("./config/db.php");

 session_start();
 if (!isset($_SESSION['login'])) {
     header('location:' . SITEURL . '/admin/login.php');
}
include("./template/header.php");
?>
<<<<<<< HEAD


<div class="admin" style="background-color: rgb(166, 226, 226);">
=======
<?php
$getId = $_GET['id'];
$sql = "Select * from user where ID =  '$getId' ";
mysqli_set_charset($conn, 'UTF8');
$result = mysqli_query($conn, $sql);
?>

<div class="admin">
>>>>>>> 382f2d670f1217880616fce735f33bfe11c795c9
    <div class="container">
    </div>
    <div class="main">
        <div class="content">
            <div id="content_Post">
<<<<<<< HEAD
                <p class="text-center h2">Chỉnh Sửa Tin Tức</p>


                <?php
// Kết nối Database
=======
                <p class="text-center dsgv">Chỉnh Sửa Tin Tức</p>


                <?php

>>>>>>> 382f2d670f1217880616fce735f33bfe11c795c9

$id=$_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM `news` WHERE `news`.`id` = '$id'");
$row=mysqli_fetch_assoc($query);
?>
<<<<<<< HEAD
<form method="POST" class="form" style=" width: 30%;margin : 0 35%;">
<table>
<tr><td> Tiêu Đề:</td><td><input type="text" value="<?php echo $row['title']; ?>" name="title" size=50></td></tr> <br>

<tr><td>Nội dung: </td><td><input type="text" value="<?php echo $row['content']; ?>" name="cont" size=50></td></tr><br>
<tr><td>Ngày Đăng: </td><td><input type="date" value="<?php echo $row['post_date']; ?>" name="date" size=50></td></tr><br>
<tr><td>Ảnh: </td><td><input type="file" value="<?php echo $row['image']; ?>" name="image" size=50></td></tr><br>
<tr><td></td><td><input type="submit" value="Update" name="update_course" class="bg-primary"></td></tr>
</table>
=======
<form method="POST" class="form">
<h2>Sửa tin tức</h2>
<label>Title: <input type="text" value="<?php echo $row['title']; ?>" name="title"></label><br/>

<label>Content: <input type="text" value="<?php echo $row['content']; ?>" name="cont"></label><br/>
<label>Post date: <input type="text" value="<?php echo $row['post_date']; ?>" name="date"></label><br/>
<label>Image: <input type="file" value="<?php echo $row['image']; ?>" name="image"></label><br/>
<input type="submit" value="Update" name="update_course">
>>>>>>> 382f2d670f1217880616fce735f33bfe11c795c9
<?php

if (isset($_POST['update_course'])){

$title=$_POST['title'];
$cont=$_POST['cont'];
$date=$_POST['date'];
$image=$_POST['image'];

<<<<<<< HEAD
if ($title == "" || $cont == "" || $date == "" || $image == "") {
    echo "bạn vui lòng nhập đầy đủ thông tin";
}else{
    $sql = "UPDATE `news` SET `title` = '$title', `content` = '$cont', `post_date` = '$date', `image` = './imgs/$image'  WHERE `news`.`id` = '$id';";
=======


$sql = "UPDATE `news` SET `title` = '$title', `content` = '$cont', `post_date` = '$date', `image` = './imgs/$image'  WHERE `news`.`id` = '$id';";
>>>>>>> 382f2d670f1217880616fce735f33bfe11c795c9

echo $sql;
if(mysqli_query($conn,$sql)){
   
 header("location:index.php");
}

$conn->close();
<<<<<<< HEAD
                         
     
}


}
?>

<p class="text-center">Created By - <a href="https://www.facebook.com/profile.php?id=100004869885566">Cuong and Hiếu</a></p>
=======
}
?>

    <nav class="container-fluid footer" style="background-color:black;">
        <div class="row">
            <div class="row " style="margin: 3% ; background-color: black;color: white;">
                <div class="col-lg-2 col-md-5 col-sm-4 col-xs-6">
                    <img src="./img/logo.png" style="margin-top: 2%;" alt="" width="100%">

                    <p><i class="fa fa-map-marker" style="color: #00a651;"></i>248 Lương Thế Vinh, Trung Văn, Nam Từ Liêm, HN</p>

                    <p><i class="fa fa-phone" style="color: #00a651;"></i>0866225536</p>

                    <p><i class="fa fa-envelope-o" style="color: #00a651;"></i>cskh@enpro.vn</p>

                    <p><i class="fa fa-clock-o" style="color: #00a651;"></i> 8:00 - 22:00</p>

                </div>
                <div class="col-lg-2 col-md-5 col-sm-4 col-xs-6">
                    <h4 style="color: #00a651;">Về Enpro</h4>
                    <p>Giới thiệu về Enpro</p>
                    <p>Câu hỏi thường gặp</p>
                    <p>Điều khoản dịch vụ</p>
                    <p>Điều khoản bảo mật</p>
                    <p>Điều khoản hoàn hủy</p>
                    <p>Hướng dẫn thanh toán</p>
                    <p>Kích hoạt khóa học</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-4 col-xs-6">
                    <h4 style="color: #00a651;">Hợp tác liên kết</h4>
                    <p>Hợp tác đào tạo</p>
                    <p>Nhượng quyền cá nhân</p>
                    <p>Nhượng quyền trung tâm</p>
                    <p>Affiliate</p>
                </div>
                <div class="col-lg-2 col-md-5 col-sm-7 col-xs-6">
                    <h4 style="color: #00a651;">Kết nối với Enpro</h4>
                    <div class="d-flex">
                        <img src="./img/icons8-facebook-48.png" alt="">
                        <img src="./img/icons8-youtube-squared-48.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 col-sm-5 col-xs-12">
                    <img src="./img/pre-order.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="footer2 col-lg-12" style="margin-top: 10px;color: white;background-color: black; ">
            <p>

                © CÔNG TY CP ĐÁNH VẦN TIẾNG ANH ENPRO - 105 Nguyễn Xiển - Hạ Đình - Thanh Xuân - Hà Nội – MST: 0108890774. Giấp phép kinh doanh cấp 09/09/2019
                <img src="./img/bct.png" style="margin: 1% 0 0 93%;" alt="">
            </p>

        </div>
    </nav>


>>>>>>> 382f2d670f1217880616fce735f33bfe11c795c9
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