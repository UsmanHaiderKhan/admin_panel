<?php 
include ('../backend/form/conn.php'); 


if(isset($_POST['submit'])){
    
    $uname=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where email='".$uname."'AND password='".$password."' limit 1";
    $result = mysqli_query($con,$sql);
     $row = mysqli_num_rows($result);
    if($row==1){
       header("Location: dashboard.php");
        exit();
    }
    else{

        echo "<script type='text/javascript'>
           alert('You have entered wrong password');
           window.location.href='login.php';
        </script>";
      
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="../assets/css/style.css" />
      <title>Login</title>
    </head>
  <body class="outer-container">
    <div class="main-wrapper">
      <form method="post" action="#" class="form" id="login">
        <h1 class="form__title">Login</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">
          <input
            type="text"
            class="form__input"
            autofocus
            name="email"
            placeholder="Username or email"
          />
          <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
          <input
            type="password"
            class="form__input"
            autofocus
            name="password"
            placeholder="Password"
          />
          <div class="form__input-error-message"></div>
        </div>
        <button class="form__button" type="submit" name="submit">Continue</button>
        <p class="form__text mt-3">
          <a href="#" class="form__link mt-3">Forgot your password?</a>
        </p>
        <p class="form__text">
          <a class="form__link" href="./" id="linkCreateAccount"
            >Don't have an account? Create account</a
          >
        </p>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
      integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="../assets/js/bundle.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>
