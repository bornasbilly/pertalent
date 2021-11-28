<?php
$site_url = 'http://localhost/pertalent/';
// if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
// $url = "https://";   
// else  
// $url = "http://";
// $url.= $_SERVER['HTTP_HOST'];   
// $url.= $_SERVER['REQUEST_URI'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <title>Pertalent</title>
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script src="assets/js/index.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/smoothscroll.min.js"></script>
    <script src="assets/js/validation.js"></script>
</head>
<body style="background-image: url(assets/img/kv-bg.jpg);">
    <div class="main-wrapper">
        <!-- Login Popup -->
        <!-- <div class="login-wrapper">
            <div class="login p-4">
                <div class="logo-form">
                    <img src="assets/img/logo.png" alt="My Pertamina">
                    <span>
                        <i class="fas fa-times"></i>
                    </span>
                </div>
                <div class="greeting-login">
                    <h1>Hi,<br>Selamat Datang!</h1>
                    <p class="mt-1">Silahkan login ke akun anda</p>
                </div>
                <div class="form-login">
                    <form action="">
                        <div class="row">
                            <div class="col-12 p-0 mb-4">
                                <label class="mb-1" for="loginUsr">Nomor Telepon</label>
                                <input id="loginUsr" type="text">
                            </div>
                            <div class="col-12 p-0 pos-rel">
                                <label class="mb-1" for="loginUsr">PIN (6 digit)</label>
                                <span class="toggle-pass"><i class="fas fa-eye"></i></span>
                                <input id="loginUsr" class="input-pass" type="password">
                            </div>
                            <div class="forgot-pin mt-2 mb-4 txt-right">
                                <a href="#">Lupa PIN Anda?</a>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-red w-100" type="submit">Masuk</button>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-outline" href="">Daftar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
        <!-- Login Popup -->
        <div class="header-wrapper">
            <div class="row header">
                <div class="col-3">
                    <div class="logo">
                        <a href="<?= $site_url; ?>">
                            <img src="assets/img/logo.png" alt="My Pertamina">
                        </a>
                        <span class="m-btn">
                            <i class="fas fa-bars"></i>
                        </span>
                    </div>
                </div>
                <div class="col-9">
                    <div class="navigation">
                        <div class="m-logo">
                            <img src="assets/img/logo.png" alt="My Pertamina">
                        </div>
                        <ul class="nav">
                            <li>
                                <a href="#"> Live Streaming </a>
                            </li>
                            <li class="active">
                                <a href="<?= $site_url; ?>"> Pertalent </a>
                                <!-- <ul class="sub-menu">
                                    <li><a class="sub-menu" href="<?= $site_url; ?>page-umum.php">Pertalent Top 50</a></li>
                                </ul> -->
                            </li>
                            <li>
                                <a href="#"> Library </a>
                            </li>
                            <!-- <li>
                                <a id="login" href="#"> Login </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>