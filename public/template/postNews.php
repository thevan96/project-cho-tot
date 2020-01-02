<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #3d0000;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<?php require_once "header.php"; ?>

<div class="container">
    <div class="container text-center mt-3 " style="background-color: cornflowerblue; width: 300px">
        <h3 class="p-auto">Đăng tin</h3><br/>
        <img class="mb-3" src="img/home.png" alt="home_icon" height="32">
        <strong>Bất động sản</strong>
    </div>
    <div class="container mt-3">
        <form action="#" method="post">
            <ul class="list-group">
                <div class="form-group">
                    <li class="list-group-item text-center">
                        <p class="font-italic font-weight-bold">Danh mục tin đăng : Đất</p>
                    </li>
                </div>
                <div class="form-group">
                    <li class="list-group-item">
                        <p class="font-weight-bold">1.Mục đích đăng tin</p>
                        <select class="custom-select">
                            <option class="font-italic font-weight-light" selected>--chọn mục đích--</option>
                            <option value="1">Cần bán</option>
                            <option value="2">Cần mua</option>
                            <option value="3">Cho thuê</option>
                            <option value="4">Cần thuê</option>
                        </select>
                    </li>
                    <li class="list-group-item">
                        <p class="font-weight-bold">2.Tên dự án(không bắt buộc)</p>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="row">
                                    <div class="col-12 col-sm pr-sm-0">
                                        <input type="text" name="nameProject" placeholder="Nhập tên dự án"
                                               class="form-control">
                                    </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <p class="font-weight-bold">3.Địa chỉ</p>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="row">
                                    <div class="col-12 col-sm pr-sm-0">
                                        <input type="text" name="address"
                                               placeholder="Số nhà, Đường, Phường/Xã, Quận/Huyện, Tỉnh/Thành phố  "
                                               class="form-control">
                                    </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <p class="font-weight-bold ">4.Bạn là</p>
                        <div class="col-md-12">
                            <form action="" class="row ">
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" id="caNhan" type="radio" name="typeOwn" value="caNhan">
                                    <label class="form-check-label" for="caNhan">Cá nhân</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="Môi giới" class="form-check-input ml-3" name="typeOwn"
                                           value="moiGioi">
                                    <label for="moiGioi" class="form-check-label">Môi giới</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 mt-2" style="background-color: #b8fff5">
                            <div class="">
                                <p class="font-weight-bold">Bạn là "Cá Nhân" nếu:</p>
                                <p>+ Sở hữu tối đa 3 bất động sản để mua bán</p>
                                <p>+ Không phải là Công ty/ Cá nhân kinh doang bất động sản</p>
                            </div>
                            <div class="">
                                <p class="font-weight-bold">Bạn là "Môi Giới" nếu:</p>
                                <p>+ Sở hữu trên 3 bất động sản để mua bán</p>
                                <p>+ Là Công ty/Cá nhân kinh doanh bất động sản</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <p class="font-weight-bold">5.Hình ảnh mô động sản</p>
                        <div style="background-color: #ff875f">
                            <p class="text-center">* Bạn cần đăng 3 ảnh!</p>
                        </div>
                        <form>
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="photo" value="photo" multiple>
                            </div>
                            <div class="col-md-12 mt-2" style="background-color: #b8fff5">
                                <div class="">
                                    <p class="font-weight-bold">Để bán nhanh hơn</p>
                                    <p>+ Chụp hình khổ ngang, chính diện, xung quanh và phía trước thửa đất</p>
                                </div>
                                <div class="">
                                    <strong>Không:</strong>
                                    <p><em>+ Sử dụng hình ảnh trùng lặp hoặc lấy từ Internet</em></p>
                                    <p><em>+ Chèn số điện thoại/email/logo vào hình</em></p>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="list-group-item">
                        <p class="font-weight-bold">6.Giá tổng</p>
                        <div class="input-group mb-3 col-md-12">
                            <input type="number" class="form-control" name="value">
                            <div class="input-group-append">
                                <span class="input-group-text bg-light">đ</span>
                            </div>
                        </div>
                        <small class="font-italic">Vui lòng điền tổng giá tiền</small>
                        <div class="col-md-12 mt-2" style="background-color: #b8fff5">
                            <div class="">
                                <p class="font-weight-bold">Điền tổng giá bán bằng VNĐ</p>
                                <p><em>+ Ví dụ: điền 2.300.000.000 đ (2 tỷ 3) thay vì 2.300 hay 2.3</em></p>
                            </div>
                            <div class="">
                                <p class="font-weight-bold">Không điền giá/m2</p>
                                <p><em>+ Tin của bạn có thể bị từ chối nếu người mua báo cáo giá không hợp lý.</em></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <p class="font-weight-bold">7.Diện tích</p>
                        <div class="input-group mb-3 col-md-12">
                            <input type="number" class="form-control" name="area" placeholder="Nhập diện tích">
                            <div class="input-group-append">
                                <span class="input-group-text bg-light">m<sup>2</sup></span>
                            </div>
                        </div>
                        <div>
                            <p class="text-left font-italic"><small>Điền tiêu đề để thu hút nhiều lượt xem tin hơn.</small>
                            </p>
                            <small class="text-right font-weight-lighter">Tối đa 50 từ</small>
                        </div>
                        <div class="col-md-12 mt-2" style="background-color: #b8fff5">
                            <div class="">
                                <p class="font-weight-bold">Ví dụ:</p>
                                <p><em>+ Đất sổ đỏ 45m2 (5x9) Trần Đăng Ninh, Hà Đông</em></p>
                            </div>
                            <div class="">
                                <p class="font-weight-bold">Nên viết tiếng Việt có dấu</p>
                            </div>
                            <div class="">
                                <p class="font-weight-bold">Không:</p>
                                <p><em>+ Không ghi "Cần bán"</em></p>
                                <p><em>+ Không chèn giá và số điện thoại ở tiêu đề</em></p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-md-12 mt-2">
                            <p class="font-weight-bold">8.Mô tả chi tiết</p>
                            <em class="font-weight-lighter">- Mô tả bằng tiếng Việt có dấu</em><br>
                            <small class="font-weight-lighter ml-4">+ Tiện ích xung quanh khu đất</small><br>
                            <small class="font-weight-lighter ml-4">+ Thời gian đến khu trung tâm</small><br>
                            <small class="font-weight-lighter ml-4">+ Thời gian đến bệnh viện, trường học, siêu thị gần
                                nhất</small>
                        </div>
                        <div class="col-md-12 mt-2 col-sm pr-sm-0">
                            <div class="input-group">
                                <textarea name="description " id="description " rows="6" class="form-control"></textarea>
                            </div>
                            <div class="mt-2" style="background-color: #ff875f">
                                <p class="text-center">*Vui lòng mô tả với ít nhất 10 từ!</p>
                            </div>
                        </div>
                    </li>
                </div>
                <li class="list-group-item" style="border: none">
                    <div class="text-center">
                        <button type="submit" value="postNews" class="btn btn-primary mt-2 mb-5 rounded" style=" : 50px; width: 120px">Đăng ngay</button>
                    </div>
                </li>

            </ul>

        </form>
    </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Về đầu trang</button>
<script>
    let mybutton = document.getElementById("myBtn");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<?php require_once "footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
