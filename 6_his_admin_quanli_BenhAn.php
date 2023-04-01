<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
  if(isset($_GET['delete_mdr_number']))
  {
        $id=intval($_GET['delete_mdr_number']);
        $adn="DELETE FROM his_medical_records WHERE  mdr_number = ?";
        $stmt= $connect->prepare($adn);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	 
  
          if($stmt)
          {
            $success = "Medical Records Deleted";
          }
            else
            {
                $err = "Try Again Later";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
    
<?php include('assets/inc/head.php');?>

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Trang chủ</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hồ sơ bệnh án</a></li>
                                            <li class="breadcrumb-item active">Quản lý hồ sơ bệnh án</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Quản lý hồ sơ bệnh án</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title"></h4>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline" >
                                                <div class="form-group mr-2" style="display:none">
                                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                    <option value="">Hiển thị tất cả</option>
                                                        <option value="Discharged">Xuất viện</option>
                                                        <option value="OutPatients">Khám bệnh</option>
                                                        <option value="InPatients">Bệnh nhân</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-toggle="true">Tên</th>
                                                <th data-hide="phone">Mã</th>
                                                <th data-hide="phone">Địa chỉ</th>
                                                <th data-hide="phone">Số điện thoại</th>
                                                <th data-hide="phone">Tuổi</th>
                                                <th data-hide="phone">Loại</th>
                                                <th data-hide="phone">Chức vụ</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            /*
                                                *get details of allpatients
                                                *
                                            */
                                                $ret="SELECT * FROM  his_medical_records ORDER BY RAND() "; 
                                                //sql code to get to ten docs  randomly
                                                $stmt= $connect->prepare($ret) ;
                                                $stmt->execute() ;//ok
                                                $res=$stmt->get_result();
                                                $cnt=1;
                                                while($row=$res->fetch_object())
                                                {
                                            ?>

                                                <tbody>
                                                <tr>
                                                    <td><?php echo $cnt;?></td>
                                                    <td><?php echo $row->mdr_pat_name;?></td>
                                                    <td><?php echo $row->mdr_pat_number;?></td>
                                                    <td><?php echo $row->mdr_pat_adr;?></td>
                                                    <td><?php echo $row->mdr_pat_ailment;?></td>
                                                    <td><?php echo $row->mdr_pat_age;?> Năm</td>
                                                    <td>
                                                        <a href="5_his_admin_xem_BenhAn.php?mdr_id=<?php echo $row->mdr_id;?>&&mdr_number=<?php echo $row->mdr_number;?>" class="badge badge-success"><i class="fas fa-eye"></i> Hiển thị</a>
                                                        <a href="6_his_admin_capnhat_BenhAn.php?mdr_number=<?php echo $row->mdr_number;?>" class="badge badge-warning"><i class="fas fa-eye-dropper "></i> Sửa</a>
                                                        <a href="6_his_admin_quanli_BenhAn.php?delete_mdr_number=<?php echo $row->mdr_number;?>" class="badge badge-danger"><i class=" fas fa-trash-alt "></i> Xóa</a>

                                                    </td>
                                                </tr>
                                                </tbody>
                                            <?php  $cnt = $cnt +1 ; }?>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="8">
                                                    <div class="text-right">
                                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                 <?php include('assets/inc/footer.php');?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/foo-tables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>