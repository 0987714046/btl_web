<?php
    include("config/db.php");
    session_start();
    
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>demo</title>
    <link rel="stylesheet" href="./css/style1.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light container-fluid topweb">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-branch" href="index.php"><img src="./imgs/logo.png" alt="" class="img-responsive"></a>


          

        </div>
        <div class="clearfix"></div>
    </nav>
   

    <body style="background-color: rgb(166, 226, 226);">
        
        <div class="login" style="background-color: rgb(166, 226, 226);">
            <h1 class="text-center">Đăng Nhập</h1>
            <br><br>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <!-- Login Form Starts HEre -->
            <form action="" method="POST" class="text-left" style=" width: 30%;margin : 0 35%;" >
            <h4>Tài khoản:</h4> <br>
            <input type="text" name="username"  placeholder="Nhập tài khoản" size="50"><br><br>

            <h4>Mật khẩu:</h4> <br>
            <input type="password" name="password" placeholder="Nhập mật khẩu" size="50"><br><br>
            <div >
            <input type="submit" name="submit" style="border-radius: 5px;margin : 0 10%;" value="Đăng nhập" class="btn-primary">
            
                <button type="button" style="border-radius: 5px;margin : 0 10%;" class="text-center  btn-primary">
            <a  style="color:white;" href="logup.php"> Đăng ký </a>
            </button>
            </div>
            <br><br>
            </form>
            

            <p class="text-center">Created By - <a href="https://www.facebook.com/profile.php?id=100004869885566">Cuong and Hiếu</a></p>
        </div>

    </body>
</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM user WHERE account='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);
     

        if($count==1 )
        {
            $sqli="SELECT * FROM `user` WHERE account='$username' AND permission=1";
					$kt=mysqli_query($conn, $sqli);
                    $k =mysqli_num_rows($kt);

					if( $k==1){
	
            
                    $_SESSION['login'] = "";
                    $_SESSION['user'] = $username; 

          
                    header('location:'.SITEURL.'/admin/');
                    }else{
                        $_SESSION['login'] = "";
                        $_SESSION['user'] = $username;
            
                        header('location:'.SITEURL.'../index.php');
                     }
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'/admin/login.php');
        }


    }
    ?>

    