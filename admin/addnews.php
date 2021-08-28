<?php
    include("config/db.php");
    session_start();
    include("template/header.php");
?>
<body style="background-color: rgb(166, 226, 226);">
    

    <div id="main-main" class="container-fluid" style="background-color: rgb(166, 226, 226);" >
    <h1 class="text-center">Add User</h1>
        <main class="text-center" style="background-color: rgb(166, 226, 226);">
            <form method="POST" action="" style="background-color: rgb(166, 226, 226);width: 30%;margin : 6% 35%;">
                <table>
                <tr>
                        <td>Chủ đề</td>
                        <td>
                            <input type="text" name="title" placeholder="chủ đề" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Ảnh</td>
                        <td>
                            <input type="file" name="img" size="50">
                        </td>
                    </tr>
                   
                    <tr>
                        <td>Nội dung</td>
                        <td>
                            <input type="text" name="content" placeholder="nội dung" size="50">
                        </td>
                    </tr>
                    
                   
                    <tr>
                        <td>Ngày đăng</td>
                        <td>
                            <input type="text" name="post" placeholder="2021-08-22" size="50">
                        </td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnAdd" value="Thêm" class="btn btn-success" size="50">
                        </td>
                    </tr>
                    
                </table>
            </form>
            <?php
                if(isset($_POST['btnAdd'])){
                    $title=  $_POST['title'];
                    $content  = $_POST['content'];
                    $post = $_POST['post'];
                   
                    $img      = $_POST['img'];
                    
                    
                    
<<<<<<< HEAD
                    if ($title == "" || $content == "" || $post == "" || $img == "") {
                        echo "bạn vui lòng nhập đầy đủ thông tin";
                    }else{
                        $sql =" INSERT INTO `news` (`id`, `title`, `image`, `content`, `post_date`) VALUES ( '','$title','./imgs/$img','$content', '$post');";
                        if(mysqli_query($conn,$sql)){
                           
                         header("location:index.php");
                     }
                       
                    }
                    
                    $conn->close();
                                             
                         
                    }
                 
                  
                
=======
                    
                    //Kiểm tra: Dữ liệu người dùng nhập có đang BỎ TRỐNG trường nào KO?
                    //CSDL của chúng ta đã lưu Mật khẩu ở dạng THÔ
                    //Kiểm tra: Trước khi thêm Tài khoản, phải kiểm tra username và email này có tồn tại chưa?
                    //Nếu chưa tồn tại thì mới thêm;
                    //Bước 02: Thực hiện truy vấn 
                    $sql =" INSERT INTO `news` (`id`, `title`, `image`, `content`, `post_date`) VALUES ( '','$title','./imgs/$img','$content', '$post');";
                    if(mysqli_query($conn,$sql)){
                       
                     header("location:index.php");
                 }
                   
                }
>>>>>>> 382f2d670f1217880616fce735f33bfe11c795c9
               

            ?>
            
        </main>
    </div>
    <br><br>
            </form>
            

            <p class="text-center">Created By - <a href="https://www.facebook.com/profile.php?id=100004869885566">Cuong and Hiếu</a></p>
        </div>
    </body>
   