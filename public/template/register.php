<div id ="container" class="w-50 p-2 border-0 mx-auto text-center mt-5 bg-light" style=" max-width: 450px">
    <form method="post" action="<?= URLROOT ?>/user/register">
        <div class="form-group ">
            <strong>ĐĂNG KÝ</strong>
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" name="phone" placeholder="Nhập số điện thoại" pattern="[0-9]{10}" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Nhập mật khẩu" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning btn-lg btn-block" style="max-height:40px; font-size: medium">
                ĐĂNG KÝ
            </button>
            <p class="font-italic">Bấm vào đăng ký nghĩa là bạn đã đọc và đồng ý với
                    <a href="#" class="text-warning ">Điều khoản sử dụng của Chợ Tốt </a>
            </p>
        </div>
        <hr>
        <div class="form-group">
            <small>Hoặc</small>
            <p>Bạn đã có tài khoản? <a href="<?= URLROOT ?>/user/login">Đăng nhập</a></p>
        </div>
    </form>
</div>
