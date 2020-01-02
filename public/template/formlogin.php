<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link
        rel="stylesheet"
        href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
</head>
<body class="bg-secondary">
<?php require_once "header.php"; ?>

<div id="container" class="w-50 p-2 border-0 mx-auto text-center mt-5 bg-light" style=" max-width: 450px">
    <form method="post" action="">
        <div class="form-group ">
            <strong>ĐĂNG NHẬP</strong>
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" name="phone" placeholder="Nhập số điện thoại" pattern="[0-9]{10}"
                   required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                   placeholder="Nhập mật khẩu" required>
        </div>
        <div class="form-group form-check float-left">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning btn-lg btn-block" style="max-height:40px; font-size: medium">
                Đăng nhập
            </button>
            <a href="#" type="button" class="btn btn-secondary btn-lg btn-block "
               style="max-height:40px; font-size: medium">Quên mật khẩu</a>
        </div>
        <hr>
        <div class="form-group">
            <small>Hoặc</small>
        </div>
        <form-group>
            <a href="#" type="button" class="btn btn-success btn-lg btn-block"
               style="max-height:40px; font-size: medium"> Đăng ký</a>
        </form-group>
    </form>
</div>

<?php
//$phoneErr = $passErr = '';
//$phone = $pass = '';
//if ($_SERVER['REQUEST_METHOD']=='POST') {
//    if(empty($_POST['phone'])) {
//        $phoneErr = "Cần nhập số điện thoại!";
//    }   else {}
//}
//?>


<?php require_once "footer.php"; ?>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
