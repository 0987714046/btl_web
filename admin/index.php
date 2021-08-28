<?php
include("config/db.php");

session_start();
if (!isset($_SESSION['login'])) {
    header('location:' . SITEURL . '/admin/login.php');
}
include("template/header.php");
?>

<nav class="row flex-row">

       <div class="list-group col-3 bg-success" style="height: 600px;">
              <button class="btn btn-success mt-2" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                     Quản lý tài khoản
              </button>
              <button class="btn btn-success mt-2" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                     Quản lý khóa học
              </button>
              <button class="btn btn-success  mt-2" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                     Quản lý tin tức
              </button>

       </div>
       <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example col-9"
              tabindex="0">
              <div class="nav-collapse collapse show" id="collapseExample1 ">
                     <div class="text-center">
                            <h2>Quản lý tài khoản</h2>
                     </div>
                     <div>
                            <button type="button" style="background-color: #00a651;border-radius: 7px;"><a
                                          href="adduser.php" style="color: white;"><i class="fa fa-plus"></i> Thêm tài
                                          khoản </a></button>

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

                            <tbody>

                                   <?php
$sql = "SELECT * FROM user";

$res = mysqli_query($conn, $sql);


if ($res == TRUE) {
 
    $count = mysqli_num_rows($res); 

    $sn = 1; 

    if ($count > 0) {
        while ($rows = mysqli_fetch_assoc($res)) {
         
            $id = $rows['ID'];
            $fullname = $rows['full_name'];

            $phonenumber = $rows['phone_number'];
            $account = $rows['account'];



           
?>

                                   <tr>
                                          <td><?php echo $sn++; ?>. </td>
                                          <td><?php echo $id; ?></td>
                                          <td><?php echo $fullname; ?></td>

                                          <td><?php echo $phonenumber; ?></td>

                                          <td><?php echo $account; ?></td>


                                          <?php echo '<td><button><a href="edituser.php?id=' . $id . '"><i style:"margin:0 10%;"  class="fa fa-pencil" aria-hidden="true"></i></a></button>  <button>   <a href="deleteuser.php?id=' . $id . '"><i class="fa fa-trash" aria-hidden="true"></i></a></button></td>'; ?>




                                   </tr>

                                   <?php

        }
    } else {
        //We Do not Have Data in Database
    }
}

?>
                            </tbody>
                     </table>
              </div>
              <div class="nav-collapse collapse show" id="collapseExample2">
                     <div class="text-center">
                            <h2>Quản lý khóa học</h2>
                     </div>
                     <div>
                            <button type="button" style="background-color: #00a651;border-radius: 7px;"><a
                                          href="addcourse.php" style="color: white;"><i class="fa fa-plus"></i> Thêm
                                          khóa học </a></button>

                     </div>
                     <table class="table" style="border: 1px solid black; margin-top: 10%;">
                            <thead>
                                   <tr>
                                          <th scope="col">ID</th>
                                          <th scope="col">Course name</th>
                                          <th scope="col">Type</th>
                                          <th scope="col">Cost</th>
                                          <th scope="col">price</th>
                                          <th scope="col">desc</th>
                                          <th scope="col">course image</th>
                                          <th scope="col">Update Couse</th>
                                   </tr>
                            </thead>
                            <tbody>
                                   <?php
$sql = "SELECT * FROM course";

$res = mysqli_query($conn, $sql);


if ($res == TRUE) {
 
    $count = mysqli_num_rows($res); 

 

    if ($count > 0) {
        while ($rows = mysqli_fetch_assoc($res)) {
         
            $id1 = $rows['id_course'];
            $name = $rows['Name'];
            $type = $rows['type'];
            $cost = $rows['cost'];
            $price = $rows['price'];
            $desc = $rows['desc'];
            $img = $rows['image'];



           
?>

                                   <tr>

                                          <td><?php echo $id1; ?></td>
                                          <td><?php echo $name; ?></td>
                                          <td><?php echo $type; ?></td>
                                          <td><?php echo $cost; ?></td>

                                          <td><?php echo $price; ?></td>
                                          <td><?php echo $desc; ?></td>
                                          <td><img style="width:40%;" src="<?php echo $img; ?>" alt=""></td>

                                          <?php echo '<td><button><a href="editcourse.php?id=' . $id1 . '"><i style:"margin:0 10%;"  class="fa fa-pencil" aria-hidden="true"></i></a></button>  <button>   <a href="deletecourse.php?id=' . $id1 . '"><i class="fa fa-trash" aria-hidden="true"></i></a></button></td>'; ?>




                                   </tr>

                                   <?php

        }
    } else {
        //We Do not Have Data in Database
    }
}

?>
                            </tbody>
                     </table>
              </div>

              <div class="nav-collapse collapse" id="collapseExample3">
                     <div class="text-center">
                            <h2>Quản lý tin tức</h2>
                     </div>
                     <div>
                            <button type="button" style="background-color: #00a651;border-radius: 7px;"><a href="addnews.php"
                                          style="color: white;"><i class="fa fa-plus"></i> Thêm tin tức </a> </button>

                     </div>
                     <table class="table" style="border: 1px solid black; margin-top: 10%;">
                            <thead>
                                   <tr>
                                          <th scope="col">ID</th>
                                          <th scope="col">Title</th>
                                          <th scope="col">Image</th>
                                          <th scope="col">Content</th>
                                          <th scope="col">Post date</th>
                                          
                                          <th scope="col">Update news</th>
                                   </tr>
                            </thead>
                            <tbody>
                                   <?php
                                $sql ="SELECT * From news ;";

                                $result =mysqli_query($conn,$sql);
            
                                //b3
                                if(mysqli_num_rows($result) > 0){
                            
                                while($row= mysqli_fetch_assoc($result)){
                                       


                                   ?>
                                   <tr>
                                          <th scope="row"><?php echo $row['id']; ?></th>
                                          <td><?php echo $row['title']; ?></td>
                                          <td><img style="width:40%;" src="<?php echo $row['image']; ?>" alt=""></td>
                                          <td><?php echo $row['content']; ?></td>
                                          <td><?php echo $row['post_date']; ?></td>


                                        
                                          <?php echo '<td><button><a href="editnews.php?id=' . $row['id'] . '"><i style:"margin:0 10%;"  class="fa fa-pencil" aria-hidden="true"></i></a></button>  <button>   <a href="deletenews.php?id=' .$row['id'] . '"><i class="fa fa-trash" aria-hidden="true"></i></a></button></td>'; ?>

                                   </tr>
                                   <?php
                                }
                            }
?>


                            </tbody>
                     </table>
              </div>
       </div>


</nav>
<nav class="container-fluid footer">

       <p class="text-center">Created By - <a href="https://www.facebook.com/profile.php?id=100004869885566">Cuong and
                     Hiếu</a></p>

</nav>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>