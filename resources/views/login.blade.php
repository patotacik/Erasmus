<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Material Tasarlkmlkklmkmmkım Giriş ve Kayıt Formu</title>

    <!-- Dışarıdan Çağırılan Dosyalar Font we Materyal İkonlar -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- #Dışarıdan Çağırılan Dosyalar Font we Materyal İkonlar Bitiş -->
<style>

    body {
        margin: 0;
        padding: 0;
        background:#eee;
        font-family: roboto;
        display:flex; /* You delete it on your web page */
        justify-content:center;/* and this - delete */
    }
    a:hover,
    a:focus {
        text-decoration: none;
        color: #eee;
    }
    .login-card {
        min-height: 100vh;
        background-image: url('https://selimdoyranli.com/cdn/material-form/img/bg.jpg');
        background-size: cover;
        -moz-background-size: cover;
        -ms-background-size: cover;
        -wenkit-background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        position: relative;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.12), 0 1px 6px 0 rgba(0, 0, 0, 0.12);
        z-index: 2;
        padding: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-family: roboto!important;
    }
    .login-card:after {
        background: linear-gradient(-135deg, rgb(181, 141, 98), rgb(233, 30, 99));
        /* Login Card Arkaplan Rengi */

        background: -webkit-linear-gradient(-135deg, rgb(63, 81, 181), rgb(233, 30, 99));
        /* Login Card Arkaplan Rengi */

        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        content: "";
        opacity: 0.8;
        z-index: 3;
    }
    .login-card > form {
        z-index: 4;
        position: relative;
        padding: 0px 25px;
        width: 100%;
    }
    .logo-kapsul {
        text-align: center;
        position: relative;
        opacity: 0.8;
    }
    .logo {
        height: auto;
        padding: 50px 0px;
    }
    /* form başlangıç stiller ------------------------------- */

    .group {
        position: relative;
        margin-bottom: 45px;
    }
    .group input {
        font-size: 18px;
        padding: 10px 10px 10px 10px;
        display: block;
        width: 100%;
        border: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        background: none;
        color: #eee;
    }
    .group input:focus {
        outline: none;
    }
    /* LABEL ======================================= */

    .group label {
        color: rgba(255, 255, 255, 0.5);
        font-size: 18px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 5px;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }
    /* active durum */

    .group input:focus ~ label,
    input:valid ~ label {
        top: -20px;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
    }
    /* BOTTOM BARS ================================= */

    .bar {
        position: relative;
        display: block;
        width: 100%;
    }
    .bar:before,
    .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: rgba(255, 255, 255, 0.7);
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }
    .bar:before {
        left: 50%;
    }
    .bar:after {
        right: 50%;
    }
    /* active durum bar */

    .group input:focus ~ .bar:before,
    .group input:focus ~ .bar:after {
        width: 50%;
    }
    /* HIGHLIGHTER ================================== */

    .highlight {
        position: absolute;
        height: 0%;
        width: 100px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: 0.5;
    }
    /* active durum */

    .group input:focus ~ .highlight {
        -webkit-animation: inputHighlighter 0.3s ease;
        -moz-animation: inputHighlighter 0.3s ease;
        animation: inputHighlighter 0.3s ease;
    }
    /* form animasyon ================ */

    @-webkit-keyframes inputHighlighter {
        from {
            background: rgba(255, 255, 255, 0.7);
        }
        to {
            width: 0;
            background: transparent;
        }
    }
    @-moz-keyframes inputHighlighter {
        from {
            background: rgba(255, 255, 255, 0.7);
        }
        to {
            width: 0;
            background: transparent;
        }
    }
    @keyframes inputHighlighter {
        from {
            background: rgba(255, 255, 255, 0.7);
        }
        to {
            width: 0;
            background: transparent;
        }
    }
    .input-ikon {
        font-size: 25px!important;
        position: relative;
    }
    .input-sifre-ikon {
        font-size: 22px!important;
        position: relative;
    }
    .span-input {
        margin-left: 10px;
        position: relative;
        top: -5px;
    }
    .giris-yap-buton,
    .kayit-ol-buton,
    .sifre-hatirlat-buton {
        background: linear-gradient(-135deg, rgb(63, 81, 181), rgb(233, 30, 99));
        background: -webkit-linear-gradient(-135deg, rgb(63, 81, 181), rgb(233, 30, 99));
        display: block;
        text-align: center;
        text-decoration: none;
        color: #eee;
        font-family: roboto;
        font-weight: 100;
        padding: 10px;
        border-radius: 3px;
        outline: none;
        opacity: 0.8;
    }
    .forgot-and-create {
        margin: 20px 0px;
    }
    .forgot-and-create a {
        color: #bbb;
        font-size: 12px;
        text-decoration: none;
        font-weight: 100;
        margin-right: 10px;
    }
    /* Geçiş Links Forgot and Create */

    .zaten-hesap-var-link {
        color: #bbb;
        font-size: 14px;
        padding: 20px 0px;
        text-decoration: none;
        display: block;
    }

</style>

