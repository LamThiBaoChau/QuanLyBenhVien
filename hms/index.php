<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HMS Home page</title>
</head>
<body>
    <?php 
        include("include/header.php");
    ?>

    <div style="margin-top: 50px"></div>
    
    <div class="container" >
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 mx-1 shadow">
                    <img src="./img/infor.jpg"style="width: 100%; ">
                    <h5 class="text-center">Nhấn nút bên dưới để biết thêm thông tin</h5>

                    <a href="#">
                        <button class="btn btn-success my-3" style="margin-left: 20%;">Xem thêm thông tin</button>
                    </a>
                </div>

                <div class="col-md-4 mx-1 shadow">
                    <img src="./img/benhnhan.jpg" style="width: 100%;">

                    <h5 class="text-center">Tạo tài khoản cá nhân để được chăm sóc tốt hơn</h5>

                    <a href="#">
                        <button class="btn btn-success my-3" style="margin-left: 30%;">Tạo tài khoản</button>
                    </a>
                </div>

                <div class="col-md-4 mx-1 shadow">
                    <img src="./img/bacsi.jpg" style="width: 100%;height:340px;">

                    <h5 class="text-center">Tuyển dụng bác sĩ</h5>

                    <a href="#">
                        <button class="btn btn-success my-3" style="margin-left: 30%;">Ứng tuyển ngay!</button>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>