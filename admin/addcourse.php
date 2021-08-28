<?php
    include("config/db.php");
    session_start();
    ob_start ();
    if (!isset($_SESSION['login'])) {
        header('location:' . SITEURL . '/admin/login.php');
    } 
    include("template/header.php");
?>
<?php


?>
<body style="background-color: rgb(166, 226, 226);">
    

    <div id="main-main" class="container-fluid" style="background-color: rgb(166, 226, 226);" >
    <h1 class="text-center">Add User</h1>
        <main class="text-center" style="background-color: rgb(166, 226, 226);">
            <form method="POST" action="" style="background-color: rgb(166, 226, 226);width: 30%;margin : 6% 35%;">
                <table>
                <tr>
                        <td>Tên khóa học</td>
                        <td>
                            <input type="text" name="name" placeholder="Tên khóa học" size="50">
                        </td>
                    </tr>
                    <tr>

                        <td>Kiểu học</td>
                        <td>
                            <input type="text" name="type" placeholder="online or offline" size="50">
                        </td>
                    </tr>
                    <tr>

                        <td>Giá gốc</td>
                        <td>
                            <input type="text" name="cost" placeholder="Giá gốc" size="50">
                        </td>
                    </tr>
                   
                    <tr>
                        <td>Giảm giá</td>
                        <td>
                            <input type="text" name="price" placeholder="Giảm giá" size="50">
                        </td>
                    </tr>
                    
                   
                    <tr>
                        <td>Mô tả khóa học</td>
                        <td>
                            <input type="text" name="desc" placeholder="Mô tả khóa học" size="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Ảnh</td>
                        <td>
                            <input type="file" name="img"  size="50">
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
                    $name =  $_POST['name'];

                    $type =  $_POST['type'];

                    $cost  = $_POST['cost'];
                    $price = $_POST['price'];
                    $desc       = $_POST['desc'];
                    $img      = $_POST['img'];
                    

                    if ($name == "" || $type == "" || $cost == "" || $price == "" || $desc == "" || $img == "") {
                        echo "bạn vui lòng nhập đầy đủ thông tin";
                    }else{
                        $sql =" INSERT INTO `course` (`id_course`, `Name`, `type`, `cost`, `price`, `desc`, `image`) VALUES ( '','$name','$type','$cost','$price', '$desc', './imgs/$img');";
                        if(mysqli_query($conn,$sql)){
                           
                         header("location:index.php");
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
    <?php ob_flush (); ?>