</head>
<body>

<!-- Kapsayıcı -->
<div class="col-lg-4 col-md-7 col-sm-6 col-xs-12     login-card">

    <!-- Login (giriş) Form Sayfası -->
    <form id="login-form" class="col-lg-12">

        <!-- Logo -->
        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="https://selimdoyranli.com/cdn/material-form/img/logo.png" alt="Logo" />
        </div>
        <!-- #Logo Bitiş -->

        <div style="clear:both;"></div>

        <!-- Kullanıcı Adı Giriş İnput -->
        <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-ikon">person_outline</i><span class="span-input">Kullanıcı Adınız</span></label>
        </div>
        <!-- #Kullanıcı Adı Giriş İnput Bitiş -->

        <!-- Şifre İnput Giriş-->
        <div class="group">
            <input type="password" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-sifre-ikon">lock</i><span class="span-input">Şifre</span></label>
        </div>
        <!-- Şifre İnput Giriş Bitiş-->

        <!-- Giriş Yap Buton -->
        <a href="javascript:void(0);" class="giris-yap-buton">Giriş Yap</a>
        <!-- #Giriş Yap Buton Bitiş -->

        <!-- Şifremi Unuttum ve Kaydol Linkleri -->
        <div class="forgot-and-create tab-menu">
            <a class="sifre-hatirlat-link" href="javascript:void('sifre-hatirlat-link');">Şifreni mi Unuttun ?</a>
            <a class="hesap-olustur-link" href="javascript:void('hesap-olustur-link');">Hesap Oluştur.</a>
        </div>
        <!-- Şifremi Unuttum ve Kaydol Linkleri Bitiş -->

    </form>
    <!-- #Login (giriş) Form Sayfası Bitiş -->

    <!-- Kayıt Form Sayfası -->
    <form id="kayit-form" class="col-lg-12">

        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="https://selimdoyranli.com/cdn/material-form/img/logo.png" alt="Logo" />
        </div>

        <div style="clear:both;"></div>

        <!-- Kayıt Form Kullanıcı Adı İnput -->
        <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-ikon">person_outline</i><span class="span-input">Kullanıcı Adınız</span></label>
        </div>
        <!-- #Kayıt Form Kullanıcı Adı İnput Bitiş -->

        <!-- Kayıt Form Email İnput -->
        <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-ikon">mail_outline</i><span class="span-input">E-Mail</span></label>
        </div>
        <!-- #Kayıt Form Email İnput Bitiş -->

        <!-- Kayıt Form Şifre İnput -->
        <div class="group">
            <input type="password" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-sifre-ikon">lock</i><span class="span-input">Şifre</span></label>
        </div>
        <!-- #Kayıt Form Şifre İnput Bitiş -->
        <!-- #Kayıt Form Şifre-Tekrarı İnput Bitiş -->

        <!-- Kayıt Ol Buton -->
        <a href="javascript:void(0);" class="kayit-ol-buton">Kayıt Ol</a>
        <!-- #Kayıt Ol Buton Bitiş -->

        <!-- Zaten Hesap Var Link -->
        <a class="zaten-hesap-var-link" href="javascript:void('zaten-hesap-var-link');">Zaten Bir Hesabınız Var mı ? , Giriş Yapın.</a>
        <!--# Zaten Hesap Var Link Bitiş -->

    </form>
    <!-- ##Kayıt Form  Sayfası Bitis -->

    <!-- Sifre Hatirlat Form Sayfası -->
    <form id="sifre-hatirlat-form" class="col-lg-12">

        <div class="col-lg-12 logo-kapsul">
            <img width="100" class="logo" src="https://selimdoyranli.com/cdn/material-form/img/logo.png" alt="Logo" />
        </div>

        <div style="clear:both;"></div>

        <!-- Şifre Hatırlat Email İnput -->
        <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label><i class="material-icons input-ikon">mail_outline</i><span class="span-input">E-Mail</span></label>
        </div>
        <!-- #Şifre Hatırlat Email İnput Bitiş -->

        <!-- Şifremi Hatırlat Buton -->
        <a href="javascript:void(0);" class="sifre-hatirlat-buton">Şifremi Hatırlat</a>
        <!-- #Şifremi Hatırlat Buton Bitiş -->

        <!-- Zaten Hesap Var Link -->
        <a class="zaten-hesap-var-link" href="javascript:void('zaten-hesap-var-link');">Zaten Bir Hesabınız Var mı ? , Giriş Yapın.</a>
        <!-- #Zaten Hesap Var Link Bitiş -->

    </form>
    <!-- ##Sifre Hatirlat Form Bitis -->

</div>
<!-- #Kapsayıcı Bitiş -->

<!-- this page github link -->
<div style="position:fixed; top:10px; right:10px; padding:25px; background:#fff; border:1px solid #ddd;">
    <a href="https://github.com/selimdoyranli/material-form" target="_blank" style="color:#666; font-size:20px;">Material Form'u Github'da Görüntüle.</a>
</div>
<!-- #this page github link end -->

</body>
</html>