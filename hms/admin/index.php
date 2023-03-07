<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Admin</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <?php 
        include("../include/header.php"); 
        include("../include/connection.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">
                    <!-- Side nav-->
                   <?php
                        include("thanhdieuhuong.php");
                   ?>                
                </div>
                
                <div class="col-md-10">
                    <h4 class="my-2">Trang chủ Admin</h4>
                    <div class="col-md-12 my-1">
                        <div class="row">
                            <div class="col-md-3 bg-success mx-2" style="height: 130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <?php
                                                $ad = mysqli_query($connect,
                                                    "SELECT * FROM admin");
                                                $num = mysqli_num_rows($ad);    
                                            ?>
                                            <h5 class="my-2 text-white" 
                                                style="font-size: 30px;"><?php echo $num; ?></h5>
                                            <h5 class ="text-white">Total</h5>
                                            <h5 class ="text-white">Admin</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="admin.php">
                                                <i class="fa-solid fa-user-pen fa-2x my-4" 
                                                style="color : white;"></i>               
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>  

                            <div class="col-md-3 bg-info mx-2" style="height: 130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" 
                                                style="font-size: 30px;">0</h5>
                                            <h5 class ="text-white">Total</h5>
                                            <h5 class ="text-white">Doctors</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <i class="fa-solid fa-user-doctor fa-2x my-4" 
                                                style="color : white;"></i>               
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-warning mx-2" style="height: 130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" 
                                                style="font-size: 30px;">0</h5>
                                            <h5 class ="text-white">Total</h5>
                                            <h5 class ="text-white">Patient</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <i class="fa-solid fa-bed-pulse fa-2x my-4" 
                                                style="color : white;"></i>               
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" 
                                                style="font-size: 30px;">0</h5>
                                            <h5 class ="text-white">Total</h5>
                                            <h5 class ="text-white">Report</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <i class="fa-solid fa-flag fa-2x my-4" 
                                                style="color : white;"></i>               
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" 
                                                style="font-size: 30px;">0</h5>
                                            <h5 class ="text-white">Total</h5>
                                            <h5 class ="text-white">Job Request</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <i class="fa-solid fa-book fa-2x my-4" 
                                                style="color : white;"></i>               
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-success mx-2 my-2" style="height: 130px;">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-2 text-white" 
                                                style="font-size: 30px;">0</h5>
                                            <h5 class ="text-white">Total</h5>
                                            <h5 class ="text-white">Income</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <i class="fa-solid fa-credit-card fa-2x my-4" 
                                                style="color : white;"></i>               
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                
                </div>             
            </div>
        </div>
    </div>
</body>
</html>