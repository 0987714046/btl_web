<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>login</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
 <div class="text-center  ">
     <form style="max-width:320px; margin:auto;">
        <img class="mb-4" href="btl_web\index.php" src="img/logo.png" height="75" alt="logo">
        <h1 class="h3 mb-3 font-weight-normal text-primary ">ĐĂNG KÝ</h1>
        
        <label for="fullname" class="sr-only"></label>
        <input type="fullname" id="fullname" class="form-control" placeholder="Họ tên">
        <label for="email" class="sr-only"></label>
        <input type="email" id="email" class="form-control" placeholder="Email"
        required autofocus>
        <label for="phone_number" class="sr-only"></label>
        <input type="phone_number" id="phone_number" class="form-control" placeholder="Số điện thoại">
        <label for="password" class="sr-only"></label>
        <input type="password" id="password" placeholder="Mật khẩu" class="form-control">
        <label for="re_password" class="sr-only"></label>
        <input type="re_password" id="re_password" class="form-control" placeholder="Nhập lại mật khẩu">
        <div class="mt-3">
          <button class="btn btn-lg btn-block log-up"style="margin-bottom: 18%;" >Đăng Ký</button>
        </div>
       
     </form>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>