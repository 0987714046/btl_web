<?php
    include("config/db.php");
    session_start();
    include("template/header.php");
?>
    <div id="main-main" class="container-fluid" >
        <main>
            <form method="POST" action="">
                <table>
                <tr>
                        <td>Account</td>
                        <td>
                            <input type="text" name="txtAccount" placeholder="Enter Account">
                        </td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td>
                            <input type="text" name="txtFullName" placeholder="Enter Fullname">
                        </td>
                    </tr>
                   
                    <tr>
                        <td>Phone number</td>
                        <td>
                            <input type="number" name="txtPhonenumber" placeholder="Enter phone number">
                        </td>
                    </tr>
                    
                   
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="txtPass" placeholder="Enter Password">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnAddUser" value="Log up" class="btn btn-success">
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
                    $sql ="INSERT INTO user (ID,full_name, phone_number, account, password, permission )  VALUES ( '','$fullName','$phonenumber','$account', '$pass_md5', '0');";
              
                    
                    
                    
                    
                   
                    if(mysqli_query($conn,$sql)){
                        header('location:'.SITEURL.'/admin/login.php');
                    }
                    
                    
                }
               

            ?>
            
        </main>
    </div>

   