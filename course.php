<?php
include("header.php")
?>
   
    
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
    
    
<?php
include("theend.php")
?>