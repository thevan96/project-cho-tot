<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link
        rel="stylesheet"
        href="<?= URLROOT ?>/public/assest/node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
        rel="stylesheet"
        href="<?= URLROOT ?>/public/assest/css/style.css"
    />
</head
<body>
    <div class="container-fullwidth" style="font-size: 12px">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning" style="max-height: 50px">
            <div class="pl-5 ml-5">
            </div>
            <div class="pl-5 ml-5">
                <a class="navbar-brand ml-5" href="<?= URLROOT ?>">
                    <img src="https://static.chotot.com/storage/marketplace/transparent_logo.png" alt="Chợ tốt" class="w-50">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="https://static.chotot.com/storage/marketplace/common/searchActive.svg" alt="Tìm rao vặt" style="width: 30px; height: 30px">
                            <b>Tìm rao vặt</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="https://static.chotot.com/storage/marketplace/common/notificationActive.svg" alt="Thông báo" style="width: 30px; height: 30px">
                            <b>Thông báo</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <img src="https://static.chotot.com/storage/chotot-icons/svg/chat.svg" alt="chat" style="width: 30px; height: 30px">
                            <b>Chat</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="https://static.chotot.com/storage/marketplace/common/userActive.svg" alt="Tôi bán" style="width: 30px; height: 30px">
                            <b>Tôi bán</b>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://static.chotot.com/storage/marketplace/common/moreActive.svg" alt="Thêm" style="width: 30px; height: 30px">
                            <b>Thêm</b>
                        </a>
                        <?php if ($_SESSION['idUser'] === null): ?>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= URLROOT ?>/user/login">
                                    Đăng nhập
                                </a>
                                <a class="dropdown-item" href="<?= URLROOT ?>/user/register">
                                    Đăng ký
                                </a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        <?php else: ?>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= URLROOT ?>/user/profile">
                                    Thông tin cá nhân
                                </a>
                                <a class="dropdown-item" href="<?= URLROOT ?>/user/logout">
                                    Đăng xuất
                                </a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <a class="btn mt-1" href="<?= URLROOT ?>/realestal/add" style="background-color: #ff751d">ĐĂNG TIN</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

