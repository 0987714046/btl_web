<?php
    include("config/db.php");
    
    session_start();
    if(!isset($_SESSION['login']))
    {
        header('location:'.SITEURL.'/admin/login.php');  
    }
    include("template/header.php");
?>

    <nav class="row flex-row">
        <div class="list-group col-3 bg-success">
            <button class="btn btn-success mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                Quản lý tài khoản
              </button>
            <button class="btn btn-success mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                Quản lý khóa học
              </button>
            <button class="btn btn-success  mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                Quản lý tin tức
              </button>

        </div>
        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example col-9" tabindex="0">
            <div class="nav-collapse collapse show" id="collapseExample1">
                <div class="text-center">
                    <h2>Quản lý tài khoản</h2>
                </div>
                <div>
                    <button type="button" style="background-color: #00a651;border-radius: 7px;"><i class="fa fa-plus"></i> Thêm tài khoản </button>

                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">S.N</th>
                            <th scope="col">ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Account</th>
                            
                            <th scope="col">Update Account</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <?php
                         $sql = "SELECT * FROM user";
                         //Execute the Query
                         $res = mysqli_query($conn, $sql);
 
                         //CHeck whether the Query is Executed of Not
                         if($res==TRUE)
                         {
                             // Count Rows to CHeck whether we have data in database or not
                             $count = mysqli_num_rows($res); // Function to get all the rows in database
 
                             $sn=1; //Create a Variable and Assign the value
 
                             //CHeck the num of rows
                             if($count>0)
                             {
                                 //WE HAve data in database
                                 while($rows=mysqli_fetch_assoc($res))
                                 {
                                     //Using While loop to get all the data from database.
                                     //And while loop will run as long as we have data in database
 
                                     //Get individual DAta
                                     $id=$rows['ID'];
                                     $fullname=$rows['full_name'];
                                     
                                     $phonenumber=$rows['phone_number'];
                                     $account=$rows['account'];
                                     
                                     
 
                                     //Display the Values in our Table
                                     ?>
                                     
                                     <tr>
                                         <td><?php echo $sn++; ?>. </td>
                                         <td><?php echo $id; ?></td>
                                         <td><?php echo $fullname; ?></td>
                                         
                                         <td><?php echo $phonenumber; ?></td>
                                        
                                         <td><?php echo $account; ?></td>
                                         
                                         <td>
                                <div class="d-flex">
                                    <button class="btl_account" type="button">Update Admin</button>
                                    <button class="btl_account" type="button">Delete account</button>
                                    <button class="btl_account" type="button">Change password</button>
                                </div>
                            </td>
                                     </tr>
 
                                     <?php
 
                                 }
                             }
                             else
                             {
                                 //We Do not Have Data in Database
                             }
                         }

                        ?>
                    </tbody>
                </table>
            </div>
            <div class="nav-collapse collapse" id="collapseExample2">
                <div class="text-center">
                    <h2>Quản lý khóa học</h2>
                </div>
                <div>
                    <button type="button" style="background-color: #00a651;border-radius: 7px;"><i class="fa fa-plus"></i> Thêm khóa học </button>

                </div>
                <table class="table" style="border: 1px solid black; margin-top: 10%;">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Course name</th>
                            <th scope="col">Type</th>
                            <th scope="col">cost</th>
                            <th scope="col">price</th>
                            <th scope="col">desc</th>
                            <th scope="col">course image</th>
                            <th scope="col">Update Couse</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Math</td>
                            <td>online</td>
                            <td>1000000</td>
                            <td>1000000</td>
                            <td>online</td>
                            <td><img src="./imgs/quanghuy.jpg" alt=""></td>
                            <td>
                                <div class="d-flex">

                                    <button class="btl_account" type="button">Delete</button>
                                    <button class="btl_account" type="button">Change</button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="nav-collapse collapse" id="collapseExample3">
                <div class="text-center">
                    <h2>Quản lý tin tức</h2>
                </div>
                <div>
                    <button type="button" style="background-color: #00a651;border-radius: 7px;"><i class="fa fa-plus"></i> Thêm tin tức </button>

                </div>
                <table class="table" style="border: 1px solid black; margin-top: 10%;">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Content</th>
                            <th scope="col">Update news</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><img src="./imgs/quanghuy.jpg" alt=""></td>
                            <td>sacbsajbjsabj</td>
                            <td>
                                <div class="d-flex">

                                    <button class="btl_account" type="button">Delete</button>
                                    <button class="btl_account" type="button">Change</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td><img src="./imgs/quanghuy.jpg" alt=""></td>
                            <td>Thornton</td>
                            <td>
                                <div class="d-flex">

                                    <button class="btl_account" type="button">Delete</button>
                                    <button class="btl_account" type="button">Change</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td><img src="./imgs/quanghuy.jpg" alt=""></td>
                            <td>Thornton</td>
                            <td>
                                <div class="d-flex">

                                    <button class="btl_account" type="button">Delete</button>
                                    <button class="btl_account" type="button">Change</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </nav>
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