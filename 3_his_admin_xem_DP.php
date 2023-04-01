<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
?>
<!DOCTYPE html>
<html lang="en">
    
<?php include ('assets/inc/head.php');?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include('assets/inc/nav.php');?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
                <?php include("assets/inc/sidebar.php");?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                $phar_bcode=$_GET['phar_bcode'];
                $ret="SELECT  * FROM his_pharmaceuticals WHERE phar_bcode = ?";
                $stmt= $connect->prepare($ret) ;
                $stmt->bind_param('i',$phar_bcode);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                //$cnt=1;
                while($row=$res->fetch_object())
                {
            ?>

                <div class="content-page">
                    <div class="content">

                        <!-- Start Content-->
                        <div class="container-fluid">
                            
                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="0_his_admin_tongquan.php">Trang chủ</a></li>
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dược phẩm</a></li>
                                                <li class="breadcrumb-item active">Hiển thị dược phẩm</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">#<?php echo $row->phar_bcode;?> - <?php echo $row->phar_name;?></h4>
                                    </div>
                                </div>
                            </div>     
                            <!-- end page title --> 

                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-xl-5">

                                                <div class="tab-content pt-0">

                                                    <div class="tab-pane active show" id="product-1-item">
                                                        <img src="assets/images/pharm.webp" alt="" class="img-fluid mx-auto d-block rounded">
                                                    </div>
                            
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-xl-7">
                                                <div class="pl-xl-3 mt-3 mt-xl-0">
                                                    <h2 class="mb-3">Tên dược phẩm : <?php echo $row->phar_name;?></h2>
                                                    <hr>
                                                    <h4 class="text-danger">Người bán dược phẩm : <?php echo $row->phar_vendor;?></h4>
                                                    <hr>
                                                    <h4 class="text-danger">Số lượng dược phẩm: <?php echo $row->phar_qty;?> Thùng</h4>
                                                    <hr>
                                                    <h4 class="text-danger">Mô tả dược phẩm</h4>

                                                    <p class="text-muted mb-4">
                                                        <?php echo $row->phar_desc;?>
                                                    </p>
                  
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                       

                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                            </div>
                            
                            
                        </div> <!-- container -->

                    </div> <!-- content -->

                    <!-- Footer Start -->
                        <?php include('assets/inc/footer.php');?>
                    <!-- end Footer -->

                </div>
            <?php }?>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>