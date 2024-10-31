<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>CyberMart | Register</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="user/assets/imgs/theme/favicon.ico">
    <link rel="stylesheet" href="user/assets/css/main.css">
    <link rel="stylesheet" href="user/assets/css/custom.css">
</head>

<body>
    @include('user.header')
    @include('user.mobile_header')    
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Inicio</a>                    
                    <span></span> Registrarse
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Crear cuenta</h3>
                                        </div> 
                                        <x-validation-errors class="mb-4" style="color: red;"/>                                       
                                        <form method="post" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" required="" name="name" placeholder="Nombre">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="Correo">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" required="" name="phone" placeholder="Número">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="address" placeholder="Direccion">
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Contraseña">
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password_confirmation" placeholder="Confirmar contraseña">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up">Crear cuenta</button>
                                            </div>
                                        </form>                                        
                                        <div class="text-muted text-center">¿Ya tienes cuenta? <a href="{{route('login')}}">Accede ahora</a></div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-6">
                               <img src="user/assets/imgs/login.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('user.footer')    
    <!-- Vendor JS-->
    <script src="user/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="user/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="user/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="user/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="user/assets/js/plugins/slick.js"></script>
    <script src="user/assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="user/assets/js/plugins/wow.js"></script>
    <script src="user/assets/js/plugins/jquery-ui.js"></script>
    <script src="user/assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="user/assets/js/plugins/magnific-popup.js"></script>
    <script src="user/assets/js/plugins/select2.min.js"></script>
    <script src="user/assets/js/plugins/waypoints.js"></script>
    <script src="user/assets/js/plugins/counterup.js"></script>
    <script src="user/assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="user/assets/js/plugins/images-loaded.js"></script>
    <script src="user/assets/js/plugins/isotope.js"></script>
    <script src="user/assets/js/plugins/scrollup.js"></script>
    <script src="user/assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="user/assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="user/assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="user/assets/js/main.js?v=3.3"></script>
    <script src="user/assets/js/shop.js?v=3.3"></script></body>

</html>

