
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Login</title>

    <link href="{{ asset('ad_asset/css/3d-falling-leaves.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('ad_asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ad_asset/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('public/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('ad_asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('ad_asset/css/style-responsive.css') }}" rel="stylesheet" />

    <script src="ad_asset/js/3d-falling-leaves.min"></script>
    <script src="ad_asset/js/3d-falling-leaves.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body main-bg">
  <script>        jQuery(document).octoberLeaves() </script>

<div class="jquery-script-center">

</div>

    <div class="container">
		@if(Session::has('error'))
			{{ Session::get('error') }}
		@endif
      <form class="form-signin" method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            

        </div>

         {{--  <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal --> --}}

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/ad_asset/js/jquery.js"></script>
    <script src="/ad_asset/js/bootstrap.min.js"></script>


  </body>
</html>
