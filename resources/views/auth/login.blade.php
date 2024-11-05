
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from colorlib.com/polygon/gentelella/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 19:58:01 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login! |</title>

    <link href="{{asset('fassets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{asset('fassets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />

    <link href="{{asset('fassets/vendors/nprogress/nprogress.css')}}" rel="stylesheet" />

    <link href="{{asset('fassets/vendors/animate.css/animate.min.css')}}" rel="stylesheet" />

    <link href="{{asset('fassets/build/css/custom.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('toastr/toastr.min.css')}}">
    @toastr_css
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{route('user.login')}}" method="POST"> 
                        @csrf
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" name="merchantcode"   class="form-control" placeholder="Username" required="" />
                        </div>                       
                         <div>
                            <input   class="form-control" type="text" name="name"   placeholder="Enter your Name " required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit"> Sign Up </button>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> Remember me</label>
                        </div>
                        <br>
                        <p class="change_link">
                            New to site?
                            <a href="#" class="to_register"> Did you forget password ? </a>
                        </p>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">
                                All Rights Rieserved . ZT828
                                {{-- <a href="{{route('register')}}" class="to_register"> Create Account </a> --}}
                            </p>
                            
                            <br />
                            {{-- <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>
                                    ©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms
                                </p>
                            </div> --}}
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('toastr/toastr.min.js')}}"></script>
    @toastr_js
     @toastr_render
</body>


</html>



