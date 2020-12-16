<!doctype html>
 <!--[if IE 9 ]><html class="ie9"><![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>rojektTreble | login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/material-dashboard.min.css@v=2.2.2.css')}}" rel="stylesheet" />
</head>

<body class="off-canvas-sidebar">
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" filter-color="black">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                                <form class="form" method="POST" role="form"  action="{{ url('/login') }}">
                                    {{ csrf_field() }}
                                <div class="card card-login card-hidden">
                                    <div class="card-header card-header-rose text-center">
                                        <h4 class="card-title">Welcome back!</h4>
                                    </div>
                                    <div class="card-body">
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">email</i>
                                                  </span>
                                            </div>

                                            {{-- <input type="email" class="form-control" placeholder="email"> --}}

                                            <div class="bmd-form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                {{-- <label for="email" class="control-label">Email</label> --}}

                                                <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required autofocus />

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </span>

                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>

                                            {{-- <input type="password" class="form-control" placeholder="password"> --}}

                                            <div class="bmd-form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                                {{-- <label for="password" class="control-label">Password</label> --}}

                                                <input id="password" name="password" type="password" class="form-control" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </span>
                                    </div>

                                    <div class="card-footer justify-content-center">
                                        <button type="submit" class="btn btn-danger btn-simple btn-wd btn-lg">Let's go</button>
                                    </div>

                                    <div class="form-group label-floating text-center">
                                        <a class="btn-link" href="{{ url('/password/reset') }}">
                                            forgot your password?
                                        </a> |
                                        <a class="btn-link" href="{{ url('/register') }}">
                                            create an account
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Chartist JS -->
<script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-dashboard.min.js@v=2.2.2')}}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
</body>

</html>