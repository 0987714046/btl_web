<?php
    include("config/db.php");
    session_start();
    if (!isset($_SESSION['login'])) {
        header('location:' . SITEURL . '/admin/login.php');
    }
    include("template/header.php");
?>
<body style="background-color: rgb(166, 226, 226);">
    

    <div id="main-main" class="container-fluid" style="background-color: rgb(166, 226, 226);" >
    <h1 class="text-center">Thêm tin tức</h1>
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
                    
                    
     

                    if ($title == "" || $content == "" || $post == "" || $img == "") {
                        echo "bạn vui lòng nhập đầy đủ thông tin";
                    }else{
                        $sql =" INSERT INTO `news` (`id`, `title`, `image`, `content`, `post_date`) VALUES ( '','$title','./imgs/$img','$content', '$post');";
                        if(mysqli_query($conn,$sql)){
                           
                            header('location:'.SITEURL.'/admin/index.php');
                     }
                       
                    }
                    
                    $conn->close();
                                             
                         
                    }
                 
                  
                

               

            ?>
            
        </main>
    </div>
    <br><br>
            </form>
            

            <p class="text-center">Created By - <a href="https://www.facebook.com/profile.php?id=100004869885566">Cuong and Hiếu</a></p>
        </div>
    </body>
   