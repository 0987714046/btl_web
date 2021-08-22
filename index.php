<?php
include("header.php")
?>
    <nav id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./imgs/1.jpg" class="d-block w-100" alt="#">
            </div>
            <div class="carousel-item">
                <img src="./imgs/2.jpg" class="d-block w-100" alt="#">
            </div>
            <div class="carousel-item">
                <img src="./imgs/3.jpg" class="d-block w-100" alt="#">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div class="clearfix"></div>
    </nav>
    <nav class="container-fluid  " style="background-color:rgb(6, 131, 133);">
        <h2 class="text-center" style="color: white;">Học đánh vần lần đầu tiên trên thế giới</h2>
        <div class="line-section"></div>
        <div class="line-section2"></div>
        <div class="row" style="background-color:rgb(6, 131, 133);">
            <div class="col-sm-6">
                <div class="col-section-6 d-flex">
                    <img src="./imgs/col-icon-1.png" alt="" class="icon">
                    <div class="content-sc-6 offset-md">

                        <p>Quy tắc Đọc chuẩn bản ngữ mọi từ trong từ điển</p>
                        <span>
                            "Kiến thức này ai cũng phải được học nhưng không có trường học nào giảng dạy."
                        </span>
                    </div>
                </div>
                <div class="col-section-6 d-flex">
                    <img src="./imgs/col-icon-2.png" alt="" class="icon">
                    <div class="content-sc-6 offset-md">

                        <p>Quy luật Đánh vần Tiếng Anh</p>
                        <span>
                            "Hệ thống quy luật được nghiên cứu 10 năm, mỗi quy tắc được thử nghiệm hàng vạn lần."
                        </span>
                    </div>
                </div>
                <div class="col-section-6 d-flex">
                    <img src="./imgs/col-icon-3.png" alt="" class="icon">
                    <div class="content-sc-6 offset-md">

                        <p>Quy trình 4 bước đọc tiếng Anh</p>
                        <span>
                            "Nhờ có quy trình chi tiết, đảm bảo tất cả học viên có kết quả đầu ra đồng đều."
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-section-6 d-flex">
                    <img src="./imgs/col-icon-4.png" alt="" class="icon">
                    <div class="content-sc-6 offset-md">

                        <p>Quy tắc Nói mọi câu tiếng Anh có ngữ điệu</p>
                        <span>
                            "Không cần bắt chước, chỉ cần 2 quy tắc để nói mọi câu tiếng Anh có trầm, có bổng."
                        </span>
                    </div>
                </div>
                <div class="col-section-6 d-flex">
                    <img src="./imgs/col-icon-5.png" alt="" class="icon">
                    <div class="content-sc-6 offset-md">

                        <p>Học từ vựng dễ, nhanh và không thể quên được</p>
                        <span>
                            "Nhớ từ vựng không cần ghi chép nhờ 4 dữ liệu: Từ vựng, quy tắc, hình ảnh phiên âm và phát âm."
                        </span>
                    </div>
                </div>
                <div class="col-section-6 d-flex">
                    <img src="./imgs/col-icon-6.png" alt="" class="icon">
                    <div class="content-sc-6 offset-md">

                        <p>Phương pháp thuyết trình TalkitOut</p>
                        <span>
                            "Biến mọi đoạn văn, câu chuyện tiếng Anh thành bài thuyết trình xúc tích với kỹ thuật TalkitOut."
                        </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </nav>

    <nav class="container-fluid bg-dark">
        <div class="container d-flex">
            <img src="./imgs/icon-play.png" style="margin: 5%;" alt="">
            <h2 style="margin: 3%; color: white;">Khóa học: "Đánh vần Tiếng Anh cho người mới bắt đầu" <br> Chính là cái bạn cần ngay lúc này </h2>
        </div>
        <div class="clearfix"></div>
    </nav>
    <nav class="container">
        <h2 class="text-center" style="margin-top: 5%; color:rgb(6, 131, 133);">Các khóa học hiện có</h2>
        <h4 class="text-center">Dành cho cả học sinh, sinh viên và người đi làm</h4>
        <div class="row d-flex">
        <?php 
            //truy vấn csdl vs php :3 cách (mysqli_ thủ tục, ... oop, PDO)
            //b1 kết nối sever
            $con = mysqli_connect('localhost','root','','db_project','3306');
            if(!$con){
                die("ko ket noi");
            } 

            //b2
            $sql   ="SELECT * FROM course";
            $result =mysqli_query($con,$sql);
            
            //b3
            if(mysqli_num_rows($result) > 0){
        
            while($row= mysqli_fetch_assoc($result)){
                   ?>
            
                <div class="col-6 d-flex flex-column">
                    <img src="<?php echo $row['image']; ?>" alt="" style=" width: 100%;">
                    <div class="content-sc-6 offset-md" style="color: black;">

                        <h3 style="color: rgb(6, 131, 133);"><?php echo $row['Name']; ?></h3>
                        <span>
                        <?php echo $row['desc']; ?>
                        </span>
                        <p class="text-center"><i style="color: rgb(6, 131, 133);" class="fa fa-mortar-board" aria-hidden="true"></i> Học Online</p>
                        <div class="price-course d-flex">
                            <div class="price-a  d-flex" style="text-decoration: line-through;">
                            <?php echo $row['cost']; ?>
                                <sup>đ</sup>
                            </div>
                            <div class="price-b h4  d-flex " style=" color: red; margin-left: 40%;">
                            <?php echo $row['price']; ?>
                                <sup>đ</sup>
                            </div>
                        </div>
                    </div>
                </div>
                
           

              
       
       <?php
            }
        }
        
       
        mysqli_close($con)
            ?>
          </div> 
        <button type="button" style="background-color: #00a651;color: white;border-radius: 7px;margin: 0 40%;width: 20%;"> <h4 style="margin: 2% 5%;">Xem thêm</h4></button>
        <div class="clearfix"></div>
    </nav>
    <nav class=" text-white d-flex navbar-expand-md" style="background-image: url(./imgs/choose.png); margin-top: 5%;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            
            </button>
        <img class="collapse   navbar-collapse " src="./imgs/girl.png" style="margin: 3% 0 0 5%; " alt="" id="navbarToggler">
        <div class="col-lg-8 col-md-7 why">
            <h2 style="margin-top: 5%;">VÌ SAO AI CŨNG PHẢI HỌC?</h2>
            <ul>
                <li>
                    <span>1</span>
                    <h4>Học gì thì học, phải biết đọc</h4>
                    <p>Nếu không biết đọc chữ, thì không tự học được</p>
                </li>
                <li>
                    <span>2</span>
                    <h4>Độc quyền chỉ có Enpro</h4>
                    <p>Chưa từng có trên thế giới, lần đầu tiên có ở Việt Nam</p>
                </li>
                <li>
                    <span>3</span>
                    <h4>Học từ gốc rễ, hiểu từ nguyên lý</h4>
                    <p>Giúp người học chỉ cần học 1 lần, sử dụng mãi mãi</p>
                </li>
                <li>
                    <span>4</span>
                    <h4>Ai cũng thích học</h4>
                    <p>Từ học sinh Tiểu học, giáo viên đến những học viên đã có điểm IELTS 7.5</p>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </nav>
    <nav class="text-center ">
        <h2 style="color: rgb(6, 131, 133);margin-top: 5%;">CẢM NHẬN HỌC VIÊN</h2>
        <div class=" row ">
            <div class="card col-lg-4 col-md-4 ">
                <img src="./imgs/thu-lan.jpg" class="card-img-top" style="width:50%; margin-left: 25%;" alt="">
                <div class="card-body">
                    <h5 class="card-title">Chị Hoàng Thu Lan</h5>
                    <p class="card-text">Đang học nhớ hết quy tắc Đánh Vần rồi chuyển qua nói câu có ngữ điệu…cô Hoàng Nguyệt dậy thích, dễ hiểu. Trước giờ toàn theo cô giáo học vẹt, bắt chước giờ thấy đúng là phải có quy tắc để đọc.</p>
                </div>

            </div>
            <div class="card  col-lg-4 col-md-4 ">
                <img src="./imgs/hieu.jpg" class="card-img-top" style="width:50%; margin-left: 25%;" alt="">
                <div class="card-body">
                    <h5 class="card-title">Chị Mai Thị Hiếu</h5>
                    <p class="card-text">Mình mới mua khóa học được gần 1 tháng, đang học được 50% của phần 1. Rất hay và bổ ích. Cảm ơn tác giả. Hồi xưa giờ toàn đọc đại theo trí nhớ mang máng mà thầy cô dạy hoặc ghép nửa âm Việt nủa âm Anh hầm bà lằng.</p>
                </div>

            </div>
            <div class="card col-lg-4 col-md-4 ">
                <img src="./imgs/quanghuy.jpg" class="card-img-top" style="width:50%; margin-left: 25%;" alt="">
                <div class="card-body">
                    <h5 class="card-title">Anh Trần Quang Huy</h5>
                    <p class="card-text">Đến giờ mình vẫn luyện tập tập hằng ngày, vừa để luyện tập vừa dạy cho cháu mình. Dù cháu mới học lớp 2 nghĩa từ vựng chưa biết được hết, nhưng khi nhìn vào từ cháu đều đọc được từ, viết được phiên âm.</p>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </nav>

    <nav class="container-fluid text-center " style="background-color:rgb(6, 131, 133);">
        <h2 class="text-center" style="color: white;">Bạn được gì sau khóa học ?</h2>
        <div class="line-section"></div>
        <div class="line-section2"></div>
        <div class="row" style="background-color:rgb(6, 131, 133);">
            <div class="row">
                <div class="box-learned col-md-6 col-lg-4 ">
                    <img src="./imgs/learned-icon-1.png" alt="">
                    <div style="color: white;">

                        <p>Học từ vựng nhanh gấp 5 lần</p>

                    </div>
                </div>
                <div class="box-learned col-md-6 col-lg-4 ">
                    <img src="./imgs/learned-icon-2.png" alt="">
                    <div style="color: white;">

                        <p>Viết phiên âm hàng vạn từ</p>

                    </div>
                </div>
                <div class="box-learned col-md-6 col-lg-4 ">
                    <img src="./imgs/learned-icon-3.png" alt="">
                    <div style="color: white;">

                        <p>Nói chuẩn bản ngữ mọi từ</p>

                    </div>
                </div>
                <div class="box-learned col-md-6 col-lg-4 ">
                    <img src="./imgs/learned-icon-4.png" alt="">
                    <div style="color: white;">

                        <p>Hướng dẫn, dạy lại cho người khác</p>

                    </div>
                </div>
                <div class="box-learned col-md-6 col-lg-4 ">
                    <img src="./imgs/learned-icon-5.png" alt="">
                    <div style="color: white;">

                        <p>Tự sửa lỗi không cần sự hướng dẫn</p>

                    </div>
                </div>
                <div class="box-learned col-md-6 col-lg-4 ">
                    <img src="./imgs/learned-icon-6.png" alt="">
                    <div style="color: white;">

                        <p>Thuyết trình tiếng Anh như diễn giả</p>

                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
    </nav>
<?php
include("theend.php")
?>