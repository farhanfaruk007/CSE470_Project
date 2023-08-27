<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register | Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
<style>
  /* Basic Resets */
/* Basic Resets */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transition: all 0.3s ease-out;
}

body.auth-body-bg {
    font-family: 'Arial', sans-serif;
    background-color: #1a1a1a;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden;
}

.wrapper-page {
    position: relative;
}

.card {
    background: #2a2a2a;
    border-radius: 50%; 
    padding: 50px;
    width: 600px;
    height: 600px;
    box-shadow: 5px 5px 15px #121212, -5px -5px 15px #3a3a3a;
    transform: scale(0.95);
    transition: transform 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1);
}

.card-body {
    display: flex;
    flex-direction: column;
    align-items: center; 
    justify-content: center;
    width: 100%;
}

h4.text-muted.text-center.font-size-20 {
    font-size: 24px;
    color: #fff!important;
    margin-bottom: 25px;
    text-transform: uppercase;
    letter-spacing: 2px;
    opacity: 0.9;
    transform: translateY(-10px);
}

.card:hover h4.text-muted.text-center.font-size-20 {
    color: #bbb;
    opacity: 1;
    transform: translateY(0);
}
form{
    width: 40vh;
}
.form-horizontal .form-group {
    margin-bottom: 20px;
    width: 100%;
    margin:auto;
}

.form-control {
    height: 50px;
    width: 90%; /* Even wider */
    border: none;
    border-radius: 15px;
    font-size: 16px;
    margin: auto;
    padding: 10px 15px;
    outline: none;
    background: #3a3a3a;
    color: #eee;
}

.form-control:focus {
    background: #ffffff; /* Active state as white */
    color: #333;
    box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.8);
}

.btn-info {
    background: #333;
    border: none;
    height: 50px;
    border-radius: 25px;
    font-size: 17px;
    transform: translateY(0);
    margin-top: 10px;
    cursor: pointer;
}

.btn-info:hover {
    background: #444;
    transform: translateY(-5px);
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
}

.text-muted {
    color: #999;
    font-size: 14px;
    opacity: 0.7;
    transform: translateY(10px);
}

.text-muted:hover {
    color: #aaa;
    opacity: 1;
    transform: translateY(0);
}

.mdi {
    margin-right: 5px;
    vertical-align: middle;
}

.mdi:hover {
    color: #ddd;
}

</style>
    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
    
                        <div class="text-center mt-4">
                            <div class="mb-3">
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-20"><b>Register</b></h4>
    
                        <div class="p-3">
 
<form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
            @csrf

    <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" id="name" type="text" name="name" required="" placeholder="Name">
        </div>
    </div>

    <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" id="username" type="text" name="username" required="" placeholder="UserName">
        </div>
    </div>

     <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" id="email" type="email" name="email" required="" placeholder="Email">
        </div>
    </div>

    <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" id="password" type="password" name="password" required="" placeholder="Password">
        </div>
    </div>


     <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required="" placeholder="Password Confirmation">
        </div>
    </div>

    <div class="form-group mb-3 row">
        <div class="col-12">
            <div class="custom-control custom-checkbox">
                
            </div>
        </div>
    </div>

    <div class="form-group text-center row mt-3 pt-1">
        <div class="col-12">
            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
        </div>
    </div>

    <div class="form-group mt-2 mb-0 row">
        <div class="col-12 mt-3 text-center">
            <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
        </div>
    </div>
</form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->
        

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    </body>
</html>
