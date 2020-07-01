
<!DOCTYPE html>
<html lang="en">
<head>
<title>Adminty - Premium Admin Template by Colorlib </title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
</head>
<body class="fix-menu">

<div class="theme-loader">
<div class="ball-scale">
<div class='contain'>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
</div>
</div>
</div>

<section class="login-block">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<form class="md-float-material form-material" method="POST" action="{{ route('register') }}">
@csrf
<div class="text-center">
<img src="../files/assets/images/logo.png" alt="logo.png">
</div>
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center txt-primary">Sign up</h3>
</div>
</div>

<p class="text-muted text-center p-b-5">JILGM 19 Exclusive</p>
<div class="form-group form-primary">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="form-group form-primary">
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email"> 

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group form-primary">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-primary">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
<span class="form-bar"></span>
</div>
</div>
</div>

<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
</div>
</div>
<hr />
<div class="row">
<div class="col-md-10">
<p class="text-inverse text-left m-b-0">Thank you.</p>
<p class="text-inverse text-left"><a href="/"><b class="f-w-600">Back to website</b></a></p>
</div>
<div class="col-md-2">
<img src="../files/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
</div>
</div>
</div>
</div>
</form>

</div>

</div>

</div>

</section>





<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="15f958f5291d27266a49de63-text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="15f958f5291d27266a49de63-text/javascript" src="../files/assets/js/common-pages.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="15f958f5291d27266a49de63-text/javascript"></script>
<script type="15f958f5291d27266a49de63-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="15f958f5291d27266a49de63-|49" defer=""></script></body>
</html>
