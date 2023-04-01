<?php
    session_start();
    include('assets/inc/config.php');//get configuration file
    if(isset($_POST['admin_login']))
    {
        $ad_email=$_POST['ad_email'];
        $ad_pwd=sha1(md5($_POST['ad_pwd']));//double encrypt to increase security
        $stmt=$connect->prepare("SELECT ad_email ,ad_pwd , ad_id FROM his_admin WHERE ad_email=? AND ad_pwd=? ");//sql to log in user
        $stmt->bind_param('ss',$ad_email,$ad_pwd);//bind fetched parameters
        $stmt->execute();//execute bind
        $stmt -> bind_result($ad_email,$ad_pwd,$ad_id);//bind result
        $rs=$stmt->fetch();
        $_SESSION['ad_id']=$ad_id;//Assign session to admin id
        //$uip=$_SERVER['REMOTE_ADDR'];
        //$ldate=date('d/m/Y h:i:s', time());
        if($rs)
            {//if its sucessfull
                header("location:0_his_admin_tongquan.php");
            }

        else
            {
            #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
                $err = "Mã đăng nhập hoặc mật khẩu không đúng";
            }
    }
?>
<!--End Login-->
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Đăng nhập Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="MartDevelopers" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <!-- App favicon -->
         <link rel="shortcut icon" href="assets/Login/images/favicon.jpg">

        <!-- App css -->
        <link rel="stylesheet" href="assets/Login/css/style.css">
        <!--Load Sweet Alert Javascript-->

        <script src="assets/js/swal.js"></script>
        <!--Inject SWAL-->
        <?php if(isset($success)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Thành công","<?php echo $success;?>","success");
                            },
                                100);
                </script>

        <?php } ?>

        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Thất bại","<?php echo $err;?>","error");
                            },
                                100);
                </script>

        <?php } ?>

    </head>

    <body>

    <section class="container forms" style="background-image: url('assets/Login/images/background.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
        <p >
            <div class="form login">
                <div class="form-content" >
                <p style="text-align: center; ">
                    <img src="assets/Login/images/iconAdmin.jpg" alt="" style="width:100px; height:100px;  "/>
                    <header style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Đăng nhập <mark>Admin</mark></header>
                </p> 
                                                        
                    <form method="post">
                    
                        <div class="field input-field">
                            <input type="email" name="ad_email" placeholder="Nhập Email" class="input" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="ad_pwd"placeholder="Mật khẩu" class="password" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Quên mật khẩu</a>
                        </div>

                        <div class="field button-field">
                            <button name="admin_login">Đăng nhập</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Chưa có tài khoản? <a href="#" class="link signup-link">Đăng ký</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="assets/Login/images/google.png" alt="" class="google-img">
                        <span>Đăng nhập bằng Google</span>
                    </a>
                </div>

            </div>

           
        </section>

        <!-- JavaScript -->
        <script src="assets/Login/js/script.js"></script>
        
    </body>

</html>