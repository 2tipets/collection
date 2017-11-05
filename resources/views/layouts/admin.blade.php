<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CollectiOn</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    {{ Html::style('css/bootstrap.min.css') }}
    <!-- Google fonts - Roboto -->
    {{ Html::style('https://fonts.googleapis.com/css?family=Poppins:300,400,700') }}
    <!-- theme stylesheet-->
    {{ Html::style('css/style.default.css') }}
    <!-- Custom stylesheet - for your changes-->
    {{ Html::style('css/custom.css') }}
    <!-- Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        @include('admin.adminNavbar')
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        @include('admin.adminSidebar')

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">@yield('pageTitle')</h2>
            </div>
          </header>
          
          @yield('content')  
          
          <!-- Page Footer-->
          @include('admin.footer')
          
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    {{ Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js')}}
    {{ Html::script('js/tether.min.js')}}
    {{ Html::script('js/bootstrap.min.js')}}
    {{ Html::script('js/jquery.cookie.js')}}
    {{ Html::script('js/jquery.validate.min.js')}}
    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js')}}
    {{ Html::script('js/charts-home.js')}}
    {{ Html::script('js/front.js')}}

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>