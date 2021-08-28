<?php
    include("config/db.php");
    session_start();
    if (!isset($_SESSION['login'])) {
        header("location: /admin/login.php");
    }
    include("template/header.php");
?>
<body style="background-color: rgb(166, 226, 226);">
    

    <div id="main-main" class="container-fluid" style="background-color: rgb(166, 226, 226);" >
    <h1 class="text-center">Thêm người dùng</h1>
        <main class="text-center" style="background-color: rgb(166, 226, 226);">
            <form method="POST" action="" style="background-color: rgb(166, 226, 226);width: 30%;margin : 6% 35%;">
                <table>
                <tr>
                        <td>Tài KHoản</td>
                        <td>
                            <input type="text" name="txtAccount" placeholder="Nhập tài khoản" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Họ tên</td>
                        <td>
                            <input type="text" name="txtFullName" placeholder="Nhập họ tên" size="50">
                        </td>
                    </tr>
                   
                    <tr>
                        <td>Số điện thoại</td>
                        <td>
                            <input type="int" name="txtPhonenumber" placeholder="nhập số điện thoại" size="50">
                        </td>
                    </tr>
                    
                   
                    <tr>
                        <td>Mật khẩu</td>
                        <td>
                            <input type="password" name="txtPass" placeholder="Nhập mật khẩu" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnAddUser" value="Thêm" class="btn btn-success" size="50">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
                if(isset($_POST['btnAddUser'])){
                    $account =  $_POST['txtAccount'];
                    $fullName   = $_POST['txtFullName'];
                    $phonenumber = $_POST['txtPhonenumber'];
                    $pass       = $_POST['txtPass'];
                    $pass_md5   = md5($pass);
                    
                    
                    //Kiểm tra: Dữ liệu người dùng nhập có đang BỎ TRỐNG trường nào KO?
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Kiểm tra: Trước khi thêm Tài khoản, phải kiểm tra username và email này có tồn tại chưa?
                    //Nếu chưa tồn tại thì mới thêm;
                    //Bước 02: Thực hiện truy vấn 

                    if ($account == "" || $fullName == "" || $phonenumber == "" || $pass == "") {
                        echo "bạn vui lòng nhập đầy đủ thông tin";
                   }else{
                           // Kiểm tra tài khoản đã tồn tại chưa
                           $sql="select * from user where account ='$account'";
                         $kt=mysqli_query($conn, $sql);
     
                         if(mysqli_num_rows($kt)  > 0){
                             echo "Tài khoản đã tồn tại";
                         }else{
                            $sql ="INSERT INTO user (ID,full_name, phone_number, account, password, permission )  VALUES ( '','$fullName','$phonenumber','$account', '$pass_md5', '0');";
              
                            if(mysqli_query($conn,$sql)){
                                header('location:'.SITEURL.'/admin/index.php');
                            }
                         }
                                             
                         
                   }

                    
                }
               

            ?>
            
        </main>
    </div>
    <br><br>
            </form>
            

            <p class="text-center">Created By - <a href="https://www.facebook.com/profile.php?id=100004869885566">Cuong and Hiếu</a></p>
        </div>
    </body>
   