<div id ="container" class="w-50 p-2 border-0 mx-auto text-center mt-5 bg-light" style=" max-width: 450px">
    <form method="post" action="<?= URLROOT ?>/user/login">
            <div class="form-group ">
                <strong>ĐĂNG NHẬP</strong>
            </div>
            <div class="form-group">
                <input type="tel" value="<?php echo $data['phone']; ?>" class="form-control <?php echo (!empty($data['phoneErr'])) ? 'is-invalid' : ''; ?>" name="phone" placeholder="Nhập số điện thoại" pattern="[0-9]{10}" required>
                <div class="invalid-feedback">
                    <?php echo  $data['phoneErr']; ?>
                </div>
            </div>
            <div class="form-group">
                <input type="password" value="<?php echo $data['password']; ?>" class="form-control <?php echo (!empty($data['passwordErr'])) ? 'is-invalid' : ''; ?>" id="exampleInputPassword1" name="password" placeholder="Nhập mật khẩu" required>
                <div class="invalid-feedback">
                    <?= $data['passwordErr']?>
                </div>
            </div>
            <!--
            <div class="form-group form-check float-left">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
            </div>
            -->
            <div class="form-group">
                <button type="submit" class="btn btn-warning btn-lg btn-block" style="max-height:40px; font-size: medium">
                    Đăng nhập
                </button>
            </div>

            <hr>
            <div class="form-group">
                <small>Hoặc</small>
            </div>
    </form>

    <a href="<?= URLROOT ?>/user/register" type="button" class="btn btn-success btn-lg btn-block"
        style="max-height:40px; font-size: medium"> Đăng ký</a>
    </div>

</div>

