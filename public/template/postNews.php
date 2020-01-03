<div class="container">
    <div class="container text-center mt-3 " style="background-color: cornflowerblue; width:500px">
        <h3 class="p-auto">Đăng tin</h3><br/>
        <img class="mb-3" src="<?= URLROOT ?>/public/assest/img/home.png" alt="home_icon" height="32">
        <strong>Bất động sản</strong>
    </div>
    <div class="container mt-3">
        <form action="<?= URLROOT ?>/realestal/add" method="post" enctype="multipart/form-data">
            <ul class="list-group">
                <div class="form-group">
                    <li class="list-group-item text-center">
                        <p class="font-italic font-weight-bold">Danh mục tin đăng : Đất</p>
                    </li>
                </div>
                <div class="form-group">
                    <li class="list-group-item">
                        <p class="font-weight-bold">1. Mục đích đăng tin</p>
                        <select class="custom-select" name="purpose">
                            <option value="0" class="font-italic font-weight-light" selected>-- Chọn mục đích --</option>
                            <?php foreach(FIELD_PURPOSE as $item) :?>
                            <option value="<?=$item['idPurpose']?>"><?= $item['name']?></option>
                            <?php endforeach; ?>
                        </select>
                    </li>
                    <br>
                    <li class="list-group-item">
                        <p class="font-weight-bold">2. Tiêu đề bài đăng</p>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" value="<?=$data['title'] ?>" name="title" placeholder="Nhập tên dự án" class="form-control <?php echo (!empty($data['titleErr'])) ? 'is-invalid' : ''; ?> ">
                                <div class="invalid-feedback">
                                    <?php echo  $data['titleErr']; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <br>
                    <li class="list-group-item">
                        <p class="font-weight-bold">3. Địa chỉ</p>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text"  value="<?= $data['address']?>" name="address" placeholder="Số nhà, Đường, Phường/Xã, Quận/Huyện, Tỉnh/Thành phố  " class="form-control <?php echo (!empty($data['addressErr'])) ? 'is-invalid' : ''; ?> ">
                                <div class="invalid-feedback">
                                    <?php echo  $data['addressErr']; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <br>
                    <li class="list-group-item">
                        <p class="font-weight-bold ">4.Bạn là</p>
                        <div class="col-md-12">
                            <form action="" class="row">
                                <?php foreach(FIELD_TYPEOWN as $item) :?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="<?=$item['idTypeOwn']?>" type="radio" name="typeOwn" value="<?=$item['idTypeOwn']?>">
                                        <label class="form-check-label" for="<?=$item['idTypeOwn']?>"><?= $item['name'] ?></label>
                                    </div>
                                <?php endforeach; ?>
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
                    <br>
                    <li class="list-group-item">
                        <p class="font-weight-bold">5.Hình ảnh mô động sản</p>
                        <div style="background-color: #ff875f">
                            <p class="text-center">* Bạn cần đăng tối thiểu 3 ảnh (PNG/SVG)</p>
                            <div class="form-group inline">
                                <!--<input type="file" class="form-control-file" id="photo" value="photo" name='imageUpload[]' multiple> -->
                                <input type='file' class="form-control-file mb-2" id="photo" value="photo" name='imageUpload[]'  multiple onchange="readURL(this);" />
                                <img style="max-width:180px" src="http://placehold.it/180" id="photo0" alt="your image" />
                                <img style="max-width:180px" src="http://placehold.it/180" id="photo1" alt="your image" />
                                <img style="max-width:180px" src="http://placehold.it/180" id="photo2" alt="your image" />
                            </div>
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
                    </li>
                    <br>
                    <li class="list-group-item">
                        <p class="font-weight-bold">6.Giá tổng</p>
                        <div class="input-group mb-3 col-md-12">
                            <input type="number" class="form-control <?php echo (!empty($data['valueErr'])) ? 'is-invalid' : ''; ?>" name="value" value="<?= strval($data['value'])?>">
                            <div class="input-group-append">
                                <span class="input-group-text bg-light">đ</span>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo  $data['valueErr']; ?>
                            </div>
                        </div>
                        <small class="font-italic">Vui lòng điền tổng giá tiền</small>
                        <div class="col-md-12 mt-2" style="background-color: #b8fff5">
                            <div class="">
                                <p class="font-weight-bold">Điền tổng giá bán bằng VNĐ</p>
                                <p><em>+ Ví dụ: điền 2 300 000 000 đ (2 tỷ 3) thay vì 2.300 hay 2.3</em></p>
                            </div>
                            <div class="">
                                <p class="font-weight-bold">Không điền giá/m2</p>
                                <p><em>+ Tin của bạn có thể bị từ chối nếu người mua báo cáo giá không hợp lý.</em></p>
                            </div>
                        </div>
                    </li>
                    <br>
                    <li class="list-group-item">
                        <p class="font-weight-bold">7.Diện tích</p>
                        <div class="input-group mb-3 col-md-12">
                            <input type="number" value="<?= strval($data['area']) ?>" class="form-control <?php echo (!empty($data['areaErr'])) ? 'is-invalid' : ''; ?>" name="area" placeholder="Nhập diện tích">
                            <div class="input-group-append">
                                <span class="input-group-text bg-light">m<sup>2</sup></span>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo  $data['areaErr']; ?>
                            </div>
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
                    <br>
                    <li class="list-group-item">
                        <div class="col-md-12 mt-2">
                            <p class="font-weight-bold">8.Mô tả chi tiết</p>
                            <em class="font-weight-lighter">- Mô tả bằng tiếng Việt có dấu</em><br>
                            <small class="font-weight-lighter ml-4">+ Tiện ích xung quanh khu đất</small><br>
                            <small class="font-weight-lighter ml-4">+ Thời gian đến khu trung tâm</small><br>
                            <small class="font-weight-lighter ml-4">+ Thời gian đến bệnh viện, trường học, siêu thị gần nhất</small>
                        </div>
                        <div class="col-md-12 mt-2 col-sm pr-sm-0">
                            <div class="input-group">
                                <textarea name="description" id="description" rows="6" class="form-control <?php echo (!empty($data['descriptionErr'])) ? 'is-invalid' : ''; ?>">
                                    <?= $data['description']?>
                                </textarea>
                                <div class="invalid-feedback">
                                    <?php echo  $data['descriptionErr']; ?>
                                </div>
                            </div>
                            <div class="mt-2" style="background-color: #ff875f">
                                <p class="text-center">*Vui lòng mô tả với ít nhất 10 từ!</p>
                            </div>
                        </div>
                    </li>
                </div>
                <li class="list-group-item" style="border: none">
                    <div class="text-center">
                        <button type="submit" value="postNews" class="btn btn-primary mt-2 mb-5 rounded" style=" height: 50px; width:120px">Đăng ngay</button>
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
   <script>
   function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo0')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }

        if (input.files && input.files[1]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo1')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[1]);
        }

        if (input.files && input.files[2]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo2')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[2]);
        }
    }

   </script>
