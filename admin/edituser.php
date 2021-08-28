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

<div class="admin" style="background-color: rgb(166, 226, 226);">
    
    <div class="main" >
        <div class="content">
            <div id="content_Post">
                <p class="text-center  h2">Chỉnh Sửa Tài khoản</p>


                <?php

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<form class="form_edit" action="processedituser.php?id=' . $row['ID'] . '" method="POST">';
                        echo '<table class="table_edit" style="margin:0 30%;width:60%"> ';


                        echo '<tr>';
                        echo '<td>Tên người dùng</td>';
                        echo '<td><input  class="inpbox" id="name" type="text" name="name" value="' . $row['full_name'] . '" size="60"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Tên tài khoản</td>';
                        echo '<td><input  class="inpbox" id="name" type="text" name="acc" value="' . $row['account'] . '" size="60"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Số Điện thoại</td>';
                        echo '<td><input  class="inpbox" id="phone" type="text" name="phone" value="' . $row['phone_number'] . '" size="60"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Password</td>';
                        echo '<td><input  class="inpbox" id="pass" type="text" name="pass" value="" placeholder="Nhập mật khẩu mới(Nếu cần)" size="60"></td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Quyền</td>';
                        echo '<td>';
                        $per = $row['permission'];
                        echo '<select class="inpbox " name="permission" id="class">';
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
        <p class="text-center">Created By - <a href="https://www.facebook.com/profile.php?id=100004869885566">Cuong and Hiếu</a></p>
    </div>

  
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