<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
  if(isset($_GET['delete_pay_number']))
  {
        $id=intval($_GET['delete_pay_number']);
        $adn="delete from his_payrolls where pay_number=?";
        $stmt= $connect->prepare($adn);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	 
  
          if($stmt)
          {
            $success = "Payroll Record Deleted";
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Lương</a></li>
                                            <li class="breadcrumb-item active">Quản lý lương</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Chi tiết nhân viên</h4>
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
                                                <th data-toggle="true">Tên nhân viên</th>
                                                <th data-toggle="true">Mã nhân viên</th>
                                                <th data-hide="phone">Mã lương</th>
                                                <th data-hide="phone">Lương nhân viên </th>
                                                <th data-hide="phone">Chức vụ</th>
                                               
                                            </tr>
                                            </thead>
                                            <?php
                                            
                                                $ret="SELECT * FROM  his_payrolls ORDER BY RAND() "; 
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
                                                    <td><?php echo $row->pay_doc_name;?></td>
                                                    <td><?php echo $row->pay_doc_number;?></td>
                                                    <td><?php echo $row->pay_number;?></td>   
                                                    <td>$ <?php echo $row->pay_emp_salary;?></td>
                                                 
                                                    <td>
                                                        <a href="7_his_admin_quanli_Luong.php?delete_pay_number=<?php echo $row->pay_number;?>" class="badge badge-danger"><i class="fas fa-trash"></i> Xóa</a>
                                                        <a href="7_his_admin_capnhat_Luong.php?pay_number=<?php echo $row->pay_number;?>" class="badge badge-success"><i class="fas fa-edit "></i>Sửa lương</a>

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