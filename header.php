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
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light container-fluid topweb">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-branch" href="index.php"><img src="./imgs/logo.png" alt="" class="img-responsive"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-search"></i>
              </button>

            <div class=" search collapse navbar-collapse" id="navbarSearch">
                <form class="d-flex">
                    <input type="text" class="form-control " placeholder="Tìm khoá học bạn quan tâm ">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                        <i class="fa fa-search" ></i>
                    </button>
                    </div>
                </form>
            </div>
            <div class="collapse navbar-collapse text-left  text_right">
                <ul class="navbar-nav me-auto  ">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin\login.php">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin\logup.php">Đăng ký</a>
                    </li>
                </ul>

            </div>

        </div>
        <div class="clearfix"></div>
    </nav>
    <nav class="collapse navbar-collapse  bg-light" id="navbarTogglerDemo03">
        <ul class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 400px;">
            <li class="nav-item topweb">
                <a class="navbar-branch container-fluid" href="#" style="width: 50%;">
                    <img src="./imgs/logo.png" alt="#" class="img-logo-bars">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa fa-bars"></i> Danh mục khóa học</a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Học online</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="course.php"><i class="fa fa-mortar-board" aria-hidden="true"></i> Khóa học</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-mortar-board" aria-hidden="true"></i> Combo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="news.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin tức</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin\login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin\log-up.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký</a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </nav>
    <nav class="navbar navbar-expand-md  bg-light container-fluid category">

        <div class="collapse navbar-collapse ">
            <ul class="navbar-nav container-fluid text-left justify-content-start">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa fa-bars"></i> Danh mục khóa học</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Học online</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="course.php">Khóa học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Combo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">Tin tức</a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </nav>