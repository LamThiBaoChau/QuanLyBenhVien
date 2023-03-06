<?php 
    session_start();
    include("include/connection.php");
    if(isset($_POST['login'])){

        $username = $_POST['uname'];
        $password = $_POST['pass'];

        $error = array();

        if(empty($username)){
            $error['admin'] = "Nhập tên đăng nhập";
        }else if(empty($password)){
            $error['admin'] = "Nhập mật khẩu";
        }

        if(count($error) == 0){
            $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $result = mysqli_query($connect,$query);

            if(mysqli_num_rows($result) == 1){
                echo "<script>alert('Bạn đăng nhập admin thàng công')</script>";

                $_SESSION['admin'] = $username;
                header("Location:admin/index.php");
                exit();
            }else{
                echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>";
            }
        
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/styleFormDangNhapAD.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body style="background-image: url(./img/background.avif); background-repeat: no-repeat; background-size: cover;">
    <?php
        include("include/header.php");
    ?>

    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <div class="center" style=" text-align: center; display: block;">
                    <img src="./img/icon-admin.png" style=" width:50%;  height: 50%;">
                </div>
                
                <header>Đăng nhập</header>

                <form method="post" action="#">

                    <div>
                        <?php 
                            if(isset($error['admin'])){
                                $sh = $error['admin'];      
                                $show = "<h4 class='alert alert-danger'>$sh</h4>";
                            }else{
                                $show = "";
                            } 
                            echo $show;


                        ?>
                    </div>

                    <div class="field input-field">
                        <input type="text" name="uname" autocomplete="off" placeholder="Tên đăng nhập" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" name="pass" placeholder="Mật khẩu" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Quên mật khẩu?</a>
                    </div>

                    <div class="field button-field">
                        <button name="login">Đăng nhập</button>
                    </div>
                </form>

            </div>

            <div class="line"></div>
               
            <div class="media-options">
               <a href="" class="field google">
                    <img src="./img/google-icon.jpg" alt="" class="google-img">
                    <span >Đăng nhập bằng google</span>
               </a>
            </div>
        </div>
    </section>
    
    <!-- Java script -->
    <script src="./JS/scriptFormDangNhapAD.js"></script>
</body>
</html>