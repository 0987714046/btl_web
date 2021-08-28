<?php
require("./config/db.php");

 session_start();
 if (!isset($_SESSION['login'])) {
     header('location:' . SITEURL . '/admin/login.php');
}
include("./template/header.php");
?>
<?php
$getId = $_GET['id'];
$sql = "Select * from user where ID =  '$getId' ";
mysqli_set_charset($conn, 'UTF8');
$result = mysqli_query($conn, $sql);
?>

<div class="admin">
    <div class="container">
    </div>
    <div class="main">
        <div class="content">
            <div id="content_Post">
                <p class="text-center dsgv">Chỉnh Sửa Tài khoản</p>


                <?php

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<form class="form_edit" action="processedituser.php?id=' . $row['ID'] . '" method="POST">';
                        echo '<table class="table_edit">';


                        echo '<tr>';
                        echo '<td>Tên người dùng</td>';
                        echo '<td><input  class="inpbox" id="name" type="text" name="name" value="' . $row['full_name'] . '"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Tên tài khoản</td>';
                        echo '<td><input  class="inpbox" id="name" type="text" name="acc" value="' . $row['account'] . '"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Số Điện thoại</td>';
                        echo '<td><input  class="inpbox" id="phone" type="text" name="phone" value="' . $row['phone_number'] . '"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Password</td>';
                        echo '<td><input  class="inpbox" id="pass" type="text" name="pass" value="" placeholder="Nhập mật khẩu mới(Nếu cần)"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Quyền</td>';
                        echo '<td>';
                        $per = $row['permission'];
                        echo '<select class="inpbox w-100" name="permission" id="class">';
                        echo '<option value=1 selected="true">admin </option>';

                        echo '<option value=0 selected="false">user</option>';

                        echo '</select>';
                        echo '</td>';
                        echo '</tr>';
                        
                        echo '<tr class="w-100 submitEditStudent">';
                        echo '<td colspan="2" style="text-align: center"><button class= " btn-sua" type="submit">Lưu</button> <button class= " btn-huy" ><a href="index.php">Hủy</a></button></td>';
                       
                        echo '</tr>';
                        echo '</table>';
                        echo '</form>';
                    }
                }
                ?>
                
            </div>
        </div>
    </div>

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