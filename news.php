<?php

include("header.php")
?>
<div class="text-center " style="margin:5% 0;"><h2>Tin Tức</h2></div>
<div class="row">
<?php 
            //truy vấn csdl vs php :3 cách (mysqli_ thủ tục, ... oop, PDO)
            //b1 kết nối sever
            $con = mysqli_connect('localhost','root','','db_project','3306');
            if(!$con){
                die("ko ket noi");
            } 

            //b2
            $sql   ="SELECT * FROM news";
            $result =mysqli_query($con,$sql);
            
            //b3
            if(mysqli_num_rows($result) > 0){
        
            while($row= mysqli_fetch_assoc($result)){
                   ?>
           <div class="col-lg-3 col-md-6">
       <img src="<?php echo $row['image']; ?>" alt="" style=" width: 100%;">
        <h4><?php echo $row['title']; ?></h4>
        <div class="flex-colurm">
               <p><?php echo $row['post_date']; ?></p>
               <p><?php echo $row['content']; ?></p>
               <h5 style="color: blue">Xem chi tiết >></h5>
        </div>            
       </div>
       <?php
            }
        }
        
       
        mysqli_close($con)
            ?>
       
       <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
    
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    
    <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
  </ul>
</nav>
</div>
<?php
include("theend.php")
?>